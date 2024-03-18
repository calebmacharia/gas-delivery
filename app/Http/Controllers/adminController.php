<?php

namespace App\Http\Controllers;
use App\Models\Gas;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
{
    return view('profile.admin.index');
}
public function upload (Request $request)
{
    $data = new Gas;

    $image=$request->image;
    $imagename =time().'.'.$image->getClientOriginalExtension();
    $request->image->move('gasimage',$imagename);
    $data->image=$imagename;
    $data->brand=$request->brand;
    $data->price=$request->price;
    $data->type=$request->type;
    $data->size=$request->size;
    $data->save();
    return redirect()->back();
}
}

