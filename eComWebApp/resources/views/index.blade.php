<x-header />

<style>
    h1, h2, h3, h4, h5, h6, p {
        color: white;
    }

    .hero__text h2, .hero__text h6, .hero__text p {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
    }

    .product__item__pic img,
    .banner__item__pic img,
    .categories__hot__deal img,
    .blog__item__pic,
    .instagram__pic__item {
        object-fit: cover;
        width: 100%;
        height: 100%;
    }

    .product__item__pic {
        height: 300px;
    }

    .banner__item__pic, .blog__item__pic, .instagram__pic__item {
        height: 250px;
    }

    .categories__hot__deal img {
        height: 400px;
    }

    .mix {
        display: none;
    }

    .mixitup-container .mix {
        display: block;
    }

    .filter__controls li {
        cursor: pointer;
    }
</style>

<!-- Hero Section Begin -->
<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__items set-bg" data-setbg="img/hero/h3.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h6>Storytelling Through a Lens</h6>
                            <h2>Feel the Moment, Frame by Frame</h2>
                            <p>Every click captures emotion—SnapSell brings stories into focus through the art of photography.</p>
                            <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                            <div class="hero__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__items set-bg" data-setbg="img/hero/h4.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h6>Latest Snapshots</h6>
                            <h2>Art That Tells Your Story</h2>
                            <p>Premium, emotion-rich frames crafted to connect, inspire, and beautify your spaces.</p>
                            <a href="#" class="primary-btn">Explore More <span class="arrow_right"></span></a>
                            <div class="hero__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Banner Section Begin -->
<style>

     .banner {
        background-color: #ffe1c2; /* Light gray background */
        padding-top: 60px;
        padding-bottom: 60px;
    }

    .banner__item__text {
        color: black !important;
        font-weight: 700;
        text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.6);
    }

    .banner__item__text h2 {
        color: black !important;
        font-weight: 800;
        font-size: 26px;
    }

    .banner__item__text a {
        color: #000 !important;
        font-weight: 700;
        border-bottom: 2px solid #000;
        text-decoration: none;
    }

    .banner__item__text a:hover {
        color: #444;
        border-color: #444;
    }
    
</style>

<section class="banner spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 offset-lg-4 mb-5 pb-6">
                <div class="banner__item  mb-5 pb-6">
                    <div class="banner__item__pic p-4">
                        <img src="img/banner/b1.jpg" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Nature & Landscape</h2>
                        <a href="#">View Collections</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="banner__item banner__item--middle">
                    <div class="banner__item__pic">
                        <img src="img/banner/b2.jpg" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Culture & Festivals</h2>
                        <a href="#">View Collection</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="banner__item banner__item--last">
                    <div class="banner__item__pic">
                        <img src="img/banner/b3.jpg" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Urban & Architecture</h2>
                        <a href="#">View Collection</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End --> 

<!-- Product Section Begin -->

<style>
    .product {
        background-color: #f6e18e; /* Mild light yellow background */
        padding: 60px 0;
    }

    .filter__controls {
        padding-bottom: 30px;
        text-align: center;
        margin-bottom: 30px;
    }

    .filter__controls li {
        display: inline-block;
        margin: 0 15px;
        font-weight: 600;
        cursor: pointer;
        color: #333;
        transition: all 0.3s ease;
        font-size: 18px;
    }

    .filter__controls li.active,
    .filter__controls li:hover {
        color: #d4a017;
        text-decoration: underline;
    }

    .product__item__text h6 {
        color: #333 !important;
        font-weight: 700;
        font-size: 16px;
        margin-top: 10px;
    }

    .product__item__text h5 {
        color: #d4a017 !important;
        font-weight: 700;
        font-size: 18px;
    }

    .product__item__text .add-cart {
        color: #000 !important;
        font-weight: 600;
        display: inline-block;
        margin-top: 5px;
        transition: color 0.3s ease;
    }

    .product__item__text .add-cart:hover {
        color: #d4a017;
    }

    .rating i {
        color: #ccc;
        transition: color 0.3s;
    }

    .product__item:hover .rating i {
        color: #f5c518; /* gold star effect on hover */
    }
