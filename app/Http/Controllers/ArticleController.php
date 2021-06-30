<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\article;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;
use Carbon\Carbon;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    private $path = 'imagesArticle';

    public function index()
    {
        $articles = article::simplePaginate(2);
        
        return view('article.index',['articles' => $articles]);
    }
    
    public function create()
    {
        return view('article.create');
    }

    public function store(ArticleRequest $request)
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
        return redirect()->route('article.index')->with('success', 'Task Created Successfully!');
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
        $request->validate([
            'title' => 'required|unique:articles,title',
            'descripsi' => 'required'
        ]);
        $fileimage = $article->image;
        $update = Carbon::today();
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
            'descripsi' => $request->descripsi,
            'updated_at' => $update
        ]);
        return redirect()->route('article.index')->with('success', 'update Successfully!');
    }

    public function destroy($article)
    {
        $data=Article::findOrFail($article);
        $data_path=public_path("\storage\\").$data->image;
        if(Article::exists($data_path)) {
            $data->delete();
        }
        else{
            $data->delete();
            //abort(404);
        }
        $data->delete();

        return redirect()->route('article.index')->with('success', 'delete Successfully!');
    }
}
