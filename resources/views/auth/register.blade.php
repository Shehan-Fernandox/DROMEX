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
            padding: 20px;
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

        .img {
            border-radius: 0 50px 0 50px;
        }

        @media (max-width: 768px) {
            .form-container {
                width: 90%;
                margin-top: 150px;
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
            <h2>Register now</h2>
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>



                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Contact No</label>
                    <input id="contact_no" type="text" class="form-control @error('email') is-invalid @enderror" name="contact_no" value="{{ old('phone_no') }}" required autocomplete="phone_no">
                    @error('contact_no')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $contact_no }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="profile" class="form-label">Profile</label>
                    <input id="user_profile" type="file" class="form-control @error('email') is-invalid @enderror" name="user_profile" value="{{ old('profile') }}" required autocomplete="profile">
                    @error('user_profile')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $user_profile }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="mb-0 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary register-btn">
                        Register
                    </button>
                </div>
                <div class="col-12 mt-3">
                    <p>
                        Already have an account? <a href="{{ route('login') }}" style="text-decoration: none;">Login here</a>
                    </p>
                </div>

            </form>
        </div>
    </div>

</body>

</html>