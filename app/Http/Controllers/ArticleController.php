<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return view('blog.index');
    }
    public function postArticle(Request $request)
    {
        $article = new Article();
        $article->content = $request->input('content');
        $article->save();
        return response()->json(['article' => $article], 201);
    }
    public function getArticles()
    {
        $articles = Article::all();
        /*$response = [
            'articles' => $articles
        ];
        return response()->json($response, 200);*/
        return view('blog.index', ['articles' => $articles]);
    }
    public function getArticle(Request $request, $id)
    {
        $article = Article::find($id);
        /*if(!$article){
            return response()->json(['message' => 'Doc not found'], 404);
        }
        $article->content = $request->input('content');
        $article->save();
        return response()->json(['quote' => $article], 200);*/
        return view('blog.detail', ['article' => $article]);
    }
    public function deleteArticle($id)
    {
        $article = Article::find($id);
        $article->delete();
        return response()->json(['message' => 'Article deleted'], 200);
    }

}
