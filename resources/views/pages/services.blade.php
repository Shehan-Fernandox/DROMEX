<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DROMEX-SERVICES</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Science+Gothic:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

      <link rel="stylesheet" href="{{ asset('css/services.css') }}">

</head>

<body>
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

    <div class="container p-0">
        <div class="row">
            <div class="col-2 col-md-4" style="align-content: center;">
                <div class="product-line"></div>
            </div>
            <div class="col-8 col-md-4">
                <h1 style="color: black; transition: color 0.5s ease, transform 0.3s ease;text-align: center;"
                    onmouseover="this.style.color='black'; this.style.transform='scale(1.1)';"
                    onmouseout="this.style.color='black'; this.style.transform='scale(1)';">
                    Welcome to Our Services
                </h1>
            </div>

            <div class="col-2 col-md-4" style="align-content: center;">
                <div class="product-line"></div>
            </div>

        </div>
    </div>




    <div class="container mt-5 services p-0">
        <div class="row p-0" style="text-align: justify;">
            <div class="col-12 col-md-6" style="align-content: center;justify-items:center;">
                <div><img src="{{ asset('images/services/question.png') }}" alt="" class="img-fluid" style="height: 250px;width:250px;"></div>
            </div>
            <div class="col-12 col-md-6 p-0">

                <h1><strong style="font-size: 60px;">W</strong>hat we do<strong>?</strong></h1>

                <div class="row p-0 me-0 ms-1">
                    <div class="col-12 col-md-12 p-0" style="font-weight: bolder;font-size:60px;">
                        <img src="{{asset('images/services/comma.png')}}" style="width: 50px;height:50px;" alt="">
                    </div>
                </div>

                <div class="container">
                    <p>
                        At Dromex, we make drone shopping easy and convenient for our customers.
                        You can order drones anytime with our 24/7 online ordering service.
                        We provide fast and reliable island-wide delivery, ensuring your drone
                        reaches you within three days. Our goal is to give customers a smooth,
                        secure, and hassle-free shopping experience from order to delivery.
                    </p>
                </div>
                <div class="row p-0 me-0 ms-1" width="100%">
                    <div class="col-12 col-md-12 p-0" style="font-weight: bolder;font-size:60px;">
                        <img src="{{asset('images/services/comma99.png')}}" style="width: 50px;height:50px;margin-top:-100px;" alt="">
                    </div>
                </div>



            </div>
        </div>
    </div>

    <div class="container mb-5" style="display: flex;justify-content: center;align-items: center;">
        <div class="row p-0">
            <div class="col-12 col-md-6 p-0">
                <div class="recent-events-left">
                    <h1>coming up next events</h1>
                    <p>Explore what’s coming up next as we prepare a series of exciting
                        events designed to inspire, engage, and connect our community.
                        Stay tuned for updates, announcements, and opportunities to participate
                        in activities that bring people together and create memorable experiences.</p>
                    <!-- <img src="{{ asset('images/icon/right.png') }}" alt="..." style="width: 100px;height:100px;"> -->
                </div>
            </div>
            <div class="col-12 col-md-6 p-0" style="display: flex;justify-content: flex-end;">
                <div class="overflow-y-scroll overflow">
                    <div class="recent-events">
                        <strong>
                            <p>recent events</p>
                        </strong>
                        <div class="product-line"></div>
                    </div>

                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('images/services/duvili.jpg') }}" class="img-fluid rounded-start" alt="..." style="object-fit: cover;height: 100%;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('images/services/duvili.jpg') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('images/services/duvili.jpg') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('images/services/duvili.jpg') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('images/services/duvili.jpg') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h1 class="why-we-are"><strong>w</strong>hy we are special...?</h1>
    <div class="service-card-section">
        
        <div class="row">
                <div class="col-12 col-md-3 service-card-area">
                    <div class="service-card">
                        <img src="{{ asset('images/icon/shipping-fast.png') }}" style="height:70px" alt="">
                        <p>island wide delivery</p>
                    </div>
                </div>
                <div class="col-12 col-md-3 service-card-area">
                    <div class="service-card">
                        <img src="{{ asset('images/icon/calendar-clock.png') }}" style="height:70px" alt="">
                        <p>fast delivery in 3 days</p>
                    </div>
                </div>
                <div class="col-12 col-md-3 service-card-area">
                    <div class="service-card">
                        <img src="{{ asset('images/icon/time-twenty-four.png') }}" style="height:70px" alt="">
                        <p>24/7 hours service</p>
                    </div>
                </div>
                <div class="col-12 col-md-3 service-card-area">
                    <div class="service-card">
                        <img src="{{ asset('images/icon/comment-dots.png') }}" style="height:70px" alt="">
                        <p>easily contact us</p>
                    </div>
                </div>
            </div>
    </div>
            
       
    </div>


    

 @include('layouts.footer')

</body>

</html>