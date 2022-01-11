@include('layouts.header')


<div id="hotspotImg" class="responsive-hotspot-wrap row" style="width:100%;">
    <img src="{{ asset('imgs/3.jpeg') }}" class="img-responsive" alt="" style="width: 100%; height: 600px; object-fit: cover;">

    <div class="hot-spot" x="900" y="43">
        <div class="circle"></div>
        <div class="tooltip">
            <div class="img-row">
                <img src="img/dummy-178-120.jpg" alt="Jurong Lake Gardens #1" width="170" height="128">
            </div>
            <div class="text-row">
                <h4>Lorem Ipsum</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>

    <div class="hot-spot" x="1171" y="224">
        <div class="circle"></div>
        <div class="tooltip">
            <div class="img-row">
                <img src="img/dummy-178-120.jpg" alt="High Speed Rail" width="170" height="128">
            </div>
            <div class="text-row">
                <h4>Lorem Ipsum</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>

    <div class="hot-spot" x="1052" y="108">
        <div class="circle"></div>
        <div class="tooltip">
            <div class="img-row">
                <img src="img/dummy-178-120.jpg" alt="JLD Central Park" width="170" height="128">
            </div>
            <div class="text-row">
                <h4>Lorem Ipsum</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>

    <div class="hot-spot" x="825" y="285">
        <div class="circle"></div>
        <div class="tooltip">
            <div class="img-row">
                <img src="img/dummy-178-120.jpg" alt="The Science Centre" width="170" height="128">
            </div>
            <div class="text-row">
                <h4>Lorem Ipsum</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>

    <div class="hot-spot" x="1470" y="284">
        <div class="circle"></div>
        <div class="tooltip">
            <div class="img-row">
                <img src="img/dummy-178-120.jpg" alt="Former Jurong TownHall" width="170" height="128">
            </div>
            <div class="text-row">
                <h4>Lorem Ipsum</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>

    <div class="hot-spot" x="620" y="105">
        <div class="circle"></div>
        <div class="tooltip">
            <div class="img-row">
                <img src="img/dummy-178-120.jpg" alt="JLD New Island" width="170" height="128">
            </div>
            <div class="text-row">
                <h4>Lorem Ipsum</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>

</div>



{{--<div class="container-fluid">--}}
{{--    <div class="row">--}}
{{--        <div class="col-12 hero-single">--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


<div class="container mt-4 mb-4">
    <div class="row mt-4">
        <div class="col-md-8">
            <div class="accordion open accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                            George V's 1911 hunting trip in Nepal
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Planning
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            The hunt
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                            Notable attendees
                        </button>
                    </h2>
                    <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                            Legacy
                        </button>
                    </h2>
                    <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <h4 style="margin-left: 30px;">Author</h4>
            <div class="text-left">
                <img src="{{ asset('imgs/100.jfif') }}" class="rounded" style="width: 100px; height: 100px; object-fit: cover; border-radius: 50px !important; margin-right: 30px;" alt="...">
                <img src="{{ asset('imgs/101.jpg') }}" class="rounded" style="width: 100px; height: 100px; object-fit: cover; border-radius: 50px !important; margin-right: 30px;" alt="...">
            </div>

            <div class="mt-4 text-left">
                <a class="btn btn-outline-dark btn-sm emp-btn" href=""><i class="fas fa-book-open"></i> Print as PDF</a> &nbsp;
                <a class="btn btn-outline-dark btn-sm emp-btn" href=""><i class="fas fa-podcast"></i> Podcast</a> &nbsp;
                <a class="btn btn-outline-dark btn-sm emp-btn" href=""><i class="fas fa-vr-cardboard"></i> VR mode</a> &nbsp;
            </div>

            <div class="mt-4 rightsidebar">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne00">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne00" aria-expanded="true" aria-controls="flush-collapseOne">
                                <i class="fas fa-tag"></i> &nbsp; Buy now
                            </button>
                        </h2>
                        <div id="flush-collapseOne00" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <a class="btn btn-outline-dark btn-sm emp-btn" href=""><i class="fas fa-print"></i> Prints</a> &nbsp;
                                <a class="btn btn-outline-dark btn-sm emp-btn" href="">Originals</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo00">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo00" aria-expanded="false" aria-controls="flush-collapseTwo">
                                <i class="fas fa-book"></i>  &nbsp;Overview
                            </button>
                        </h2>
                        <div id="flush-collapseTwo00" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree00">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree00" aria-expanded="false" aria-controls="flush-collapseThree">
                                <i class="fas fa-sticky-note"></i> &nbsp; What paper says
                            </button>
                        </h2>
                        <div id="flush-collapseThree00" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading400">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse400" aria-expanded="false" aria-controls="flush-collapse4">
                                <i class="fas fa-file-download"></i> &nbsp; Downloads
                            </button>
                        </h2>
                        <div id="flush-collapse400" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading500">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse500" aria-expanded="false" aria-controls="flush-collapse5">
                                <i class="fab fa-youtube"></i> &nbsp; Videos
                            </button>
                        </h2>
                        <div id="flush-collapse500" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse600" aria-expanded="false" aria-controls="flush-collapse5">
                                <i class="fas fa-link"></i> &nbsp; External links
                            </button>
                        </h2>
                        <div id="flush-collapse600" class="accordion-collapse collapse" aria-labelledby="flush-heading600" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading700">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse700" aria-expanded="false" aria-controls="flush-collapse5">
                                <i class="fas fa-chart-line"></i> &nbsp; Timeline
                            </button>
                        </h2>
                        <div id="flush-collapse700" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <h4>Keywords</h4>
                <a class="btn btn-sm key-btn" href="">Concept artist</a>
                <a class="btn btn-sm key-btn" href="">Digital artist</a>
                <a class="btn btn-sm key-btn" href="">Voice over</a>
                <a class="btn btn-sm key-btn" href="">Podcast</a>
                <a class="btn btn-sm key-btn" href="">VR</a>
                <a class="btn btn-sm key-btn" href="">Paint artist</a>
                <a class="btn btn-sm key-btn" href="">Author</a>
                <a class="btn btn-sm key-btn" href="">People</a>
            </div>


        </div>

    </div>
</div>









@include('layouts.footer')
