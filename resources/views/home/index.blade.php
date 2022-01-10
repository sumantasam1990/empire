<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="{{ asset('slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('slick-theme.css') }}">

    <title>Empire</title>

    <style>
        @font-face {
            font-family: WeissStd;
            src: url({{ asset('fonts/WeissStd.otf') }});
        }

        @font-face {
            font-family: WeissStdBold;
            src: url({{ asset('fonts/WeissStd-Bold.otf') }});
        }

        body, html {
            background: #ece5db;
            font-family: WeissStd;
        }


        nav {
            background: #ece5db;
            font-family: 'Nunito', sans-serif;

        }

        .navbar-nav {
            border-top: 1px solid #cccccc;
            border-bottom: 1px solid #cccccc;
        }

        .nav-item {
            margin-right: 20px;
        }

        .card {
            background: #dbd5c3;
            border: none;

        }
        .card-title {

            font-family: WeissStdBold;

        }
        .emp-btn {
            border-radius: 40px;
        }

        .hr {
            margin-top: -15px;
            height: 2px !important;
            width: 50px;
        }

        .slider .card {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .slider .card-img-top {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 0px;
        }

        .slider .card-img-top-ecom {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 0px;
        }

        .w-200 {
            width: 200px;
        }

        .nav-link {
            font-weight: bold;
            color: black !important;
        }

        .active {

            color: red !important;
        }



        /*Slick slider css*/

        .slider {
            width: 100%;
            margin: 100px auto;
        }

        .slick-slide {
            margin: 0px 20px;
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-prev:before,
        .slick-next:before {
            color: black;
            font-size: 40px;
        }


        .slick-slide {
            transition: all ease-in-out .3s;
            opacity: .2;
        }

        .slick-active {
            opacity: 1;
        }

        .slick-current {
            opacity: 1;
        }

    </style>

</head>
<body>


{{--Nabvar / Menu bar--}}

<nav class="navbar navbar-expand-lg navbar-light mt-4 mb-4">
    <div class="container">
        <a class="navbar-brand" style="font-size: 28px; font-family: WeissStdBold;" href="#">The Empire Strokes Back</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">lOGIN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">SUBSCRIBE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
                </li>
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                        Dropdown link--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                        <li><a class="dropdown-item" href="#">Action</a></li>--}}
{{--                        <li><a class="dropdown-item" href="#">Another action</a></li>--}}
{{--                        <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

            </ul>

        </div>

    </div>

</nav>




<div class="container hero-section mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <div class="card-body">
                            <h5 class="card-title display-6 mb-3">George V's 1911 hunting trip in Nepal</h5>
                            <p class="card-text">
                                After attending the Delhi Durbar, George V and Queen Mary travelled via boat and train from Patna and Bankipore to Bhikhna Thori railway station on 16 December. They arrived in Nepal at 10 am on Monday, 18 December, where the king was greeted by Chandra Shumsher. George then travelled from Bhikhna Thori railway station by car to Thori, Nepal.There was a large encampment for the king and his 12,000 followers, and there were roughly 2,000 attendees....
                            </p>
                            <p class="card-text">
                                <a class="btn btn-outline-dark emp-btn" href=""><i class="fas fa-book-open"></i> Read</a>
                                <a class="btn btn-outline-dark emp-btn" href=""><i class="fas fa-podcast"></i> Podcast</a>
                                <a class="btn btn-outline-dark emp-btn" href=""><i class="fas fa-vr-cardboard"></i> VR Mode</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <img src="{{ asset('imgs/hero.jpeg') }}" style="width: 100%; height: 100%; object-fit: cover; border-radius: 0px !important;" class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--Slider--}}

<div class="container">
    <section class="row center slider">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <p class="card-text text-danger" style="font-weight: 600;">1770</p>
                    <hr class="hr">
                    <h5 class="card-title" style="font-weight: 600;">No Roti For You!</h5>
                </div>
                <img class="card-img-top" src="{{ asset('imgs/6.jpeg') }}">

            </div>
        </div>


        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <p class="card-text text-danger" style="font-weight: 600;">1770</p>
                    <hr class="hr">
                    <h5 class="card-title" style="font-weight: 600;">Bloody George</h5>
                </div>
                <img class="card-img-top" src="{{ asset('imgs/12.jpeg') }}">

            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <p class="card-text text-danger" style="font-weight: 600;">1810</p>
                    <hr class="hr">
                    <h5 class="card-title" style="font-weight: 600;">The Emperor's Clothes</h5>
                </div>
                <img class="card-img-top" src="{{ asset('imgs/10.jpeg') }}">

            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <p class="card-text text-danger" style="font-weight: 600;">1911</p>
                    <hr class="hr">
                    <h5 class="card-title" style="font-weight: 600;">The Great Hunt</h5>
                </div>
                <img class="card-img-top" src="{{ asset('imgs/13.jpeg') }}">

            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <p class="card-text text-danger" style="font-weight: 600;">1770</p>
                    <hr class="hr">
                    <h5 class="card-title" style="font-weight: 600;">No Roti For You!</h5>
                </div>
                <img class="card-img-top" src="http://placehold.it/350x300?text=1">

            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <p class="card-text text-danger" style="font-weight: 600;">1770</p>
                    <hr class="hr">
                    <h5 class="card-title" style="font-weight: 600;">No Roti For You!</h5>
                </div>
                <img class="card-img-top" src="http://placehold.it/350x300?text=1">

            </div>
        </div>



    </section>
