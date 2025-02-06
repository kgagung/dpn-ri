<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => 'List Artikel',
            'breadcrumb' => [
                ['name' => 'Home', 'url' => route('home')],
                ['name'=> 'Page','url'=> null],
                ['name' => 'Articles', 'url' => route('article')],
            ],
        ];
        return view('landing.article.list-article', $data);
    }

    public function show($slug)
    {
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
}
