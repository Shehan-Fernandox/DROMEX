<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        /* html,body{
            overflow-x: hidden;
        } */

        h1 {
            text-align: center;
            margin-top: 20px;
            text-transform: capitalize;
        }

        .about-description {
            margin-top: 20px;

        }

        .img {
            background-size: cover;
            width: 100%;
            height: 100%;
            padding: 0;
        }

        .about-section {
            margin-top: 50px;
            background-color: #f5f5f5;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.633);
            border-radius: 20px;
            margin: 0;
            padding: 50px;
        }


        .about-card {
            height: 130px;
            width: 130px;
            background-color: #f5f5f5;
            margin: 10px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.633);
            border-radius: 20px;
            padding: 0;

        }

        .about-card:hover {
            transform: scale(1.1);
            /* animation */
            transition: transform 0.3s ease;
            background-color: #FF9B00;
        }

        /* what we do wesction */
        .what-do-section {
            background-color: #f5f5f5;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.633);
            border-radius: 20px;
            margin: 0;
            padding: 0;
        }

        .what-do {
            margin-top: 50px;

            max-height: fit-content;
            max-width: fit-content;
        }


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

        .what-do p {
            opacity: 0;
            animation: fadeInUp 1s ease forwards;
        }

        /* delay for each paragraph */
        .what-do p:nth-of-type(1) {
            animation-delay: 0.3s;
        }

        .what-do p:nth-of-type(2) {
            animation-delay: 0.6s;
        }



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

        .what-do img {
            opacity: 0;
            animation: fadeInUp 1s ease forwards;
        }

        /* delay for each paragraph */
        .what-do img:nth-of-type(1) {
            animation-delay: 0.3s;
        }

        .what-do img:nth-of-type(2) {
            animation-delay: 0.6s;
        }

        /* team section */
        .team-section {
            background-color: #f5f5f5;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.633);
            border-radius: 20px;
            width: 800px;
            height: 300px;
        }

        .team-img {
            background-size: cover;
            width: 50%;
            height: 50%;
            padding: 0;
            align-content: flex-end;
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

    <div class="container">
        <div class="row">
            <div class="col-2 col-md-4" style="align-content: center;">
                <div class="line"></div>
            </div>
            <div class="col-8 col-md-4">
                <h1 style="color: black; transition: color 0.5s ease, transform 0.3s ease;"
                    onmouseover="this.style.color='black'; this.style.transform='scale(1.1)';"
                    onmouseout="this.style.color='black'; this.style.transform='scale(1)';">
                    welcome to our services
                </h1>
            </div>

            <div class="col-2 col-md-4" style="align-content: center;">
                <div class="line"></div>
            </div>

        </div>
    </div>

    <div class="container about-section">
        <div class="row" style="justify-items: center;">
            <div class="col-12 col-md-6 p-0">
                <div class="about p-0">
                    <img src="{{ asset('images/services/about-us.jpg')}}" alt="" class="img">
                </div>
            </div>

            <div class="col-12 col-md-6 p-0">
                <div class="p-0" style="margin-left: 10px;">
                    <div class="about-description">
                        <h1 style="text-align: left;"><strong style="font-size: 70px;">w</strong>ho we are ?</h1>
                    </div>
                    <div class="container-fluid">
                        <p style="text-align: justify;">
                        We are a passionate and skilled two-member dronegraphy team dedicated
                        to capturing stunning aerial visuals that bring your vision to life.
                        With years of hands-on experience and a deep understanding of drone technology,
                        we specialize in delivering high-quality, creative, and precise aerial footage tailored to
                        each client’s unique requirements.
                        At the heart of our work lies a commitment to innovation,
                        accuracy, and excellence. We combine advanced drone technology with a sharp artistic
                        eye to produce captivating results — whether it’s for events, real estate,
                        cinematic projects, or corporate promotions.
                    </p>
                    <br>
                    <p style="text-align: justify;">
                        We believe in working smart, understanding every detail of our client’s needs, and
                        transforming them into breathtaking aerial perspectives that tell powerful stories.
                        With professional expertise, creative insight, and smart technology,
                        we make every project an extraordinary visual experience.
                    </p>
                    </div>
                </div>

                <div class="row m-0 p-0" style="width: 100%;display: flex; justify-content: center; align-items: center; padding: 0; margin: 0;gap: 10px;">
                    <div class="col-12 col-md-3 about-card" style="display: flex; justify-content: center; align-items: center; padding: 0; margin: 0;">
                        <img src="{{ asset('images/icon/checked.png') }}" alt="" style="width:50px; height:50px;">
                    </div>
                    <div class="col-12 col-md-3 about-card" style="display: flex; justify-content: center; align-items: center; padding: 0; margin: 0;">
                        <img src="{{ asset('images/icon/quality.png') }}" alt="" style="width:70px; height:70px;">
                    </div>
                    <div class="col-12 col-md-3 about-card" style="display: flex; justify-content: center; align-items: center; padding: 0; margin: 0;">
                        <img src="{{ asset('images/icon/drone.png') }}" alt="" style="width:70px; height:70px;">
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-2 col-md-4" style="align-content: center;">
                <div class="line"></div>
            </div>
            <div class="col-8 col-md-4 ">
                <h1 style="color: black; transition: color 0.5s ease, transform 0.3s ease;"
                    onmouseover="this.style.color='black'; this.style.transform='scale(1.1)';"
                    onmouseout="this.style.color='black'; this.style.transform='scale(1)';">
                    what we do
                </h1>
            </div>

            <div class="col-2 col-md-4" style="align-content: center;">
                <div class="line"></div>
            </div>

        </div>
    </div>

    <!-- what we do section -->
    <div class="container">
        <div class="row what-do-section">
            <div class="col-12 col-md-4 p-0">
                <div class="what-do">
                    <img src="{{ asset('images/services/moragalla.jpg') }}" alt="" class="img">
                    
                </div>
            </div>
            <div class="col-12 col-md-8 p-0">
                <div class="what-do">
                    <p class="p-5" style="text-align: justify;">we specialize in capturing life’s most memorable moments from breathtaking aerial perspectives.
                        Whether it’s a wedding, birthday celebration, corporate event, or any special function, we bring a cinematic touch to every occasion through the art of dronegraphy.

                        Using advanced drone technology and creative expertise, we deliver stunning high-definition visuals that showcase every detail, emotion, and atmosphere from unique angles.
                        Our goal is to transform your moments into powerful visual stories — immersive, elegant, and unforgettable.

                        From intimate gatherings to grand celebrations, we ensure every frame reflects professionalism, precision, and artistry.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-5"></div>





</body>

</html>