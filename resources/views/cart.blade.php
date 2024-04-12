<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/css/pop.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700" rel="stylesheet" />
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/cart.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<body>
    <div>
    <nav class="bg-gray-800 fixed w-full  p-3 z-10">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <a href="#" class="flex items-center text-white text-lg font-semibold">
                <img src="{{ asset('images/ghi.jpg') }}" alt="Logo" class=" w-12 rounded-lg mr-2">
                <div class="capitalize">tosha gas delivery</div>
            </a>

            <!-- Mobile menu button -->
            <div class="block lg:hidden">
                <button id="menu-toggle" class="text-white focus:outline-none">
                    <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                        <path v-if="!isOpen" fill-rule="evenodd" clip-rule="evenodd"
                            d="M3 6h18v2H3V6zm0 5h18v2H3v-2zm0 5h18v2H3v-2z"></path>
                        <path v-else fill-rule="evenodd" clip-rule="evenodd"
                            d="M11 19h12v-2H11v2zm0-7h12v-2H11v2zM3 6h18v-2H3v2z"></path>
                    </svg>
                </button>
            </div>

            <ul class="flex items-center">

                    <li><a href="{{route('home.index')}}" class="text-white hover:text-gray-400 px-4">Home</a></li>
                    <li><a href= "{{route('order')}}"class="text-white hover:text-gray-400 px-4">Order Now</a></li>
                    <li><a href="#" class="text-white hover:text-gray-400 px-4">Privacy Policy</a></li>


                  <li>
                    <div class="hidden lg:flex lg:items-center lg:w-auto" id="menu">
                        <ul class="lg:flex items-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-12">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-primary" data-toggle="dropdown">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                            </button>
                                            <li>
                                            <div class="dropdown-menu">
                                                <div class="row total-header-section">
                                                    @php $total = 0 @endphp
                                                    @foreach((array) session('cart') as $id => $details)
                                                        @php $total += $details['price'] * $details['quantity'] @endphp
                                                    @endforeach
                                                    <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                                                        <p>Total: <span class="text-info">sh {{ $total }}</span></p>
                                                    </div>
                                                </div>
                                                @if(session('cart'))
                                                    @foreach(session('cart') as $id => $details)
                                                        <div class="row cart-detail">
                                                            <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                                                <img src="{{ asset('gasimage') }}/{{ $details['image'] }}" />
                                                            </div>
                                                            <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                                                <div class="flex ">
                                                                <div class>{{ $details['brand'] }}</div>
                                                               <div class="ml-2 "> /{{$details['type']}}/</div></div>
                                                                <span class="price flex items-center text-lg mt-2 text-info"><span class="count">Quantity:{{ $details['quantity'] }} </span>   <span class= "ml-2"><div class="font-bold flex"> sh{{ $details['price'] }}</div></span>

                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                                <div class="row">
                                                    <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                                        <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

    <div class="mx-auto  max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">

        <!-- Shopping cart table -->
        <div class="card">
            <div class="card-header">
                <h2 class="p-3 text-xl font-bold ">Shopping Cart</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered m-0">
                    <thead>
                      <tr>
                        <!-- Set columns width -->
                        <th class="text-center py-3 px-2" style="min-width: 200px;">Product Name &amp; Details</th>
                        <th class="text-center py-3 px-4" style="width: 100px;">Price</th>
                        <th class="text-center py-3 px-4" style="width: 120px;">Quantity</th>
                        <th class="text-right py-3 px-4" style="width: 100px;">Total</th>
                        <th class="text-center align-middle py-3 px-4" style="width: 40px;"><a href="#" class="shop-tooltip float-none text-light" title="" data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
                      </tr>
                    </thead>
                    <tbody>
                        @php $total = 0 @endphp
                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                                @php $total += $details['price'] * $details['quantity'] @endphp

                                <tr data-id="{{ $id }}">
                        <td class="p-4">
                          <div class=" flex justify-between items-center">
                            <img src="{{ asset('gasimage') }}/{{ $details['image'] }}" width="100" height="100" class="img-responsive"/>
                            <div class="media-body items-center">
                              <a href="#" class="d-block mr-5 text-dark">{{$details['brand']}}</a>
                              <small>
                                <span class="ui-product-color ui-product-color-sm align-text-bottom" style="background:#e81e2c;"></span>
                                <span class="text-bold">{{$details['type']}}</span>
                                <span class="text-muted mr-8">size:{{$details['size']}} </span>
                              </small>
                            </div>
                          </div>
                        </td>
                        <td class="text-right font-bold align-middle p-4">sh{{$details['price']}}</td>
                        <td class="align-middle p-4"><input type="number" class=" form-control quantity cart_update" min="1"" value="{{ $details['quantity'] }}"></td>
                        <td class="text-right font-weight-semibold align-middle p-4">sh{{ $details['price'] * $details['quantity'] }}</td>
                        <td class="text-center align-middle px-0"> <i class="fa fa-trash cart_remove  text-blue-600 rounded "></i> </td>
                      </tr>

                      @endforeach
                      @endif



                    </tbody>
                  </table>
                </div>
                <!-- / Shopping cart table -->

                <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
                  <div class="mt-4">
                    <label class="text-muted font-weight-normal">Promocode</label>
                    <input type="text" placeholder="ABC" class="form-control">
                  </div>
                  <div class="d-flex">
                    <div class="text-right mt-4 mr-5">
                      <label class="text-muted font-weight-normal m-0">Cost of delivery</label>
                      <div class="text-large"><strong>sh 50</strong></div>
                    </div>
                    <div class="text-right mt-4">
                      <label class="text-muted font-weight-normal m-0">Total price</label>
                      <div class="text-large font-semi-bold"><strong>Total sh{{ $total }}</strong></div>
                    </div>
                  </div>
                </div>

                <div class="float-right">
                    <a href="{{ route('order') }}" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> Continue Shopping</a>
                    <button class="btn btn-success"><i class="fa fa-money"></i> Checkout</button>
                </div>

              </div>
          </div>
      </div>
</body>

</html>

<script type="text/javascript">

    $(".cart_update").change(function (e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ route('update_cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("data-id"),
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });

    $(".cart_remove").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Do you really want to remove?")) {
            $.ajax({
                url: '{{ route('remove_from_cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>
