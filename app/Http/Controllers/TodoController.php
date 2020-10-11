<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Todo一覧を取得
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $todo_list = Todo::all();

        return view('todo/index', compact('todo_list'));
    }


    /**
     * Todo単体を取得
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(int $id)
    {
        return view('todo/show', ['todo' => Todo::findOrFail($id)]);
    }
}
