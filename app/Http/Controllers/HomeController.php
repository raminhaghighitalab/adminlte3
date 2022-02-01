<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\Order;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('welcome', [
            'information' => Information::query()->first(),
            'orders' => Order::all()
        ]);
    }
}
