<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\News;
use App\Models\TitikBatalyon;

class ArticleController extends Controller
{
    public function index()
    {
        $newsList = News::orderBy('news_date', 'desc')->paginate(12); // Pagination dengan 12 item per halaman

        if ($newsList->isEmpty()) {
            return view('index', [
                'pageTitle' => 'Berita',
                'breadcrumb' => [
                    ['name' => 'Home', 'url' => route('home')],
                    ['name' => 'Page', 'url' => null],
                    ['name' => 'Berita', 'url' => null],
                ],
                'newsList' => [], // Kirim array kosong jika tidak ada berita
            ]);
        }

        $formattedNews = $newsList->map(function ($news) {
            $words = explode(' ', strip_tags($news->content));
            $shortSnippet = implode(' ', array_slice($words, 0, 15)) . '...';

            return [
                'title' => $news->title,
                'snippet' => $shortSnippet,
                'image' => asset('storage/' . $news->image),
                'newsDate' => date('M d, Y', strtotime($news->news_date)),
                'slug' => $news->slug,
            ];
        });

        $data = [
            'pageTitle' => 'Berita',
            'breadcrumb' => [
                ['name' => 'Home', 'url' => route('home')],
                ['name' => 'Page', 'url' => null],
                ['name' => 'Articles', 'url' => null],
            ],
            'newsList' => $formattedNews,
            'pagination' => $newsList, // Kirim instance pagination ke view
        ];

        return view('landing.article.list-article', $data);
    }

    public function show($slug)
    {
        // Cari berita berdasarkan slug
        $news = News::where('slug', $slug)->firstOrFail();

        $data = [
            'pageTitle' => 'Article',
            'breadcrumb' => [
                ['name' => 'Home', 'url' => route('home')],
                ['name' => 'Berita', 'url' => route('article')],
                ['name' => $news->title, 'url' => null],
            ],
            'articleTitle' => $news->title,
            'articleDate' => $news->news_date,
            'articleImg' => asset('storage/' . $news->image),
            'content' => $news->content
        ];

        return view('landing.article.article', $data);
    }

    public function home()
    {
        $newsList = News::orderBy('news_date', 'desc')->take(6)->get();

        if ($newsList->isEmpty()) {
            return view('index', [
                'pageTitle' => 'Berita',
                'breadcrumb' => [
                    ['name' => 'Home', 'url' => route('home')],
                    ['name' => 'Page', 'url' => null],
                    ['name' => 'Berita', 'url' => null],
                ],
                'newsList' => [], // Kirim array kosong jika tidak ada berita
            ]);
        }

        $formattedNews = $newsList->map(function ($news) {
            $words = explode(' ', strip_tags($news->content));
            $shortSnippet = implode(' ', array_slice($words, 0, 15)) . '...';

            return [
                'title' => $news->title,
                'snippet' => $shortSnippet,
                'image' => asset('storage/' . $news->image),
                'newsDate' => date('M d, Y', strtotime($news->news_date)),
                'slug' => $news->slug,
            ];
        });

        $data = [
            'pageTitle' => 'Berita',
            'breadcrumb' => [
                ['name' => 'Home', 'url' => route('home')],
                ['name' => 'Page', 'url' => null],
                ['name' => 'Articles', 'url' => null],
            ],
            'newsList' => $formattedNews,
        ];
        return view('index', $data);
    }

    public function recentPost()
    {
        $recentPosts = News::orderBy('news_date', 'desc')->take(4)->get();

        $formattedPosts = $recentPosts->map(function ($news) {
            return [
                'title' => $news->title,
                'image' => asset('storage/' . $news->image),
                'snippet' => Str::limit(strip_tags($news->content), 15, '...'),
                'slug' => $news->slug,
            ];
        });

        return view('components.landing.recent-post', ['recentPosts' => $formattedPosts]);
    }

    public function apiTitikBatalyon()
    {
        $titik = TitikBatalyon::all()->map(function ($item) {
            return [
                'loc' => [(float)$item->X, (float)$item->Y],
                'WADMKK' => $item->WADMKK,
                'Kelas_Prod' => $item->Kelas_Prod,
            ];
        });

        return response()->json($titik);
    }
}
