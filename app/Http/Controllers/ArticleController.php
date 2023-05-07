<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Auteur;
use App\Models\Article;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cache;

class ArticleController extends Controller
{
/**
 * @middleware(response_cache)
 */

    public function listes()
    {
     
        $pagines = Cache::get('ma_cle');
        if(!$pagines)
        {
            $pagines = Article::where('statut', 1)->orderBy('datecreation', 'desc')->paginate(6);
            Cache::put('ma_cle', $pagines, 1000);
        }

       
        
        return view('articles.home',compact('pagines'));
    }

    public function retail($id)
    {
   
        $article = Cache::remember('article_' . $id, 6000, function () use ($id) {
            return Article::find($id);
        });
    
        return view('articles.retail', compact('article'));
    }
}
