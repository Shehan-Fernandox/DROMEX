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
            margin-top: 20px;
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

    @include('layouts.adminNav')

    <h4 class="product-title">products</h4>

    <div class="container-fluid mt-4">
        <div class="product-summey-content">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="product-summery-card">
                        <h5>Total Products {{$product_count}}</h5>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="product-summery-card">
                        <h5>Total Users 200</h5>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="product-summery-card">
                        <h5>Total appointments 10</h5>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="product-summery-card">
                        <h5>Total messages 10</h5>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- <div class="container-fluid">

        <div class="row mt-5">
            <div class="col-12 col-md-4 manage-product">
                <div class="product-card">
                    <h5>add product</h5>
                </div>
                <div class="product-card">
                    <h5>add product</h5>
                </div>
                <div class="product-card">
                    <h5>add product</h5>
                </div>
                <div class="product-card">
                    <h5>add product</h5>
                </div>
            </div>
            <div class="col-12 col-md-8">
                
            </div>
        </div>
    </div> -->
    <!-- add product -->
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="add-product">
                    <h4>Add new product</h4>
                    <p>Add a new drone to your product catalog by entering its specifications, pricing, features, and images.</p>
                    <!-- <a href="">add product</a> -->
                    @include('admin.addProducts.form')
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
                            <th scope="col" style="background-color: #C70039; height:70px; color:white; vertical-align: middle; width: 200px;">Action</th>
                        </tr>

                    </thead>

                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <th scope="row">
                                <img src="{{ asset('images/drones/mini 3 pro.png') }}" class="card-img-top"
                                    alt="..." style="width: 150px;height: 150px;">
                            </th>

                            <td>{{$product->product_name}}</td>
                            <td>{{$product->brand}}</td>
                            <td>LKR {{$product->product_price}} /=</td>

                            <td>
                                <div style="display: flex;justify-content: space-between;">
                                    <a href="{{route('addProducts.edit', $product->id)}}" class="btn btn-warning" data-bs-target="#exampleModal" style="width: fit-content;font-weight: bold;">update</a>
                                    <a href="" class="btn btn-danger" style="width: fit-content;font-weight: bold;">delete</a>
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