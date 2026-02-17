<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Science+Gothic:wght@100..900&display=swap" rel="stylesheet">
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

        .manage-product {
            margin-top: 100px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 20px;
            height: 300px;


        }

        .product-card {
            width: auto;
            height: 150px;
            background-color: #C70039;
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .product-card:hover {
            width: auto;
            height: 150px;
            background-color: #ff5b89ff;
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            transform: scale(1.1);
            transition: ease 0.3s;
        }

        .product-card h5 {
            color: #FF8400;
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

        .add-product {
            /* background-image: url('./images/services/duvili.jpg'); */
            /* background-color: #000000; */
            background: linear-gradient(to right, #642B73, #C6426E);
            width: auto;
            height: 300px;
            object-fit: cover;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;

        }

        .add-product h4 {
            font-family: "Science Gothic", sans-serif;
            color: #FF8400;
        }

        .add-product p {
            color: #ffffffff;
        }

        .add-product a {
            text-decoration: none;
            width: 200px;
            padding: 10px;
            color: white;
            text-align: center;
            border: 2px solid #C70039;
            border-radius: 30px;
            text-transform: capitalize;
        }

        .add-product a:hover {
            background-color: #C70039;
            transition: width 2s;
            transition: ease 0.3s;
        }

        label {
            font-family: 'Poppins';
        }

        .heads {
            background-color: #C70039;
            width: 250px;
        }
    </style>
</head>

<body>

    <head>
        @include('layouts.adminNav') 
    </head>



    <h4 class="product-title" style="margin-top: 150px;">products</h4>

    <div class="container-fluid mt-4">
        <div class="product-summey-content">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="product-summery-card">
                        <h5>Total Aircrafts {{$product_count}}</h5>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="product-summery-card">
                        <h5>Mini Serieous Aircrafts {{$total_mini_serious}}</h5>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="product-summery-card">
                        <h5>Mavic Aircrafts {{$total_air_serious}}</h5>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="product-summery-card">
                        <h5>FPV Aircrafts {{$total_fpv}}</h5>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- add product -->
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="add-product">
                    <h4>Add new product</h4>
                    <p>Add a new drone to your product catalog by entering its specifications, pricing, features, and images.</p>
                    <a href="{{route('products.create')}}">add product</a>

                </div>
                <!-- <img src="{{asset('images/admin/addProduct.png')}}" alt="" style="width: fit-content;object-fit: cover;"> -->
            </div>
        </div>
    </div>
    <!--  -->

    <div class="container-fluid">
        <div class="row product-section mt-5">
            <div class="col-2 col-md-5">
                <div class="product-line"></div>
            </div>
            <div class="col-2 col-md-2">
                <div>
                    <h5>all aircrafts</h5>
                </div>
            </div>
            <div class="col-2 col-md-5">
                <div class="product-line"></div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-md-12">
                <table class="table table-striped" style="vertical-align: middle;">
                    <thead>
                        <tr>
                            <th scope="col" style="background-color: #C70039; height:70px; color:white; vertical-align: middle;">Aircraft</th>
                            <th scope="col" style="background-color: #C70039; height:70px; color:white; vertical-align: middle;">Aircraft Name</th>
                            <th scope="col" style="background-color: #C70039; height:70px; color:white; vertical-align: middle;">Aircraft Brand</th>
                            <th scope="col" style="background-color: #C70039; height:70px; color:white; vertical-align: middle;">Aircraft Price</th>
                            <th scope="col" style="background-color: #C70039; height:70px; color:white; vertical-align: middle; width: 250px;">Action</th>
                        </tr>

                    </thead>

                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td><img src="{{ asset('upload_aircraft/'.$product->aircraft) }}" alt="" class="img-fluid" style="width: 200px;height: auto;"></td>
                            <td>{{$product->product_name}}</td>
                            <td>{{$product->brand}}</td>
                            <td>LKR {{$product->product_price}} /=</td>

                            <td>
                                <div style="display: flex;justify-content: space-between;">
                                    <a href="{{route('products.edit', $product->id)}}" class="btn btn-warning" data-bs-target="#exampleModal" style="width: fit-content;font-weight: bold;">update</a>
                                    <!-- <a href="" class="btn btn-success" style="width: fit-content;font-weight: bold;">view</a> -->
                                    <form action="{{ route('products.destroy', ['product' => $product->id])}}" method="POST" onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
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


</body>

</html>