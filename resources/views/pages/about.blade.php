<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link rel="stylesheet" href="{{ asset('css/about.css') }}">
</head>

<body>
    @include('layouts.nav')

  <div>
    <img src="{{ asset('images/services/aboutUs.jpg')}}" class="img-fluid"  alt="">
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
                    welcome to our shop
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
                
                    <img src="{{ asset('images/services/about-us.png')}}" alt="" class="about-img">
                
            </div>

            <div class="col-12 col-md-6 p-0">
                <div class="p-0" style="margin-left: 10px;">
                    <div class="about-description">
                        <h1 style="text-align: left;"><strong style="font-size: 70px;">w</strong>ho we are ?</h1>
                    </div>
                    <div class="container-fluid">
                        <p style="text-align: justify;">
                       Dromex is a dedicated drone technology shop focused on
                       providing high-quality drones and accessories for hobbyists,
                       photographers, filmmakers, and professionals. We proudly offer
                       genuine drones from DJI, a global leader in drone innovation and
                       aerial technology. Our mission is to make advanced drone technology
                       accessible, reliable, and affordable for everyone who is passionate
                       about aerial innovation. At Dromex, we carefully select and test every
                       product to ensure performance, safety, and customer satisfaction.
                       
                    </p>
                    <br>
                    <p style="text-align: justify;">
                       Beyond selling drones, we aim to build a community by
                       sharing knowledge, offering support, and helping our
                       customers choose the perfect drone for their needs.
                       Whether you are a beginner exploring the world of drones
                       or an expert looking for advanced equipment,
                       Dromex is your trusted partner in the sky.
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
                    our vision
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
                    <p class="p-5" style="text-align: justify;">
                        At Dromex, our vision is to become a leading drone solutions
                        provider in Sri Lanka and beyond, delivering world-class
                        aerial technology to individuals and businesses.
                        We aim to grow as a trusted name in the drone industry by
                        offering advanced products, expert guidance, and excellent customer service.
                        By working with globally recognized brands like DJI, we strive to bring
                        the latest drone innovations to our customers. Our long-term goal is to
                        inspire creativity, support technological growth, and help shape the
                        future of aerial technology through quality products
                        and strong customer relationships.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-5"></div>



@include('layouts.footer')

</body>

</html>