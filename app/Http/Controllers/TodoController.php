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
}
