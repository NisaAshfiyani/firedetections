<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }
    public function welcome()
    {
        $articles = Article::all();
        return view('welcome', compact('articles'));
    }
public function show(Article $article)
    {
        return view('blog', compact('article'));
    }


    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'youtube_url' => 'nullable|url',
        ]);

        Article::create($request->all());

        return redirect()->route('articles.index')
                         ->with('success', 'Article created successfully.');
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'youtube_url' => 'nullable|url',
        ]);

        $article->update($request->all());

        return redirect()->route('articles.index')
                         ->with('success', 'Article updated successfully.');
    }
    public function destroy(Article $article)
{
    $article->delete();

    return redirect()->route('articles.index')
                     ->with('success', 'Article deleted successfully.');
}
}
