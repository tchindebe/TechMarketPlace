<?php

namespace App\Repository\Orders\AdaptorOrderEloquent;

use App\Models\Ordereds;
use App\Repository\Orders\OrderRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class EloquentOrder implements OrderRepositoryInterface
{

    public function getById(int $id)
    {
        $order = Ordereds::where('id', $id)->firstOrFail();

        return $order;
    }


}
