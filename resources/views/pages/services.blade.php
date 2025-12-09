<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Science+Gothic:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateX(200px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .about-description p {
            opacity: 0;
            animation: fadeInUp 1s ease forwards;
        }

        /* delay for each paragraph */
        .about-description p:nth-of-type(1) {
            animation-delay: 0.3s;
        }

        .about-description p:nth-of-type(2) {
            animation-delay: 0.6s;
        }

        .product-line {
            background-color: #ff0051ff;
            height: 3px;
        }

        .services {
            background-color: #fafafaff;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.633);
            border-radius: 20px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* body,
        html {
            overflow-x: hidden;
        } */



        .ctn {
            padding: 8px 15px;
            background: #fc036b;
            border-radius: 30px;
            color: whitesmoke;
        }



        /* events */
        section {
            width: 80%;
            margin: 80px auto;
        }

        .title {
            text-align: center;
            font-size: 4vmin;
            color: #6664b4ff;
        }

        .row {
            display: flex;
            align-items: center;
            width: 100%;
            justify-content: space-between;
        }

        .row .col {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .events .row {
            margin-top: 50px;
        }

        h4 {
            font-size: 3vmin;
            color: #6664b4ff;
            margin: 20px auto;
        }

        p {
            color: #b0aee6ff;
            padding: 0px 40px;
        }

        .events .ctn {
            margin-top: 30px;
        }

        .row .col img {
            width: 80%;
        }

        /* explore */
        .explore {
            width: 100%;
            height: 100vh;
            background-image: url('./images/img/bg2.png');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
        }

        .explore-content {
            width: 60%;
            padding: 50px;
            color: whitesmoke;
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .explore-content h1 {
            font-size: 7vmin;
            margin: 50px;
            text-transform: capitalize;
        }

        .explore-content p {
            color: white;
        }

        .explore-content .ctn {
            margin-top: 40px;
        }

        .explore-content .line {
            margin-bottom: 50px;
        }

        /* tours */
        /* Tours Section */

        .tours {
            padding: 80px 0;
            width: 80%;
            margin: auto;
        }

        /* Row */
        .tours .row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 30px;
        }

        /* Columns */
        .tours .row .col {
            width: 50%;
        }

        /* Image Gallery */
        .tours .image-gallery {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            justify-items: center;
        }

        .image-gallery img {
            width: 100%;
            max-width: 250px;
            border-radius: 10px;
            align-items: center;
        }

        .image-gallery img:hover {
            transform: scale(1.1);
            transition: 0.3s ease;
        }

        /* overflow */
        .recent-events-left {
            /* background: linear-gradient(to top,#edededff,#ff0051ff); */
            background-color: #3d3d3dff;
            height: 500px;
            width: auto;
            margin-top: 50px;
            border-radius: 100px 0px 100px 0px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            border: 3px solid #ff0051ff;

        }

        .recent-events-left h1 {
            color: whitesmoke;
            text-transform: capitalize;
            font-family: "Science Gothic", sans-serif;
            color: #ffa621ff;
            text-align: center;
        }

        .recent-events-left p {
            color: #ffca79ff;
            text-align: center;
            padding: 20px;
            text-transform: capitalize;
        }

        .recent-events-left line {
            width: auto;
            height: 3px;
            background-color: #fc036b;
        }

        .overflow {
            width: fit-content;
            height: 500px;
            margin-top: 50px;
            padding: 30px;
            background-color: #edededff;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.633);
            border-radius: 20px;
        }

        .recent-events {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 500;
            background-color: #edededff;
        }

        .overflow .recent-events p {
            font-size: 24px;
            text-transform: capitalize;
            color: #242424ff;
            text-align: center;
        }

        .overflow .recent-events .product-line {
            margin-top: -10px;
            margin-bottom: 10px;
            width: 60%;
        }

        /* done works */

        .done-works {
            display: flex;
            justify-content: center;
            flex-direction: column;
            margin-top: 70px;
            align-items: center;
        }

        .done-works h4 {
            text-align: center;
            text-transform: uppercase;
            font-family: "Science Gothic", sans-serif;
            margin-bottom: 40px;
            color: whitesmoke;
            font-weight: bolder;
        }

        .gallery-content {
            gap: 50px;
        }

        .gallery-card {
            gap: 20px;
            width: auto;
            height: 300px;
            background-image: url('./images/services/duvili.jpg');
            border-radius: 90px 0px 90px 0px;
        }

        .gallery-card img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            border-radius: 90px 0px 90px 0px;
        }

        .gallery-btn{
            width: fit-content;
            height: 100%;
            text-decoration: none;
            padding: 10px;
            background-color: #ff0051ff;
            color: whitesmoke;
            justify-items: center;
            align-content: center;
            border-radius: 30px;
        }
        .typing{
            display: inline-block;
            margin: 20%;
        }
        .text{
            overflow: hidden;
            font-size: 3.6rem;
            font-weight: 700;
            border-right: 5px solid #fc036b;
            white-space: nowrap;
            animation: typing 4s steps(40, end) infinite;
            color: #fc036b;
        }
        @keyframes typing {
            from {
                width: 0;
            }
            to{
                width: 100%;
            }
        }
    </style>
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Illo iure placeat assumenda quidem deleniti quod, cumque
                        id veritatis iusto animi est modi reprehenderit quibusdam
                        molestias delectus laboriosam eaque! Aperiam, tempore?
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


    

    <!-- <div class="typing">
        <p class="text">
            I am a software engineer
        </p>
    </div> -->

</body>

</html>