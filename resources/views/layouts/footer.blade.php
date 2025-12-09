<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<style>
    .logo {
        color: #FF9B00;
        font-weight: bolder;
        margin-top: 20px;
        font-size: 30px;

    }

    .line {

        height: 2px;
        background-color: #FF9B00;
        padding: 0px;
    }

    .nav-bar {

        padding: 0px;
        margin-top: 5px;


    }

    /* .navbar .nav-link.active {
        background-color: #FF9B00;
        color: #000000;
        border-radius: 5px;
    } */


    .nav-sec:hover {
        background-color: #FF9B00;
        color: #000000;
    }

    .nav-logo {
        font-weight: bolder;
        color: #FF9B00;
    }


    .navbar .nav-link {
        color: #FF9B00;
        /* default text color */
        font-weight: bold;
    }


    .navbar .nav-link.active {
        background-color: #FF9B00;
        color: #000000;
        /* active text color */
        border-radius: 5px;
    }

    .fixed-nav {
        position: sticky;
        top: 0px;
        z-index: 1;
        background-color: #000000;
        padding: 10px;
    }


    .navbar-toggler {
        background-color: transparent;
        border: 2px solid #FF9B00;
    }
</style>

<body>
    <div class="fixed-nav">
        <div class="container text-center">
            <div class="row">
                <div class="col logo">
                    DROMEX
                </div>
            </div>
        </div>
        <div class="line"></div>
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <a href=""><img src="{{ asset('images/whatsapp.png') }}" alt=""></a>
                </div>
                <div class="col">
                    <a href=""><img src="{{ asset('images/facebook.png') }}" alt=""></a>
                </div>
                <div class="col">
                    <a href=""><img src="{{ asset('images/whatsapp.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    
</body>

</html>