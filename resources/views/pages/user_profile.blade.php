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

<body>

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
        <img src="{{ asset('default-avatar.png') }}"
            alt="Default Profile Picture"
            class=" mb-3 profile-picture">
        @endif
    </div>
    <div class="container details-section">
      

    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-4">
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
            <div class="col-12 col-md-12">
                <table class="table table-striped" style="vertical-align: middle;">
                    <thead>
                        <tr>
                            <th scope="col" style="background-color: #C70039; height:70px; color:white; vertical-align: middle;">Order ID</th>
                            <th scope="col" style="background-color: #C70039; height:70px; color:white; vertical-align: middle;">Aircraft</th>
                            <th scope="col" style="background-color: #C70039; height:70px; color:white; vertical-align: middle;">Total Price</th>
                            <th scope="col" style="background-color: #C70039; height:70px; color:white; vertical-align: middle;">Status</th>
                            <th scope="col" style="background-color: #C70039; height:70px; color:white; vertical-align: middle;">Date</th>
                            <th scope="col" style="background-color: #C70039; height:70px; color:white; vertical-align: middle; width: 250px;">Action</th>
                        </tr>

                    </thead>

                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td>#{{ $order->id }}</td>
                            <td><img src="{{ asset('upload_aircraft/'.$order->aircraft) }}" alt="" class="img-fluid" style="max-width: 100px; height: auto;"></td>
                            <td>{{ $order->product_price }}</td>
                            <td>{{ $order->status }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>
                                <div style="display:flex;justify-content:space-between;">
                                    <a href=""
                                        class="btn btn-warning" style="font-weight:bold;">
                                        View
                                    </a>

                                    <form action=""
                                        method="POST"
                                        onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Cancell</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>


    </div>


    <!-- @include('layouts.footer') -->
</body>

</html>