</style>

<section class="product spad product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="filter__controls">
                    <li class="active" data-filter="*">Best Sellers</li>
                    <li data-filter=".new-arrivals">New Arrivals</li>
                    <li data-filter=".sale">Sales</li>
                </ul>
            </div>
        </div>
        <div class="row product__filter mixitup-container">
            @foreach ($allProducts as $item)
                <div class="col-lg-3 col-md-6 col-sm-6 mix {{$item->type}}">
                    <div class="product__item">
                        <div class="product__item__pic set-bg"
                            data-setbg="{{URL::asset('uploads/products/' . $item->picture)}}">
                            <span class="label">New</span>
                            <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                <li><a href="{{URL::to('single/' . $item->id)}}"><img src="img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>{{$item->title}}</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>${{$item->price}}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Product Section End -->


<!-- Categories Section Begin -->
<style>
    .categories {
        background-color: #f6af84; /* Light aesthetic background */
        padding: 60px 0;
    }

    .categories__text h2 {
        font-size: 32px;
        font-weight: 700;
        line-height: 1.5;
    }

    .categories__text h2 .red-text {
        color: #c0392b; /* Red */
    }

    .categories__text h2 .orange-text {
        color: #e67e22; /* Orange */
    }

    .categories__hot__deal {
        position: relative;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
    }

    .categories__hot__deal img {
        width: 100%;
        height: auto;
        display: block;
    }

    .hot__deal__sticker {
        position: absolute;
        bottom: 10px;
        left: 10px;
        background: #c0392b;
        color: #ffe9e0;
        padding: 10px 15px;
        border-radius: 6px;
        font-size: 14px;
        text-align: center;
    }

    .hot__deal__sticker h5 {
        margin: 5px 0 0;
        font-size: 18px;
        font-weight: 700;
        color: #253594;
    }

    .categories__deal__countdown {
        background: #fb905e;
        padding: 25px 30px;
        border-radius: 10px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.05);
        color: #222;
    }

    .categories__deal__countdown span {
        text-transform: uppercase;
        color: #c0392b;
        font-weight: bold;
        font-size: 13px;
        letter-spacing: 1px;
    }

    .categories__deal__countdown h2 {
        font-size: 26px;
        font-weight: 800;
        margin: 10px 0 20px;
        color: #111;
    }

    .categories__deal__countdown__timer {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .cd-item {
        text-align: center;
    }

    .cd-item span {
        font-size: 24px;
        font-weight: bold;
        color: #c0392b;
    }

    .cd-item p {
        font-size: 12px;
        text-transform: uppercase;
        color: #555;
        margin: 0;
    }

    .primary-btn {
        background-color: #c0392b;
        color: #fff9e5;
        padding: 10px 20px;
        border-radius: 6px;
        font-weight: 600;
        text-decoration: none;
        transition: 0.3s;
    }

    .primary-btn:hover {
        background-color: #a93226;
        color: #fefcf6;
    }
</style>

<section class="categories spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="categories__text">
                    <h2>
                        <span class="red-text">Photography Passion</span> <br />
                        <span class="orange-text">SnapSell Picks</span> <br />
                        <span class="red-text">Limited Editions</span>
                    </h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories__hot__deal">
                    <img src="img/p1.jpg" alt="">
                    <div class="hot__deal__sticker">
                        <span>Deal Of</span>
                        <h5>$29.99</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1">
                <div class="categories__deal__countdown">
                    <span>Limited Time Offer</span>
                    <h2>Black Canvas Frame</h2>
                    <div class="categories__deal__countdown__timer" id="countdown">
                        <div class="cd-item"><span>3</span><p>Days</p></div>
                        <div class="cd-item"><span>1</span><p>Hours</p></div>
                        <div class="cd-item"><span>50</span><p>Minutes</p></div>
                        <div class="cd-item"><span>18</span><p>Seconds</p></div>
                    </div>
                    <a href="#" class="primary-btn">Shop now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Instagram Section Begin -->
<style>
    .instagram {
        background-color: #fef5e7; /* Soft background */
        padding: 60px 0;
    }

    .instagram__text {
        padding: 20px;
        background-color: #d690f8;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    .instagram__text h2 {
        font-size: 28px;
        font-weight: 700;
        color: #2c3e50; /* Dark blue-gray */
        margin-bottom: 15px;
    }

    .instagram__text p {
        color: #444; /* Dark gray */
        font-size: 16px;
        line-height: 1.6;
    }

    .instagram__text h3 {
        font-size: 22px;
        font-weight: 700;
        color: #c0392b; /* Accent red */
        margin-top: 20px;
    }

    .instagram__pic {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
    }

    .instagram__pic__item {
        background-size: cover;
        background-position: center;
        height: 150px;
        border-radius: 8px;
        transition: transform 0.3s ease;
    }

    .instagram__pic__item:hover {
        transform: scale(1.05);
    }
</style>

<section class="instagram spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="instagram__pic">
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/i1.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/i2.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/i3.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/i4.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/i5.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/i6.jpg"></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="instagram__text">
                    <h2>Follow SnapSell on Instagram</h2>
                    <p>Explore exclusive snapshots, behind-the-scenes stories, and share the emotion behind every click.</p>
                    <h3>#SnapSellMoments</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Instagram Section End -->

<script>
    // Set background images using data-setbg attribute
    document.querySelectorAll('.set-bg').forEach(function (el) {
        const bg = el.getAttribute('data-setbg');
        if (bg) el.style.backgroundImage = `url(${bg})`;
    });
</script>

<!-- Latest Blog Section Begin -->
<style>
    .latest {
        background-color: #fffaf3; /* Light background */
        padding: 60px 0;
    }

    .section-title {
        text-align: center;
        padding-top: 40px;
        margin-bottom: 40px;
    }

    .section-title span {
        font-size: 16px;
        color: #e67e22; /* Orange subheading */
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .section-title h2 {
        font-size: 36px;
        font-weight: 800;
        color: #c0392b; /* Red text for "Behind The Click" */
        margin-top: 10px;
    }

    .blog__item {
        background-color: #fdf6e3; /* Soft card background */
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
        margin-bottom: 30px;
    }

    .blog__item__pic {
        height: 220px;
        background-size: cover;
        background-position: center;
    }

    .blog__item__text {
        padding: 20px;
    }

    .blog__item__text span {
        display: flex;
        align-items: center;
        font-size: 14px;
        color: #636e72; /* Dark gray */
        margin-bottom: 10px;
    }

    .blog__item__text span img {
        margin-right: 8px;
    }

    .blog__item__text h5 {
        font-size: 20px;
        color: #c0392b; /* Red text for blog titles */
        font-weight: 700;
        margin-bottom: 15px;
    }

    .blog__item__text a {
        font-size: 14px;
        font-weight: 600;
        color: #c0392b;
        text-decoration: none;
    }

    .blog__item__text a:hover {
        text-decoration: underline;
    }
</style>

<section class="latest spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>SnapSell Journal</span>
                    <h2>Behind The Click</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ([
                ['date' => 'April 10, 2025', 'title' => 'A Sunset That Changed Everything', 'img' => 'blog1.jpg'],
                ['date' => 'April 18, 2025', 'title' => 'The Smiles of a Cultural Parade', 'img' => 'blog2.jpg'],
                ['date' => 'April 28, 2025', 'title' => 'Urban Life Through a Lens', 'img' => 'blog3.jpg'],
            ] as $blog)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/{{ $blog['img'] }}"></div>
                        <div class="blog__item__text">
                            <span><img src="img/icon/calendar.png" alt=""> {{ $blog['date'] }}</span>
                            <h5>{{ $blog['title'] }}</h5>
                            <a href="#">Read Story</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<script>
    // JavaScript to apply set-bg background images
    document.querySelectorAll('.set-bg').forEach(function (el) {
        const bg = el.getAttribute('data-setbg');
        if (bg) el.style.backgroundImage = `url(${bg})`;
    });
</script>
<!-- Latest Blog Section End -->


<x-footer />

<!-- MixItUp Script -->
<script>
    var mixer = mixitup('.product__filter', {
        selectors: {
            target: '.mix'
        },
        animation: {
            duration: 300
        }
    });
</script>
