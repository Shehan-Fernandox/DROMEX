<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Science+Gothic:wght@100..900&display=swap" rel="stylesheet">
    <style>
        .form-section {
            /* background-color: rgb(247, 247, 247); */
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
            border-radius: 20px;
            width: 70vw;
            height: fit-content;
            padding: 10px;
           
        }

        .container{
             display: flex;
            align-items: center;
            justify-content: center;
            
        }

        .form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 60px;
        }

        .line{
            background: linear-gradient(to right,#000,#FF9B00);
            height: 20px;
        }

        .form label{
            font-size: large;
            font-family: sans-serif;
        }

        .form-design{
            /* background: linear-gradient(to bottom,#ffffff,#FF9B00); */
            background: #000;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-design h1{
            text-align: center;
            font-size: 40px;
            font-weight: bold;
            text-transform: uppercase;
            color: #FF9B00;
        }

        .form-design h5{
            text-align: center;
            font-weight: bold;
            text-transform: capitalize;
            color: white;
        }

     .form-design img{
background-size: cover;
height: fit-content;
     }

        
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="row  form-section">
            <div class="col-12 col-md-6  mb-3 form-design">
                <img src="{{ asset('images/logoimage/DROMEX.png') }}" alt="" class="img-fluid">
                <h1>welcome back</h1>
                <h5>enter your details access your account</h5>
            </div>
            <div class="col-12 col-md-6 form">

            <div class="line"></div>

                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                <div class="line"></div>

            </div>
        </div>
    </div>


</body>

</html>