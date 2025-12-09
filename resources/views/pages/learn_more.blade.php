<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" class="css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Science+Gothic:wght@100..900&display=swap" rel="stylesheet">
    <style>
        .tabs {
            display: flex;
            justify-content: center;
            gap: 40px;
            position: fixed;
            top: 130px;
            /* adjust depending on height of your main navbar */
            left: 0;
            width: 100%;
            z-index: 2000;
            background: white;
            /* Important — prevents content overlap */
            padding: 10px 0;
        }


        .tab-button {
            color: #ff0095;
            border-radius: 50px;
            width: 100px;
            height: 50px;
            font-weight: bolder;
            border: 2px solid #ff0095;
        }

        .learn-card-content {
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .learn-card {
            width: 200px;
            height: 200px;
            /* background-color: #ff0095; */
            background-image: url("{{ asset('images/backgrounds/whatsppback.jpg') }}");
            border-radius: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;


        }



        .learn-card h2,
        h3 {
            color: #FF9B00;
            text-transform: capitalize;
            text-align: center;

        }

        .product-name {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;

        }

        .product-name .line {
            width: 30%;
            height: 2px;
            background-color: #ff0095;
        }

        .product-name .name {
            text-align: center;
            text-transform: capitalize;
        }
    </style>
</head>

<body>

    @include('layouts.nav')

    <ul class="nav nav-pills mb-3 tabs" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link  active tab-button" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true" style="border-radius: 50px;border: 2px solid #ff0095;font-weight: bold;text-transform: capitalize;">
                aircraft
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link tab-button" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" style="border-radius: 50px;border: 2px solid #ff0095;font-weight: bold;text-transform: capitalize;">
                rc
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link tab-button" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false" style="border-radius: 50px;border: 2px solid #ff0095;font-weight: bold;text-transform: capitalize;">
                camera
            </button>
        </li>

    </ul>
    <div class="tab-content mb-5" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6" style="display: flex;flex-direction: column;justify-content: center;">
                        <img src="{{ asset('images/drones/mavic 4 pro.png') }}" alt="..." class="img-fluid mt-5">
                        <div class="product-name">
                            <div class="line"></div>
                            <div class="name">
                                <h3 style="color:black">{{$product->product_name}}</h3>
                            </div>
                            <div class="line"></div>
                        </div>
                        <div class="learn-card-content">
                            <div class="learn-card">
                                <h2>weight</h2>
                                <h3 style="color: #FF9B00;">{{$product->product_weight}}</h3>
                            </div>
                            <div class="learn-card">
                                <h2>fly time</h2>
                                <h3 style="color: #FF9B00;">{{$product->fly_time}}</h3>
                            </div>
                            <div class="learn-card">
                                <h2>Distance</h2>
                                <h3 style="color: #FF9B00;">{{$product->fly_time}}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6" style="display: flex;flex-direction: column;text-align: justify;margin-top: 100px;">
                        {!! str_replace('.', '.<br><br>',$product->fully_description) !!}
                       
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6" style="display: flex;flex-direction: column;justify-content: center;">
                        <div style="display: flex;justify-content: center;">
                            <img src="{{ asset('images/drones/rc.png') }}" alt="..." class="img-fluid mt-5" style="width: 300px;height:300px;">
                        </div>
                        <div class="product-name">
                            <div class="line"></div>
                            <div class="name">
                                <h3 style="color:black">{{$product->product_name}}</h3>
                            </div>
                            <div class="line"></div>
                        </div>
                        <div class="learn-card-content">
                            <div class="learn-card">
                                <h2>weight</h2>
                                <h3 style="color: #FF9B00;">{{$product->product_weight}}</h3>
                            </div>
                            <div class="learn-card">
                                <h2>fly time</h2>
                                <h3 style="color: #FF9B00;">30min</h3>
                            </div>
                            <div class="learn-card">
                                <h2>fly time</h2>
                                <h3 style="color: #FF9B00;">30min</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6" style="display: flex;flex-direction: column;text-align: justify;margin-top: 100px;">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At distinctio modi aliquid autem ratione. Eaque commodi cupiditate suscipit libero et, reprehenderit earum eius! Harum illo odio rerum ipsa maiores labore.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At distinctio modi aliquid autem ratione. Eaque commodi cupiditate suscipit libero et, reprehenderit earum eius! Harum illo odio rerum ipsa maiores labore.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At distinctio modi aliquid autem ratione. Eaque commodi cupiditate suscipit libero et, reprehenderit earum eius! Harum illo odio rerum ipsa maiores labore.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At distinctio modi aliquid autem ratione. Eaque commodi cupiditate suscipit libero et, reprehenderit earum eius! Harum illo odio rerum ipsa maiores labore.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At distinctio modi aliquid autem ratione. Eaque commodi cupiditate suscipit libero et, reprehenderit earum eius! Harum illo odio rerum ipsa maiores labore.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At distinctio modi aliquid autem ratione. Eaque commodi cupiditate suscipit libero et, reprehenderit earum eius! Harum illo odio rerum ipsa maiores labore.</p>
                    </div>
                </div>
            </div>
        </div>
         <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6" style="display: flex;flex-direction: column;justify-content: center;">
                        <div style="display: flex;justify-content: center;">
                            <img src="{{ asset('images/drones/camera.png') }}" alt="..." class="img-fluid mt-5" style="width: 300px;height:300px;">
                        </div>
                        <div class="product-name">
                            <div class="line"></div>
                            <div class="name">
                                <h3 style="color:black">{{$product->product_name}}</h3>
                            </div>
                            <div class="line"></div>
                        </div>
                        <div class="learn-card-content">
                            <div class="learn-card">
                                <h2>weight</h2>
                                <h3 style="color: #FF9B00;">{{$product->product_weight}}</h3>
                            </div>
                            <div class="learn-card">
                                <h2>fly time</h2>
                                <h3 style="color: #FF9B00;">30min</h3>
                            </div>
                            <div class="learn-card">
                                <h2>fly time</h2>
                                <h3 style="color: #FF9B00;">30min</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6" style="display: flex;flex-direction: column;text-align: justify;margin-top: 100px;">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At distinctio modi aliquid autem ratione. Eaque commodi cupiditate suscipit libero et, reprehenderit earum eius! Harum illo odio rerum ipsa maiores labore.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At distinctio modi aliquid autem ratione. Eaque commodi cupiditate suscipit libero et, reprehenderit earum eius! Harum illo odio rerum ipsa maiores labore.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At distinctio modi aliquid autem ratione. Eaque commodi cupiditate suscipit libero et, reprehenderit earum eius! Harum illo odio rerum ipsa maiores labore.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At distinctio modi aliquid autem ratione. Eaque commodi cupiditate suscipit libero et, reprehenderit earum eius! Harum illo odio rerum ipsa maiores labore.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At distinctio modi aliquid autem ratione. Eaque commodi cupiditate suscipit libero et, reprehenderit earum eius! Harum illo odio rerum ipsa maiores labore.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At distinctio modi aliquid autem ratione. Eaque commodi cupiditate suscipit libero et, reprehenderit earum eius! Harum illo odio rerum ipsa maiores labore.</p>
                    </div>
                </div>
            </div>
         </div>
            

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

</body>

</html>