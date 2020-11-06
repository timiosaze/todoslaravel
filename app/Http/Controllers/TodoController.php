<?php

namespace App\Http\Controllers;

use App\Todo;
use Auth;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $todos = Todo::where('user_id', Auth::id())->orderBy('status', 'asc')->paginate(7);

        return view('todos.index',compact("todos"));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            'the_todo' => 'required'
        ]);
        $todo = new Todo();
        $todo->the_todo = request('the_todo');
        $todo->user_id = Auth::id();

        if($todo->save()){
            return redirect('/todos')->with('success', 'Successfully saved');
        } else {
            return redirect('/todos')->with('failure', 'Not saved');
        }
    }

    public function changeStatus($id)
    {
        $todo = Todo::where('user_id', Auth::id())->findOrFail($id);

        $todo->status = ($todo->status == 0) ? 1 : 0;
        if($todo->save()){
            return redirect('/todos')->with('success', 'Successfully updated');
        } else {
            return redirect('/todos')->with('failure', 'Not updated');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $todo = Todo::where('user_id', Auth::id())->findOrFail($id);

        if($todo->delete()){
            return redirect('/todos')->with('success', 'Successfully deleted');
        } else {
            return redirect('/todos')->with('failure', 'Not deleted');
        }
    }
}
