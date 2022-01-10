@include('layouts.header')

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

@include('layouts.footer')
