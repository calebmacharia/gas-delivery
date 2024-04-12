
@extends('layouts.styles')
@section('content')
    <div class="header">
        <h1>Tosha Gas</h1>

        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="{{route('order.index')}}">Order Now</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>
    </div>


</head>
<body>
    <h2>CHECKOUT</h2>

    <form method="POST" action="{{ route('billing.submit') }}">
        @csrf <!-- Include CSRF token -->

        <h3>Billing & Delivery Details</h3>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <table>
            <tr>
                <td><h4>A. Customer Details</h4></td>
            </tr>
            <tr>
                <td>
                    <div><label for="first_name">First Name:</label>
                        <input type="text" name="first_name" required>
                    </div>
                </td>
                <td>
                    <div><label for="last_name">Last Name:</label>
                        <input type="text" name="last_name" required>
                    </div>
                </td>
                <td>
                    <div><label for="phone_number">Phone Number:</label>
                        <input type="tel" name="phone_number" required>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <h4>B. Delivery Station</h4>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div>
                        <label for="delivery_location">Delivery Location:</label>
                        <input type="text" name="delivery_location" required>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div>
                        <label for="road_street_building">Street name:</label>
                        <input type="text" name="street_name" required>
                    </div>
                </td>
                <td>
                    <div>
                        <label for="apartment_house_number"> House number:</label>
                        <input type="text" name="house_number" required>
                    </div>
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <td><h4>C. Your Order</h4></td>
            </tr>
            <tr>
                <td>
                    <div>
                        <label for="product">Product:</label>
                        <input type="text" name="product" required>
                    </div>
                </td>
                <td>
                    <div>
                        <label for="subtotal">Subtotal:</label>
                        <input type="number" name="subtotal" required>
                    </div>
                </td>
                <td>
                    <div>
                        <label for="delivery">Delivery fee:</label>
                        <input type="text" name="delivery fee" required>
                    </div>
                </td>
                <td>
                    <div>
                        <label for="total">Total:</label>
                        <input type="number" name="total" required>
                    </div>
                </td>
            </tr>
        </table>

        <button type="submit">Submit</button>

        <h4>Payment to be done only through Mpesa</h4>

    </form>
    <h2>CONNECT WITH US
        <i class='bx bxs-phone-call'></i>
        0724444000
    </h2>
    <p>FROM MONDAY-SUNDAY AS FROM 8:00AM - 7:00PM</p>

</
@endsection
