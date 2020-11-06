<?php

namespace App\Http\Controllers;

use App\Todo;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $todos = Todo::where('user_id', Auth::id())->orderBy('status', 'asc')->paginate(7);

        return view('todos.index',compact("todos"));
    }
}
