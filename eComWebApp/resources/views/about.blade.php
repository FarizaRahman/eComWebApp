<x-header />

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>About Us</h4>
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}">Home</a>
                        <span>About Us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- About Section Begin -->
<section class="about spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about__pic text-center">
                    <img src="{{ asset('img/about/p_2.jpg') }}" alt="About SnapSell" class="img-fluid rounded">
                </div>
            </div>
        </div>
        <div class="row mt-5 text-center">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="about__item p-4 shadow rounded h-100">
                    <h4>Who I Am</h4>
                    <p>I’m a storyteller with a camera, capturing life’s beauty through culture, nature, and urban
                        moments.
                        SnapSell is my way of sharing the joy, emotion, and stories behind every photograph I take.
                        Each image isn’t just a picture — it’s a piece of life, frozen to make someone smile.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="about__item p-4 shadow rounded h-100">
                    <h4>What I Do</h4>
                    <p>I capture and curate photographs that tell real stories — from vibrant festivals and serene
                        landscapes to the hidden beauty of everyday city life.
                        Through SnapSell, I turn these moments into lasting memories that connect with people
                        emotionally and visually.
                        Whether it’s for inspiration, decor, or a meaningful gift — every photo I offer is made to share
                        a little happiness.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="about__item p-4 shadow rounded h-100">
                    <h4>Why Choose SnapSell</h4>
                    <p>Because every photo is more than just an image — it's a feeling, a moment, a memory. At SnapSell,
                        I focus on capturing the beauty in real life — whether it's the energy of a festival, the calm
                        of nature, or the charm of urban scenes. My work is thoughtful, authentic, and created to
                        connect with you on a deeper level. If you value meaningful, emotion-rich photography with a
                        unique perspective, SnapSell is for you.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Testimonial Section Begin -->
<section class="testimonial bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="testimonial__text">
                    <span class="icon_quotations"></span>
                    <p>“A passionate seeker of moments, I explore the world through my lens to capture life’s hidden
                        wonders. From bustling city streets to tranquil natural scenes and vibrant cultural
                        celebrations, I find beauty in the unexpected and meaning in the everyday. At SnapSell, my
                        mission is simple: to create photographs that inspire, uplift, and invite you to see the world
                        with fresh eyes.”</p>
                    <div class="testimonial__author d-flex align-items-center mt-4">
                        <div class="testimonial__author__pic me-3">
                            <img src="{{ asset('img/about/p1.jpg') }}" alt="" class="rounded-circle" width="60">
                        </div>
                        <div class="testimonial__author__text">
                            <h5>Emily Carter</h5>
                            <p class="mb-0">Founder & Visual Storyteller of SnapSell</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <img src="{{ asset('img/about/p1.jpg') }}" alt="Testimonial" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->

<!-- Counter Section Begin -->
<section class="counter spad bg-dark text-white py-5">
    <div class="container">
        <div class="row text-center">
            <!-- Registered Photographers -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="counter__item p-4 rounded shadow-lg bg-gradient">
                    <h2 class="cn_num display-4" data-count="250">0</h2>
                    <p class="lead">Registered Photographers</p>
                </div>
            </div>
            <!-- Unique Categories -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="counter__item p-4 rounded shadow-lg bg-gradient">
                    <h2 class="cn_num display-4" data-count="50">0</h2>
                    <p class="lead">Unique Categories</p>
                </div>
            </div>
            <!-- Photos Sold -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="counter__item p-4 rounded shadow-lg bg-gradient">
                    <h2 class="cn_num display-4" data-count="1500">0</h2>
                    <p class="lead">Photos Sold</p>
                </div>
            </div>
            <!-- Satisfied Customers -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="counter__item p-4 rounded shadow-lg bg-gradient">
                    <h2 class="cn_num display-4" data-count="99">0</h2><strong>%</strong>
                    <p class="lead">Satisfied Customers</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counter Section End -->

<!-- Custom Styling and Animation -->
<style>
    .counter__item {
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 10px;
        padding: 30px;
        color: white;
        transition: transform 0.3s ease, background-color 0.3s ease;
    }

    .counter__item:hover {
        transform: translateY(-10px);
        background-color: rgba(0, 0, 0, 0.8);
    }

    .cn_num {
        font-size: 3rem;
        font-weight: 700;
        letter-spacing: 2px;
    }

    .counter__item p {
        font-size: 1.1rem;
        margin-top: 10px;
        font-weight: 500;
    }

    .bg-gradient {
        background: linear-gradient(135deg, #f46b45, #f46b45, #f47c25);
    }

    .counter {
        background-color: #222;
    }
</style>

<!-- JavaScript for Animated Counter -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const counters = document.querySelectorAll(".cn_num");
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute("data-count");
                const count = +counter.innerText;
                const increment = target / 200;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCount, 1);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });
    });
</script>


<!-- Photography Categories Section Begin -->

<style>
    .category-img {
        height: 250px;
        object-fit: cover;
        width: 100%;
    }
</style>
<section class="team spad">
    <div class="container">
        <div class="section-title text-center mb-5">
            <span>Explore</span>
            <h2>Top Photography Categories</h2>
        </div>
        <div class="row text-center">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="team__item shadow rounded p-3">
                    <img src="{{ asset('img/about/p3.jpg') }}" alt="Nature Photography"
                        class="img-fluid rounded mb-3 category-img">
                    <h4>“Where silence speaks and beauty breathes"</h4>
                    <p>Whispers echo through the trees,
                        Carried softly on the breeze.
                        In every leaf and mountain high,
                        Nature speaks without a cry.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="team__item shadow rounded p-3">
                    <img src="{{ asset('img/about/p4.jpg') }}" alt="Urban Photography"
                        class="img-fluid rounded mb-3 category-img">
                    <h4>“Tradition lives through colors, faces, and moments"</h4>
                    <p>Drums and colors fill the air,
                        Traditions woven everywhere.
                        In every dance, a tale is spun,
                        Of who we are and where we’re from.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="team__item shadow rounded p-3">
                    <img src="{{ asset('img/about/p5.jpg') }}" alt="Portrait Photography"
                        class="img-fluid rounded mb-3 category-img">
                    <h4>“Every city heartbeat tells a tale.”
                    </h4>
                    <p>In concrete veins, the city flows,
                        With hurried steps and neon glows.
                        Stories rise where strangers meet,
                        In crowded trains and busy streets.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Photography Categories Section End -->

<x-footer />

<!-- Search Modal -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>

<!-- JS Plugins -->
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('js/mixitup.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>