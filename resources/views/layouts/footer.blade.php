
<section class="container-fluid footer">
    <footer class="container">
        <div class="row">
            <div class="col-md-3">
                <div>
                    <i class="fab fa-twitter" style="margin-right: 20px;"></i>
                    <i class="fab fa-instagram" style="margin-right: 20px;"></i>
                    <i class="fab fa-youtube" style="margin-right: 20px;"></i>
                    <i class="fab fa-facebook" style="margin-right: 20px;"></i>
                </div>
            </div>
            <div class="col-md-3">
                <p><a href="">Contact us</a></p>
                <p><a href="">Cookie Policies</a></p>
            </div>
            <div class="col-md-3">
                <p><a href="">Sitemap</a></p>
                <p><a href="">FAQ</a></p>
            </div>
            <div class="col-md-3">
                <form action="" method="post">
                    <div class="form-group mb-2">
                        <input style="background: #ECE5DB; border: none;" class="form-control" type="email" placeholder="Enter Your Email Address">
                    </div>

                    <button type="submit" class="btn btn-outline-dark btn-lg emp-btn" style="border: none; width: 100%;">SIGN UP</button>
                </form>

            </div>
        </div>

    </footer>
</section>

<div class="container-fluid copy-footer">
    <div class="row text-center">
        <div class="col-12">
            <p style="margin-top: 5px;">&copy; 2022 All Rights Reserved.</p>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<script src="{{ asset('slick.js') }}" type="text/javascript" charset="utf-8"></script>

<script src="{{ asset('js/jquery.hotspot.js') }}"></script>

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


<script>
    $(document).ready (function() {

        if ($('#hotspotImg').length > 0) {
            $('#hotspotImg').hotSpot({
                bindselector: 'click'
            });
        }
    });
</script>


</body>
</html>
