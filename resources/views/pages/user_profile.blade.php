<!DOCTYPE html>
<html>

<head>
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Science+Gothic:wght@100..900&display=swap" rel="stylesheet">




    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>

<body class="body">

    @include('layouts.nav')

    <div class="profile-hero">
        <h2>welcome {{ $user->name }}</h2>
    </div>
    <div class="container mt-5">



        @auth

        <!-- Display Profile Picture -->
        @if($user->user_profile)
        <img src="{{ asset('user_profiles/' . $user->user_profile) }}"
            alt="Profile Picture"
            class="mb-3 profile-picture">
        @else
        <img src="{{ asset('images/avatar/avater.jpg') }}"
            alt="Default Profile Picture"
            class=" mb-3 profile-picture">
        @endif
    </div>
    <div class="container details-section">


    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-4 mb-5">
                <div class="user-info">
                    <h2>your info</h2>

                    <p>Name: {{ $user->name }}</p>
                    <p>Email: {{ $user->email }}</p>
                    <p>Account Created: {{ $user->created_at->format('d M Y') }}</p>
                    @endauth

                    @guest
                    <p>Please log in to see your profile.</p>
                    <a href="{{ route('login') }}">back to login</a>
                    @endguest
                </div>
            </div>
            <div class="col-12 col-md-8">

                <div class="user-billing">
                    <!-- <h4>Your Order Status</h4> -->
                    <div class="tiles">
                        <p>placed orders</p>
                        <p>{{ sprintf('%02d', $placedOrders) }}</p>
                    </div>
                    <div class="tiles">
                        <p>pending</p>
                        <p>{{ sprintf('%02d', $pendingOrders) }}</p>
                    </div>
                    <div class="tiles">
                        <p>shipped</p>
                        <p>{{ sprintf('%02d', $shippedOrders) }}</p>
                    </div>
                    <div class="tiles">
                        <p>delivered</p>
                        <p>{{ sprintf('%02d', $deliveredOrders) }}</p>
                    </div>



                </div>
            </div>
        </div>
    </div>

    <!-- tracking orders -->

    <div class="container-fluid" style="margin-top: 80px;">
        <div class="row text-center align-items-center">

            <div class="col-4">
                <div class="order-line"></div>
            </div>

            <div class="col-4">
                <h5 class="order-text">My Orders</h5>
            </div>

            <div class="col-4">
                <div class="order-line"></div>
            </div>

        </div>
    </div>




    <div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive d-none d-md-block">
                <table class="table table-striped align-middle">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Aircraft</th>
                            <th>Total Price</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td>#{{ $order->id }}</td>
                            <td>
                                <img src="{{ asset('upload_aircraft/'.$order->aircraft) }}" 
                                     alt="" class="img-fluid" style="max-width: 100px;">
                            </td>
                            <td>{{ $order->product_price }}</td>
                            <td>{{ $order->status }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <a href="{{ route('orders.show', ['order' => $order->id]) }}" class="btn btn-warning btn-sm">View</a>
                                    <form action="" method="POST" onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Cancel</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Mobile Card View -->
            <div class="d-block d-md-none">
                @foreach($orders as $order)
                <div class="mobile-card mb-3 p-3 border rounded">
                    <p><strong>Order ID:</strong> #{{ $order->id }}</p>
                    <p><strong>Aircraft:</strong> <img src="{{ asset('upload_aircraft/'.$order->aircraft) }}" 
                        alt="" class="img-fluid" style="max-width: 100px;"></p>
                    <p><strong>Total Price:</strong> {{ $order->product_price }}</p>
                    <p><strong>Status:</strong> {{ $order->status }}</p>
                    <p><strong>Date:</strong> {{ $order->created_at }}</p>
                    <div class="d-flex justify-content-between mt-2">
                        <a href="{{ route('orders.show', ['order' => $order->id]) }}" class="btn btn-warning btn-sm">View</a>
                        <form action="" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Cancel</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


    @include('layouts.footer')
</body>

</html>