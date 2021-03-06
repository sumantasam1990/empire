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

        .rightsidebar .accordion-button::after {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-plus-lg' viewBox='0 0 16 16'%3E%3Cpath fill-rule='evenodd' d='M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z'/%3E%3C/svg%3E") !important;

        }

        .rightsidebar .accordion-button:not(.collapsed)::after {
            transform: rotate(226deg);
        }

        a {
            text-decoration: none;
            font-size: 18px;
            color: #1a202c;
        }

        a:hover {
            color: #191e28;
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
            font-size: 14px !important;
        }

        .active {

            color: red !important;
        }

        .footer {
            background: #dbd5c3;
            padding: 30px;
        }

        .hero-single {
            background: url("{{ asset('imgs/hero.jpeg') }}");
            width: 100%;
            height: 600px;
        }

        .accordion-item {
            background: #DBD5C3;
        }

        .accordion-button {
            color: #1a202c !important;
            box-shadow: none !important;
            background: #ECE5DB !important;
        }

        .accordion-header button {
            font-size: 26px !important;
        }

        .rightsidebar .accordion-header button {
            font-size: 18px !important;
        }

        .key-btn {
            background: #DBD5C3;
            padding: 4px !important;
            margin-top: 10px;
            margin-right: 5px;
        }

        .copy-footer {
            background: #000;
            color: #fff;
            height: 60px;
            padding-top: 10px;
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



        /*Hotspot*/

        /* Animation */
        @-webkit-keyframes pulsate {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 0.8;
            }
            45% {
                -webkit-transform: scale(1.75);
                transform: scale(1.75);
                opacity: 0;
            }
        }
        @keyframes pulsate {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 0.8;
            }
            45% {
                -webkit-transform: scale(1.75);
                transform: scale(1.75);
                opacity: 0;
            }
        }


        /* Hotspot */
        #hotspotImg {
            background-color: #ededed;
            background-size: cover;
            background-position: center center;
            position: relative;
        }
        #hotspotImg .img-responsive {
            max-width: 100%;
        }

        #hotspotImg .hot-spot {
            position: absolute;
            width: 25px;
            height: 25px;
            top: 5px;
            left: 5px;
            text-align: center;
            background-color: rgba(229, 0, 137, 0.6);
            color: #fff;
            border-radius: 100%;
            cursor: pointer;
            transition: all .3s ease;
        }


        #hotspotImg .hot-spot .circle {
            display: block;
            position: absolute;
            top: 45%;
            left: 45%;
            width: 2em;
            height: 2em;
            margin: -1em auto auto -1em;
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            border-radius: 50%;
            border: 1px solid #E5008A;
            opacity: 0;
            -webkit-animation: pulsate 3s ease-out infinite;
            animation: pulsate 3s ease-out infinite;
        }

        #hotspotImg .hot-spot .tooltip {
            background-color: rgba(58, 95, 150, 0.7);
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            color: #fff;
            display: none;
            font-size: 14px;
            opacity: 1.0;
            left: 0px;
            padding: 15px 5px;
            position: absolute;
            text-align: left;
            top: 30px;
            width: 280px;
            z-index: 999;
        }

        #hotspotImg .hot-spot .tooltip .img-row {
            padding: 10px;
            text-align: center;
        }

        #hotspotImg .hot-spot .tooltip .text-row {
            padding: 15px;
        }

        #hotspotImg .hot-spot .tooltip h4 {
            margin-bottom: 10px;
            border-bottom: 1px solid #ffffff;
        }

        #hotspotImg .hot-spot .tooltip p {
            font-size: 14px;
            line-height: 1.4em;
            margin-bottom: 10px;
        }
        #hotspotImg .hot-spot .tooltip p:last-child {
            margin-bottom: 0;
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
