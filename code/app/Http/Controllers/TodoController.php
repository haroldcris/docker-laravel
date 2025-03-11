<?php

namespace App\Http\Controllers;

use Core\Student;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        // $student = new Student();
        // $student->name = 'John Doe';

        // echo $student->name;
        // return view('welcome');

        $content = Todo::all();
        return view('todo.index')->with('content', $content);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Todo::create($request->all());
        return redirect('/todo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Request $request)
    {
        // dd($request);
        $todo = Todo::where('rowId', $id)->first();    
            return view('todo.update')
                    ->with('todo',$todo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $param = $request->all();
        $todo = Todo::where('rowId',$param['rowId']);    
        //dd($todo);
        $todo->update([
            'title' => $param['title'],        
        ]);    

        return redirect('/todo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request) 
    {
        //dd($request);
        $todo = Todo::where('rowId',$request['rowId']);
        $todo->delete();    

        return redirect()->route('todo.index');
    }
}
