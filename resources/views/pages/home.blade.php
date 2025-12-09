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

</head>
<style>
    .featured {
        margin-top: 50px;
        background-color: #ddddddff;
        padding: 20px;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
        border-radius: 20px;
    }

    .view-all {
        justify-items: right;
        text-align: right;
        margin-bottom: 20px;
        padding: 0;
        font-family: 'Courier New', Courier, monospace;
        font-size: 20px;
        font-weight: bolder;

    }

    .line2 {
        height: 3px;
        background-color: black;
    }

    .circle {
        height: 100px;
        width: 100px;
        border: 2px solid black;
        border-radius: 10px;

        display: flex;
        /* enable flexbox */
        align-items: center;
        /* vertically center text */
        justify-content: center;
        /* horizontally center text */
        text-align: center;
        /* center text for multiple lines */

        font-weight: bold;
        font-size: 18px;
        color: #FF9B00;
        /* your brand color */


    }

    /* about dromex */
    .about {
        /* background-color: #ddddddff;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
        border-radius: 20px;
        padding: 80px; */
        margin-top: 50px;

    }

    h3 {
        color: black;
        font-weight: bolder;
        text-transform: uppercase;
    }

    .help-support {
        margin-top: 50px;
        background-color: #ddddddff;
        padding: 20px;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
        border-radius: 20px;
        height: 200px;
    }

    .help-support:hover {
        transform: scale(1.1);
        /* animation */
        transition: transform 0.3s ease;
        background-color: #FF9B00;
    }


    /* ========================product card============================= */
    .card {
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.633);
        border-radius: 20px;
        overflow: hidden;
        text-align: center;
        transition: transform 0.3s ease, background 0.3s ease;
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
        margin-top: 120px;
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

    .buy {
        background-color: #ff0051ff;
        color: #f5f5f5;
        font-weight: bolder;
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
    }

    .welcome {
        height: 50vh;
        width: 100%;
        background-image: url('./images/backgrounds/drone.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        margin-top: 10px;
        display: flex;
        justify-content: center;
        background-position: center;

    }

    .welcome-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 90%;
        align-items: center;
    }

    .welcome .welcome-content h1 {
        color: #ff0051ff;
        text-transform: capitalize;
        text-align: center;
        font-family: "Science Gothic", sans-serif;
        font-size: 40px;

    }

    .welcome .welcome-content p {

        text-align: center;
        color: #f5f5f5;
    }

    .welcome .welcome-content .shop-btn {
        text-decoration: none;
        text-align: center;
        padding: 10px;
        color: #f5f5f5;
        border-radius: 30px;
        border: 3px solid #ff0051ff;
        font-weight: bolder;
        font-size: 20px;
        width: 200px;
    }

    .welcome .welcome-content .shop-btn:hover {
        background-color: #ff0051ff;
        color: #000;
        transform: scale(1.0.5);
        transition: ease 0.3s;
    }

