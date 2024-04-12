<?php

namespace App\Http\Controllers;

use App\Models\OrderCooker;
use Illuminate\Http\Request;

class OrderCookerController extends Controller
{
    public function index()
    {
        $cookers = OrderCooker::all();
        return view('ordercookers.index', compact('cookers'));
    }
}
