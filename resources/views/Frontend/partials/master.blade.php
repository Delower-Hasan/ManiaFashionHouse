<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('meta_title','Login') </title>
    <meta name="description" content=@yield('meta_description','login')>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ url('/frontend/assets') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/frontend/assets') }}/css/animate.min.css">
    <link rel="stylesheet" href="{{ url('/frontend/assets') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ url('/frontend/assets') }}/css/slick.css">
    <link rel="stylesheet" href="{{ url('/frontend/assets') }}/css/default.css">
    <link rel="stylesheet" href="{{ url('/frontend/assets') }}/css/all.min.css">
    <link rel="stylesheet" href="{{ url('/frontend/assets') }}/css/ma5-menu.min.css">
    <link rel="stylesheet" href="{{ url('/frontend/assets') }}/css/all-universal.css">
    <link rel="stylesheet" href="{{ url('/frontend/assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ url('/frontend/assets') }}/css/responsive.css">
</head>

<body>

    <header>
        <div class="heder-wrapper header-scroll scroll-header">
            <div class="container">
                <div class="row">
                    <!-- main-logo-here  -->
                    <div class="col-xl-2 col-lg-2 d-flex align-items-center col-0">
                        <div class="logo d-none d-lg-block">
                            <img src="{{ url('/frontend/assets') }}/./images/custom/logo(2).png" alt="image">
                        </div>
                    </div>
                    <!-- main-logo-here  -->
                    <!-- responsive btn-logo-here  -->
                    <div class="col-md-9 col-sm-7 col-6 d-lg-none d-flex align-items-center ">
                        <button class="ma5menu__toggle" type="button">
                            <span class="ma5menu__icon-toggle"></span><span class="ma5menu__sr-only">Menu</span>
                        </button>
                    </div>
                    <div class="col-xl-7 col-md-7 d-none d-lg-inline-block">
                        <div class="main-manu">
                            <nav id="mobile-menu">
                                <ul class="basic-menu">
                                    <li><a href="#">Home</a> </li>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="#cta-01">Pages</a></li>
                                    <li><a href="listing-left.html">WOMEN</a>
                                        <div class="mega-menu women">
                                            <div class="row">
                                                <div class="col-xl-8 col-md-12">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <div class="singel-mega-manu-item">
                                                                <h5><a class="tt-title-submenu"
                                                                        href="index.html">TOPS</a></h5>
                                                                <ul class="megamenu-submenu">
                                                                    <li><a href="index.html">Blouses & Shirts</a></li>
                                                                    <li><a href="index.html">Dresses <div
                                                                                class="status d-inline-block"><span
                                                                                    class="new">New</span></div> </a>
                                                                    </li>
                                                                    <li><a href="index.html">Tops </a></li>
                                                                    <li><a href="index.html">Sleeveless Tops</a></li>
                                                                    <li><a href="index.html">Sweaters</a></li>
                                                                    <li><a href="index.html">Jackets</a></li>
                                                                    <li><a href="index.html">Outerwear</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="singel-mega-manu-item">
                                                                <h5><a class="tt-title-submenu"
                                                                        href="index.html">BOTTOMS</a></h5>
                                                                <ul class="megamenu-submenu">

                                                                    <li><a href="index.html">Trousers
                                                                            <div class="status d-inline-block"><span
                                                                                    class="fatured">Fatured</span>
                                                                            </div> </a></li>
                                                                    <li><a href="index.html">Leggings </a></li>
                                                                    <li><a href="index.html"> Jeans</a></li>
                                                                    <li><a href="index.html">Jumpsuit & Shorts</a></li>
                                                                    <li><a href="index.html">Skirts</a></li>
                                                                    <li><a href="index.html">Tights</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-3">
                                                            <div class="singel-mega-manu-item">
                                                                <h5><a class="tt-title-submenu"
                                                                        href="index.html">ACCESSORIES</a></h5>
                                                                <ul class="megamenu-submenu">
                                                                    <li><a href="index.html">Hats</a></li>
                                                                    <li><a href="index.html">Scarves & Snoods</a></li>
                                                                    <li><a href="index.html">Belts</a></li>
                                                                    <li><a href="index.html">Bags <div
                                                                                class="status d-inline-block"><span
                                                                                    class="new">New</span></div> </a>
                                                                    </li>
                                                                    <li><a href="index.html">Shoes <div
                                                                                class="status d-inline-block"><span
                                                                                    class="off">Sale 15%</span></div>
                                                                        </a></li>
                                                                    <li><a href="index.html">Tops </a></li>
                                                                    <li><a href="index.html">Sunglasses</a></li>
                                                                    <li><a href="index.html">TOP BRANDS</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="singel-mega-manu-item">
                                                                <h5><a class="tt-title-submenu" href="index.html">Top
                                                                        Brands</a></h5>

                                                                <div class="brans-wrapper">
                                                                    <div class="singel-image">
                                                                        <div class="overly">
                                                                            <img src="{{ url('/frontend/assets') }}/./images/myuses/megamenu/brand-img-01.png"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="singel-image">
                                                                        <div class="overly">
                                                                            <img src="{{ url('/frontend/assets') }}/./images/myuses/megamenu/brand-img-06.png"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="singel-image">
                                                                        <div class="overly">
                                                                            <img src="{{ url('/frontend/assets') }}/./images/myuses/megamenu/brand-img-02.png"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="singel-image">
                                                                        <div class="overly">
                                                                            <img src="{{ url('/frontend/assets') }}/./images/myuses/megamenu/brand-img-03.png"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="singel-image">
                                                                        <div class="overly">
                                                                            <img src="{{ url('/frontend/assets') }}/./images/myuses/megamenu/brand-img-04.png"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="singel-image">
                                                                        <div class="overly">
                                                                            <img src="{{ url('/frontend/assets') }}/./images/myuses/megamenu/brand-img-05.png"
                                                                                alt="">
                                                                        </div>
                                                                    </div>


                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- col-md-8 end -->

                                                <div class="col-xl-4 col-md-6 d-none d-lg-inline-block">
                                                    <div class="singel-mega-manu-item ">
                                                        <h5><a class="tt-title-submenu" href="index.html">SPECIALS</a>
                                                        </h5>
                                                    </div>
                                                    <div class="mega-slider">
                                                        <ul class="mega-menu-slider">
                                                            <li class="slide-item"> <img
                                                                    src="{{ url('/frontend/assets') }}/./images/myuses/megamenu/product-01.jpg"
                                                                    alt=""> </li>
                                                            <li class="slide-item"> <img
                                                                    src="{{ url('/frontend/assets') }}/./images/myuses/megamenu/product-02.jpg"
                                                                    alt=""> </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                                <!-- row div  -->
                                            </div>
                                        </div>
                                    <li><a href="#">MAN</a>
                                        <div class="mega-menu men">
                                            <div class="row">
                                                <div class="col-xl-8 col-md-12">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <div class="singel-mega-manu-item">
                                                                <h5><a class="tt-title-submenu"
                                                                        href="index.html">TOPS</a></h5>
                                                                <ul class="megamenu-submenu">
                                                                    <li><a href="index.html">Blouses & Shirts</a></li>
                                                                    <li><a href="index.html">Dresses <div
                                                                                class="status d-inline-block"><span
                                                                                    class="new">New</span></div> </a>
                                                                    </li>
                                                                    <li><a href="index.html">Tops </a></li>
                                                                    <li><a href="index.html">Sleeveless Tops</a></li>
                                                                    <li><a href="index.html">Sweaters</a></li>
                                                                    <li><a href="index.html">Jackets</a></li>
                                                                    <li><a href="index.html">Outerwear</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="singel-mega-manu-item">
                                                                <h5><a class="tt-title-submenu"
                                                                        href="index.html">BOTTOMS</a></h5>
                                                                <ul class="megamenu-submenu">

                                                                    <li><a href="index.html">Trousers
                                                                            <div class="status d-inline-block"><span
                                                                                    class="fatured">Fatured</span>
                                                                            </div> </a></li>
                                                                    <li><a href="index.html">Leggings </a></li>
                                                                    <li><a href="index.html"> Jeans</a></li>
                                                                    <li><a href="index.html">Jumpsuit & Shorts</a></li>
                                                                    <li><a href="index.html">Skirts</a></li>
                                                                    <li><a href="index.html">Tights</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-3">
                                                            <div class="singel-mega-manu-item">
                                                                <h5><a class="tt-title-submenu"
                                                                        href="index.html">ACCESSORIES</a></h5>
                                                                <ul class="megamenu-submenu">
                                                                    <li><a href="index.html">Hats</a></li>
                                                                    <li><a href="index.html">Scarves & Snoods</a></li>
                                                                    <li><a href="index.html">Belts</a></li>
                                                                    <li><a href="index.html">Bags <div
                                                                                class="status d-inline-block"><span
                                                                                    class="new">New</span></div> </a>
                                                                    </li>
                                                                    <li><a href="index.html">Shoes <div
                                                                                class="status d-inline-block"><span
                                                                                    class="off">Sale 15%</span></div>
                                                                        </a></li>
                                                                    <li><a href="index.html">Tops </a></li>
                                                                    <li><a href="index.html">Sunglasses</a></li>
                                                                    <li><a href="index.html">TOP BRANDS</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="singel-mega-manu-item">
                                                                <h5><a class="tt-title-submenu" href="index.html">Top
                                                                        Brands</a></h5>

                                                                <div class="brans-wrapper">
                                                                    <div class="singel-image">
                                                                        <div class="overly">
                                                                            <img src="{{ url('/frontend/assets') }}/./images/myuses/megamenu/brand-img-01.png"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="singel-image">
                                                                        <div class="overly">
                                                                            <img src="{{ url('/frontend/assets') }}/./images/myuses/megamenu/brand-img-06.png"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="singel-image">
                                                                        <div class="overly">
                                                                            <img src="{{ url('/frontend/assets') }}/./images/myuses/megamenu/brand-img-02.png"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="singel-image">
                                                                        <div class="overly">
                                                                            <img src="{{ url('/frontend/assets') }}/./images/myuses/megamenu/brand-img-03.png"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="singel-image">
                                                                        <div class="overly">
                                                                            <img src="{{ url('/frontend/assets') }}/./images/myuses/megamenu/brand-img-04.png"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="singel-image">
                                                                        <div class="overly">
                                                                            <img src="{{ url('/frontend/assets') }}/./images/myuses/megamenu/brand-img-05.png"
                                                                                alt="">
                                                                        </div>
                                                                    </div>


                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- col-md-8 end -->

                                                <div class="col-xl-4 col-md-6 d-none d-lg-inline-block">
                                                    <div class="singel-mega-manu-item ">
                                                        <h5><a class="tt-title-submenu" href="index.html">SPECIALS</a>
                                                        </h5>
                                                    </div>
                                                    <div class="mega-slider">
                                                        <ul class="mega-menu-slider">
                                                            <li class="slide-item"> <img
                                                                    src="{{ url('/frontend/assets') }}/./images/myuses/megamenu/product-01.jpg"
                                                                    alt=""> </li>
                                                            <li class="slide-item"> <img
                                                                    src="{{ url('/frontend/assets') }}/./images/myuses/megamenu/product-02.jpg"
                                                                    alt=""> </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                                <!-- row div  -->
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3 col-sm-5 col-6  d-flex align-items-center col-4">
                        <div class="header-right">
                            <ul>
                                <li>
                                    <a class="search-bar" href="#"><img src="{{ url('/frontend/assets') }}/images\icon\search.png" alt=""></a>
                                </li>

                                <li>
                                    <a href="#" class="shop-icon">
                                        <div class="shop-count">
                                            <div class="count">2</div>
                                        </div>
                                        <img src="{{ url('/frontend/assets') }}/images\icon\supermarket.png" alt="">
                                    </a>
                                    <div class="shop-items-details d-none d-lg-inline-block">
                                        <div class="singel-item-product">
                                            <div class="singel-item-product-img"><img
                                                    src="{{ url('/frontend/assets') }}/images/myuses/product/product-01.jpg"></div>
                                            <div class="singel-item-product-descriptions">
                                                <h6 class="tt-title">Flared Shift Dress</h6>
                                                <ul class="singel-item-productadd-info">
                                                    <li>Yellow, Material 2, Size 58,</li>
                                                    <li>Vendor: Addidas</li>
                                                </ul>
                                                <div class="singel-item-productquantity d-inline-block">1 X</div>
                                                <div class="singel-item-product-price d-inline-block">$12</div>
                                            </div>
                                            <div class="singel-item-product-close"><a href="#"> <i
                                                        class="far fa-trash-alt"></i></a></div>
                                        </div>
                                        <div class="singel-item-product">
                                            <div class="singel-item-product-img"><img
                                                    src="{{ url('/frontend/assets') }}/images/myuses/product/product-01.jpg"></div>
                                            <div class="singel-item-product-descriptions">
                                                <h6 class="tt-title">Flared Shift Dress</h6>
                                                <ul class="singel-item-productadd-info">
                                                    <li>Yellow, Material 2, Size 58,</li>
                                                    <li>Vendor: Addidas</li>
                                                </ul>
                                                <div class="singel-item-productquantity d-inline-block">1 X</div>
                                                <div class="singel-item-product-price d-inline-block">$12</div>
                                            </div>
                                            <div class="singel-item-product-close"><a href="#"> <i
                                                        class="far fa-trash-alt"></i></a></div>
                                        </div>
                                        <!-- line-braker  -->
                                        <hr>
                                        <div class="cart-suscription d-flex justify-content-between ">
                                            <h6>SUBTOTAL:
                                            </h6>
                                            <h6>$324</h6>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="#" class="btn">cart-suscription</a>
                                        </div>

                                    </div>

                                </li>
                                <li>
                                    <a class="my-profile" href="#"><img src="{{ url('/frontend/assets') }}/images\icon\user.png" alt=""></a>
                                    <div class="user-list d-none d-lg-inline-block">
                                        <ul>
                                            <li><a href="login.html"><i class="far fa-user"></i>Account</a></li>
                                            <li><a href="login.html"><i class="far fa-heart"></i>WishList</a></li>
                                            <li><a href="login.html"><i class="fas fa-balance-scale"></i> Compare</a>
                                            </li>
                                            <li><a href="login.html"><i class="fas fa-balance-scale"></i>Check Out</a>
                                            </li>
                                            <li><a href="login.html"><i class="fas fa-user-lock"></i>Sign In</a></li>
                                            <li><a href="login.html"><i class="fas fa-user-lock"></i>Log In</a></li>
                                            <li><a href="login.html"><i class="far fa-user"></i>Register</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="row">

                    <div class="col-12">
                        <div class="logo2 text-center d-lg-none">
                            <img src="{{ url('/frontend/assets') }}/./images/custom/logo(2).png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="searh-bar-top">
                <div class="shearch-bar-wrapper">
                    <form action="#">
                        <label for="search">What are you Looking for</label>
                        <input type="text" id="search" placeholder="SEARCH PRODUCTS...">

                    </form>
                    <div class="search-bar-top-icon">
                        <div class="cross">
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="search">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="responsive-shop-items-details d-lg-none">
                <div class="side-menu-tittle d-flex justify-content-between justify-content-center">
                    <h6>SHOPPING CART</h6>
                    <span class="cross"></span>
                </div>
                <hr>
                <di.shop-items-detailsv class="singel-item-product">
                    <div class="singel-item-product-img"><img src="images/myuses/product/product-01.jpg"></div>
                    <div class="singel-item-product-descriptions">
                        <h6 class="tt-title">Flared Shift Dress</h6>
                        <ul class="singel-item-productadd-info">
                            <li>Yellow, Material 2, Size 58,</li>
                            <li>Vendor: Addidas</li>
                        </ul>
                        <div class="singel-item-productquantity d-inline-block">1 X</div>
                        <div class="singel-item-product-price d-inline-block">$12</div>
                    </div>
                    <div class="singel-item-product-close"><a href="#"> <i class="far fa-trash-alt"></i></a></div>
                </di.shop-items-detailsv>
                <div class="singel-item-product">
                    <div class="singel-item-product-img"><img src="images/myuses/product/product-01.jpg"></div>
                    <div class="singel-item-product-descriptions">
                        <h6 class="tt-title">Flared Shift Dress</h6>
                        <ul class="singel-item-productadd-info">
                            <li>Yellow, Material 2, Size 58,</li>
                            <li>Vendor: Addidas</li>
                        </ul>
                        <div class="singel-item-productquantity d-inline-block">1 X</div>
                        <div class="singel-item-product-price d-inline-block">$12</div>
                    </div>
                    <div class="singel-item-product-close"><a href="#"> <i class="far fa-trash-alt"></i></a></div>
                </div>
                <!-- line-braker  -->
                <hr>
                <div class="cart-suscription d-flex justify-content-around">
                    <h6>SUBTOTAL:
                    </h6>
                    <h6>$324</h6>
                </div>
                <div class="cart-btn">
                    <a href="#" class="btn">cart-suscription</a>
                </div>
                <div class="cart-btn border-less">
                    <a href="#" class="btn">cart-suscription</a>
                </div>
            </div>
            <div class="responsive-user-list d-lg-none">
                <div class="side-menu-tittle d-flex justify-content-between justify-content-center">
                    <h6>MY PROFILE</h6>
                    <span class="cross cross-2"></span>
                </div>
                <hr>
                <ul>
                    <li><a href="login.html"><i class="far fa-user"></i>Account</a></li>
                    <li><a href="login.html"><i class="far fa-heart"></i>WishList</a></li>
                    <li><a href="login.html"><i class="fas fa-balance-scale"></i> Compare</a></li>
                    <li><a href="login.html"><i class="fas fa-balance-scale"></i>Check Out</a></li>
                    <li><a href="login.html"><i class="fas fa-user-lock"></i>Sign In</a></li>
                    <li><a href="login.html"><i class="fas fa-user-lock"></i>Log In</a></li>
                    <li><a href="login.html"><i class="far fa-user"></i>Register</a></li>
                </ul>
            </div>
            <div class="mobile-manu d-none">

                <!-- source for mobile menu start -->
                <ul class="site-menu">

                    <li><a href="#">Home</a> </li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="#cta-01">Pages</a></li>
                    <li><a href="listing-left.html">WOMEN</a>
                        <ul class="megamenu-submenu">
                            <li><a href="index.html">Blouses & Shirts</a></li>
                            <li><a href="index.html">Dresses <div class="status d-inline-block"><span
                                            class="new">New</span></div> </a></li>
                            <li><a href="index.html">Tops </a></li>
                            <li><a href="index.html">Sleeveless Tops</a></li>
                            <li><a href="index.html">Sweaters</a></li>
                            <li><a href="index.html">Jackets</a></li>
                            <li><a href="index.html">Outerwear</a></li>
                        </ul>


                        <ul class="megamenu-submenu">

                            <li><a href="index.html">Trousers
                                    <div class="status d-inline-block"><span class="fatured">Fatured</span>
                                    </div> </a></li>
                            <li><a href="index.html">Leggings </a></li>
                            <li><a href="index.html"> Jeans</a></li>
                            <li><a href="index.html">Jumpsuit & Shorts</a></li>
                            <li><a href="index.html">Skirts</a></li>
                            <li><a href="index.html">Tights</a></li>
                        </ul>

                        <ul class="megamenu-submenu">
                            <li><a href="index.html">Hats</a></li>
                            <li><a href="index.html">Scarves & Snoods</a></li>
                            <li><a href="index.html">Belts</a></li>
                            <li><a href="index.html">Bags <div class="status d-inline-block"><span
                                            class="new">New</span></div> </a></li>
                            <li><a href="index.html">Shoes <div class="status d-inline-block"><span class="off">Sale
                                            15%</span></div> </a></li>
                            <li><a href="index.html">Tops </a></li>
                            <li><a href="index.html">Sunglasses</a></li>
                            <li><a href="index.html">TOP BRANDS</a></li>
                        </ul>



                    <li><a href="#">MAN</a>


                        <ul class="megamenu-submenu">
                            <li><a href="index.html">Blouses & Shirts</a></li>
                            <li><a href="index.html">Dresses <div class="status d-inline-block"><span
                                            class="new">New</span></div> </a></li>
                            <li><a href="index.html">Tops </a></li>
                            <li><a href="index.html">Sleeveless Tops</a></li>
                            <li><a href="index.html">Sweaters</a></li>
                            <li><a href="index.html">Jackets</a></li>
                            <li><a href="index.html">Outerwear</a></li>
                        </ul>

                        <ul class="megamenu-submenu">

                            <li><a href="index.html">Trousers
                                    <div class="status d-inline-block"><span class="fatured">Fatured</span>
                                    </div> </a></li>
                            <li><a href="index.html">Leggings </a></li>
                            <li><a href="index.html"> Jeans</a></li>
                            <li><a href="index.html">Jumpsuit & Shorts</a></li>
                            <li><a href="index.html">Skirts</a></li>
                            <li><a href="index.html">Tights</a></li>
                        </ul>


                        <ul class="megamenu-submenu">
                            <li><a href="index.html">Hats</a></li>
                            <li><a href="index.html">Scarves & Snoods</a></li>
                            <li><a href="index.html">Belts</a></li>
                            <li><a href="index.html">Bags <div class="status d-inline-block"><span
                                            class="new">New</span></div> </a></li>
                            <li><a href="index.html">Shoes <div class="status d-inline-block"><span class="off">Sale
                                            15%</span></div> </a></li>
                            <li><a href="index.html">Tops </a></li>
                            <li><a href="index.html">Sunglasses</a></li>
                            <li><a href="index.html">TOP BRANDS</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Contact</a></li>

                </ul>
                <!-- source for mobile menu end -->

            </div>

        </div>
  
    </header>
 
    <main class="pt-60">
     <!-- Bread crumb -->
     <div>
        <nav aria-label="breadcrumb">
           @yield('breadcrumb')
          </nav>
     </div>
    <!-- Bread crumb -->
           
       @yield('content')

    </main>
    <footer>
        <section>
            <div class="footer-contact-with-social theme-bg d-none d-sm-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 d-flex align-items-center">
                            <h4>BE IN TOUCH WITH US:</h4>

                        </div>
                        <div class="col-md-6 col-sm-7 d-flex align-items-center">
                            <div class="input-group ">
                                <input type="text" class="form-control" placeholder="Enter your e-mail">
                                <button class="btn" type="button">JOIN US</button>
                            </div>
                        </div>
                        <div class="col-md-3   d-flex align-items-center">
                            <div class="social-icon footer-social d-none d-md-inline-block">
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-behance"></i></a>
                                <a href=""><i class="fab fa-linkedin"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                                <a href=""><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="footer-wrapper ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3  col-sm-6 col-12">
                            <div class="singel-footer-items">
                                <div class="footer-tittle">
                                    <h4>CATEGORIES</h4>
                                </div>
                                <ul>
                                    <li><a href="">Women</a></li>
                                    <li><a href="">Men</a></li>
                                    <li><a href="">Accessories</a></li>
                                    <li><a href="">Shoes</a></li>
                                    <li><a href="">New Arrivals</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3  col-sm-6 col-12">
                            <div class="singel-footer-items">
                                <div class="footer-tittle">
                                    <h4>MY ACCOUNT</h4>
                                </div>
                                <ul>
                                    <li><a href="">Orders</a></li>
                                    <li><a href="">Compare</a></li>
                                    <li><a href="">AWishlist</a></li>
                                    <li><a href="">Log In</a></li>
                                    <li><a href="">Register</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3  col-sm-6 col-12">
                            <div class="singel-footer-items">
                                <div class="footer-tittle">
                                    <h4>ABOUT</h4>
                                </div>
                                <p> Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore. Lorem ipsum dolor sit amet conse ctetur adipisicing
                                    elit, seddo eiusmod tempor incididunt ut labore etdolore.</p>
                            </div>
                        </div>
                        <div class="col-lg-3  col-sm-6 col-12">
                            <div class="singel-footer-items">
                                <div class="footer-tittle">
                                    <h4>CONTACTS</h4>
                                </div>
                                <p> <span> Address:</span> 2548 Broaddus Maple Court Avenue, Madisonville KY 4783,
                                    United States of America</p>

                                <p><span>Phone:</span> +777 2345 7885; +777 2345 7886</p>
                                <p><span>Hours: </span> 7 Days a week from 10 am to 6 pm</p>
                                <p><span>E-mail: <a href="">info@mydomain.com</a></span></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!-- JS here -->
    <script src="{{ url('/frontend/assets') }}/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{ url('/frontend/assets') }}/js/popper.min.js"></script>
    <script src="{{ url('/frontend/assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ url('/frontend/assets') }}/js/isotope.pkgd.min.js"></script>
    <script src="{{ url('/frontend/assets') }}/js/ma5-menu.min.js"></script>
    <script src="{{ url('/frontend/assets') }}/js/jquery.nice-select.min.js"></script>
    <script src="{{ url('/frontend/assets') }}/js/jquery.scrollUp.min.js"></script>
    <script src="{{ url('/frontend/assets') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ url('/frontend/assets') }}/js/slick.min.js"></script>
    <script src="{{ url('/frontend/assets') }}/js/jquery.meanmenu.min.js"></script>
    <script src="{{ url('/frontend/assets') }}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ url('/frontend/assets') }}/js/jquery.scrollUp.min.js"></script>
    <script src="{{ url('/frontend/assets') }}/js/main.js"></script>

</body>

</html>