</div>

{{--Latest collections--}}

<div class="container mt-4">

    <section class="row one-slide slider">
        <div class="col-md-12">
            <h1 class="mb-4">Latest Collection</h1>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-7">
                        <img src="{{ asset('imgs/4.jpeg') }}" style="width: 100%; height: 100%; object-fit: cover; border-radius: 0px !important;" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-5">
                        <div class="card-body">
                            <h5 class="card-title display-6 mb-3">The Churchill Collection: BLOOD, TOIL, TEARS AND SWEAT</h5>
                            <p class="card-text">
                                After attending the Delhi Durbar, George V and Queen Mary travelled via boat and train from Patna and Bankipore to Bhikhna Thori railway station on 16 December. They arrived in Nepal at 10 am on Monday, 18 December, where the king was greeted by Chandra Shumsher. George then travelled from Bhikhna Thori railway station by car to Thori, Nepal.There was a large encampment for the king and his 12,000 followers, and there were roughly 2,000 attendees...
                            </p>
                            <p class="card-text" style="float: right;">
                                <a class="btn btn-outline-dark emp-btn" href=""><i class="fas fa-book-open"></i> Read</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-12">
            <h1 class="mb-4">Latest Collection</h1>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-7">
                        <img src="{{ asset('imgs/4.jpeg') }}" style="width: 100%; height: 100%; object-fit: cover; border-radius: 0px !important;" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-5">
                        <div class="card-body">
                            <h5 class="card-title display-6 mb-3">The Churchill Collection: BLOOD, TOIL, TEARS AND SWEAT</h5>
                            <p class="card-text">
                                After attending the Delhi Durbar, George V and Queen Mary travelled via boat and train from Patna and Bankipore to Bhikhna Thori railway station on 16 December. They arrived in Nepal at 10 am on Monday, 18 December, where the king was greeted by Chandra Shumsher. George then travelled from Bhikhna Thori railway station by car to Thori, Nepal.There was a large encampment for the king and his 12,000 followers, and there were roughly 2,000 attendees...
                            </p>
                            <p class="card-text" style="float: right;">
                                <a class="btn btn-outline-dark emp-btn" href=""><i class="fas fa-book-open"></i> Read</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

</div>



{{--Ecommerce--}}

<div class="container">
    <div class="row" style="margin-bottom: -80px;">
        <div class="col-12">
            <h1>Open / Limited Edition Prints</h1>
        </div>
    </div>

    <section class="row ecommerce-slider slider">
        <div class="col-md-6">
            <div class="card">
                <img class="card-img-top-ecom img-thumbnail" src="{{ asset('imgs/7.jpeg') }}">
                <div class="card-body text-center">
                    <h2 class="card-title" style="font-weight: 600;">4 Way Love!</h2>
                    <a class="btn btn-outline-dark btn-lg emp-btn w-200" href="">From <span style="font-weight: bold;">&euro;</span> 7.95</a>
                </div>


            </div>
        </div>


        <div class="col-md-6">
            <div class="card">
                <img class="card-img-top-ecom img-thumbnail" src="{{ asset('imgs/8.jpeg') }}">
                <div class="card-body text-center">
                    <h2 class="card-title" style="font-weight: 600;">Munchi Time</h2>
                    <a class="btn btn-outline-dark btn-lg emp-btn w-200" href="">From <span style="font-weight: bold;">&euro;</span> 7.95</a>
                </div>


            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <img class="card-img-top-ecom img-thumbnail" src="{{ asset('imgs/7.jpeg') }}">
                <div class="card-body text-center">
                    <h2 class="card-title" style="font-weight: 600;">4 Way Love!</h2>
                    <a class="btn btn-outline-dark btn-lg emp-btn w-200" href="">From <span style="font-weight: bold;">&euro;</span> 7.95</a>
                </div>


            </div>
        </div>


        <div class="col-md-6">
            <div class="card">
                <img class="card-img-top-ecom img-thumbnail" src="{{ asset('imgs/8.jpeg') }}">
                <div class="card-body text-center">
                    <h2 class="card-title" style="font-weight: 600;">Munchi Time</h2>
                    <a class="btn btn-outline-dark btn-lg emp-btn w-200" href="">From <span style="font-weight: bold;">&euro;</span> 7.95</a>
                </div>


            </div>
        </div>





    </section>

</div>




<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<script src="{{ asset('slick.js') }}" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
    $(document).on('ready', function() {
        $('.center').slick({
            dots: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            touchMove: true
        });

        $('.one-slide').slick({
            dots: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            touchMove: true
        });

        $('.ecommerce-slider').slick({
            dots: false,
            slidesToShow: 2,
            slidesToScroll: 2,
            touchMove: true
        });

    });
</script>

{{--<div>--}}
{{--    <i class="fab fa-twitter"></i>--}}
{{--    <i class="fab fa-instagram"></i>--}}
{{--    <i class="fab fa-youtube"></i>--}}
{{--    <i class="fab fa-facebook"></i>--}}
{{--</div>--}}



</body>
</html>
