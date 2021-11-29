<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articlesPublished = Article::published()->latest()->get();
        return view('articles.index', compact('articlesPublished'));
    }

    public function show(Article $slug)
    {
        return view('articles.show', compact('slug'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'slug' => 'required|regex:/^[0-9a-zA-Z_\-]{1,}$/',
            'name' => 'required|min:5|max:100',
            'shortName' => 'required|max:255',
            'article' => 'required',
            'published' => 'nullable',
        ]);
        Article::create([
            'slug' => $validated['slug'],
            'name' => $validated['name'],
            'shortName' => $validated['shortName'],
            'article' => $validated['article'],
            'published' => isset($validated['published']) ? 1 : 0,
        ]);
        return redirect()->route('home');
    }
}
