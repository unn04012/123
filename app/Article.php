<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title','content']; // 프로퍼티를 이용하는 허용 목록

    public function tags(){
      return $this->belongsToMany(Tag::class);
    }
}
