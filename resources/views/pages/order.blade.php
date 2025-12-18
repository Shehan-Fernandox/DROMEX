<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" class="css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Science+Gothic:wght@100..900&display=swap" rel="stylesheet">



    <style>
        /* body {
            background: linear-gradient(to right, #313647, whitesmoke);
        } */

        .left {
            display: flex;
            flex-direction: column;
            justify-content: center;
            justify-items: center;

        }

        .left h3 {
            text-align: center;
            font-size: 80px;
            text-transform: uppercase;
            color: #FF9B00;
            /* color: whitesmoke; */
        }

        .left p {
            text-align: center;
            font-size: 40px;
            text-transform: capitalize;
            color: #FF9B00;
        }

        .left h5 {
            text-align: center;

            text-transform: capitalize;
        }

        .buttons {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-top: 30px;

        }



        .buttons .order {
            width: 200px;
            height: 50px;
            background-color: #ff0199ff;
            /* background-image: url('./images/icon/brush.png'); */
            border-radius: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .buttons .order .product-name {
            color: whitesmoke;
            text-transform: capitalize;
            font-size: 20px;
        }

        .buttons .learn-more {
            width: 200px;
            height: 50px;
            /* background-color: #000000ff; */
            border: 2px solid black;
            border-radius: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .buttons .learn-more:hover {
            color: whitesmoke;
            background-color: #1a1a1aff;
            border: 2px solid #ff0199ff;
            transition: ease 0.3s;
        }

        .buttons .learn-more .learn {
            text-transform: capitalize;
            font-size: 20px;
        }

        .buttons .learn-more a {
            text-decoration: none;
            color: #ff0199ff;
            font-weight: bold;
        }

        .buttons .learn-more a:hover {
            text-decoration: none;
            color: #efefefff;
            font-weight: bold;
        }



        .details {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 40px;
        }

        .details .details-card {
            width: 200px;
            height: 300px;
            /* background-color: #ff0199ff; */
            background-image: url('./images/admin/whatsppback.jpg');
            /* border-radius: 50% 50% 0 0; */
            /* border-radius: 50%; */
            border-radius: 30px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.633);
            object-fit: cover;

        }

        .right {
            display: flex;

            /* background-image: url('./images/admin/whatsppback.jpg'); */
            height: auto;
            justify-content: center;
            /* border-radius: 50% 0 0 50%;
            object-fit: cover; */
            align-items: center;

        }



        .order-form-title {
            text-transform: capitalize;
            text-align: center;
            margin-bottom: 50px;
        }

        .price {
            color: #37001aff;
        }

        .order-btn {
            background-color: #1a1a1aff;
            color: whitesmoke;
            width: 100%;
            font-weight: bolder;
            border-radius: 50px;
            height: 50px;
        }

        .order-btn:hover {
            background-color: #FF9B00;
            transition: ease 0.3s;
            color: #1a1a1aff;
            width: 100%;
            font-weight: bolder;
        }

        .carousel-item {
            text-align: center;
            transition: opacity 1s ease-in-out !important;
        }

        .carousel-item img {
            display: block;
            margin: auto;
            max-width: 100%;
            max-height: 500px;
            /* adjust if needed */
            object-fit: contain;
        }
    </style>
</head>

<body>

    @include('layouts.nav')

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-12 col-md-6 left">
                <h3>order your</h3>
                <p>favorite aircraft</p>
                <h5 class="price">total order : LKR {{$product->product_price}} /=</h5>
                <div class="buttons">
                    <div class="order">
                        <h6 class="product-name">{{$product->product_name}}</h6>
                    </div>
                    <div class="learn-more">
                        <a href="{{ route('addProducts.show', $product->id) }}">
                            <h6 class="learn">Learn More</h6>
                        </a>

                    </div>
                </div>
                <div class="details">
                    <!-- <div class="details-card"></div>
                    <div class="details-card"></div>
                    <div class="details-card"></div> -->

                    <div id="carouselExample" class="carousel slide carousel-fade">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('upload_aircraft/'.$product->aircraft) }}" alt="..." style="width: 300px;height:auto;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('upload_aircraft/'.$product->rc) }}" alt="..." style="width: 300px;height:auto;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('upload_aircraft/'.$product->aircraft_with_rc) }}" alt="..." style="width: 300px;height:auto;">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>
            </div>
            <div class="col-12 col-md-6 right">

                <form class="row g-3" method="POST" action="{{route('order.store')}}">
                    @csrf
                    

                    <input type="hidden" name="product_id" value="{{ $product->id }}">


                    <h1 class="order-form-title">order now</h1>
                    <p style="text-align: center;margin-top: -40px;margin-bottom: 40px;">Get your drone delivered fast—place your order today.</p>
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div class="col-md-6">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name">
                    </div>
                    <div class="col-md-6">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name">
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="col-12">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="Apartment, studio, or floor" name="address">
                    </div>
                    <div class="col-md-6">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Province</label>
                        <select id="inputState" class="form-select" name="province">
                            <option selected>Choose...</option>
                            <option>Central</option>
                            <option>Eastern</option>
                            <option>Northern</option>
                            <option>North Central</option>
                            <option>North Western</option>
                            <option>Sabaragamuwa</option>
                            <option>Southern</option>
                            <option>Uva</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="zip" name="zip">
                    </div>

                    <div class="col-12" style="display: flex;justify-content: center;">
                        <button type="submit" class="btn order-btn">Order Now</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>