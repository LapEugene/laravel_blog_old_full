<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;
//use App\Functions\SimpleHtmlDom;

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
        include(app_path() . '/Functions/SimpleHtmlDom.php');
        $search_query = "cars";
        $search_query = urlencode( $search_query );
        $html = file_get_html( "https://www.google.com/search?q=$search_query&tbm=isch" );
        //dd($html);
        $image_count = 100; //Enter the amount of images to be shown
        $i = 0;
        //dd($html);
        foreach($html->find('img') as $element){
            if($i == $image_count) break;
            echo $element->src . '<br>';
            $i++;
        }


        //dd($html);
        //$image_container = $html->find('div#rcnt', 0);
        //$images = $image_container->find('img');
//        $image_count = 10; //Enter the amount of images to be shown
//        $i = 0;
//        foreach($images as $image){
//            if($i == $image_count) break;
//            $i++;
//            // DO with the image whatever you want here (the image element is '$image'):
//            echo $image;
//        }

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
