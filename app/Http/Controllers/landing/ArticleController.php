<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $snippet = 'We’ve been focused on making the from v4 to v5 but we have also not been afraid to step away been focused';
        $words = explode(' ', $snippet);
        $shortSnippet = implode(' ', array_slice($words, 0, 15)) . '...';
        $data = [
            'pageTitle' => 'List Artikel',
            'breadcrumb' => [
                ['name' => 'Home', 'url' => route('home')],
                ['name'=> 'Page','url'=> null],
                ['name' => 'Articles', 'url' => null],
            ],
            'image' => 'media/dpn/Strategi Kedaulatan.jpg',
            'newsTitle' => 'Admin Panel - How To Started the Dashboard Tutorial',
            'snippet' => $shortSnippet,
            'creator' => 'Admin',
            'newsDate' => 'Jan 24, 2025',
        ];
        return view('landing.article.list-article', $data);
    }

    public function show($slug)
    {
        $title = ucwords(str_replace('-', ' ', $slug));
        
        $data = [
            'pageTitle' => 'Article',
            'breadcrumb' => [
                ['name' => 'Home', 'url' => route('home')],
                ['name'=> 'Page','url'=> null],
                ['name' => 'Articles', 'url' => route('article')],
            ],
            'articleTitle' => $slug,
            'articleDate' => '2021-01-01',
            'articleImg'=> 'stock/1600x800/img-2.jpg',
            'content' => 'This is article page'
        ];
        return view('landing.article.article', $data);
    }

    public function home()
    {
        $snippet = 'We’ve been focused on making the from v4 to v5 but we have also not been afraid to step away been focused';
        $words = explode(' ', $snippet);
        $shortSnippet = implode(' ', array_slice($words, 0, 15)) . '...';
        $data = [
            'pageTitle' => 'Berita',
            'breadcrumb' => [
                ['name' => 'Home', 'url' => route('home')],
                ['name'=> 'Page','url'=> null],
                ['name' => 'Articles', 'url' => null],
            ],
            'image' => 'media/dpn/Strategi Kedaulatan.jpg',
            'newsTitle' => 'Admin Panel - How To Started the Dashboard Tutorial',
            'snippet' => $shortSnippet,
            'creator' => 'Admin',
            'newsDate' => 'Jan 24, 2025',
        ];
        return view('index', $data);
    }
}
