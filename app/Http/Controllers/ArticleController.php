<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Auteur;
use App\Models\Article;
use Illuminate\Support\Facades\Hash;

class ArticleController extends Controller
{
    //
    public function listes()
    {
        $articles = Article::where('statut', 1)->get();
        $pagines = Article::where('statut', 1)->orderBy('datecreation', 'desc')->paginate(8);
        
        return view('articles.home',compact('articles','pagines'));
    }

    public function retail($id)
    {
        $article = Article::find($id);
    
        return view('articles.about', compact('article'));
    }
    public function about()
    {

    
        return view('articles.about');
    }
}
