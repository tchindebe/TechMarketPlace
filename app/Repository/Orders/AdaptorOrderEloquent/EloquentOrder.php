<?php

namespace App\Repository\Orders\AdaptorOrderEloquent;

use App\Models\Ordereds;
use App\Repository\Orders\OrderRepositoryInterface;
use Cart;
use Illuminate\Support\Facades\Auth;

class EloquentOrder implements OrderRepositoryInterface
{

    public function getById(int $id)
    {
        $order = Ordereds::where('id', $id)->firstOrFail();

        return $order;
    }

    public function store(array $data)
    {

        $pool = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code = substr(str_shuffle(str_repeat($pool, 5)), 0, 6);

        $orders = Ordereds::all();

//        if($orders){
//            while ($orders->billNumber == $code){
//                $newPool = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
//                $code = substr(str_shuffle(str_repeat($newPool, 5)), 0, 6);
//            }
//        }


        if($data){
            foreach (Cart::getContent() as $item){

                $order = new Ordereds();

                $order->firstName = $data['firstName'];
                $order->lastName = $data['lastName'];
                $order->country = $data['country'];
                $order->address = $data['address'];
                $order->city = $data['city'];
                $order->bp = $data['bp'];
                $order->phone = $data['phone'];
                $order->email = $data['email'];
                $order->billNumber = $code;
                $order->payment_method = $data['payment_method'];
                $order->user_id = Auth::User()->id;

                $order->image = $item->model->images;
                $order->shop = $item->model->user->username;
                $order->price = $item->price;
                $order->nameProduct = $item->model->name;
                $order->product_id = $item->model->id;
                $order->quantity = $item->quantity;
                $order->subtotal = Cart::getSubTotal();

                $order->save();

            }
            if ($order->save()){

                Cart::clear();
                return $order;
            }

            return false;
        }

        return false;

    }


    public function show()
    {
        $orders = Ordereds::where('user_id', Auth::User()->id)->get();

        return $orders;
    }

    public function orderByProgress()
    {

        $orders = Ordereds::where('user_id', Auth::User()->id)
            ->where('status', 1)
            ->get();

        return $orders;
    }

    /**
     * @param string $username
     * @return mixed
     */
    public function getOrderByShop(string $username)
    {
        $orders = Ordereds::where('shop', $username)
            ->select('billNumber', 'subtotal', 'status', 'firstName', 'lastName', 'user_id', 'email')
            ->distinct()
            ->get();

        return $orders;
    }

    public function orderByUnpaid()
    {
        $orders = Ordereds::where('user_id', Auth::User()->id)
            ->where('status', 0)
            ->get();

        return $orders;
    }

}
