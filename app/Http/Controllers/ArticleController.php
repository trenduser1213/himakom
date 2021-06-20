<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\article;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    private $path = 'imagesArticle';

    public function index()
    {
        $articles = article::all();
        
        return view('article.index',['articles' => $articles]);
    }
    
    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {
        $fileimage = $request->file('image')
            ->storeAs(
                $this->path,
                time() . "." . $request->file('image')->getClientOriginalExtension(),
                'public'
            );
        article::create([
            'title' => $request->title,
            'image' => $fileimage,
            'descripsi' => $request->descripsi
        ]);
        return redirect()->route('article.index');
    }

    public function show(Article $article)
    {
        return view('article.show', ['article' => $article]);
    }

    public function edit(Article $article)
    {
        return view('article.edit', ['article' => $article]); 
    }

    public function update(Request $request, article $article)
    {
        $fileimage = $article->image;
        if ($request->hasFile('image')) {
            Storage::delete('public/' . $article->image);
            $fileimage = $request->file('image')
            ->storeAs(
                $this->path,
                time() . "." . $request->file('image')->getClientOriginalExtension(),
                'public'
            );
        }
        $article->update([
            'title' => $request->title,
            'image' => $fileimage,
            'descripsi' => $request->descripsi
        ]);
        return redirect()->route('article.index');
    }

    public function destroy($article)
    {
        $data=Article::find($article);
        $data->delete();

        return redirect()->route('article.index');
    }
}
