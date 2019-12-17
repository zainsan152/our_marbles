<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class manageCustomersController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:shopkeeper');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $customers = Customer::all();
        return view('shopkeeper.customer', compact('customers'));
    }


}
