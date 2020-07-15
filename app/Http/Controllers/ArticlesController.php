<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\AuthController;

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

	public function store(Requests\ArticleRequest $request)
	{
		$article = new Article($request->all());
		Auth::user()->articles()->save($article);
		return redirect('articles'); 
	}

	public function edit($id)
	{
		$article = Article::findOrFail($id);
		return view ('articles.edit')->with('article', $article); 
	}	

	
	public function update($id, Requests\ArticleRequest $request)
	{
		$article = Article::findOrFail($id);
		$article->update($request->all());
		return redirect('articles'); 
	}	

}
