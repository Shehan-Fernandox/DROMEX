<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/home.css" class="css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Science+Gothic:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

</head>


<body class="body">
    @include('layouts.nav')

    <div class="carousel">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1600">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/services/duvili.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/services/colombo.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/services/kuragala.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden" style="background-color:black;">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
        </div>
    </div>

  


    <div class="container-fluid">
        <div class="welcome">
            <div class="welcome-content">
                <h1>Best place buy your drone</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore unde vel accusantium similique enim, pariatur, consectetur nesciunt itaque veritatis eveniet, ipsum soluta blanditiis facilis animi quisquam. Id numquam aliquid placeat.</p>
                <a href="{{ route('pages.shop') }}" class="shop-btn">Shop Now</a>
            </div>
        </div>
    </div>

    


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
        <div class="row">
            <div class="col-12 col-md-12" style="display: flex;justify-content: flex-end;">
                <a href="{{ route('pages.air_serious') }}" class="btn" style="color:#ff0051ff;font-size: 20px;">view all</a>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row p-0">


            @foreach ($air as $product)
            <div class="col-12 col-md-3  mb-4" style="justify-items: center;">
                <div class="card" style="width: 18rem;">
                    
                    <div class="card-img">
                        <img src="{{ asset('upload_aircraft/'.$product->aircraft) }}" class="card-img-top img-fluid" alt="..." style="width:auto;height:300px;">
                    </div>
                    <div class="card-body" style="text-align: center;">
                        <h5 class="card-titles" style="text-transform: capitalize;">{{$product->product_name}}</h5>
                        <p class="price">LKR {{$product->product_price}}/=</p>
                        <a href="{{ route('pages.order', $product->id) }}" class="btn buy" style="background-color:#ff0051ff;text-align: center;color:#f5f5f5">Buy Now</a>
                        <a href="{{ route('pages.learn-more', $product->id) }}" class="learn-more" style="text-align: center;color:#ff0051ff;text-decoration: none;">

                            <p>learn more</p>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-2 col-md-4" style="align-content: center;">
                <div class="product-line"></div>
            </div>
            <div class="col-8 col-md-4">
                <h1 style="color: black; transition: color 0.5s ease, transform 0.3s ease;text-align: center;"
                    onmouseover="this.style.color='black'; this.style.transform='scale(1.1)';"
                    onmouseout="this.style.color='black'; this.style.transform='scale(1)';">
                    Mini Series Drones
                </h1>
            </div>

            <div class="col-2 col-md-4" style="align-content: center;">
                <div class="product-line"></div>
            </div>

        </div>
        <div class="row">
            <div class="col-12 col-md-12" style="display: flex;justify-content: flex-end;">
                <a href="{{ route('pages.mini_serious') }}" class="btn" style="color:#ff0051ff;font-size: 20px;">view all</a>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row p-0">


            @foreach ($mini as $product)
            <div class="col-12 col-md-3  mb-4" style="justify-items: center;">
                <div class="card" style="width: 18rem;">
                    <div class="card-img">
                        <img src="{{ asset('upload_aircraft/'.$product->aircraft) }}" class="card-img-top img-fluid" alt="..." style="width:auto;height:300px;">
                    </div>
                    <div class="card-body" style="text-align: center;">
                        <h5 class="card-titles" style="text-transform: capitalize;">{{$product->product_name}}</h5>
                        <p class="price">LKR {{$product->product_price}}/=</p>
                        <a href="{{ route('pages.order', $product->id) }}" class="btn buy" style="background-color:#ff0051ff;text-align: center;color:#f5f5f5">Buy Now</a>
                        <a href="{{ route('pages.learn-more', $product->id) }}" class="learn-more" style="text-align: center;color:#ff0051ff;text-decoration: none;">

                            <p>learn more</p>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>




    <div class="container mt-5">
        <div class="row">
            <div class="col-2 col-md-4" style="align-content: center;">
                <div class="product-line"></div>
            </div>
            <div class="col-8 col-md-4">
                <h1 style="color: black; transition: color 0.5s ease, transform 0.3s ease;text-align: center;"
                    onmouseover="this.style.color='black'; this.style.transform='scale(1.1)';"
                    onmouseout="this.style.color='black'; this.style.transform='scale(1)';">
                    FPV Drones
                </h1>
            </div>

            <div class="col-2 col-md-4" style="align-content: center;">
                <div class="product-line"></div>
            </div>

        </div>
        <div class="row">
            <div class="col-12 col-md-12" style="display: flex;justify-content: flex-end;">
                <a href="{{ route('pages.fpv') }}" class="btn" style="color:#ff0051ff;font-size: 20px;">view all</a>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row p-0">


            @foreach ($fpv as $product)
            <div class="col-12 col-md-3  mb-4" style="justify-items: center;">
                <div class="card" style="width: 18rem;">
                    <div class="card-img">
                        <img src="{{ asset('upload_aircraft/'.$product->aircraft) }}" class="card-img-top img-fluid" alt="..." style="width:auto;height:300px;">
                    </div>
                    <div class="card-body" style="text-align: center;">
                        <h5 class="card-titles" style="text-transform: capitalize;">{{$product->product_name}}</h5>
                        <p class="price">LKR {{$product->product_price}}/=</p>
                        <a href="{{ route('pages.order', $product->id) }}" class="btn buy" style="background-color:#ff0051ff;text-align: center;color:#f5f5f5">Buy Now</a>
                        <a href="{{ route('pages.learn-more', $product->id) }}" class="learn-more" style="text-align: center;color:#ff0051ff;text-decoration: none;">

                            <p>learn more</p>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>


    <!-- over flow -->
    <div class="container text-center my-5 p-5 bg-light shadow rounded-4">
        <h4 style="font-weight: bold;color:#ff0051ff">What are you looking for?</h4>
        <!-- Horizontal Scroll -->
        <div class="overflow-auto">
            <div class="d-flex flex-nowrap justify-content-start align-items-center gap-4">

                @foreach($allProducts as $product)

                <a href="{{ route('pages.learn-more', $product->id) }}" style="text-decoration: none;color:#ff0051ff;font-size: 20px;">
                    <div style="height: 200px;width: 200px;">
                        <img src="{{ asset('upload_aircraft/'.$product->aircraft) }}" class="img-fluid rounded" style="max-width:200px;" alt="">
                    </div>
                    <div>
                        <p>{{$product->product_name}}</p>
                    </div>

                </a>

                @endforeach

            </div>
        </div>
    </div>







    <div class="container mb-5">
        <div class="row" style="justify-content: center;">
            <div class="col-12 col-md-3 mb-3">
                <div class="help-support" style="display: flex; justify-content: center; align-items: center;flex-direction: column;">
                    <a href="" class="quick-actions">
                        <img src="{{ asset('images/icon/support.png') }}" style="height:70px" alt="">
                        <p>help & support</p>
                    </a>

                </div>
            </div>

            <div class="col-12 col-md-3 mb-3">
                <div class="help-support" style="display: flex; justify-content: center; align-items: center;flex-direction: column;">
                    <a href="" class="quick-actions">
                        <img src="{{ asset('images/icon/customer-service.png') }}" style="height:70px" alt="">
                        <p>learn more</p>
                    </a>

                </div>
            </div>

            <div class="col-12 col-md-3 mb-3">
                <div class="help-support" style="display: flex; justify-content: center; align-items: center;flex-direction: column;">
                    <a href="" class="quick-actions">
                        <img src="{{ asset('images/icon/chat.png') }}" style="height:60px" alt="">
                        <p>help</p>
                    </a>

                </div>
            </div>

            <div class="col-12 col-md-3 mb-3">
                <div class="help-support" style="display: flex; justify-content: center; align-items: center;flex-direction: column;">
                    <a href="{{ route('pages.contact') }}" class="quick-actions">
                        <img src="{{ asset('images/icon/phone.png') }}" style="height:70px" alt="">
                        <p>contact us</p>
                    </a>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    @include('layouts.footer')
</body>

</html>