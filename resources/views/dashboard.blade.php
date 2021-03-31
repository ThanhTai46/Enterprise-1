<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{asset('BE/css/custom.css')}}">
        <link
            href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="{{asset('BE/js/main.js')}}"></script>
        <title>Home Page</title>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar">
            <div class="inner-width">
                <a href="" class="logo"></a>
                <button class="menu-toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="nav-menu">
                    <a href="{{route('ACCOUNT')}}">Login</a>
                </div>
            </div>
        </nav>
        <!-- Home  -->
        <section id="home">
            <div class="inner-width">
                <div class="content">
                    <h1></h1>
                    <!-- <div class="sm">
                        <a href="" class="fab fa-facebook-f"></a>
                        <a href="" class="fab fa-twitter"></a>
                        <a href="" class="fab fa-instagram"></a>
                        <a href="" class="fab fa-linkedin-in"></a>
                        <a href="" class="fab fa-youtube"></a>
                    </div> -->
                </div>
            </div>
        </section>
    </body>
</html>