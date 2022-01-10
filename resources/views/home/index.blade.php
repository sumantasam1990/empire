<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Empire</title>

    <style>
        body, html {
            background: #ece5db;
        }
        .card {
            background: #dbd5c3;
        }
        .card-title {
            font-weight: normal;
        }
        .emp-btn {
            border-radius: 40px;
        }
    </style>

</head>
<body>

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










<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
