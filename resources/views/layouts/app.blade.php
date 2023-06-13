<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
<title>E Commerce</title>
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:title" content="">
<meta property="og:type" content="">
<meta property="og:url" content="">
<meta property="og:image" content="">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/imgs/theme/favicon.png')}}">
<link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@livewireStyles
</head>

<body>
    <header class="header-area header-style-1 header-height-2">
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                        <ul>
                                <li>
                                    <a class="language-dropdown-active" href="#"> <i class="fi-rs-world"></i> English <i class="fi-rs-angle-small-down"></i></a>
                                    <ul class="language-dropdown">
                                        <li><a href="#"><img src="assets/imgs/theme/flag-fr.png" alt="">Français</a></li>
                                        <li><a href="#"><img src="assets/imgs/theme/flag-dt.png" alt="">Deutsch</a></li>
                                        <li><a href="#"><img src="assets/imgs/theme/flag-ru.png" alt="">Pусский</a></li>
                                    </ul>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                <ul>
                                    <li>Selamat Datang di <a href="shop.html">E Commerce</a></li>
                                    <li>Disini Kami Menyediakan Barang yang berkualitas</li>
                                    <li>Dan Berbagai Diskon menarik lain nya <a href="shop.html">Shop now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                            @auth
                            <ul>                                
                                <li><i class="fi-rs-user"></i> {{ Auth::user()->name }}  / 
                                    <form  method="POST" action="{{route('logout')}}">
                                        @csrf
                                    <a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                                    </form>
                            </li>
                            </ul>
                            @else
                            <ul>                                
                                <li><i class="fi-rs-key"></i><a href="{{ route('login') }}">Masuk </a>  / <a href="{{ route ('register') }}">Daftar</a></li>
                            </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="/"><img src="{{asset('assets/imgs/logo/logo.png')}}" alt="logo"></a>
                    </div>
                    <div class="header-right">
                        @livewire('header-search-component')
                        <div class="header-action-right">
                            <div class="header-action-2">
                                @livewire('wishlist-icon-component')
                                @livewire('cart-icon-component')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="/"><img src="{{asset('assets/imgs/logo/logo.png')}}" alt="logo"></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-categori-wrap d-none d-lg-block">
                            <a class="categori-button-active" href="#">
                                <span class="fi-rs-apps"></span> Cek Category
                            </a>
                            {{--Cek Category --}}
                            <div class="categori-dropdown-wrap categori-dropdown-active-large">
                                <ul>
                                    <li class="has-children">
                                        <a href="shop.html"><i class=""></i>Category 1</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Judul Category 1</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 1</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 2</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 3</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 4</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 5</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 6</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 7</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 8</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Judul Category 2</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 1</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 2</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 3</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 4</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 5</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 6</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 7</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 8</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="assets/imgs/banner/menu-banner-2.jpg" alt="menu_banner1">
                                                        <div class="banne_info">
                                                            <h6>Banner Barang 1</h6>
                                                            <h4>Judul Barang 1</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                    <div class="header-banner2">
                                                        <img src="assets/imgs/banner/menu-banner-3.jpg" alt="menu_banner2">
                                                        <div class="banne_info">
                                                            <h6>Banner Barang 2</h6>
                                                            <h4>Judul Barang 2</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-children">
                                        <a href="shop.html"><i class=""></i>Category 2</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Judul Category 1</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 1</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 2</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 3</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 4</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 5</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 6</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 7</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 8</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Judul Category 2</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 1</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 2</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 3</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 4</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 5</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 6</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 7</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="assets/imgs/banner/menu-banner-4.jpg" alt="menu_banner1">
                                                        <div class="banne_info">
                                                            <h6>Banner Barang 1</h6>
                                                            <h4>Judul Barang 1</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-children">
                                        <a href="shop.html"><i class=""></i> Category 3</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Judul Category 1</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 1</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 2</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 3</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 4</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 5</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 6</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 7</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 8</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Judul Category 2</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 1</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 2</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 3</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 4</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 5</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 6</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 7</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Sub Category 8</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="assets/imgs/banner/menu-banner-5.jpg" alt="menu_banner1">
                                                        <div class="banne_info">
                                                            <h6>Banner Barang 1</h6>
                                                            <h4>Judul Barang 1</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                    <div class="header-banner2">
                                                        <img src="assets/imgs/banner/menu-banner-6.jpg" alt="menu_banner2">
                                                        <div class="banne_info">
                                                            <h6>Banner Barang 1</h6>
                                                            <h4>Judul Barang 1</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="shop.html"><i class=""></i>Category 4</a></li>
                                    <li><a href="shop.html"><i class=""></i>Category 5</a></li>
                                    <li><a href="shop.html"><i class=""></i>Category 6</a></li>
                                    <li><a href="shop.html"><i class=""></i>Category 7</a></li>
                                    <li><a href="shop.html"><i class=""></i>Category 8</a></li>
                                    <li><a href="shop.html"><i class=""></i>Category 9</a></li>
                                    <li><a href="shop.html"><i class=""></i>Category 10</a></li>
                                    <li>
                                    <ul class="more_slide_open" style="display: none;">
                                    <li><a href="shop.html"><i class=""></i>Beauty, Health</a></li>
                                    <li><a href="shop.html"><i class=""></i>Bags and Shoes</a></li>
                                    <li><a href="shop.html"><i class=""></i>Consumer Electronics</a></li>
                                    <li><a href="shop.html"><i class=""></i>Automobiles & Motorcycles</a></li>
                                    </ul>
                                    </li>
                                </ul>
                                <div class="more_categories">Tampilkan Semua</div>
                            </div>
                            {{-- End Cek Category--}}
                        </div>
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li><a class="active" href="/">Home </a></li>        
                                    <li><a href="{{route('shop')}}">Shop</a></li>
                                    {{--Koleksi Kami--}}
                                    <li class="position-static"><a href="#">Koleksi Kami <i class="fi-rs-angle-down"></i></a>
                                        <ul class="mega-menu">
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#">Koleksi 1</a>
                                                <ul>
                                                    <li><a href="product-details.html">Sub Koleksi 1</a></li>
                                                    <li><a href="product-details.html">Sub Koleksi 2</a></li>
                                                    <li><a href="product-details.html">Sub Koleksi 3</a></li>
                                                    <li><a href="product-details.html">Sub Koleksi 4</a></li>
                                                    <li><a href="product-details.html">Sub Koleksi 5</a></li>
                                                    <li><a href="product-details.html">Sub Koleksi 6</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#">Koleksi 2</a>
                                                <ul>
                                                    <li><a href="product-details.html">Sub Koleksi 1</a></li>
                                                    <li><a href="product-details.html">Sub Koleksi 2</a></li>
                                                    <li><a href="product-details.html">Sub Koleksi 3</a></li>
                                                    <li><a href="product-details.html">Sub Koleksi 4</a></li>
                                                    <li><a href="product-details.html">Sub Koleksi 5</a></li>
                                                    <li><a href="product-details.html">Sub Koleksi 6</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#">Koleksi 3</a>
                                                <ul>
                                                    <li><a href="product-details.html">Sub Koleksi 1</a></li>
                                                    <li><a href="product-details.html">Sub Koleksi 2</a></li>
                                                    <li><a href="product-details.html">Sub Koleksi 3</a></li>
                                                    <li><a href="product-details.html">Sub Koleksi 4</a></li>
                                                    <li><a href="product-details.html">Sub Koleksi 5</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-34">
                                                <div class="menu-banner-wrap">
                                                    <a href="product-details.html"><img src="assets/imgs/banner/menu-banner.jpg" alt="Banner"></a>
                                                    <div class="menu-banner-content">
                                                        <h4>Top Judul</h4>
                                                        <h3>Judul<br> Barang</h3>
                                                        <div class="menu-banner-price">
                                                            <span class="new-price text-success">Harga</span>
                                                        </div>
                                                        <div class="menu-banner-btn">
                                                            <a href="product-details.html">Shop now</a>
                                                        </div>
                                                    </div>
                                                    <div class="menu-banner-discount">
                                                        <h3>
                                                            <span>Diskon</span>
                                                            disini
                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>     
                                    {{--End Kami--}}                                                       
                                    <li><a href="contact.html">Kontak<i class="fi-rs-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="about.html">Tentang</a></li>
                                            <li><a href="blog.html">Blog </a></li>  
                                        </ul>
                                    </li>                                    
                                    @auth
                                    <li><a href="#">My Account<i class="fi-rs-angle-down"></i></a>
                                        @if(Auth::user()->utype == 'ADM')
                                            <ul class="sub-menu">
                                                <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                                <li><a href="{{route('admin.products')}}">Products</a></li>
                                                <li><a href="{{route('admin.categories')}}">Categories</a></li>
                                                <li><a href="{{route('admin.home.slider')}}">Manage Slider</a></li>
                                                <li><a href="{{route('admin.coupons')}}">Coupons</a></li>
                                                <li><a href="#">Orders</a></li>
                                                <li><a href="#">Customers</a></li>                                         
                                            </ul>
                                        @else
                                            <ul class="sub-menu">
                                                <li><a href="{{route('user.dashboard')}}">Dashboard</a></li>                                         
                                            </ul>
                                        @endif                                       
                                    </li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="hotline d-none d-lg-block">
                        <p><i class="fi-rs-smartphone"></i><span>Hubungi Kami</span> +6285772870259</p>
                    </div>
                    <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%</p>
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a href="shop-wishlist.php">
                                    <img alt="icon heart" src="assets/imgs/theme/icons/icon-heart.svg">
                                    <span class="pro-count white">4</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="cart.html">
                                    <img alt="icon cart" src="assets/imgs/theme/icons/icon-cart.svg">
                                    <span class="pro-count white">2</span>
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="product-details.html"><img alt="thumbnail1" src="assets/imgs/shop/thumbnail-3.jpg"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="product-details.html">Plain Striola Shirts</a></h4>
                                                <h3><span>1 × </span>$800.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="product-details.html"><img alt="thumbnail2" src="assets/imgs/shop/thumbnail-4.jpg"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="product-details.html">Macbook Pro 2022</a></h4>
                                                <h3><span>1 × </span>$3500.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>$383.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="cart.html">View cart</a>
                                            <a href="shop-checkout.php">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-action-icon-2 d-block d-lg-none">
                                <div class="burger-icon burger-icon-white">
                                    <span class="burger-icon-top"></span>
                                    <span class="burger-icon-mid"></span>
                                    <span class="burger-icon-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="/"><img src="{{asset('assets/imgs/logo/logo.png')}}" alt="logo"></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="#">
                        <input type="text" placeholder="Cari disini....">
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <div class="main-categori-wrap mobile-header-border">
                        <a class="categori-button-active-2" href="#">
                            <span class="fi-rs-apps"></span> Cari Category
                        </a>
                        <div class="categori-dropdown-wrap categori-dropdown-active-small">
                            <ul>
                                <li><a href="shop.html"><i class=""></i>Category 1</a></li>
                                <li><a href="shop.html"><i class=""></i>Category 2</a></li>
                                <li><a href="shop.html"><i class=""></i>Category 3</a></li>
                                <li><a href="shop.html"><i class=""></i>Category 4</a></li>
                                <li><a href="shop.html"><i class=""></i>Category 5</a></li>
                                <li><a href="shop.html"><i class=""></i>Category 6</a></li>
                                <li><a href="shop.html"><i class=""></i>Category 7</a></li>
                                <li><a href="shop.html"><i class=""></i>Category 8</a></li>
                                <li><a href="shop.html"><i class=""></i>Category 9</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="/">Home</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="shop.html">shop</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Koleksi Kami</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Koleksi 1</a>
                                        <ul class="dropdown">
                                            <li><a href="product-details.html">Sub Koleksi 1</a></li>
                                            <li><a href="product-details.html">Sub Koleksi 2</a></li>
                                            <li><a href="product-details.html">Sub Koleksi 3</a></li>
                                            <li><a href="product-details.html">Sub Koleksi 4</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Koleksi 2</a>
                                        <ul class="dropdown">
                                            <li><a href="product-details.html">Sub Koleksi 1</a></li>
                                            <li><a href="product-details.html">Sub Koleksi 2</a></li>
                                            <li><a href="product-details.html">Sub Koleksi 3</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Koleksi 3</a>
                                        <ul class="dropdown">
                                            <li><a href="product-details.html">Sub Koleksi 1</a></li>
                                            <li><a href="product-details.html">Sub Koleksi 1</a></li>
                                            <li><a href="product-details.html">Sub Koleksi 1</a></li>
                                            <li><a href="product-details.html">Sub Koleksi 1</a></li>
                                            <li><a href="product-details.html">Sub Koleksi 1</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="blog.html">Blog</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Language</a>
                                <ul class="dropdown">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap mobile-header-border">
                    <div class="single-mobile-header-info mt-30">
                        <a href="contact.html"> Our location </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="login.html">Masuk </a>                        
                    </div>
                    <div class="single-mobile-header-info">                        
                        <a href="register.html">Daftar</a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="#">+6285772870259</a>
                    </div>
                </div>
                <div class="mobile-social-icon">
                    <h5 class="mb-15 text-grey-4">Follow Us</h5>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt=""></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-youtube.svg" alt=""></a>
                </div>
            </div>
        </div>
    </div>        

