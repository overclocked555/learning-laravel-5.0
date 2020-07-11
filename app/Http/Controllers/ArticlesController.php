<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller {

	//
	public function index()
	{
		$articles = Article::latest()->published()->get();
		return view('articles.index')->with('articles', $articles);
	}

	public function show($id)
	{
		$article = Article::findOrFail($id);
		//return view ('articles.show', compact('article'));                    alternate
		return view('articles.show')->with('article', $article);
	}

	public function create()
	{
		return view ('articles.create'); 
	}

	public function store(Requests\CreateArticleRequest $request)
	{
		Article::create($request->all());
		
		return redirect('articles'); 
	}

}
