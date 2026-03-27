<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">

</head>

<body>
    @include('layouts.nav')
    <div class="container mt-5">

        <h2>Your Cart</h2>

        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>image</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                @php $grandTotal = 0; @endphp

                @foreach($cartItems as $item)

                @php
                $total = $item->product->product_price * $item->quantity;
                $grandTotal += $total;
                @endphp

                <tr>
                    <td style="display: flex;justify-content:center;">
                        <img src="{{ asset('upload_aircraft/' . $item->aircraft) }}" alt="Product Image" width="100" class="img-fluid">
                    </td>
                    <td><p>product name : {{ $item->product->product_name }}</p></td>
                    <td><p>product price : ${{ $item->product->product_price }}/=</p></td>
                    <td><p>Quantity : {{ $item->quantity }}</p></td>
                    <td><p>LKR {{ $total }}/=</p></td>

                    <td>
                        <a href="{{ route('remove.cart',$item->id) }}" class="btn btn-danger">Remove</a>
                        <a href="{{ route('pages.order', $item->product->id) }}" class="btn btn-success">Buy Now</a>

                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>

        <h4 style="font-weight: bold;font-size: 40px;">Total : LKR {{ $grandTotal }}/=</h4>

    </div>




    <div class="container  mb-5" style="margin-top: 100px;">

        <div class="row add-another">
            <div class="col-12 col-md-8 shopping-text">


                <h2>Add Another Item</h2>
                <p>do you want add another item your cart
                </p>



            </div>

            <div class="col-12 col-md-4 continue-shopping">

                <a href="{{ route('pages.shop') }}" class="btn btn-success">Continue Shopping</a>

            </div>
        </div>



    </div>

    @include('layouts.footer')
</body>


</html>