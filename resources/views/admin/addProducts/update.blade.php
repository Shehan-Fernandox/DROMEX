<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* body {
            background-image: url('../images/services/duvili.jpg');
            background: linear-gradient(to right, #C70039, #3c3c3cff);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        } */

        label {
            color: #151515ff;
            font-weight: bold;

        }


        .form-container {
            display: flex;
            margin-top: 120px;
            background: rgba(255, 255, 255, 0.2);
            /* 0.0 = fully transparent | 1.0 = solid */
            backdrop-filter: blur(3px);
            padding: 50px;
            border-radius: 30px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
            margin-bottom: 50px;
        }


        .line {
            width: auto;
            height: 3px;
            background-color: #000;
        }

        .update-img-content{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .update-aircraft-name{
            text-transform: capitalize;
            text-align: center;
            margin-bottom: 30px;
            color: #C70039;
        }

        
    </style>
</head>

<body>
    @include('layouts.adminNav')




    <div class="container form-container">
        <form class="row g-3" method="POST" action="{{ route('addProducts.update', $addProduct->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="col-md-12">
                <h1 class="update-aircraft-name">update {{ $addProduct->product_name }}</h1>
            </div>

            <div class="col-md-6">
                <label for="productName" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="productName" name="product_name" value="{{ $addProduct->product_name }}">
            </div>
            <div class="col-md-6">
                <label for="brand" class="form-label">Product Brand</label>
                <input type="text" class="form-control" id="brands" name="brand" value="{{ $addProduct->brand }}">
            </div>
            <div class="col-md-6">
                <label for="short" class="form-label">Short Description</label>
                <input type="text" class="form-control" id="short" name="short_description" value="{{ $addProduct->short_description }}">
            </div>
            <div class="col-md-6">
                <label for="quantity" class="form-label">Stock Quantity</label>
                <input type="text" class="form-control" id="quantity" name="stock_quantity" value="{{ $addProduct->stock_quantity }}">
            </div>
            <div class="col-12">
                <label for="fully" class="form-label">Fully Description</label>
                <textarea class="form-control" id="fully" name="fully_description" id="" rows="5">{{ $addProduct->fully_description }}</textarea>
            </div>
            <div class="col-md-6">
                <label for="Price" class="form-label">Price</label>
                <input type="text" class="form-control" id="Price" name="product_price" value="{{ $addProduct->product_price }}">
            </div>
            <div class="col-md-6">
                <label for="weight" class="form-label">Weight</label>
                <input type="text" class="form-control" id="weight" name="product_weight" value="{{ $addProduct->product_weight }}">
            </div>
            <div class="col-md-6">
                <label for="fly_time" class="form-label">Max Fly Time</label>
                <input type="text" class="form-control" name="fly_time" value="{{ $addProduct->fly_time }}">
            </div>
            <div class="col-md-6">
                <label for="resoloution" class="form-label">Camera Resolution</label>
                <input type="text" class="form-control" id="resoloution" name="camera_resolution" value="{{ $addProduct->camera_resolution }}">
            </div>
            <div class="col-md-6">
                <label for="battery" class="form-label">Battery Capacity</label>
                <input type="text" class="form-control" id="battery" name="battery_capacity" value="{{ $addProduct->battery_capacity }}">
            </div>
            <div class="col-md-6">
                <label for="battery" class="form-label">Battery Capacity</label>
                <input type="text" class="form-control" id="battery" name="battery_capacity" value="{{ $addProduct->battery_capacity }}">
            </div>

            <div class="col-md-4">
                <label for="aircraft" class="form-label">Aircraft</label>
                <input type="file" name="aircraft">
            </div>

            <div class="col-md-4">
                <label for="rc" class="form-label">RC</label>
                <input type="file" name="rc">
            </div>
            <div class="col-md-4">
                <label for="aircraft_with_rc" class="form-label">Aircraft With RC</label>
                <input type="file" name="aircraft_with_rc">
            </div>

            <div class="update-img-content">
                    <div>
                        @if ($addProduct->aircraft)
                        <img src="{{ asset('upload_aircraft/'.$addProduct->aircraft) }}" style="width: 200px;height: auto;">
                        @endif
                    </div>

                    <div>
                        @if ($addProduct->rc)
                        <img src="{{ asset('upload_aircraft/'.$addProduct->rc) }}" style="width: 200px;height: auto;">
                        @endif
                    </div>


                    <div>
                        @if ($addProduct->aircraft_with_rc)
                        <img src="{{ asset('upload_aircraft/'.$addProduct->aircraft_with_rc) }}" style="width: 200px;height: auto;">
                        @endif
                    </div>
                </div>

            <!-- <div class="col-md-4">
                        <label for="aircraft" class="form-label">RC</label>
                        <input type="file" name="aircraft">
                    </div>
                    <div class="col-md-4">
                        <label for="aircraft" class="form-label">Aircraft With RC</label>
                        <input type="file" name="aircraft">
                    </div> -->
            <!-- <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div> -->

            <div class="col-12">
                <button type="submit" class="btn" style="width: 200px;border:2px solid #C70039;padding:10px;border-radius: 20px;">Update Aircraft</button>
            </div>
        </form>
    </div>
</body>

</html>