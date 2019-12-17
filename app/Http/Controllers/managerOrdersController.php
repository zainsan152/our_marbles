<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Customer;
use Illuminate\Http\Request;

class managerOrdersController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:shopkeeper');
    }

    public function index()
    {
        $orders = Order::all();
        return view('shopkeeper.order', compact('orders'));
    }

    public function remove(Order $order)
    {
        //
        if ($order->delete())
        {
            return back()->with('message' ,'Order Trashed Successfully');
        }
        else
            return back()->with('message' ,'Error Deleting');
    }
}
