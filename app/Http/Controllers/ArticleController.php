<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Auteur;
use App\Models\Article;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class ArticleController extends Controller
{
    //
    public function listes()
    {
        $articles = Article::where('statut', 1)->get();
        $pagine = Article::where('statut', 1)->orderBy('datecreation', 'desc')->get();

    

// créer une collection avec les données
$collection = new Collection($pagine);

// définir le nombre d'éléments à afficher par page
$perPage = 8;

// obtenir le numéro de la page à afficher à partir de la requête
$page = request()->query('page', 1);

// créer une instance de LengthAwarePaginator
$pagines = new LengthAwarePaginator(
    $collection->forPage($page, $perPage),
    $collection->count(),
    $perPage,
    $page,
    ['path' => url()->current()]
);
        
        return view('articles.home',compact('articles','pagines'));
    }

    public function retail($id)
    {
        $article = Article::find($id);
    
        return view('articles.retail', compact('article'));
    }
}
