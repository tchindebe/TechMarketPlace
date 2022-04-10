<?php

namespace App\Repository\Admin\Orders;

use App\Http\Controllers\Orders\OrderController;
use App\Models\Ordereds;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EloquentOrdersAdaptor implements OrderInterfaceRepository {

    public function show()
    {
        $order = Ordereds::all();

        return $order;
    }

    public function showByClient(int $id)
    {
        $ordersByClient = DB::table('ordereds')
            ->where('user_id', $id)
            ->where('status', 0)
            ->select('billNumber', 'subtotal', 'status')
            ->distinct()
            ->get();
        return $ordersByClient;
    }

    public function showByBill(string $bill)
    {
        $order = DB::table('ordereds')
            ->where('billNumber', $bill)
            ->get();

        return $order;
    }

    public function validateOrderCustomer(string $bill)
    {
        $order = Ordereds::where('billNumber', $bill)->get();

        foreach ($order as $order){
            $order->update([
                'status' => 1
            ]);
        }

        return $order;
    }

}
