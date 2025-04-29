<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\News;
use Yajra\DataTables\Facades\DataTables;

class NewsController extends Controller
{
    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        // Cek apakah berita dengan judul yang sama sudah ada
        if (News::where('title', $request->title)->exists()) {
            return redirect()->route('news.create')->with('error', 'Judul berita sudah ada! Silakan gunakan judul lain.');
        }

        $request->validate([
            'title' => 'required|string|max:255|unique:news,title',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'news_date' => 'required|date',
        ]);

        // Buat slug unik dari title
        $slug = Str::slug($request->title);
        $counter = 1;
        $originalSlug = $slug;
        while (News::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        // Simpan berita ke database terlebih dahulu untuk mendapatkan ID
        $news = News::create([
            'title' => $request->title,
            'content' => $request->content,
            'news_date' => $request->news_date,
            'slug' => $slug, // Simpan slug unik
        ]);

        // Proses upload gambar jika ada
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // Dapatkan ekstensi file
            $filename = "news_{$news->id}_" . now()->timestamp . ".{$extension}"; // Format nama file

            // Simpan file dengan nama baru ke dalam folder storage/app/public/news_images
            $imagePath = $file->storeAs('news_images', $filename, 'public');

            // Update path gambar ke database
            $news->update(['image' => $imagePath]);
        }

        return redirect()->route('news.create')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function checkSlug(Request $request)
    {
        $slug = Str::slug($request->title); // Generate slug dari judul
        $exists = News::where('slug', $slug)->exists(); // Cek apakah slug sudah ada

        return response()->json(['exists' => $exists]);
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $news = News::select(['id', 'title', 'content', 'news_date', 'image', 'created_at']);
            return DataTables::of($news)
                ->addColumn('action', function ($row) {
                    return '<button class="btn btn-warning btn-sm edit-btn" data-id="' . $row->id . '">Edit</button>
                        <button class="btn btn-sm btn-danger delete-btn" data-id="' . $row->id . '">Hapus</button>';
                })
                ->editColumn('news_date', function ($row) {
                    return date('d-m-Y', strtotime($row->news_date));
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.news.list');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);

        // Hapus gambar jika ada
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }

        // Hapus berita dari database
        $news->delete();

        return response()->json(['success' => 'Berita berhasil dihapus!']);
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return response()->json($news);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:news,title,' . $id,
            'content' => 'required',
            'news_date' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $news = News::findOrFail($id);
        $slug = Str::slug($request->title);

        // Buat slug unik
        $counter = 1;
        $originalSlug = $slug;
        while (News::where('slug', $slug)->where('id', '!=', $id)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        // Cek dan proses gambar
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($news->image && Storage::disk('public')->exists($news->image)) {
                Storage::disk('public')->delete($news->image);
            }

            // Upload gambar baru
            $imagePath = $request->file('image')->store('news_images', 'public');
        } else {
            // Pertahankan gambar lama jika tidak ada upload baru
            $imagePath = $news->image;
        }

        // Update data berita
        $news->update([
            'title' => $request->title,
            'slug' => $slug,
            'content' => $request->content,
            'news_date' => $request->news_date,
            'image' => $imagePath,
        ]);

        return response()->json(['success' => 'Berita berhasil diperbarui!']);
    }
}
