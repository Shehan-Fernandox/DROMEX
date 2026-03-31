<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Footer Scoped</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        /* FOOTER SCOPED STYLES */
        .footer {
            background: #0a0a0a;
            color: #ccc;
            padding: 60px 0 20px;
        }

        .footer .footer-logo {
            font-size: 28px;
            font-weight: bold;
            color: #FF9B00;
        }

        .footer h5 {
            color: #fff;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .footer p {
            font-size: 14px;
            line-height: 1.7;
        }

        .footer a {
            color: #aaa;
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
            transition: 0.3s;
        }

        .footer a:hover {
            color: #FF9B00;
            padding-left: 5px;
        }

        .footer .social-icons a {
            font-size: 18px;
            margin-right: 15px;
            color: #aaa;
            transition: 0.3s;
        }

        .footer .social-icons a:hover {
            color: #FF9B00;
        }

        .footer .newsletter input {
            border-radius: 30px;
            padding: 10px 15px;
            border: none;
            outline: none;
            width: 100%;
        }

        .footer .newsletter button {
            margin-top: 10px;
            border-radius: 30px;
            background: #FF9B00;
            border: none;
            padding: 10px;
            width: 100%;
            color: #000;
            font-weight: 600;
            transition: 0.3s;
        }

        .footer .newsletter button:hover {
            background: #e68900;
        }

        .footer .footer-bottom {
            border-top: 1px solid #222;
            margin-top: 40px;
            padding-top: 20px;
            text-align: center;
            font-size: 13px;
            color: #777;
        }

        /* REMOVE PADDING ON MOBILE */
        @media (max-width: 767.98px) {
            .footer .container-fluid,
            .footer .row,
            .footer .col-lg-4,
            .footer .col-6 {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            .footer {
                padding-top: 40px;
                padding-bottom: 20px;
            }

            .footer .social-icons a {
                margin-right: 10px;
            }
        }
    </style>
</head>

<body>

    <!-- FOOTER START -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row g-0">

                <!-- Brand -->
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="footer-logo">Dromex</div>
                    <p class="mt-3">
                        Fly smarter with next-generation drones built for performance,
                        creativity, and exploration.
                    </p>

                    <!-- Social -->
                    <div class="social-icons mt-3">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>

                <!-- Company Links -->
                <div class="col-6 col-lg-2 mb-4 mb-lg-0">
                    <h5>Company</h5>
                    <a href="#">About</a>
                    <a href="#">Careers</a>
                    <a href="#">Blog</a>
                    <a href="#">Contact</a>
                </div>

                <!-- Support Links -->
                <div class="col-6 col-lg-2 mb-4 mb-lg-0">
                    <h5>Support</h5>
                    <a href="#">Help Center</a>
                    <a href="#">Returns</a>
                    <a href="#">Shipping</a>
                    <a href="#">FAQ</a>
                </div>

                <!-- Newsletter -->
                <div class="col-lg-4">
                    <h5>Stay Updated</h5>
                    <p>Subscribe to get latest drone deals and updates.</p>

                    <div class="newsletter">
                        <input type="email" placeholder="Enter your email">
                        <button>Subscribe</button>
                    </div>
                </div>

            </div>

            <!-- Bottom -->
            <div class="footer-bottom">
                © 2026 Dromex. All rights reserved.
            </div>
        </div>
    </footer>
    <!-- FOOTER END -->

</body>

</html>