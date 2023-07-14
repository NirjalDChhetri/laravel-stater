<?php

namespace App\Interface;

interface OrderRepositoryInterface
{

    public function getAllOrders();
    public function getOrderById($orderId);
    public function createOrder(array $orderDetails);
    public function updateOrder($orderId, array $newDetails);
    public function deleteOrder($orderId);
}
