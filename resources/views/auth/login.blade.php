<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" class="css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" class="css">
    <style>
        body {

            background: linear-gradient(to bottom, #ffffffff, #31a3dcff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;


        }

        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
            width: 70%;
            align-items: center;
        }

        .register-btn {
            width: 50%;
            align-content: center;
            border-radius: 20px;
        }

        .form {
            align-content: center;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            text-transform: uppercase;
            color: #0063afff;
        }

        .img{
            border-radius: 0 50px 0 50px;
        }
        @media (max-width: 768px) {
            .form-container {
                width: 90%;
                height: 80%;
            }
        }
    </style>
</head>

<body>

    <div class="row form-container">
        <div class="col-12 col-md-6">
            <div style="justify-items: center;">
                <img src="{{ asset('images/logoImage/DROMEXLOGO.jpg') }}" alt="" class="img-fluid img">
                <!-- <div class="left-side"  style="justify-items: center;align-content:center;"><h1>ACCIMT</h1></div> -->
            </div>
        </div>
        <div class="col-12 col-md-6 form">
            <h2>login now</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Password</label>
                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>



                <div class="mb-0 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary register-btn">
                        Log in
                    </button>
                </div>
                <div class="col-12 mt-3">
                    <p>
                        Already have not an account? <a href="{{ route('register') }}" style="text-decoration: none;">Register Now</a>
                    </p>
                </div>

            </form>
        </div>
    </div>

</body>

</html>
