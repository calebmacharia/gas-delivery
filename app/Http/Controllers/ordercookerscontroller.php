<?php

namespace App\Http\Controllers;
use App\Models\Cooker;
use App\Models\OrderCookers;
use Illuminate\Http\Request;


class OrderCookersController extends Controller
{
    public function index()
    {
       $cookers = Cooker::all();
       return view('cookers.ordercookers', compact('cookers'));
   }
}
