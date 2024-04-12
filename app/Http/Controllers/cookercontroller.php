<?php

namespace App\Http\Controllers;

use App\Models\Cooker;
use Illuminate\Http\Request;

class CookerController extends Controller
{
    /**
     * Display a listing of the cookers.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cookers = Cooker::all();
        return view('cookers.index', compact('cookers'));
    }

    /**
     * Show the form for creating a new cooker.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cookers.create');
    }

    /**
     * Store a newly created cooker in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand' =>'required|string',
            'type' => 'required|string',
            'size' => 'required|string',
            'price' => 'required|string',
            'image' => 'required|image',
            // |mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        $imageName = time().'.'.$request->image->getClientOriginalExtension();
         $request->image->move('cookersimages', $imageName);

        Cooker::create([

            'brand' => $request->brand,
            'type' => $request->type,
            'size' => $request->size,
            'price' => $request->price,
            'image' => $imageName,
        ]);

        return redirect()->route('cookers.index')->with('success', 'Cooker added successfully.');



    }

    public function edit(Cooker $cooker)
    {
        return view('cookers.edit', compact('cooker'));
    }

    /**
     * Update the specified cooker in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cooker  $cooker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cooker $cooker)
    {
        // Validate the incoming request
        $request->validate([
            'brand' => 'required',
            'type' => 'required',
            'size' => 'required',
            'price' => 'required|numeric',
            'image' => 'image',
            // |mimes:jpeg,png,jpg,gif|max:2048', // Add validation rules for image upload
        ]);

        // Update the cooker's attributes with the new values
        $cooker->brand = $request->brand;
        $cooker->type = $request->type;
        $cooker->size = $request->size;
        $cooker->price = $request->price;


        // Check if a new image has been uploaded
        if ($request->hasFile('image')) {
            // Store the new image in the 'public' disk under the 'images' directory
            $imagePath = $request->file('image')->store('images', 'public');

            // Update the cooker's image attribute with the new image path
            $cooker->image = $imagePath;
        }

        // Save the updated cooker to the database
        $cooker->save();

        // Redirect the user back to the index page with a success message
        return redirect()->route('cookers.index')->with('success', 'Cooker updated successfully.');
    }

    public function destroy(Cooker $cooker)
    {
        $cooker->delete();
        return redirect()->route('cookers.index')->with('success', 'Cooker deleted successfully.');
    }
}
