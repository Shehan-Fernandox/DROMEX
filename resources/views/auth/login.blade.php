<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Science+Gothic:wght@100..900&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
             background: linear-gradient(to bottom, #ffffff,#FF9B00);
        }

        .logo {
            background-color: #009ac0ff;
            width: 400px;
            height: 400px;
        }

        .form-container {
            /* background-color: #ffffff; */
            background: linear-gradient(to bottom, #ffffff,#111111ff);
            padding: 30px;
            border-radius: 70px 0 70px 0;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
            width: 70%;
            align-items: center;
        }

        h3 {
            text-transform: uppercase;
            color: #FF9B00;
            text-align: center;
            margin-bottom: 70px;
            font-size: 30px;
            font-family: "Science Gothic", sans-serif;
        }

        .login-btn {
            background-color: #FF9B00;
            width: 100%;
            color: #111111ff;
            font-weight: bold;
            margin-top: 40px;
        }

        .login-btn:hover {
            background-color: #111111ff;
            color: #FF9B00;
            font-weight: bold
        }
    </style>
</head>

<body>
    <div class="row form-container">
        <div class="col-12 col-md-6">
            <img src="{{ asset('images/forms/logo.png')}}" class="img-fluid" alt="">
        </div>
        <div class="col-12 col-md-6">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h3>login to dromex</h3>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div style="display: flex;">
                    <button type="submit" class="btn login-btn">Sign in</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>