{{$slot}}

    <footer class="main">
        <section class="newsletter p-30 text-white wow fadeIn animated">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-md-3 mb-lg-0">
                        <div class="row align-items-center">
                            <div class="col flex-horizontal-center">
                                <img class="icon-email" src="assets/imgs/theme/icons/icon-email.svg" alt="">
                                <h4 class="font-size-20 mb-0 ml-3">Daftar Sekarang</h4>
                            </div>
                            <div class="col my-4 my-md-0 des">
                                <h5 class="font-size-15 ml-4 mb-0">Dan Nikmati <strong>Diskon Menarik dari kami</strong></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <!-- Subscribe Form -->
                        <form class="form-subcriber d-flex wow fadeIn animated">
                            <input type="email" class="form-control bg-white font-small" placeholder="contoh@gmail.com">
                            <button class="btn bg-dark text-white" type="submit">Daftar</button>
                        </form>
                        <!-- End Subscribe Form -->
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding footer-mid">
            <div class="container pt-15 pb-20">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="widget-about font-md mb-md-5 mb-lg-0">
                            <div class="logo logo-width-1 wow fadeIn animated">
                                <a href="/"><img src="{{asset('assets/imgs/logo/logo.png')}}" alt="logo"></a>
                            </div>
                            <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">Contact</h5>
                            <p class="wow fadeIn animated">
                                <strong>Alamat: </strong>Pamulang,Indonesia
                            </p>
                            <p class="wow fadeIn animated">
                                <strong>Telepon: </strong>+6285772870259
                            </p>
                            <p class="wow fadeIn animated">
                                <strong>Email: </strong>rismanmuhammadhafidz21@gmail.com
                            </p>
                            <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">Follow Us</h5>
                            <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                                <a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a>
                                <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt=""></a>
                                <a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                                <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a>
                                <a href="#"><img src="assets/imgs/theme/icons/icon-youtube.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <h5 class="widget-title wow fadeIn animated">Tentang</h5>
                        <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                            <li><a href="#">Tentang Kami</a></li>
                            <li><a href="#">Cepat Dan Tanggap</a></li>
                            <li><a href="#">Kebijakan Pribadi</a></li>
                            <li><a href="#">Syarat &amp; Ketentuan</a></li>
                            <li><a href="#">Kontak Kami</a></li>                            
                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-3">
                        <h5 class="widget-title wow fadeIn animated">Account</h5>
                        <ul class="footer-list wow fadeIn animated">
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="#">Masukan Keranjang</a></li>
                            <li><a href="#">Masukan Keinginan</a></li>
                            <li><a href="#">Lacak Lokasi</a></li>                            
                            <li><a href="#">Pemesanan</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 mob-center">
                        <h5 class="widget-title wow fadeIn animated">Install App</h5>
                        <div class="row">
                            <div class="col-md-8 col-lg-12">
                                <p class="wow fadeIn animated">Install Sekarang....</p>
                                <div class="download-app wow fadeIn animated mob-app">
                                    <a href="#" class="hover-up mb-sm-4 mb-lg-0"><img class="active" src="assets/imgs/theme/app-store.jpg" alt=""></a>
                                    <a href="#" class="hover-up"><img src="assets/imgs/theme/google-play.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-12 mt-md-3 mt-lg-0">
                                <p class="mb-20 wow fadeIn animated">Media Pembayaran</p>
                                <img class="wow fadeIn animated" src="assets/imgs/theme/payment-method.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container pb-20 wow fadeIn animated mob-center">
            <div class="row">
                <div class="col-12 mb-20">
                    <div class="footer-bottom"></div>
                </div>
                <div class="col-lg-6">
                    <p class="float-md-left font-sm text-muted mb-0">
                        <a href="privacy-policy.html">Privacy Policy</a> | <a href="terms-conditions.html">Terms & Conditions</a>
                    </p>
                </div>
                <div class="col-lg-6">
                    <p class="text-lg-end text-start font-sm text-muted mb-0">
                        &copy; <strong class="text-brand">January Rsfzxx</strong> All rights reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>    
    <!-- Vendor JS-->