</style>

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


    <div class="container text-center  mt-5">


        <div class="row justify-content-center">
            <div class="container text-center" style="padding-bottom: 50px;">
                <div class="row ">
                    <div class="col" style="align-content:center;">
                        <div class="line-1"></div>
                    </div>
                    <div class="col featured-product">
                        Mini Serious Drones
                    </div>
                    <div class="col" style="align-content:center;">
                        <div class="line-1"></div>
                    </div>
                </div>
            </div>
            <div class="row p-0 container-fluid">
                <div class="col view-all p-0">
                    <a href="{{ route('pages.shop') }}" class="btn view-all">
                        <p class="view-all" style="color: #ff0051ff;">View All</p>
                    </a>
                </div>
            </div>

            <div class="row p-0">
                <div class="col-12 col-md-3  mb-4" style="justify-items: center;">
                    <div class="card" style="width: 18rem;">
                        <div class="card-img">
                            <img src="{{ asset('images/drones/mini 3 pro.png') }}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body" style="text-align: center;">
                            <h5 class="card-titles">Mini 3 Pro</h5>
                            <p class="price">LKR 250 000/=</p>

                            <a href="#" class="btn buy" style="background-color:#ff0051ff;text-align: center;color:#f5f5f5">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3  mb-4" style="justify-items: center;">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('images/drones/mini 3 pro.png') }}" class="card-img-top" alt="...">
                        <div class="card-body" style="text-align: center;">
                            <h5 class=" card-titles">Mini 3 Pro</h5>
                            <p class="price">LKR 250 000/=</p>
                            <a href="#" class="btn buy" style="background-color:#ff0051ff;text-align: center;color:#f5f5f5">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3  mb-4" style="justify-items: center;">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('images/drones/mini 3 pro.png') }}" class="card-img-top" alt="...">
                        <div class="card-body" style="text-align: center;">
                            <h5 class="card-titles">Mini 3 Pro</h5>
                            <p class="price">LKR 250 000/=</p>
                            <a href="#" class="btn buy" style="background-color:#ff0051ff;text-align: center;color:#f5f5f5">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3  mb-4" style="justify-items: center;">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('images/drones/mini 3 pro.png') }}" class="card-img-top" alt="...">
                        <div class="card-body" style="text-align: center;">
                            <h5 class="card-titles">Mini 3 Pro</h5>
                            <p class="price">LKR 250 000/=</p>
                            <a href="#" class="btn buy" style="background-color:#ff0051ff;text-align: center;color:#f5f5f5">Buy Now</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center" style="padding-bottom: 80px;">
                <div class="row ">
                    <div class="col" style="align-content:center;">
                        <div class="line-1"></div>
                    </div>
                    <div class="col ">
                        → High-end models for cinematography, mapping, or inspection.
                    </div>
                    <div class="col" style="align-content:center;">
                        <div class="line-1"></div>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <div class="container text-center ">
        <div class="row justify-content-center">
            <div class="container text-center" style="padding-bottom: 50px;">
                <div class="row ">
                    <div class="col" style="align-content:center;">
                        <div class="line-1"></div>
                    </div>
                    <div class="col featured-product">
                        Mini Serious Drones
                    </div>
                    <div class="col" style="align-content:center;">
                        <div class="line-1"></div>
                    </div>
                </div>
            </div>
            <div class="row p-0 container-fluid">
                <div class="col view-all p-0">
                    <a href="{{ route('pages.shop') }}" class="btn view-all">
                        <p class="view-all" style="color: #ff0051ff;">View All</p>
                    </a>
                </div>
            </div>
            <div class="row p-0">
                <div class="col-12 col-md-3  mb-4" style="justify-items: center;">
                    <div class="card" style="width: 18rem;">
                        <div class="card-img">
                            <img src="{{ asset('images/drones/mini 3 pro.png') }}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body" style="text-align: center;">
                            <h5 class="card-titles">Mini 3 Pro</h5>
                            <p class="price">LKR 250 000/=</p>

                            <a href="#" class="btn buy" style="background-color:#ff0051ff;text-align: center;color:#f5f5f5">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3  mb-4" style="justify-items: center;">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('images/drones/mini 3 pro.png') }}" class="card-img-top" alt="...">
                        <div class="card-body" style="text-align: center;">
                            <h5 class=" card-titles">Mini 3 Pro</h5>
                            <p class="price">LKR 250 000/=</p>
                            <a href="#" class="btn buy" style="background-color:#ff0051ff;text-align: center;color:#f5f5f5">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3  mb-4" style="justify-items: center;">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('images/drones/mini 3 pro.png') }}" class="card-img-top" alt="...">
                        <div class="card-body" style="text-align: center;">
                            <h5 class="card-titles">Mini 3 Pro</h5>
                            <p class="price">LKR 250 000/=</p>
                            <a href="#" class="btn buy" style="background-color:#ff0051ff;text-align: center;color:#f5f5f5">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3  mb-4" style="justify-items: center;">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('images/drones/mini 3 pro.png') }}" class="card-img-top" alt="...">
                        <div class="card-body" style="text-align: center;">
                            <h5 class="card-titles">Mini 3 Pro</h5>
                            <p class="price">LKR 250 000/=</p>
                            <a href="#" class="btn buy" style="background-color:#ff0051ff;text-align: center;color:#f5f5f5">Buy Now</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center" style="padding-bottom: 80px;">
                <div class="row ">
                    <div class="col" style="align-content:center;">
                        <div class="line-1"></div>
                    </div>
                    <div class="col ">
                        → High-end models for cinematography, mapping, or inspection.
                    </div>
                    <div class="col" style="align-content:center;">
                        <div class="line-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="container text-center" style="padding-bottom: 50px;">
                <div class="row ">
                    <div class="col" style="align-content:center;">
                        <div class="line-1"></div>
                    </div>
                    <div class="col featured-product">
                        FPV Drones
                    </div>
                    <div class="col" style="align-content:center;">
                        <div class="line-1"></div>
                    </div>
                </div>
            </div>
            <div class="row p-0 container-fluid">
                <div class="col view-all p-0">
                    <a href="{{ route('pages.shop') }}" class="btn view-all">
                        <p class="view-all" style="color: #ff0051ff;">View All</p>
                    </a>
                </div>
            </div>
            <div class="row p-0">
                <div class="col-12 col-md-3  mb-4" style="justify-items: center;">
                    <div class="card" style="width: 18rem;">
                        <div class="card-img">
                            <img src="{{ asset('images/drones/mini 3 pro.png') }}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body" style="text-align: center;">
                            <h5 class="card-titles">Mini 3 Pro</h5>
                            <p class="price">LKR 250 000/=</p>

                            <a href="#" class="btn buy" style="background-color:#ff0051ff;text-align: center;color:#f5f5f5">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3  mb-4" style="justify-items: center;">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('images/drones/mini 3 pro.png') }}" class="card-img-top" alt="...">
                        <div class="card-body" style="text-align: center;">
                            <h5 class=" card-titles">Mini 3 Pro</h5>
                            <p class="price">LKR 250 000/=</p>
                            <a href="#" class="btn buy" style="background-color:#ff0051ff;text-align: center;color:#f5f5f5">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3  mb-4" style="justify-items: center;">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('images/drones/mini 3 pro.png') }}" class="card-img-top" alt="...">
                        <div class="card-body" style="text-align: center;">
                            <h5 class="card-titles">Mini 3 Pro</h5>
                            <p class="price">LKR 250 000/=</p>
                            <a href="#" class="btn buy" style="background-color:#ff0051ff;text-align: center;color:#f5f5f5">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3  mb-4" style="justify-items: center;">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('images/drones/mini 3 pro.png') }}" class="card-img-top" alt="...">
                        <div class="card-body" style="text-align: center;">
                            <h5 class="card-titles">Mini 3 Pro</h5>
                            <p class="price">LKR 250 000/=</p>
                            <a href="#" class="btn buy" style="background-color:#ff0051ff;text-align: center;color:#f5f5f5">Buy Now</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center" style="padding-bottom: 80px;">
                <div class="row ">
                    <div class="col" style="align-content:center;">
                        <div class="line-1"></div>
                    </div>
                    <div class="col ">
                        → High-end models for cinematography, mapping, or inspection.
                    </div>
                    <div class="col" style="align-content:center;">
                        <div class="line-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- over flow -->
    <div class="container text-center my-5 p-5 bg-light shadow rounded-4">
        <!-- Horizontal Scroll -->
        <div class="overflow-auto">
            <div class="d-flex flex-nowrap justify-content-start align-items-center gap-4">

                <a href="" style="text-decoration: none;color:#ff0051ff;font-size: 20px;">
                    <div style="height: 200px;width: 200px;">
                        <img src="{{ asset('images/panthom.png') }}" class="img-fluid rounded" style="max-width:200px;" alt="">
                    </div>
                    <div>
                        <p>panthom</p>
                    </div>

                </a>

                <a href="">
                    <div style="height: 200px;width: 200px;">
                        <img src="{{ asset('images/drones/mini 2.png') }}" class="img-fluid rounded" style="max-width:200px;" alt="">
                    </div>
                    <div>
                        <p>mini 2</p>
                    </div>
                </a>

                <a href="">
                    <div style="height: 200px;width: 200px;">
                        <img src="{{ asset('images/drones/mini 3.png') }}" class="img-fluid rounded" style="max-width:200px;" alt="">

                    </div>
                    <div>
                        <p>mini 3</p>
                    </div>
                </a>

                <a href="">
                    <div style="height: 200px;width: 200px;">
                        <img src="{{ asset('images/drones/mini 3 pro.png') }}" class="img-fluid rounded" style="max-width:200px;" alt="">
                    </div>
                    <div>
                        <p>mini 3 pro</p>
                    </div>
                </a>

                <a href="">
                    <div style="height: 200px;width: 200px;">
                        <img src="{{ asset('images/drones/mini 4 pro.png') }}" class="img-fluid rounded" style="max-width:200px;" alt="">
                    </div>
                    <div>
                        <p>mini 4 pro</p>
                    </div>
                </a>
                <a href="">
                    <div style="height: 200px;width: 200px;">
                        <img src="{{ asset('images/drones/air 3.png') }}" class="img-fluid rounded" style="max-width:200px;" alt="">
                    </div>
                </a>
                <a href="">
                    <div style="height: 200px;width: 200px;">
                        <img src="{{ asset('images/drones/neo.png') }}" class="img-fluid rounded" style="max-width:200px;" alt="">
                    </div>
                    <div>
                        <p>Neo</p>
                    </div>
                </a>
                <a href="">
                    <div style="height: 200px;width: 200px;">
                        <img src="{{ asset('images/drones/avata.png') }}" class="img-fluid rounded" style="max-width:200px;" alt="">
                    </div>
                    <div>
                        <p>Avata</p>
                    </div>
                </a>
                <a href="">
                    <div style="height: 200px;width: 200px;">
                        <img src="{{ asset('images/drones/flip.png') }}" class="img-fluid rounded" style="max-width:200px;" alt="">
                    </div>
                    <div>
                        <p>Flip</p>
                    </div>
                </a>
                <a href="">
                    <div style="height: 200px;width: 200px;">
                        <img src="{{ asset('images/drones/mavic 4 pro.png') }}" class="img-fluid rounded" style="max-width:200px;" alt="">
                    </div>
                    <div>
                        <p>Mavic 4 pro</p>
                    </div>
                </a>

            </div>
        </div>
    </div>

    <!-- brands -->



    <!--  -->
    <div class="container my-4">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000" style="margin-top: 50px;">
            <div class="carousel-inner">
                @foreach($carousel as $post)
                <div class="carousel-item active">
                    <img src="{{ asset('storage/' . $post->carousel_image) }}" class="d-block w-100 img-fluid rounded-4" alt="Drone Image 1">


                </div>
                @endforeach
                <!-- <div class="carousel-item">
                    <img src="{{ asset('images/carousel/post 3.jpg') }}" class="d-block w-100 img-fluid rounded-4" alt="Drone Image 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/carousel/post 4.jpg') }}" class="d-block w-100 img-fluid rounded-4" alt="Drone Image 3">
                </div> -->
            </div>

            <!-- Optional controls -->
            <!-- 
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> 
        -->
        </div>
    </div>




    <div class="container">
        <div class="row" style="justify-content: center;">
            <div class="col-12 col-md-3 mb-3">
                <div class="help-support" style="display: flex; justify-content: center; align-items: center;">
                    <a href="">
                        <img src="{{ asset('images/icon/support.png') }}" style="height:70px" alt="">
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-3 mb-3">
                <div class="help-support" style="display: flex; justify-content: center; align-items: center;">
                    <a href="">
                        <img src="{{ asset('images/icon/customer-service.png') }}" style="height:70px" alt="">
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-3 mb-3">
                <div class="help-support" style="display: flex; justify-content: center; align-items: center;">
                    <a href="">
                        <img src="{{ asset('images/icon/chat.png') }}" style="height:60px" alt="">
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-3 mb-3">
                <div class="help-support" style="display: flex; justify-content: center; align-items: center;">
                    <a href="">
                        <img src="{{ asset('images/icon/phone.png') }}" style="height:70px" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    @include('layouts.footer')
</body>

</html>