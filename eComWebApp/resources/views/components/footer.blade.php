<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- About SnapSell -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="#" style="display: flex; align-items: center; text-decoration: none;">
                            <img src="{{ URL::asset('img/LogoSnapSell.jpg') }}" alt="SnapSell Logo"
                                style="height: 40px; margin-right: 10px;">
                            <span style="font-size: 20px; font-weight: bold; color: white;">SnapSell</span>
                        </a>

                    </div>
                    <p>SnapSell brings photography to life — offering premium prints, frames, and gear for passionate
                        photographers and art lovers.</p>
                    <a href="#"><img src="{{ URL::asset('img/payment.png') }}" alt="Payment Methods"
                            style="height: 30px;"></a>
                </div>
            </div>

            <!-- Shop Categories -->
            <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <h6>Shop</h6>
                    <ul>
                        <li><a href="#">Photo Prints</a></li>
                        <li><a href="#">Wall Frames</a></li>
                        <li><a href="#">Camera Accessories</a></li>
                        <li><a href="#">Gift Cards</a></li>
                    </ul>
                </div>
            </div>

            <!-- Customer Support -->
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <h6>Support</h6>
                    <ul>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Payment Methods</a></li>
                        <li><a href="#">Delivery Info</a></li>
                        <li><a href="#">Returns & Exchanges</a></li>
                    </ul>
                </div>
            </div>

            <!-- Newsletter -->
            <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                <div class="footer__widget">
                    <h6>Newsletter</h6>
                    <div class="footer__newslatter">
                        <p>Get updates on new collections, exclusive offers, and photography tips.</p>
                        <form action="#">
                            <input type="email" placeholder="Your email" required>
                            <button type="submit"><span class="icon_mail_alt"></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="footer__copyright__text">
                    <p>&copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> SnapSell. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search prints, gear, or frames...">
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.nice-select.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.nicescroll.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.countdown.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.slicknav.js') }}"></script>
<script src="{{ URL::asset('js/mixitup.min.js') }}"></script>
<script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('js/main.js') }}"></script>
</body>

</html>