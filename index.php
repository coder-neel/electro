<?php
require_once('./controller/db.php');
require_once('./model/Response.php');

// DB Connection
try {
    $writeDB = DB::connectWriteDB();
    $readDB = DB::connectReadDB();
} catch (PDOException $ex) {
    error_log("Connection error - " . $ex, 0);
    echo "Database connection error";
    exit();
}
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Electro Market - Innovation Starts Here</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/preloader.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/backtotop.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/flaticon/flaticon.css">
    <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->


    <!-- preloader start -->
    <?php include('./common/loading.php') ?>
    <!-- preloader end -->

    <!-- back to top start -->
    <?php include('./common/progress-wrap.php') ?>
    <!-- back to top end -->

    <!-- header-start -->
    <?php include('./common/header.php') ?>
    <!-- header-end -->

    <!-- offcanvas area start -->
    <?php include('./common/offcanvas-area.php') ?>
    <!-- offcanvas area end -->

    <main>

        <!-- slider-area-start -->
        <div class="slider-area light-bg-s pt-60">
            <div class="container custom-conatiner">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="swiper-container slider__active pb-30">
                            <div class="slider-wrapper swiper-wrapper">
                                <div class="single-slider swiper-slide b-radius-2 slider-height-2 d-flex align-items-center"
                                    data-background="assets/img/slider/02-slide-1.jpg">
                                    <div class="slider-content slider-content-2">
                                        <h2 data-animation="fadeInLeft" data-delay="1.7s"
                                            class="pt-15 slider-title pb-5">Gaming Headset<br> Brilliant Lighting Effect
                                        </h2>
                                        <p class="pr-20 slider_text" data-animation="fadeInLeft" data-delay="1.9s">
                                            Discount 40% On Products & Free Shipping</p>
                                        <div class="slider-bottom-btn mt-65">
                                            <a data-animation="fadeInUp" data-delay="1.15s" href="shop.html"
                                                class="st-btn-border b-radius-2">Discover now</a>
                                        </div>
                                    </div>
                                </div><!-- /single-slider -->
                                <div class="single-slider swiper-slide b-radius-2 slider-height-2 d-flex align-items-center"
                                    data-background="assets/img/slider/02-slide-2.jpg">
                                    <div class="slider-content slider-content-2">
                                        <h2 data-animation="fadeInLeft" data-delay="1.5s"
                                            class="pt-15 slider-title pb-5">SALE 20% OFF<br> SAMSUNG GALAXY BUDS </h2>
                                        <p class="pr-20 slider_text" data-animation="fadeInLeft" data-delay="1.7s">
                                            Discount 30% On Products & Free Shipping</p>
                                        <div class="slider-bottom-btn mt-65">
                                            <a data-animation="fadeInUp" data-delay="1.9s" href="shop.html"
                                                class="st-btn-border b-radius-2">Discover now</a>
                                        </div>
                                    </div>
                                </div><!-- /single-slider -->
                                <div class="single-slider b-radius-2 swiper-slide slider-height-2 d-flex align-items-center"
                                    data-background="assets/img/slider/02-slide-3.jpg">
                                    <div class="slider-content slider-content-2">
                                        <h2 data-animation="fadeInLeft" data-delay="1.5s"
                                            class="pt-15 slider-title pb-5">Sport Edition<br> Red Special Edition</h2>
                                        <p class="pr-20 slider_text" data-animation="fadeInLeft" data-delay="1.8s">
                                            Wireless Connection With TV, Computer, Laptop... </p>
                                        <div class="slider-bottom-btn mt-65">
                                            <a data-animation="fadeInUp" data-delay="1.10s" href="shop.html"
                                                class="st-btn-border b-radius-2">Discover now</a>
                                        </div>
                                    </div>
                                </div><!-- /single-slider -->
                                <div class="main-slider-paginations"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="banner__item p-relative w-img mb-30">
                                    <div class="banner__img b-radius-2">
                                        <a href="product-details.html"><img src="assets/img/banner/banner-10.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="banner__content banner__content-2">
                                        <h6><a href="product-details.html">Canyon <br> Star Raider</a></h6>
                                        <p>Headphone & Audio</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="banner__item p-relative w-img mb-30">
                                    <div class="banner__img b-radius-2">
                                        <a href="product-details.html"><img src="assets/img/banner/banner-11.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="banner__content banner__content-2">
                                        <h6><a href="product-details.html">Phone <br> Galaxy S20</a></h6>
                                        <p>Cellphone & Tablets</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="banner__item p-relative w-img mb-30">
                                    <div class="banner__img b-radius-2">
                                        <a href="product-details.html"><img src="assets/img/banner/banner-13.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="banner__content banner__content-2">
                                        <h6><a href="product-details.html">Galaxy <br> Buds Plus</a></h6>
                                        <p>Headphone & Audio</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="banner__item p-relative w-img mb-30">
                                    <div class="banner__img b-radius-2">
                                        <a href="product-details.html"><img src="assets/img/banner/banner-12.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="banner__content banner__content-2">
                                        <h6><a href="product-details.html">Chair <br>Swoon Lounge</a></h6>
                                        <p>Headphone & Audio</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider-area-end -->

        <!-- banner__area-start -->
        <section class="categories__area light-bg-s pt-20 pb-10">
            <div class="container custom-conatiner">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-flex justify-content-between mb-30">
                            <div class="section__title section__title-2">
                                <h5 class="st-titile">Popular Categories</h5>
                            </div>
                            <div class="button-wrap button-wrap-2">
                                <a href="product.html">See All Product <i class="fal fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <?php
                    //Get categories list here
                    try {
                        $query = $readDB->prepare('select id, first_name, middle_name, last_name, email_address, password, gender, mobile, country, state, city, pincode from users where id = :userid');
                        $query->bindParam(':userid', $userid, PDO::PARAM_INT);
                        $query->execute();

                        $rowCount = $query->rowCount();

                        if ($rowCount === 0) {
                            echo "No Categories Available!";
                        }

                    } catch (PDOException $ex) {
                        error_log("Database query error - " . $ex, 0);
                        $response = new Response();
                        $response->setHttpStatusCode(500);
                        $response->setSuccess(false);
                        $response->addMessage("Failed to get user details");
                        $response->send();
                        exit;
                    }

                    ?>
                    <div class="col-xl-2 col-lg-3 col-md-4">
                        <div class="categories__item p-relative w-img mb-30">
                            <div class="categories__img b-radius-2">
                                <a href="product-details.html"><img src="assets/img/categorie/cat-1.jpg" alt=""></a>
                            </div>
                            <div class="categories__content">
                                <h6><a href="product-details.html">Decor & Furniture</a></h6>
                                <p>(7 Products)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4">
                        <div class="categories__item p-relative w-img mb-30">
                            <div class="categories__img b-radius-2">
                                <a href="product-details.html"><img src="assets/img/categorie/cat-2.jpg" alt=""></a>
                            </div>
                            <div class="categories__content">
                                <h6><a href="product-details.html">Smart Phones</a></h6>
                                <p>(12 Products)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4">
                        <div class="categories__item p-relative w-img mb-30">
                            <div class="categories__img b-radius-2">
                                <a href="product-details.html"><img src="assets/img/categorie/cat-3.jpg" alt=""></a>
                            </div>
                            <div class="categories__content">
                                <h6><a href="product-details.html">Fashion & Clothing</a></h6>
                                <p>(5 Products)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4">
                        <div class="categories__item p-relative w-img mb-30">
                            <div class="categories__img b-radius-2">
                                <a href="product-details.html"><img src="assets/img/categorie/cat-4.jpg" alt=""></a>
                            </div>
                            <div class="categories__content">
                                <h6><a href="product-details.html">Home Kitchen</a></h6>
                                <p>(9 Products)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4">
                        <div class="categories__item p-relative w-img mb-30">
                            <div class="categories__img b-radius-2">
                                <a href="product-details.html"><img src="assets/img/categorie/cat-5.jpg" alt=""></a>
                            </div>
                            <div class="categories__content">
                                <h6><a href="product-details.html">Camera & Photos</a></h6>
                                <p>(7 Products)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4">
                        <div class="categories__item p-relative w-img mb-30">
                            <div class="categories__img b-radius-2">
                                <a href="product-details.html"><img src="assets/img/categorie/cat-6.jpg" alt=""></a>
                            </div>
                            <div class="categories__content">
                                <h6><a href="product-details.html">Speaker & Audio</a></h6>
                                <p>(15 Products)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner__area-end -->

        <!-- trending-product-area-start -->
        <section class="trending-product-area light-bg-s pt-25 pb-15">
            <div class="container custom-conatiner">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-flex justify-content-between mb-30">
                            <div class="section__title section__title-2">
                                <h5 class="st-titile">Hot Trending Products</h5>
                            </div>
                            <div class="button-wrap button-wrap-2">
                                <a href="product.html">See All Product <i class="fal fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2">
                        <div class="product__item product__item-2 b-radius-2 mb-20">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/tp-1.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product__offer">
                                    <span class="discount">-15%</span>
                                </div>
                                <div class="product-action product-action-2">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content product__content-2">
                                <h6><a href="product-details.html">Epple iPad Pro 10.5-inch Cellular 64G</a></h6>
                                <div class="rating mb-5 mt-10">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price">
                                    <span>$105-$110</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button"
                                    class="cart-btn-3 product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2">
                        <div class="product__item product__item-2 b-radius-2 mb-20">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/tp-2.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product-action product-action-2">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content product__content-2">
                                <h6><a href="product-details.html">Men Size Yellow Basketball Jerseys</a></h6>
                                <div class="rating mb-5 mt-10">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price">
                                    <span>$105-$150</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button"
                                    class="cart-btn-3 product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2">
                        <div class="product__item product__item-2 b-radius-2 mb-20">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/tp-3.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product__offer">
                                    <span class="discount">-9%</span>
                                </div>
                                <div class="product-action product-action-2">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content product__content-2">
                                <h6><a href="product-details.html">Xbox Wireless Game Controller Pink</a></h6>
                                <div class="rating mb-5 mt-10">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price">
                                    <span>$200-$280</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button"
                                    class="cart-btn-3 product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2">
                        <div class="product__item product__item-2 b-radius-2 mb-20">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/tp-7.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product-action product-action-2">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content product__content-2">
                                <h6><a href="product-details.html">APPO R11s 64GB Dual 20MP Cameras</a></h6>
                                <div class="rating mb-5 mt-10">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price">
                                    <span>$150.00-$270.00</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button"
                                    class="cart-btn-3 product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2">
                        <div class="product__item product__item-2 b-radius-2 mb-20">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/tp-10.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product-action product-action-2">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content product__content-2">
                                <h6><a href="product-details.html">G951s Pink Stereo Gaming Headset</a></h6>
                                <div class="rating mb-5 mt-10">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price">
                                    <span>$120.00-$210.00</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button"
                                    class="cart-btn-3 product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2">
                        <div class="product__item product__item-2 b-radius-2 mb-20">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/tp-9.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product-action product-action-2">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content product__content-2">
                                <h6><a href="product-details.html">Epple iPhone 11 Pro Max 64GB Gold</a></h6>
                                <div class="rating mb-5 mt-10">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price">
                                    <span>$120.00-$140.00</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button"
                                    class="cart-btn-3 product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- trending-product-area-end -->

        <!-- topsell__area-start -->
        <section class="topsell__area light-bg-s pt-15">
            <div class="container custom-conatiner">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-flex justify-content-between mb-30">
                            <div class="section__title section__title-2">
                                <h5 class="st-titile-d st-titile-d-2">Top Deals Of The Day</h5>
                            </div>
                            <div class="offer-time">
                                <span class="offer-title d-none d-sm-block">Hurry Up! Offer ends in:</span>
                                <div class="countdown">
                                    <div class="countdown-inner b-radius-2" data-countdown=""
                                        data-date="Mar 02 2022 20:20:22">
                                        <ul class="text-center">
                                            <li><span data-days="">32</span> Days</li>
                                            <li><span data-hours="">5</span> Hours</li>
                                            <li><span data-minutes="">32</span> Mins</li>
                                            <li><span data-seconds="">27</span> Secs</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-12">
                        <div
                            class="single-features-item single-features-item-d single-features-item-d-2 b-radius-2 mb-20">
                            <div class="row  g-0 align-items-center">
                                <div class="col-lg-6">
                                    <div class="features-thum">
                                        <div class="features-product-image w-img">
                                            <a href="product-details.html"><img
                                                    src="assets/img/features-product/fpb-1.jpg" alt=""></a>
                                        </div>
                                        <div class="product__offer">
                                            <span class="discount">-15%</span>
                                        </div>
                                        <div class="product-action product-action-2">
                                            <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                data-bs-target="#productModalId">
                                                <i class="fal fa-eye"></i>
                                                <i class="fal fa-eye"></i>
                                            </a>
                                            <a href="#" class="icon-box icon-box-1">
                                                <i class="fal fa-layer-group"></i>
                                                <i class="fal fa-layer-group"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="product__content product__content-d product__content-d-2">
                                        <h6><a href="product-details.html">APPO R11s 64GB Dual 20MP Cameras</a></h6>
                                        <div class="rating mb-5">
                                            <ul class="rating-d">
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            </ul>
                                            <span>(01 review)</span>
                                        </div>
                                        <div class="price mb-10">
                                            <span>$307.00 <del>$110</del></span>
                                        </div>
                                        <div class="features-des mb-20">
                                            <ul>
                                                <li><a href="product-details.html"><i class="fas fa-circle"></i> Bass
                                                        and Stereo Sound.</a></li>
                                                <li><a href="product-details.html"><i class="fas fa-circle"></i> Display
                                                        with 3088 x 1440 pixels resolution.</a></li>
                                                <li><a href="product-details.html"><i class="fas fa-circle"></i> Memory,
                                                        Storage &amp; SIM: 12GB RAM, 256GB.</a></li>
                                                <li><a href="product-details.html"><i class="fas fa-circle"></i> Androi
                                                        v10.0 Operating system.</a></li>
                                            </ul>
                                        </div>
                                        <div class="progress mb-5">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress-rate mb-15">
                                            <span>Sold:370/1225</span>
                                        </div>
                                        <div class="cart-option">
                                            <a href="cart.html" class="cart-btn-4 w-100">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div
                            class="single-features-item single-features-item-d single-features-item-d-2 b-radius-2 mb-20">
                            <div class="row  g-0 align-items-center">
                                <div class="col-lg-6">
                                    <div class="features-thum">
                                        <div class="features-product-image w-img">
                                            <a href="product-details.html"><img
                                                    src="assets/img/features-product/fpb-2.jpg" alt=""></a>
                                        </div>
                                        <div class="product-action product-action-2">
                                            <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                data-bs-target="#productModalId">
                                                <i class="fal fa-eye"></i>
                                                <i class="fal fa-eye"></i>
                                            </a>
                                            <a href="#" class="icon-box icon-box-1">
                                                <i class="fal fa-layer-group"></i>
                                                <i class="fal fa-layer-group"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="product__content product__content-d product__content-d-2">
                                        <h6><a href="product-details.html">Redmi Note 10 128GB International Model</a>
                                        </h6>
                                        <div class="rating mb-5">
                                            <ul class="rating-d">
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            </ul>
                                            <span>(01 review)</span>
                                        </div>
                                        <div class="price mb-10">
                                            <span>$280.00 <del>$314</del></span>
                                        </div>
                                        <div class="features-des mb-20">
                                            <ul>
                                                <li><a href="product-details.html"><i class="fas fa-circle"></i> Bass
                                                        and Stereo Sound.</a></li>
                                                <li><a href="product-details.html"><i class="fas fa-circle"></i> Display
                                                        with 3088 x 1440 pixels resolution.</a></li>
                                                <li><a href="product-details.html"><i class="fas fa-circle"></i> Memory,
                                                        Storage &amp; SIM: 12GB RAM, 256GB.</a></li>
                                                <li><a href="product-details.html"><i class="fas fa-circle"></i> Androi
                                                        v10.0 Operating system.</a></li>
                                            </ul>
                                        </div>
                                        <div class="progress mb-5">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 80%"
                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress-rate mb-15">
                                            <span>Sold:1000/1200</span>
                                        </div>
                                        <div class="cart-option">
                                            <a href="cart.html" class="cart-btn-4 w-100">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- topsell__area-end -->

        <!-- banner__area-start -->
        <section class="banner__area light-bg-s pt-40 pb-10">
            <div class="container custom-conatiner">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="banner__item p-relative w-img mb-30">
                            <div class="banner__img b-radius-2">
                                <a href="product-details.html"><img src="assets/img/banner/banner-14.jpg" alt=""></a>
                            </div>
                            <div class="banner__content banner__content-2">
                                <h6><a href="product-details.html">Microsoft <br> Surface Laptop 14”</a></h6>
                                <p class="sm-p">Up To -30%</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="banner__item p-relative mb-30 w-img">
                            <div class="banner__img b-radius-2">
                                <a href="product-details.html"><img src="assets/img/banner/banner-15.jpg" alt=""></a>
                            </div>
                            <div class="banner__content banner__content-2">
                                <h6><a href="product-details.html">Cameras <br>Best Sport Edition </a></h6>
                                <p class="sm-p">Up To -20%</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="banner__item p-relative mb-30 w-img">
                            <div class="banner__img b-radius-2">
                                <a href="product-details.html"><img src="assets/img/banner/banner-16.jpg" alt=""></a>
                            </div>
                            <div class="banner__content banner__content-2">
                                <h6><a href="product-details.html">Sneaker <br>Nike Air Max 90 </a></h6>
                                <p class="sm-p">Up To -60%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner__area-end -->

        <!-- featured-start -->
        <section class="featured light-bg pt-50 pb-40">
            <div class="container custom-conatiner">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-flex justify-content-between mb-30">
                            <div class="section__title section__title-2">
                                <h5 class="st-titile">Top Featured Products</h5>
                            </div>
                            <div class="button-wrap button-wrap-2">
                                <a href="product.html">See All Product <i class="fal fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-12">
                        <div class="single-features-item single-features-item-d b-radius-2 mb-20">
                            <div class="row  g-0 align-items-center">
                                <div class="col-md-6">
                                    <div class="features-thum">
                                        <div class="features-product-image w-img">
                                            <a href="product-details.html"><img
                                                    src="assets/img/features-product/fpsm-1.jpg" alt=""></a>
                                        </div>
                                        <div class="product__offer">
                                            <span class="discount">-15%</span>
                                        </div>
                                        <div class="product-action product-action-2">
                                            <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                data-bs-target="#productModalId">
                                                <i class="fal fa-eye"></i>
                                                <i class="fal fa-eye"></i>
                                            </a>
                                            <a href="#" class="icon-box icon-box-1">
                                                <i class="fal fa-heart"></i>
                                                <i class="fal fa-heart"></i>
                                            </a>
                                            <a href="#" class="icon-box icon-box-1">
                                                <i class="fal fa-layer-group"></i>
                                                <i class="fal fa-layer-group"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="product__content product__content-d product__content-d-2">
                                        <h6><a href="product-details.html">Samsang Galaxy A70 128GB Dual-SIM</a></h6>
                                        <div class="rating mb-5">
                                            <ul class="rating-d">
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            </ul>
                                            <span>(01 review)</span>
                                        </div>
                                        <div class="price d-price mb-10">
                                            <span>$307.00 <del>$110</del></span>
                                        </div>
                                        <div class="features-des mb-25">
                                            <ul>
                                                <li><a href="product-details.html"><i class="fas fa-circle"></i> Bass
                                                        and Stereo Sound.</a></li>
                                                <li><a href="product-details.html"><i class="fas fa-circle"></i> Display
                                                        with 3088 x 1440 pixels resolution.</a></li>
                                                <li><a href="product-details.html"><i class="fas fa-circle"></i> Memory,
                                                        Storage &amp; SIM: 12GB RAM, 256GB.</a></li>
                                                <li><a href="product-details.html"><i class="fas fa-circle"></i> Androi
                                                        v10.0 Operating system.</a></li>
                                            </ul>
                                        </div>
                                        <div class="cart-option">
                                            <a href="cart.html" class="cart-btn-4 w-100 mr-10">Add to Cart</a>
                                            <a href="cart.html" class="transperant-btn-2"><i
                                                    class="fal fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-features-item b-radius-2 mb-20">
                                    <div class="row  g-0 align-items-center">
                                        <div class="col-6">
                                            <div class="features-thum">
                                                <div class="features-product-image w-img">
                                                    <a href="product-details.html"><img
                                                            src="assets/img/features-product/fp-1.jpg" alt=""></a>
                                                </div>
                                                <div class="product__offer">
                                                    <span class="discount">-15%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product__content product__content-d product__content-d-2">
                                                <h6><a href="product-details.html">Epple Watch SE Gold Aluminum</a></h6>
                                                <div class="rating mb-5">
                                                    <ul>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    </ul>
                                                    <span>(01 review)</span>
                                                </div>
                                                <div class="price d-price">
                                                    <span>$307.00 <del>$110</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-features-item b-radius-2 mb-20">
                                    <div class="row  g-0 align-items-center">
                                        <div class="col-6">
                                            <div class="features-thum">
                                                <div class="features-product-image w-img">
                                                    <a href="product-details.html"><img
                                                            src="assets/img/features-product/fp-2.jpg" alt=""></a>
                                                </div>
                                                <div class="product__offer">
                                                    <span class="discount">-5%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product__content product__content-d product__content-d-2">
                                                <h6><a href="product-details.html">G951s Pink Stereo Gaming Headset</a>
                                                </h6>
                                                <div class="rating mb-5">
                                                    <ul>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    </ul>
                                                    <span>(01 review)</span>
                                                </div>
                                                <div class="price d-price">
                                                    <span>$210.00 <del>$110</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-features-item b-radius-2 mb-20">
                                    <div class="row  g-0 align-items-center">
                                        <div class="col-6">
                                            <div class="features-thum">
                                                <div class="features-product-image w-img">
                                                    <a href="product-details.html"><img
                                                            src="assets/img/features-product/fp-3.jpg" alt=""></a>
                                                </div>
                                                <div class="product__offer">
                                                    <span class="discount">-25%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product__content product__content-d product__content-d-2">
                                                <h6><a href="product-details.html">Solo3 Wireless On-Ear Headphones</a>
                                                </h6>
                                                <div class="rating mb-5">
                                                    <ul>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    </ul>
                                                    <span>(01 review)</span>
                                                </div>
                                                <div class="price">
                                                    <span>$160.00 <del>$110</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-features-item b-radius-2 mb-20">
                                    <div class="row  g-0 align-items-center">
                                        <div class="col-6">
                                            <div class="features-thum">
                                                <div class="features-product-image w-img">
                                                    <a href="product-details.html"><img
                                                            src="assets/img/features-product/fp-4.jpg" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product__content product__content-d product__content-d-2">
                                                <h6><a href="product-details.html">Men’s Short-Sleeve Pocket Oxford
                                                        Shirt</a></h6>
                                                <div class="rating mb-5">
                                                    <ul>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    </ul>
                                                    <span>(01 review)</span>
                                                </div>
                                                <div class="price">
                                                    <span>$280.00 <del>$110</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- featured-end -->

        <!-- moveing-text-area-start -->
        <section class="moveing-text-area">
            <div class="container">
                <div class="ovic-running">
                    <div class="wrap">
                        <div class="inner">
                            <p class="item">Free UK Delivery - Return Over $100.00 ( Excluding Homeware ) | Free UK
                                Collect From Store</p>
                            <p class="item">Design Week / 15% Off the website / Code: AYOSALE-2020</p>
                            <p class="item">Always iconic. Now organic. Introducing the $20 Organic Tee.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- moveing-text-area-end -->

        <!-- recomand-product-area-start -->
        <section class="recomand-product-area light-bg-s pt-50 pb-15">
            <div class="container custom-conatiner">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-flex justify-content-between mb-30">
                            <div class="section__title section__title-2">
                                <h5 class="st-titile">Recommended For You</h5>
                            </div>
                            <div class="button-wrap button-wrap-2">
                                <a href="product.html">See All Product <i class="fal fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2">
                        <div class="product__item product__item-2 b-radius-2 mb-20">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/tp-1.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product__offer">
                                    <span class="discount">-15%</span>
                                </div>
                                <div class="product-action product-action-2">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content product__content-2">
                                <h6><a href="product-details.html">Epple iPad Pro 10.5-inch Cellular 64G</a></h6>
                                <div class="rating mb-5 mt-10">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price">
                                    <span>$105-$110</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button"
                                    class="cart-btn-3 product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2">
                        <div class="product__item product__item-2 b-radius-2 mb-20">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/tp-2.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product-action product-action-2">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content product__content-2">
                                <h6><a href="product-details.html">Men Size Yellow Basketball Jerseys</a></h6>
                                <div class="rating mb-5 mt-10">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price">
                                    <span>$105-$150</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button"
                                    class="cart-btn-3 product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2">
                        <div class="product__item product__item-2 b-radius-2 mb-20">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/tp-3.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product__offer">
                                    <span class="discount">-9%</span>
                                </div>
                                <div class="product-action product-action-2">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content product__content-2">
                                <h6><a href="product-details.html">Xbox Wireless Game Controller Pink</a></h6>
                                <div class="rating mb-5 mt-10">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price">
                                    <span>$200-$280</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button"
                                    class="cart-btn-3 product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2">
                        <div class="product__item product__item-2 b-radius-2 mb-20">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/tp-7.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product-action product-action-2">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content product__content-2">
                                <h6><a href="product-details.html">APPO R11s 64GB Dual 20MP Cameras</a></h6>
                                <div class="rating mb-5 mt-10">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price">
                                    <span>$150.00-$270.00</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button"
                                    class="cart-btn-3 product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2">
                        <div class="product__item product__item-2 b-radius-2 mb-20">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/tp-10.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product-action product-action-2">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content product__content-2">
                                <h6><a href="product-details.html">G951s Pink Stereo Gaming Headset</a></h6>
                                <div class="rating mb-5 mt-10">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price">
                                    <span>$120.00-$210.00</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button"
                                    class="cart-btn-3 product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2">
                        <div class="product__item product__item-2 b-radius-2 mb-20">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/tp-9.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product-action product-action-2">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                        data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content product__content-2">
                                <h6><a href="product-details.html">Epple iPhone 11 Pro Max 64GB Gold</a></h6>
                                <div class="rating mb-5 mt-10">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price">
                                    <span>$120.00-$140.00</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button"
                                    class="cart-btn-3 product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- recomand-product-area-end -->

        <!-- blog-area-start -->
        <div class="blog-area light-bg-s pt-20 pb-30">
            <div class="container custom-conatiner">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-flex justify-content-between mb-30">
                            <div class="section__title section__title-2">
                                <h5 class="st-titile">Recommended For You</h5>
                            </div>
                            <div class="button-wrap button-wrap-2">
                                <a href="product.html">See All Product <i class="fal fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4">
                        <div class="single-smblog mb-30">
                            <div class="smblog-thum">
                                <div class="blog-image w-img">
                                    <a href="blog-details.html"><img src="assets/img/blog/sm-b-1.jpg" alt=""></a>
                                </div>
                                <div class="blog-tag">
                                    <a href="#">Digital</a>
                                </div>
                            </div>
                            <div class="smblog-content">
                                <h6><a href="blog-details.html">How mobile phones have changed people’s lives</a></h6>
                                <span class="author mb-10">posted by <a href="#">Adlop</a></span>
                                <p>It is accompanied by a case that can contain...</p>
                                <div class="smblog-foot pt-15">
                                    <div class="post-readmore">
                                        <a href="#"> Read More <span class="icon"></span></a>
                                    </div>
                                    <div class="post-date">
                                        <a href="#">Jan 24, 2022</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4">
                        <div class="single-smblog mb-30">
                            <div class="smblog-thum">
                                <div class="blog-image w-img">
                                    <a href="blog-details.html"><img src="assets/img/blog/sm-b-2.jpg" alt=""></a>
                                </div>
                                <div class="blog-tag">
                                    <a href="#">New</a>
                                </div>
                            </div>
                            <div class="smblog-content">
                                <h6><a href="blog-details.html">Top 5 Best Digital Cameras for 2021 You Should Buy</a>
                                </h6>
                                <span class="author mb-10">posted by <a href="#">Angelia</a></span>
                                <p>It is accompanied by a case that can contain...</p>
                                <div class="smblog-foot pt-15">
                                    <div class="post-readmore">
                                        <a href="#">Read More <span class="icon"></span></a>
                                    </div>
                                    <div class="post-date">
                                        <a href="#">Jan 24, 2022</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4">
                        <div class="single-smblog mb-30">
                            <div class="smblog-thum">
                                <div class="blog-image w-img">
                                    <a href="blog-details.html"><img src="assets/img/blog/sm-b-3.jpg" alt=""></a>
                                </div>
                                <div class="blog-tag">
                                    <a href="#">Update</a>
                                </div>
                            </div>
                            <div class="smblog-content">
                                <h6><a href="blog-details.html">Capture the moment with 4 cameras on Oppo A92</a></h6>
                                <span class="author mb-10">posted by <a href="#">Iqbal</a></span>
                                <p>It is accompanied by a case that can contain...</p>
                                <div class="smblog-foot pt-15">
                                    <div class="post-readmore">
                                        <a href="#"> Read More <span class="icon"></span></a>
                                    </div>
                                    <div class="post-date">
                                        <a href="#">Jan 24, 2022</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4">
                        <div class="single-smblog mb-30">
                            <div class="smblog-thum">
                                <div class="blog-image w-img">
                                    <a href="blog-details.html"><img src="assets/img/blog/sm-b-4.jpg" alt=""></a>
                                </div>
                                <div class="blog-tag">
                                    <a href="#">Offer</a>
                                </div>
                            </div>
                            <div class="smblog-content">
                                <h6><a href="blog-details.html">Use Headphones Properly Not To Damage Your Hearing</a>
                                </h6>
                                <span class="author mb-10">posted by <a href="#">Jenny</a></span>
                                <p>It is accompanied by a case that can contain...</p>
                                <div class="smblog-foot pt-15">
                                    <div class="post-readmore">
                                        <a href="#"> Read More <span class="icon"></span></a>
                                    </div>
                                    <div class="post-date">
                                        <a href="#">Jan 24, 2022</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4">
                        <div class="single-smblog mb-30">
                            <div class="smblog-thum">
                                <div class="blog-image w-img">
                                    <a href="blog-details.html"><img src="assets/img/blog/sm-b-5.jpg" alt=""></a>
                                </div>
                                <div class="blog-tag">
                                    <a href="#">Common</a>
                                </div>
                            </div>
                            <div class="smblog-content">
                                <h6><a href="blog-details.html">Laptops Become More Common in Everyday Life</a></h6>
                                <span class="author mb-10">posted by <a href="#">Nihal Fultu</a></span>
                                <p>It is accompanied by a case that can contain...</p>
                                <div class="smblog-foot pt-15">
                                    <div class="post-readmore">
                                        <a href="#"> Read More <span class="icon"></span></a>
                                    </div>
                                    <div class="post-date">
                                        <a href="#">Jan 24, 2022</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4">
                        <div class="single-smblog mb-30">
                            <div class="smblog-thum">
                                <div class="blog-image w-img">
                                    <a href="blog-details.html"><img src="assets/img/blog/sm-b-6.jpg" alt=""></a>
                                </div>
                                <div class="blog-tag">
                                    <a href="#">Hot</a>
                                </div>
                            </div>
                            <div class="smblog-content">
                                <h6><a href="blog-details.html">Do you know how to wear headphones properly?</a></h6>
                                <span class="author mb-10">posted by <a href="#">Rosanlina</a></span>
                                <p>It is accompanied by a case that can contain...</p>
                                <div class="smblog-foot pt-15">
                                    <div class="post-readmore">
                                        <a href="#"> Read More <span class="icon"></span></a>
                                    </div>
                                    <div class="post-date">
                                        <a href="#">Jan 24, 2022</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog-area-end -->

        <!-- brand-area-start -->
        <section class="brand-area light-bg-s pb-60">
            <div class="container custom-conatiner">
                <div class="brand-slider brand-slider-2 swiper-container pt-35 pb-30">
                    <div class="swiper-wrapper">
                        <div class="brand-item w-img swiper-slide">
                            <a href="#"><img src="assets/img/brand/brand-1.jpg" alt="brand"></a>
                        </div>
                        <div class="brand-item w-img swiper-slide">
                            <a href="#"><img src="assets/img/brand/brand-2.jpg" alt="brand"></a>
                        </div>
                        <div class="brand-item w-img swiper-slide">
                            <a href="#"><img src="assets/img/brand/brand-3.jpg" alt="brand"></a>
                        </div>
                        <div class="brand-item w-img swiper-slide">
                            <a href="#"><img src="assets/img/brand/brand-4.jpg" alt="brand"></a>
                        </div>
                        <div class="brand-item w-img swiper-slide">
                            <a href="#"><img src="assets/img/brand/brand-5.jpg" alt="brand"></a>
                        </div>
                        <div class="brand-item w-img swiper-slide">
                            <a href="#"><img src="assets/img/brand/brand-6.jpg" alt="brand"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- brand-area-end -->

        <!-- features-2__area-start -->
        <section class="features-2__area d-ddark-bg">
            <div class="container custom-conatiner">
                <div class="features-2__lists pt-25 pb-25">
                    <div
                        class="row row-cols-xxl-5 row-cols-xl-3 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 gx-0">
                        <div class="col">
                            <div class="features-2__item">
                                <div class="features-2__icon mr-20">
                                    <i class="fal fa-truck"></i>
                                </div>
                                <div class="features-2__content">
                                    <h6>FREE DELIVERY</h6>
                                    <p>For all orders over $120</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="features-2__item">
                                <div class="features-2__icon mr-20">
                                    <i class="fal fa-money-check"></i>
                                </div>
                                <div class="features-2__content">
                                    <h6>SAFE PAYMENT</h6>
                                    <p>100% secure payment</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="features-2__item">
                                <div class="features-2__icon mr-20">
                                    <i class="fal fa-comments-alt"></i>
                                </div>
                                <div class="features-2__content">
                                    <h6>24/7 HELP CENTER</h6>
                                    <p>Delicated 24/7 support</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="features-2__item">
                                <div class="features-2__icon mr-20">
                                    <i class="fal fa-hand-holding-usd"></i>
                                </div>
                                <div class="features-2__content">
                                    <h6>SHOP WITH CONFIDENCE</h6>
                                    <p>If goods have problems</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="features-2__item">
                                <div class="features-2__icon mr-20">
                                    <i class="fad fa-user-headset"></i>
                                </div>
                                <div class="features-2__content">
                                    <h6>FRIENDLY SERVICES</h6>
                                    <p>30 day satisfaction guarantee</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features-2__area-end -->


        <!-- shop modal start -->
        <div class="modal fade" id="productModalId" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered product__modal" role="document">
                <div class="modal-content">
                    <div class="product__modal-wrapper p-relative">
                        <div class="product__modal-close p-absolute">
                            <button data-bs-dismiss="modal"><i class="fal fa-times"></i></button>
                        </div>
                        <div class="product__modal-inner">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product__modal-box">
                                        <div class="tab-content" id="modalTabContent">
                                            <div class="tab-pane fade show active" id="nav1" role="tabpanel"
                                                aria-labelledby="nav1-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="assets/img/quick-view/quick-view-1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav2" role="tabpanel"
                                                aria-labelledby="nav2-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="assets/img/quick-view/quick-view-2.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav3" role="tabpanel"
                                                aria-labelledby="nav3-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="assets/img/quick-view/quick-view-3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav4" role="tabpanel"
                                                aria-labelledby="nav4-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="assets/img/quick-view/quick-view-4.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="nav1-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav1" type="button" role="tab" aria-controls="nav1"
                                                    aria-selected="true">
                                                    <img src="assets/img/quick-view/quick-nav-1.jpg" alt="">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="nav2-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav2" type="button" role="tab" aria-controls="nav2"
                                                    aria-selected="false">
                                                    <img src="assets/img/quick-view/quick-nav-2.jpg" alt="">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="nav3-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav3" type="button" role="tab" aria-controls="nav3"
                                                    aria-selected="false">
                                                    <img src="assets/img/quick-view/quick-nav-3.jpg" alt="">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="nav4-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav4" type="button" role="tab" aria-controls="nav4"
                                                    aria-selected="false">
                                                    <img src="assets/img/quick-view/quick-nav-4.jpg" alt="">
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product__modal-content">
                                        <h4><a href="product-details.html">Samsung C49J89: £875, Debenhams Plus</a></h4>
                                        <div class="product__review d-sm-flex">
                                            <div class="rating rating__shop mb-10 mr-30">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__add-review mb-15">
                                                <span>01 review</span>
                                            </div>
                                        </div>
                                        <div class="product__price">
                                            <span>$109.00 – $307.00</span>
                                        </div>
                                        <div class="product__modal-des mt-20 mb-15">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-circle"></i> Bass and Stereo Sound.</a>
                                                </li>
                                                <li><a href="#"><i class="fas fa-circle"></i> Display with 3088 x 1440
                                                        pixels resolution.</a></li>
                                                <li><a href="#"><i class="fas fa-circle"></i> Memory, Storage & SIM:
                                                        12GB RAM, 256GB.</a></li>
                                                <li><a href="#"><i class="fas fa-circle"></i> Androi v10.0 Operating
                                                        system.</a></li>
                                            </ul>
                                        </div>
                                        <div class="product__stock mb-20">
                                            <span class="mr-10">Availability :</span>
                                            <span>1795 in stock</span>
                                        </div>
                                        <div class="product__modal-form">
                                            <form action="#">
                                                <div class="pro-quan-area d-lg-flex align-items-center">
                                                    <div class="product-quantity mr-20 mb-25">
                                                        <div class="cart-plus-minus p-relative"><input type="text"
                                                                value="1" /></div>
                                                    </div>
                                                    <div class="pro-cart-btn mb-25">
                                                        <button class="cart-btn" type="submit">Add to cart</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="product__stock mb-30">
                                            <ul>
                                                <li><a href="#">
                                                        <span class="sku mr-10">SKU:</span>
                                                        <span>Samsung C49J89: £875, Debenhams Plus</span></a>
                                                </li>
                                                <li><a href="#">
                                                        <span class="cat mr-10">Categories:</span>
                                                        <span>iPhone, Tablets</span></a>
                                                </li>
                                                <li><a href="#">
                                                        <span class="tag mr-10">Tags:</span>
                                                        <span>Smartphone, Tablets</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop modal end -->

    </main>

    <!-- footer-start -->
    <?php include('./common/footer.php') ?>
    <!-- footer-end -->

    <!-- JS here -->
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/vendor/waypoints.js"></script>
    <script src="assets/js/bootstrap-bundle.js"></script>
    <script src="assets/js/meanmenu.js"></script>
    <script src="assets/js/swiper-bundle.js"></script>
    <script src="assets/js/tweenmax.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/magnific-popup.js"></script>
    <script src="assets/js/parallax.js"></script>
    <script src="assets/js/backtotop.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/counterup.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/isotope-pkgd.js"></script>
    <script src="assets/js/imagesloaded-pkgd.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>