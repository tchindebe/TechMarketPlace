<?php

namespace App\Repository\Admin\Orders;

use App\Models\Ordereds;
use Illuminate\Support\Facades\Auth;

class EloquentOrdersAdaptor implements OrderInterfaceRepository {

    public function show()
    {
        $order = Ordereds::all();

        return $order;
    }

}
