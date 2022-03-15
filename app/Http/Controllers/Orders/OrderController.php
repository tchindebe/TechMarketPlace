<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Repository\Orders\OrderRepositoryInterface;

class OrderController extends Controller
{
    private $repository;

    public function __construct(OrderRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return view('user.order.index');
    }

    public function findById($id)
    {
        $order = $this->repository->getById($id);

        if ($order)
        {
            return view('user.order.findOrder');
        }
        return false;
    }

    public function allOrder(){

        $orders = $this->repository->show();

        return view('user.order.all', compact('orders', $orders));

    }

    public function orderByProgress(){

        $orders = $this->repository->orderByProgress();

        return view('user.order.index', compact('orders', $orders));
    }

    public function orderByUnpaid(){
        $orders = $this->repository->orderByUnpaid();

        return view('user.order.unpaid', compact('orders', $orders));
    }
}
