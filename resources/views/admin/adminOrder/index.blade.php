<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .product-title {
            font-family: 'Poppins';
            text-transform: uppercase;
            color: #ff0051ff;
            text-align: center;

            font-weight: bold;
        }

        /* summery cards */
        .product-summery-content {
            display: flex;
            gap: 10px;
            margin-top: 100px;
            justify-content: center;
            align-items: center;
        }

        .product-summery-card {
            width: auto;
            height: 170px;
            background: linear-gradient(to top, #000000, #C70039);
            border-radius: 10px;
            margin-bottom: 10px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .product-summery-card h5 {
            color: #FF8400;
            font-family: 'Poppins';
            text-transform: capitalize;
        }

        .product-section {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .product-line {
            width: auto;
            height: 3px;
            background-color: #C70039;
        }

        .product-section h5 {
            text-align: center;
            text-transform: capitalize;
            color: #C70039;
        }
    </style>
</head>

<body>

    <head>
        @include('layouts.adminNav')
    </head>

    <h4 class="product-title" style="margin-top: 150px;">manage orders</h4>

    <div class="container-fluid mt-4">
        <div class="product-summey-content">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="product-summery-card">
                        <h5>Total orders {{ $total_orders }}</h5>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="product-summery-card">
                        <h5>complete orders {{$complete_orders}}</h5>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="product-summery-card">
                        <h5>pending orders {{$pending_orders}}</h5>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="product-summery-card">
                        <h5>cancelled orders {{$cancelled_orders}}</h5>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- search -->
    <div class="container mt-5 mb-5">
        <form method="GET" action="{{ route('products.index') }}" class="d-flex">
            <input
                type="text"
                name="search"
                class="form-control me-2"
                placeholder="Search product..."
                value="{{ request('search') }}">
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>



    <div class="container-fluid">
        <div class="row product-section mt-5">
            <div class="col-2 col-md-5">
                <div class="product-line"></div>
            </div>
            <div class="col-2 col-md-2">
                <div>
                    <h5>all orders</h5>
                </div>
            </div>
            <div class="col-2 col-md-5">
                <div class="product-line"></div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <table class="table table-striped" style="vertical-align: middle;">
            <thead>
                <tr>

                    <th scope="col" style="background-color: #C70039; height:70px;width:150px; color:white; vertical-align: middle;">product image</th>
                    <th scope="col" style="background-color: #C70039; height:70px;width:150px; color:white; vertical-align: middle;">product name</th>
                    <th scope="col" style="background-color: #C70039; height:70px; color:white; vertical-align: middle;">product price</th>
                    <th scope="col" style="background-color: #C70039; height:70px;width:150px; color:white; vertical-align: middle;">first name</th>
                    <th scope="col" style="background-color: #C70039; height:70px; width:150px; color:white; vertical-align: middle;">last name</th>
                    <th scope="col" style="background-color: #C70039; height:70px; color:white; vertical-align: middle;">email</th>
                    <th scope="col" style="background-color: #C70039; height:70px; color:white; vertical-align: middle;">address</th>
                    <th scope="col" style="background-color: #C70039; height:70px; color:white; vertical-align: middle;">status</th>
                    <th scope="col" style="background-color: #C70039; height:70px;width:150px; color:white; vertical-align: middle;">placed date</th>
                    <th scope="col" style="background-color: #C70039; height:70px; color:white; vertical-align: middle;">action</th>

                </tr>
            </thead>
            <tbody>

                @foreach($orders as $order)
                <tr>


                    <td><img src="{{ asset('upload_aircraft/' . $order->aircraft) }}" alt="Product Image" class="img-fluid" style="width: 150px;height: auto;"></td>
                    <td>{{ $order->product_name }}</td>
                    <td>LKR{{ number_format($order->product_price, 2) }}/=</td>
                    <td>{{ $order->first_name }}</td>
                    <td>{{ $order->last_name }}</td>
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->address }}</td>
                    <td>{{ ucfirst($order->status) }}</td>

                    <td style="width:200px;">{{ $order->created_at->format('Y-m-d') }}</td>
                    <td>
                        <div style="display:flex;justify-content:space-between;width:170px;">
                            <a href="{{ route('adminOrder.edit', $order->id) }}" class="btn btn-warning">
                                View
                            </a>

                            <form action="{{ route('admin.orders.cancel', $order->id) }}" method="POST">
                                @csrf
                                @method('PATCH')

                                <textarea name="cancel_reason" placeholder="Enter reason..." required></textarea>

                                <button type="submit"
                                    onclick="return confirm('Cancel this order?')"
                                    style="background:red; color:white;">
                                    Cancel Order
                                </button>
                            </form>
                        </div>
                        <div>

                        </div>
                    </td>


                </tr>
                @endforeach
            </tbody>
        </table>



    </div>


</body>

</html>