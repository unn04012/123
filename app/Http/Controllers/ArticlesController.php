<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(){
      $articles = \App\Article::get();

      return view('articles.index',compact('articles'));
    }

    public function create(){
      return view('articles.create');
    }

    public function store(Request $request){
      $rules = [
        'title' => ['required'],
        'content' => ['required', 'min:10'],
      ];

      $validator = \Validator::make($request->all(), $rules);

      if($validator->fails()){
        return back()->withErrors($validator)
                     -> withInput();
      }

      $article = \App\User::find(1)->articles()
                                   -> create($request->all());

      if(! $article){
        return back()->with('flash_message', '글이 저장되지 않았습니다.')->withInput();
      }
      return redirect(route('articles.index'))->with('flash_meggate','작성하신 글이 저장되었습니다.');
    }
}
