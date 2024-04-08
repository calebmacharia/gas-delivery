<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Billing;

class BillingController extends Controller

{
    public function submitForm(Request $request)
    {
       // dd($request->all());
        // Validate the form data
        $validatedData = $request->validate([
            // Define your validation rules here
            // Example:
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'delivery_location' => 'required|string|max:255',
            'street_name' => 'required|string|max:255',
            'house_number' =>'required|string|max:255',
            // Add more validation rules for other fields
        ]);

        // Create a new instance of Billing model
        $billing = new Billing();



        // Populate the billing model with form data

        $billing->first_name = $request->input('first_name');
        $billing->last_name = $request->input('last_name');
        $billing->phone_number = $request->input('phone_number');
        $billing->delivery_location = $request->input('delivery_location');
        $billing->street_name = $request->input('street_name');
        $billing->house_number= $request->input('house_number');

        // Add more fields as needed

        // Save the billing information to the database
        $billing->save();
       //dd($request->all());


        // Redirect back to the form with a success message
        return redirect()->back()->with('success', 'Order created successfully!');
    }
}


// {
//     public function importUsersToBilling()
//     {
//         // Get users data
//         $users = User::all();

//         // Loop through each user and insert into billing table
//         foreach ($users as $user) {
//             $billingInfo = [
//                 'first_name' => $user->first_name,
//                 'last_name' => $user->last_name,
//                 'phone_number' => $user->phone_number,
//             ];

//             Billing::create($billingInfo);
//         }

//         return 'Users imported to billing table successfully!';
//     }

//     public function store(Request $request) // Include $request parameter here
//     {
//         $validatedData = $request->validate([
//             'first_name' => 'required',
//             'last_name' => 'required',
//             'phone_number' => 'required',
//             'delivery_location' => 'required',
//         ]);

//         $validatedData['delivery_location'] = $request->input('delivery_location', '{}'); // Set a default value if not provided

//         Billing::create($validatedData);

//         return redirect('/');
//     }

//     public function submitForm(Request $request)
//     {
//         // Check if the form was submitted with the "Place order" button
//         if ($request->has('action') && $request->input('action') === 'place_order') {
//             // Process the order here...

//             // Redirect back to the form with a success message
//             return redirect()->back()->with('success', 'Order created successfully!');
//         }

//         // Handle other form submissions here...

//         // Redirect back to the form without a message
//         return redirect()->back();
//     }

// }





