<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Todo\StoreTodoRequest;
use App\Http\Requests\Todo\UpdateTodoRequest;
use App\Interfaces\TodoRepositoryInterface;
use Exception;
use Illuminate\Http\Request;

use function PHPUnit\Framework\throwException;

class TodoController extends Controller
{
    private $todoRepository;

    public function __construct(TodoRepositoryInterface $todoRepository)
    {
        $this->todoRepository = $todoRepository;
    }
    public function index()
    {
        $todos = $this->todoRepository->getAll();
        return response()->json([
            "status" => "success",
            "statusCode" => 200,
            "data" => $todos,
            "message" => "Todo list Fetched successfully"
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTodoRequest $request)
    {
        try {
            $todo = $this->todoRepository->create($request->validated());
            return response()->json([
                "status" => "success",
                "statusCode" => 200,
                "data" => $todo,
                "message" => "Todo created Successfully"
            ]);
        } catch (Exception $e) {
            return response()->json([
                "message" => $e->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $todo = $this->todoRepository->getById($id);
            return response()->json([
                "status" => "success",
                "statusCode" => 200,
                "data" => $todo,
                "message" => "Todo fetched by id successfully"
            ]);
        } catch (Exception $e) {
            return response()->json([
                "message" => $e->getMessage()
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTodoRequest $request, string $id)
    {
        
        try {
            $todo = $this->todoRepository->update($id, $request->validated());
            return response()->json([
                "status" => 200,
                "data" => $todo,
                "message" => "Todo updated Successfully"
            ]);
        } catch (Exception $e) {
            return response()->json([
                "message" => $e->getMessage()
            ]);
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $todo = $this->todoRepository->delete($id);
            return response()->json([
                "status" => "success",
                "statusCode" => 200,
                "data" => $todo,
                "message" => "Todo deleted Successfully"
            ]);
        } catch (Exception $e) {
            return response()->json([
                "message" => $e->getMessage()
            ]);
        }
    }
}
