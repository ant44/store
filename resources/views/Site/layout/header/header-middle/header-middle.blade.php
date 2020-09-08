<div class="container">
    <div class="header-left">
        <button class="mobile-menu-toggler">
            <span class="sr-only">فهرست</span>
            <i class="icon-bars"></i>
        </button>

        <a href="index10.html" class="logo">
            <img src="{{url('Site/images/demos/demo-4/logo.png')}}" alt="Molla Logo" width="105" height="25">
        </a>
    </div><!-- End .header-left -->

    <div class="header-center">
        <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
            <form action="#" method="get">
                <div class="header-search-wrapper search-wrapper-wide">
                    <label for="q" class="sr-only">جستجو</label>
                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                    <input type="search" class="form-control" name="q" id="q" placeholder="جستجوی محصولات ..." required>
                </div><!-- End .header-search-wrapper -->
            </form>
        </div><!-- End .header-search -->
    </div>

    <div class="header-right">
        <div class="dropdown compare-dropdown">
            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="مقایسه کردن محصولات" aria-label="Compare Products">
                <div class="icon">
                    <i class="icon-random"></i>
                </div>
                <p>مقایسه</p>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <ul class="compare-products">
                    <li class="compare-product">
                        <a href="#" class="btn-remove" title="حذف محصول"><i class="icon-close"></i></a>
                        <h4 class="compare-product-title"><a href="product.html">گوشی سامسونگ مدل S9</a>
                        </h4>
                    </li>
                    <li class="compare-product">
                        <a href="#" class="btn-remove" title="حذف محصول"><i class="icon-close"></i></a>
                        <h4 class="compare-product-title"><a href="product.html">گوشی سامسونگ مدل S8</a>
                        </h4>
                    </li>
                </ul>

                <div class="compare-actions">
                    <a href="#" class="action-link">حذف همه</a>
                    <a href="#" class="btn btn-outline-primary-2"><span>مقایسه</span><i class="icon-long-arrow-left"></i></a>
                </div>
            </div><!-- End .dropdown-menu -->
        </div><!-- End .compare-dropdown -->

        <div class="wishlist">
            <a href="wishlist.html" title="لیست محصولات مورد علاقه شما">
                <div class="icon">
                    <i class="icon-heart-o"></i>
                    <span class="wishlist-count badge">3</span>
                </div>
                <p>مورد علاقه</p>
            </a>
        </div><!-- End .compare-dropdown -->

        <div class="dropdown cart-dropdown">
            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                <div class="icon">
                    <i class="icon-shopping-cart"></i>
                    <span class="cart-count">2</span>
                </div>
                <p>سبد خرید</p>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-cart-products">
                    <div class="product">
                        <div class="product-cart-details">
                            <h4 class="product-title">
                                <a href="product.html">کتونی ورزشی مخصوص دویدن رنگ بژ</a>
                            </h4>

                            <span class="cart-product-info">
                                <span class="cart-product-qty">1 x </span>
                                <span class="cart-product-qty d-inline-block  text-warning">x</span>
                                84,000 تومان
                            </span>
                        </div><!-- End .product-cart-details -->

                        <figure class="product-image-container">
                            <a href="product.html" class="product-image">
                                <img src="{{url('Site/images/products/cart/product-1.jpg')}}" alt="محصول">
                            </a>
                        </figure>
                        <a href="#" class="btn-remove" title="حذف محصول"><i class="icon-close"></i></a>
                    </div><!-- End .product -->

                    <div class="product">
                        <div class="product-cart-details">
                            <h4 class="product-title">
                                <a href="product.html">لباس زنانه آبی</a>
                            </h4>

                            <span class="cart-product-info">
                                <span class="cart-product-qty">1 x </span>
                                <span class="cart-product-qty d-inline-block  text-warning">x</span>
                                28,000 تومان
                            </span>
                        </div><!-- End .product-cart-details -->

                        <figure class="product-image-container">
                            <a href="product.html" class="product-image">
                                <img src="{{url('Site/images/products/cart/product-2.jpg')}}" alt="محصول">
                            </a>
                        </figure>
                        <a href="#" class="btn-remove" title="حذف محصول"><i class="icon-close"></i></a>
                    </div><!-- End .product -->
                </div><!-- End .cart-product -->

                <div class="dropdown-cart-total">
                    <span>مجموع : </span>

                    <span class="cart-total-price">112,000 تومان</span>
                </div><!-- End .dropdown-cart-total -->

                <div class="dropdown-cart-action">
                    <a href="cart.html" class="btn btn-primary">مشاهده سبد خرید</a>
                    <a href="checkout.html" class="btn btn-outline-primary-2"><span>پرداخت</span><i class="icon-long-arrow-left"></i></a>
                </div><!-- End .dropdown-cart-total -->
            </div><!-- End .dropdown-menu -->
        </div><!-- End .cart-dropdown -->
    </div><!-- End .header-right -->
</div><!-- End .container -->
