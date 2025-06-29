<x-header />

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Explore Clicks</h4>
                    <div class="breadcrumb__links">
                        <a href="./index.html">Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shop Section Begin -->
<section class="shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop__sidebar">
                    <div class="shop__sidebar__search">
                        <form action="#">
                            <input type="text" placeholder="Search photos...">
                            <button type="submit"><span class="icon_search"></span></button>
                        </form>
                    </div>
                    <div class="shop__sidebar__accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__categories">
                                            <ul class="nice-scroll">
                                                <li><a href="#">Nature & Landscape</a></li>
                                                <li><a href="#">Urban & Architecture</a></li>
                                                <li><a href="#">Culture & Festivals</a></li>
                                                <li><a href="#">Wildlife & Animals</a></li>
                                                <li><a href="#">Fine Art Photography</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseTwo">Photographer's Signature</a>
                                </div>
                                <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__brand">
                                            <ul>
                                                <li><a href="#">LensCraft</a></li>
                                                <li><a href="#">Urban Lens</a></li>
                                                <li><a href="#">Nature Captured</a></li>
                                                <li><a href="#">Focus & Frame</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseThree">Filter Price</a>
                                </div>
                                <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__price">
                                            <ul>
                                                <li><a href="#">$0.00 - $50.00</a></li>
                                                <li><a href="#">$50.00 - $100.00</a></li>
                                                <li><a href="#">$100.00 - $200.00</a></li>
                                                <li><a href="#">$200.00 - $300.00</a></li>
                                                <li><a href="#">$300.00 - $400.00</a></li>
                                                <li><a href="#">$400.00+</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseFour">Image Type</a>
                                </div>
                                <div id="collapseFour" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__size">
                                            <label for="jpg">JPG</label>
                                            <input type="radio" id="jpg" name="image-type">
                                            <label for="png">PNG</label>
                                            <input type="radio" id="png" name="image-type">
                                            <label for="gif">GIF</label>
                                            <input type="radio" id="gif" name="image-type">
                                            <label for="tiff">TIFF</label>
                                            <input type="radio" id="tiff" name="image-type">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="shop__product__option">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="shop__product__option__left">
                                <p>Showing 1–12 of {{ count($products) }} results</p>
                            </div>
                        </div>
                        {{-- <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="shop__product__option__right">
                                <p>Sort by Price:</p>
                                <select>
                                    <option value="">Low To High</option>
                                    <option value="">$0 - $55</option>
                                    <option value="">$55 - $100</option>
                                </select>
                            </div>
                        </div> --}}
                    </div>
                </div>

                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item {{ $product->on_sale ? 'sale' : '' }}">
                                <div class="product__item__pic">
                                    <img src="{{ asset('img/product/' . ($product->picture ?: 'default.jpg')) }}"
                                        class="img-fluid" alt="{{ $product->title }}"
                                        style="height: 250px; object-fit: cover; width: 100%;">
                                    @if ($product->on_sale)
                                        <span class="label">Sale</span>
                                    @endif
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="{{ asset('img/icon/heart.png') }}" alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('img/icon/compare.png') }}"
                                                    alt=""><span>Compare</span></a></li>
                                        <li><a href="{{URL::to('single/' . $product->id)}}"><img
                                                    src="{{ asset('img/icon/search.png') }}" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text text-center">
                                    <h6 style="margin-top: 10px;">
                                        <a href="#" style="color: #923232;">{{ $product->title ?? 'Untitled Photo' }}</a>
                                    </h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        @for ($i = 0; $i < 5; $i++)
                                            <i class="fa fa-star{{ $i < $product->rating ? '' : '-o' }}"></i>
                                        @endfor
                                    </div>
                                    <h5>${{ number_format($product->price, 2) }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>




                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__pagination">
                            <a class="active" href="#">1</a>
                            <span>...</span>
                            <a href="#">3</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Section End -->

<x-footer />