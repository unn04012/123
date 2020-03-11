<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(){
      $articles = \App\Article::latest()->paginate(3);
      $articles->load('user');
      return view('articles.index',compact('articles'));
    }

    public function create(){
      return view('articles.create');
    }

    public function store(\App\Http\Requests\ArticlesRequest $request){
      $article = \App\User::find(1)->articles()->create($request->all());

      if(! $article){
        return back()->with('flash_message', '글이 저장되지 않았습니다.')->withInput();
      }

      return redirect(route('articles.index'))->with('flash_message','작성하신 글이 저장되었습니다.');

      // $rules = [
      //   'title' => ['required'],
      //   'content' => ['required', 'min:10'],
      // ];
      //
      // $message = [
      //     'title.required' => '제목은 필수 입력 항목입니다',
      //     'content.required' => '본문은 필수 입력 항목입니다',
      //     'content.min' => '본문은 최소 :min 글자 이상이 필요합니다',
      // ];
      // $validator = \Validator::make($request->all(), $rules, $message);
      //
      // if($validator->fails()){
      //   return back()->withErrors($validator)
      //                -> withInput();
      // }
      //
      // $article = \App\User::find(1)->articles()
      //                              -> create($request->all());
      //
      //
    }
}
