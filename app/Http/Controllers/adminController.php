<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Gas;
class adminController extends Controller
{
    public function index()
{
    $data = Gas::all();
    return view('profile.admin.view',compact("data"));


}

public function create()
{
    return view('profile.admin.create');
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
    $data->user_id = Auth::id();
    $data->save();
    return redirect()->back()->with('success', 'Product created successfully.');

}
public function gasmenu()
{
    $data = gas::all();
    return view('profile.admin.index',compact("data"));

}
public function deletegas($id)
{
    $data=gas::find($id);
    $data->delete();
    return redirect()->back()->with('success','Product deleted successfully');
}
public function editgas($id)
{
    $data=gas::find($id);
    return view("profile.admin.editgas",compact("data"));
}
public function update(Request $request,$id)
{
    $data=gas::find($id);

    $image=$request->image;
    $imagename =time().'.'.$image->getClientOriginalExtension();
    $request->image->move('gasimage',$imagename);
    $data->image=$imagename;
    $data->brand=$request->brand;
    $data->price=$request->price;
    $data->type=$request->type;
    $data->size=$request->size;
    $data->save();
    return redirect()->back()->with('success','Product updated successfully');

    return redirect()->back();
}
}

