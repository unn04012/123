<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __invoke(){
      return 'Test invoke function()';
    }

    public function index(){
      return 'index function()';
    }
}
