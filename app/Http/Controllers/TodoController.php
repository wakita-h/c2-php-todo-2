<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todo_list = Todo::all();

        return view('todo/index', compact('todo_list'));
    }
}
