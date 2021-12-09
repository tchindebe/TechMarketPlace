<?php

namespace App\Repository\Orders\AdaptorOrderEloquent;

use App\Models\Ordereds;
use App\Repository\Orders\OrderRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class EloquentOrder implements OrderRepositoryInterface
{
    public function show()
    {
        $order = Ordereds::where('id', Auth::user()->id)->get();
        return $order;
    }
}
