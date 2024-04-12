<?php

namespace App\Http\Controllers;
use App\Models\Gas;
use App\Models\Order;
use Illuminate\Http\Request;

class orderController extends Controller
{

        public function index()
        {
            $data = Gas::all();
            return view('order', compact('data'));
        }

        public function cart()
        {
            return view('cart');
        }
        public function addToCart($id)
        {
            $data = Gas::findOrFail($id);

            $cart = session()->get('cart', []);

            if(isset($cart[$id])) {
                $cart[$id]['quantity']++;
            }  else {
                $cart[$id] = [
                    "brand" => $data->brand,
                    "type" => $data->type,
                    "size" => $data->size,
                    "image" => $data->image,
                    "price" => $data->price,
                    "quantity" => 1
                ];
            }

            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Gas add to cart successfully!');
        }

        public function update(Request $request)
        {
            if($request->id && $request->quantity){
                $cart = session()->get('cart');
                $cart[$request->id]["quantity"] = $request->quantity;
                session()->put('cart', $cart);
                session()->flash('success', 'Cart successfully updated!');
            }
        }

        public function remove(Request $request)
        {
            if($request->id) {
                $cart = session()->get('cart');
                if(isset($cart[$request->id])) {
                    unset($cart[$request->id]);
                    session()->put('cart', $cart);
                }
                session()->flash('success', 'Gas successfully removed!');
            }
        }
    }


