<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Article::all();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Article::findOrFail($id);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Title' => 'required',
            'Image' => 'required',
            'HeaderImage' => 'required',
            'Introduction' => 'required',
            'Description' => 'required',
            'Language' => 'required',
            'KeyWords' => 'required',
            'State' => 'required',
            'NumVisit' => 'required',
            'IdTheme' => 'required',
            'IdUser' => 'required',
            'IdHost' => 'required',
        ]);

        return Article::create($request->all());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'Title' => 'required',
            'Image' => 'required',
            'HeaderImage' => 'required',
            'Introduction' => 'required',
            'Description' => 'required',
            'Language' => 'required',
            'KeyWords' => 'required',
            'State' => 'required',
            'NumVisit' => 'required',
            'IdTheme' => 'required',
            'IdUser' => 'required',
            'IdHost' => 'required',
        ]);

        $article = Article::findOrFail($id);
        $article->update($request->all());

        return $article;    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Article::findOrFail($id)->delete();

        return response()->noContent();
    }
}