<script src="{{ asset ('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset ('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset ('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
<script src="{{ asset ('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset ('assets/js/plugins/slick.js') }}"></script>
<script src="{{ asset ('assets/js/plugins/jquery.syotimer.min.js') }}"></script>
<script src="{{ asset ('assets/js/plugins/wow.js') }}"></script>
<script src="{{ asset ('assets/js/plugins/jquery-ui.js') }}"></script>
<script src="{{ asset ('assets/js/plugins/perfect-scrollbar.js') }}"></script>
<script src="{{ asset ('assets/js/plugins/magnific-popup.js') }}"></script>
<script src="{{ asset ('assets/js/plugins/select2.min.js') }}"></script>
<script src="{{ asset ('assets/js/plugins/waypoints.js') }}"></script>
<script src="{{ asset ('assets/js/plugins/counterup.js') }}"></script>
<script src="{{ asset ('assets/js/plugins/jquery.countdown.min.js') }}"></script>
<script src="{{ asset ('assets/js/plugins/images-loaded.js') }}"></script>
<script src="{{ asset ('assets/js/plugins/isotope.js') }}"></script>
<script src="{{ asset ('assets/js/plugins/scrollup.js') }}"></script>
<script src="{{ asset ('assets/js/plugins/jquery.vticker-min.js') }}"></script>
<script src="{{ asset ('assets/js/plugins/jquery.theia.sticky.js') }}"></script>
<script src="{{ asset ('assets/js/plugins/jquery.elevatezoom.js') }}"></script>
<!-- Template  JS -->
<script src="{{ asset ('assets/js/main.js?v=3.3') }}"></script>
<script src="{{ asset ('assets/js/shop.js?v=3.3') }}"></script>
@livewireScripts
@stack('scripts')
</body>
</html>