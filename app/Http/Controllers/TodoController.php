<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index() {
        return response(Todo::latest()->get(), 200);
    }

    public function store(Request $request)
    {
        $data = [
            "text" => request("text"),
            "finished" => request("finished"),
        ];

        $todo = Todo::create($data);

        return response($todo, 201);
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
        $data = [
            "text" => request("text"),
            "finished" => request("finished"),
        ];
        
        $todo->update($data);
        return response($todo, 200);
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return response('Deleted Succesfully', 200);
    }
}
