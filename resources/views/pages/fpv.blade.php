<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card {
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.633);
            border-radius: 20px;
            overflow: hidden;
            text-align: center;
            transition: transform 0.3s ease, background 0.3s ease;

        }

        .card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #ff0051ff;
            /* red color */
            clip-path: polygon(0 0, 60% 0, -60% 60%, 0% 0%);
        }

        .card:hover {
            transform: scale(1.1);
            /* animation */
            transition: transform 0.3s ease;
            background: linear-gradient(to top, #939393ff, #f5f5f5);
        }

        .card a {

            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: opacity 0.3s ease, transform 0.3s ease;
            width: 200px;
            position: absolute;
            margin-top: 50px;
        }

        .card .learn-more {

            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: opacity 0.3s ease, transform 0.3s ease;
            width: 200px;
            position: absolute;
            margin-top: 95px;
        }

        /* Show button when hovered */
        .card:hover a {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1.1);
        }

        .card .icon {

            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: opacity 0.3s ease, transform 0.3s ease;
            margin-top: -120px;

        }

        /* Show button when hovered */
        .card:hover .icon {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1.1);

        }

        .icon {
            height: 50px;
            width: 50px;
            border-radius: 50%;
            background: #ff0051ff;

        }



        .price {
            color: rgba(255, 44, 167, 1)ff;
            font-weight: bolder;
        }

        .product-line {
            background-color: #ff0051ff;
            height: 3px;
        }




        .card-titles {
            font-weight: bold;
            color: #ff0051ff;
            font-size: 25px;
        }
    </style>
</head>

<body>
    @include('layouts.nav')
    <div class="container mt-5">
        <div class="row">
            <div class="col-2 col-md-4" style="align-content: center;">
                <div class="product-line"></div>
            </div>
            <div class="col-8 col-md-4">
                <h1 style="color: black; transition: color 0.5s ease, transform 0.3s ease;text-align: center;"
                    onmouseover="this.style.color='black'; this.style.transform='scale(1.1)';"
                    onmouseout="this.style.color='black'; this.style.transform='scale(1)';">
                    Air Serious Drones
                </h1>
            </div>

            <div class="col-2 col-md-4" style="align-content: center;">
                <div class="product-line"></div>
            </div>

        </div>
    </div>

    <div class="container mt-5">
        <div class="row p-0">


            @foreach ($fpvAll as $product)
            <div class="col-12 col-md-3  mb-4" style="justify-items: center;">
                <div class="card" style="width: 18rem;">
                    <div class="card-img">
                        <img src="{{ asset('upload_aircraft/'.$product->aircraft) }}" class="card-img-top img-fluid" alt="..." style="width:auto;height:300px;">
                    </div>
                    <div class="card-body" style="text-align: center;">
                        <h5 class="card-titles" style="text-transform: capitalize;">{{$product->product_name}}</h5>
                        <p class="price">LKR {{$product->product_price}}/=</p>
                        <a href="{{ route('pages.order', $product->id) }}" class="btn buy" style="background-color:#ff0051ff;text-align: center;color:#f5f5f5">Buy Now</a>
                        <a href="{{ route('addProducts.show', $product->id) }}" class="learn-more" style="text-align: center;color:#ff0051ff;text-decoration: none;">

                            <p>learn more</p>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

</body>

</html>