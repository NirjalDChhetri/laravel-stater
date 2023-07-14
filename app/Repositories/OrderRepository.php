<?php

namespace App\Repositories;

use App\Models\Order;
use App\Interface\OrderRepositoryInterface;

class OrderRepository implements OrderRepositoryInterface
{

    public function createOrder(array $orderDetails)
    {
        return Order::create($orderDetails);
    }

    public function getAllOrders()
    {
        return Order::all();
    }

    public function getOrderById($orderId)
    {
        return Order::findOrFail($orderId);
    }
    public function deleteOrder($orderId)
    {
        return Order::destroy($orderId);
    }
    public function updateOrder($orderId, array $newDetails)
    {
        return Order::whereId($orderId)->update($newDetails);
    }
}
