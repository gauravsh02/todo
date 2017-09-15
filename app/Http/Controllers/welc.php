<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todo;
class welc extends Controller
{
    public function welca(){
        $todos = todo::all();
        return view('todo.home',compact('todos'));
    }
}
