<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" class="css">
    <style>
        .contact-content {

            text-transform: uppercase;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }

        .contact-content h1 {
            text-transform: uppercase;
        }

        .contact-line {
            width: 70%;
            height: 3px;
            background-color: #ff0051ff;
        }



        .contact-content p {
            text-align: center;
        }

        .phone-content {
            display: flex;
        }

        .location-content {
            display: flex;
        }

        .mail-content {
            display: flex;
        }

        .contact-img {
            background-image: url('./images/logoImage/dromexlogo.png');
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background-size: cover;
        }

        .contact-card {
            /* background: linear-gradient(to bottom,#0000,#ff3488ff); */
            background-color: #f6f6f6ff;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.633);
            border-radius: 20px;
            width: 300px;
            height: 200px;
            margin: 20px auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .contact-card:hover {
            /* background: linear-gradient(to bottom,#0000,#ff3488ff); */
            transform: scale(1.1);
            transition: ease-in-out 0.3s;
        }

       

        
    </style>

</head>

<body>
    @include('layouts.nav')
    <div class="container">
        <div class="contact mt-5">
            <div class="row">
                <div class="col-12 col-md-6 p-0" style="display: flex; justify-content: center; align-items: center;">
                    <div class="contact-img"></div>
                </div>
                <div class="col-12 col-md-6 p-0">
                    <div class="contact-content">
                        <h1>contact us</h1>
                        <p>we are here to meet any business need and to promote your company online!</p>
                        <div class="contact-line"></div>
                        <div class="phone-content">
                            <strong>
                                <p>phone : </p>
                            </strong>
                            <p> 075 210 3712</p>
                        </div>
                        <div class="location-content">
                            <strong>
                                <p>Location : </p>
                            </strong>
                            <p>No,39 Gamagoda Road Rajawatta</p>
                        </div>
                        <div class="mail-content">
                            <strong>
                                <p>Mail : </p>
                            </strong>
                            <p>shehanfernandox2004"gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3 p-0">

            <div class="col-12 col-md-4 p-0">
                <a href="">
                    <div class="contact-card">
                        <img src="{{asset('images/icon/fb.png')}}" style="height: 70px;width:70px;" alt="">
                        <!-- <i class="bi bi-house"></i>    
                        <strong><h6>Hours</h6></strong> -->


                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 p-0">
                <a href="">
                    <div class="contact-card">
                        <img src="{{asset('images/icon/whatsapp.png')}}" style="height: 70px;width:70px;" alt="">
                        <!-- <i class="bi bi-geo-alt"></i>
                        <strong><h6>Location</h6></strong> -->
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 p-0">
                <a href="">
                    <div class="contact-card">
                        <img src="{{asset('images/icon/youtube.png')}}" style="height: 70px;width:70px;" alt="">
                        <!-- <i class="bi bi-clock"></i>
                        <strong><h6>Hours</h6></strong> -->
                    </div>
                </a>
            </div>
        </div>
    </div>

    

@include('layouts.footer')
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>