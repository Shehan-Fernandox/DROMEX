<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .product-title {
            font-family: 'Poppins';
            text-transform: uppercase;
            color: #ff0051ff;
            text-align: center;

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
    </style>
</head>
<body>
     <head>
        @include('layouts.adminNav')
    </head>

<h4 class="product-title" style="margin-top: 150px;">manage orders</h4>

    <div class="container-fluid mt-4">
        <div class="product-summey-content">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="product-summery-card">
                        <h5>Total Aircrafts</h5>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="product-summery-card">
                        <h5>Mini Serieous Aircrafts</h5>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="product-summery-card">
                        <h5>Mavic Aircrafts 10</h5>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="product-summery-card">
                        <h5>FPV Aircrafts 10</h5>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>