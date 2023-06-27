<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return response()->json(["status" => 200, "data" => $todos, "message" => "Todo list Fetched successfully"]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $todo = Todo::create($request->all());
        return response()->json(["status"=> 200, "data"=> $todo, "message" => "Todo created Successfully"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $todo = Todo::findOrFail($id);
        return response()->json(["status"=>200, "data"=>$todo, "message"=>"Todo fetched by id"]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $todo = Todo::findOrFail($id);
        $todo->update($request->all());
        return response()->json(["status"=>200, "data"=>$todo, "message"=>"Todo updated Successfully"]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();
        return response()->json(["status"=>200, "data"=>$todo, "message"=>"Todo deleted Successfully"]);
    }
}
