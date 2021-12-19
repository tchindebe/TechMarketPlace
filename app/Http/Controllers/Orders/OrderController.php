<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Repository\Orders\OrderRepositoryInterface;

class OrderController extends Controller
{
    public function index()
    {
        return view('user.order.index');
    }

    public function findById(OrderRepositoryInterface $repository, $id)
    {
        $order = $repository->getById($id);

        if ($order)
        {
            return view('user.order.findOrder');
        }
        return false;
    }
}
