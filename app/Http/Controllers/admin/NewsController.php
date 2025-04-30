<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        if (News::where('title', $request->title)->exists()) {
            return redirect()->route('news.create')->with('error', 'Judul berita sudah ada! Silakan gunakan judul lain.');
        }

        $request->validate([
            'title' => 'required|string|max:255|unique:news,title',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'news_date' => 'required|date',
        ]);

        $slug = Str::slug($request->title);
        $counter = 1;
        $originalSlug = $slug;
        while (News::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        $news = News::create([
            'title' => $request->title,
            'content' => $request->content,
            'news_date' => $request->news_date,
            'slug' => $slug,
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = "news_{$news->id}_" . now()->timestamp . ".{$extension}";

            $destinationPath = '/home/dpnriweb/public_html/storages/news_images';
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $file->move($destinationPath, $filename);
            $news->update(['image' => "storages/news_images/{$filename}"]);
        }

        return redirect()->route('news.create')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function checkSlug(Request $request)
    {
        $slug = Str::slug($request->title);
        $exists = News::where('slug', $slug)->exists();

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

        if ($news->image) {
            $imagePath = '/home/dpnriweb/public_html/' . $news->image;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

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

        $counter = 1;
        $originalSlug = $slug;
        while (News::where('slug', $slug)->where('id', '!=', $id)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        if ($request->hasFile('image')) {
            if ($news->image) {
                $oldImagePath = '/home/dpnriweb/public_html/' . $news->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = "news_{$news->id}_" . now()->timestamp . ".{$extension}";

            $destinationPath = '/home/dpnriweb/public_html/storages/news_images';
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $file->move($destinationPath, $filename);
            $imagePath = "storages/news_images/{$filename}";
        } else {
            $imagePath = $news->image;
        }

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
