<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Interface\OrderRepositoryInterface;
use Illuminate\Http\JsonResponse;

class OrderController extends Controller
{
    private $orderRepositopory;
    public function __construct(OrderRepositoryInterface $orderRepositopory)
    {
        $this->orderRepositopory = $orderRepositopory;
    }
    public function index(): JsonResponse
    {
        return response()->json([
            'data'=>$this->orderRepositopory->getAllOrders()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
