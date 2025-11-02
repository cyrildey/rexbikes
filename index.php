<?php require_once('header.php'); ?>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
    $cta_title = $row['cta_title'];
    $cta_content = $row['cta_content'];
    $cta_read_more_text = $row['cta_read_more_text'];
    $cta_read_more_url = $row['cta_read_more_url'];
    $cta_photo = $row['cta_photo'];
    $featured_product_title = $row['featured_product_title'];
    $featured_product_subtitle = $row['featured_product_subtitle'];
    $latest_product_title = $row['latest_product_title'];
    $latest_product_subtitle = $row['latest_product_subtitle'];
    $popular_product_title = $row['popular_product_title'];
    $popular_product_subtitle = $row['popular_product_subtitle'];
    $total_featured_product_home = $row['total_featured_product_home'];
    $total_latest_product_home = $row['total_latest_product_home'];
    $total_popular_product_home = $row['total_popular_product_home'];
    $home_service_on_off = $row['home_service_on_off'];
    $home_welcome_on_off = $row['home_welcome_on_off'];
    $home_featured_product_on_off = $row['home_featured_product_on_off'];
    $home_latest_product_on_off = $row['home_latest_product_on_off'];
    $home_popular_product_on_off = $row['home_popular_product_on_off'];

}
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Rexbikes offers a wide range of bicycles, gear, and accessories for every type of cyclist. Explore our collection and gear up for your next adventure!">
    <meta name="keywords"
        content="bicycles, bikes, cycling gear, bike accessories, mountain bikes, road bikes, Rexbikes">
    <meta name="author" content="Rexbikes Team">

    <meta property="og:title" content="Rexbikes | Quality Bicycles and Cycling Gear">
    <meta property="og:description"
        content="Discover the best selection of bicycles, gear, and accessories at Rexbikes. Shop now for top brands and quality service.">
    <meta property="og:image" content="assets/images/logo.png">
    <meta property="og:url" content="">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Rexbikes | Quality Bicycles and Cycling Gear">
    <meta name="twitter:description"
        content="Explore the latest in bicycles, cycling gear, and accessories at Rexbikes. Gear up for your next adventure!">
    <meta name="twitter:image" content="assets/images/logo.png">
    <meta name="twitter:site" content="@Rexbikes">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <script defer src="assets/js/main.js"></script><link href="assets/css/style.css" rel="stylesheet">
</head>


 <!-- hero section start -->
        <section class="hero-section px-xl-20 px-lg-10 px-sm-7 pt-120">
            <div class="container-fluid">
                <div class="row g-6">
                    <div class="col-lg-7">
                        <div
                            class="hero-swiper-wrapper py-3xl-12 py-lg-8 py-6 px-4xl-20 px-3xl-10 px-lg-8 px-sm-6 p-4 bg-secondary">
                            <span class="text-animation-word display-two text-n100 mb-1 text-center">REXBIKES</span>
                            <span class="text-animation-word d-block text-n100 mb-lg-5 mb-3 text-center">
                                Get your personal bikes now! <span
                                    class="text-secondary2"></span>
                            </span>
                            <div class="d-center gap-lg-5 gap-3">
                                <a href="allproduct.php" class="btn-secondary">Shop Bikes
                                    <span class="icon">
                                        <i class="ph ph-arrow-up-right"></i>
                                        <i class="ph ph-arrow-up-right"></i>
                                    </span>
                                </a>
                                <a href="allproduct.php"
                                    class="text-decoration-underline fw-medium hover-text-secondary2">Learn
                                    More</a>
                            </div>

                            <!-- hero swiper -->
                            <div class="swiper hero-swiper pt-4xl-18 pt-10">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide px-3xl-8">
                                        <!-- hero swiper item -->
                                        <div class="hero-swiper-item position-relative z-1">
                                            <span class="bg-text text-uppercase font-archivo top-30 left-50">C4</span>
                                            <img class="w-100" src="assets/images/hero-swiper-1.png" alt="hero swiper">
                                        </div>
                                    </div>
                                    <div class="swiper-slide px-3xl-8">
                                        <!-- hero swiper item -->
                                        <div class="hero-swiper-item position-relative z-1">
                                            <span class="bg-text text-uppercase font-archivo top-30 left-50">T4</span>
                                            <img class="w-100" src="assets/images/hero-swiper-2.png" alt="hero swiper">
                                        </div>
                                    </div>
                                    <div class="swiper-slide px-3xl-8">
                                        <!-- hero swiper item -->
                                        <div class="hero-swiper-item position-relative z-1">
                                            <span class="bg-text text-uppercase font-archivo top-30 left-50">A7</span>
                                            <img class="w-100" src="assets/images/hero-swiper-3.png" alt="hero swiper">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="d-flex align-items-center justify-content-center gap-3 mt-n15 position-relative z-3">
                                <button
                                    class="hero-swiper-prev icon-48px hover-text-n0 border border-n100-2 box-style box-secondary2">
                                    <i class="ph ph-caret-left"></i>
                                </button>
                                <button
                                    class="hero-swiper-next icon-48px hover-text-n0 border border-n100-2 box-style box-secondary2">
                                    <i class="ph ph-caret-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <!-- hero banner -->
                        <div class="d-lg-grid d-sm-flex d-grid  gap-6">
                            <!-- hero banner item -->
                            <div class="animate-box">
                                <a href="allproduct.php"
                                    class="hero-banner-item d-block hover-border-secondary2 position-relative z-1 overflow-hidden">
                                    <div class="hero-banner-wrapper">
                                        <img class="w-100 transition" src="assets/images/hero-banner-1.png"
                                            alt="hero banner">
                                    </div>
                                </a>
                            </div>
                            <!-- hero banner item -->
                            <div class="animate-box">
                                <a href="allproduct.php"
                                    class="hero-banner-item d-block hover-border-n0 position-relative z-1 overflow-hidden">
                                    <div class="hero-banner-wrapper">
                                        <img class="w-100 transition" src="assets/images/hero-banner-2.png"
                                            alt="hero banner">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero section end -->

        <!-- text slider start -->
        <div class="my-6 p-lg-6 p-4 bg-secondary overflow-hidden">
            <div class="swiper text-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide w-fit">
                        <div class="d-flex align-items-center gap-lg-6 gap-4">
                            <span class="text-sm font-noto-sans fw-medium text-uppercase text-n100">
                                 SPECIAL DISCOUNT
                            </span>
                            <span class="d-block w-1px h-24px bg-n100"></span>
                        </div>
                    </div>
                    <div class="swiper-slide w-fit">
                        <div class="d-flex align-items-center gap-lg-6 gap-4">
                            <span class="text-sm font-noto-sans fw-medium text-uppercase text-n100">
                                Free shipping for orders over $899 within USA
                            </span>
                            <span class="d-block w-1px h-24px bg-n100"></span>
                        </div>
                    </div>
                    <div class="swiper-slide w-fit">
                        <div class="d-flex align-items-center gap-lg-6 gap-4">
                            <span class="text-sm font-noto-sans fw-medium text-uppercase text-n100">
                                Shipping World Wide
                            </span>
                            <span class="d-block w-1px h-24px bg-n100"></span>
                        </div>
                    </div>
                    <div class="swiper-slide w-fit">
                        <div class="d-flex align-items-center gap-lg-6 gap-4">
                            <span class="text-sm font-noto-sans fw-medium text-uppercase text-n100">
                                Expert advice
                            </span>
                            <span class="d-block w-1px h-24px bg-n100"></span>
                        </div>
                    </div>
                    <div class="swiper-slide w-fit">
                        <div class="d-flex align-items-center gap-lg-6 gap-4">
                            <span class="text-sm font-noto-sans fw-medium text-uppercase text-n100">
                                Returns extends over a period of 14 days
                            </span>
                            <span class="d-block w-1px h-24px bg-n100"></span>
                        </div>
                    </div>
                    <div class="swiper-slide w-fit">
                        <div class="d-flex align-items-center gap-lg-6 gap-4">
                            <span class="text-sm font-noto-sans fw-medium text-uppercase text-n100">
                                Check Out Our Latest Vintage Bikes
                            </span>
                            <span class="d-block w-1px h-24px bg-n100"></span>
                        </div>
                    </div>
                    <div class="swiper-slide w-fit">
                        <div class="d-flex align-items-center gap-lg-6 gap-4">
                            <span class="text-sm font-noto-sans fw-medium text-uppercase text-n100">
                                Explore Our Latest Mountain Bikes
                            </span>
                            <span class="d-block w-1px h-24px bg-n100"></span>
                        </div>
                    </div>
                    <div class="swiper-slide w-fit">
                        <div class="d-flex align-items-center gap-lg-6 gap-4">
                            <span class="text-sm font-noto-sans fw-medium text-uppercase text-n100">
                                Free shipping for orders over $899 in USA
                            </span>
                            <span class="d-block w-1px h-24px bg-n100"></span>
                        </div>
                    </div>
                    <div class="swiper-slide w-fit">
                        <div class="d-flex align-items-center gap-lg-6 gap-4">
                            <span class="text-sm font-noto-sans fw-medium text-uppercase text-n100">
                                Returns extends over a period of 14 days
                            </span>
                            <span class="d-block w-1px h-24px bg-n100"></span>
                        </div>
                    </div>
                    <div class="swiper-slide w-fit">
                        <div class="d-flex align-items-center gap-lg-6 gap-4">
                            <span class="text-sm font-noto-sans fw-medium text-uppercase text-n100">
                                Check Out Our Latest Vintage Bikes 
                            </span>
                            <span class="d-block w-1px h-24px bg-n100"></span>
                        </div>
                    </div>
                    <div class="swiper-slide w-fit">
                        <div class="d-flex align-items-center gap-lg-6 gap-4">
                            <span class="text-sm font-noto-sans fw-medium text-uppercase text-n100">
                                SPECIAL DISCOUNT
                            </span>
                            <span class="d-block w-1px h-24px bg-n100"></span>
                        </div>
                    </div>
                    <div class="swiper-slide w-fit">
                        <div class="d-flex align-items-center gap-lg-6 gap-4">
                            <span class="text-sm font-noto-sans fw-medium text-uppercase text-n100">
                                Shipping World Wide
                            </span>
                            <span class="d-block w-1px h-24px bg-n100"></span>
                        </div>
                    </div>
                    <div class="swiper-slide w-fit">
                        <div class="d-flex align-items-center gap-lg-6 gap-4">
                            <span class="text-sm font-noto-sans fw-medium text-uppercase text-n100">
                                Free shipping for orders over $899
                            </span>
                            <span class="d-block w-1px h-24px bg-n100"></span>
                        </div>
                    </div>
                    <div class="swiper-slide w-fit">
                        <div class="d-flex align-items-center gap-lg-6 gap-4">
                            <span class="text-sm font-noto-sans fw-medium text-uppercase text-n100">
                                SPECIAL DISCOUNT
                            </span>
                            <span class="d-block w-1px h-24px bg-n100"></span>
                        </div>
                    </div>
                    <div class="swiper-slide w-fit">
                        <div class="d-flex align-items-center gap-lg-6 gap-4">
                            <span class="text-sm font-noto-sans fw-medium text-uppercase text-n100">
                                Shipping World Wide
                            </span>
                            <span class="d-block w-1px h-24px bg-n100"></span>
                        </div>
                    </div>
                    <div class="swiper-slide w-fit">
                        <div class="d-flex align-items-center gap-lg-6 gap-4">
                            <span class="text-sm font-noto-sans fw-medium text-uppercase text-n100">
                                Expert advice
                            </span>
                            <span class="d-block w-1px h-24px bg-n100"></span>
                        </div>
                    </div>
                    <div class="swiper-slide w-fit">
                        <div class="d-flex align-items-center gap-lg-6 gap-4">
                            <span class="text-sm font-noto-sans fw-medium text-uppercase text-n100">
                                Returns extends over a period of 14 days
                            </span>
                            <span class="d-block w-1px h-24px bg-n100"></span>
                        </div>
                    </div>
                    <div class="swiper-slide w-fit">
                        <div class="d-flex align-items-center gap-lg-6 gap-4">
                            <span class="text-sm font-noto-sans fw-medium text-uppercase text-n100">
                                Check Out Our Latest Vintage Bikes
                            </span>
                            <span class="d-block w-1px h-24px bg-n100"></span>
                        </div>
                    </div>
                    <div class="swiper-slide w-fit">
                        <div class="d-flex align-items-center gap-lg-6 gap-4">
                            <span class="text-sm font-noto-sans fw-medium text-uppercase text-n100">
                                Explore Our Latest Mountain Bikes
                            </span>
                            <span class="d-block w-1px h-24px bg-n100"></span>
                        </div>
                    </div>
                    <div class="swiper-slide w-fit">
                        <div class="d-flex align-items-center gap-lg-6 gap-4">
                            <span class="text-sm font-noto-sans fw-medium text-uppercase text-n100">
                                Free shipping for orders over $899
                            </span>
                            <span class="d-block w-1px h-24px bg-n100"></span>
                        </div>
                    </div>
                    <div class="swiper-slide w-fit">
                        <div class="d-flex align-items-center gap-lg-6 gap-4">
                            <span class="text-sm font-noto-sans fw-medium text-uppercase text-n100">
                                Returns extends over a period of 14 days
                            </span>
                            <span class="d-block w-1px h-24px bg-n100"></span>
                        </div>
                    </div>
                    <div class="swiper-slide w-fit">
                        <div class="d-flex align-items-center gap-lg-6 gap-4">
                            <span class="text-sm font-noto-sans fw-medium text-uppercase text-n100">
                                Check Out Our Latest Vintage Bikes
                            </span>
                            <span class="d-block w-1px h-24px bg-n100"></span>
                        </div>
                    </div>
                    <div class="swiper-slide w-fit">
                        <div class="d-flex align-items-center gap-lg-6 gap-4">
                            <span class="text-sm font-noto-sans fw-medium text-uppercase text-n100">
                                SPECIAL DISCOUNT
                            </span>
                            <span class="d-block w-1px h-24px bg-n100"></span>
                        </div>
                    </div>
                    <div class="swiper-slide w-fit">
                        <div class="d-flex align-items-center gap-lg-6 gap-4">
                            <span class="text-sm font-noto-sans fw-medium text-uppercase text-n100">
                                Shipping World Wide
                            </span>
                            <span class="d-block w-1px h-24px bg-n100"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div id="desktop">

        <!-- product section start -->
        <?php if($home_featured_product_on_off == 1){ ?>
        <section class="product-section px-xl-20 px-lg-10 px-sm-7 pt-120 pb-120 bg-n20">
            <div class="container-fluid">
                <div class="row g-6 justify-content-between align-items-end mb-lg-15 mb-md-10 mb-8">
                    <div class="col-lg-6 col-md-9">
                        <h2 class="text-animation-word display-four text-n100 text-uppercase">NEW ARRIVALS</h2>
                    </div>
                    <div class="col-auto">
                        <a href="allproduct.php" class="outline-btn radius-pill text-n100 fw-medium box-style box-secondary2">More Bikes</a>
                    </div>
                </div>
                <div class="row g-0">
                <?php
                    $statement = $pdo->prepare("SELECT * FROM tbl_product WHERE  p_is_active=? AND p_is_featured=? LIMIT ".$total_latest_product_home);
                    $statement->execute(array(1,1));
                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
                    foreach ($result as $row) {
                ?>
                    <div class="col-lg-4 col-xs-6">
                        <!-- product item -->
                        <div
                            class="product-card2 position-relative p-xl-10 p-lg-8 p-6 bg-n0 border border-n100-5 box-style box-n20 card-tilt animate-box">
                            <div
                                class="product-type py-lg-3 py-2 ps-lg-4 ps-2 pe-lg-6 pe-4 bg-secondary2 position-absolute top-0 start-0 parallelogram-path z-2">
                                <span class="text-sm fw-medium text-n0">New</span>
                            </div>
                            <div class="product-thumb-wrapper position-relative">
                                <button
                                    class="single-wishlist-btn text-secondary2 text-xl icon-52px bg-n0 position-absolute top-0 right-0 z-3 tooltip-btn tooltip-left"
                                    data-tooltip="Add to wishlist">
                                    <i class="ph ph-heart"></i>
                                </button>
                                <div class="product-thumb reveal-left hover-cursor" data-hover-text="View Product">
                                    <a href="product.php?id=<?php echo $row['p_id']; ?>" class="product-thumb-link d-block">
                                       <div class="product-image">
                                            <img src="assets/uploads/<?php echo $row['p_featured_photo']; ?>" alt="<?php echo $row['p_name']; ?>">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <span class="d-block h-1px w-100 bg-n100-1 mb-lg-6 mb-4 mt-lg-10 mt-6"></span>
                            <div class="product-info-wrapper">
                                <div class="mb-xxl-7 mb-md-5 mb-3">
                                    <a href="product.php?id=<?php echo $row['p_id']; ?>">
                                        <h4 class="text-animation-line text-n100 mb-2 hover-text-secondary2"><?php echo $row['p_name']; ?>
                                        </h4>
                                    </a>
                                    <span class="text-sm fw-normal text-n50"><?php echo $row['p_short_description']; ?></span>
                                </div>
                                <div class="d-between flex-wrap gap-4">
                                    <div class="d-grid">
                                        <span class="text-sm fw-normal text-n50 text-decoration-line-through">$<?php echo $row['p_old_price']; ?>USD</span>
                                        <span class="text-xl fw-semibold text-secondary2">$ <?php echo $row['p_current_price']; ?> USD</span>
                                    </div>
                                    <a href="product.php?id=<?php echo $row['p_id']; ?>" class="outline-btn text-n100 fw-medium box-style box-secondary2">VIEW PRODUCT </a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php }
              } ?>
                </div>
            </div>
        </section>
        <!-- product section end -->

        
     <!-- landing section start -->
        <section class="landing-section px-xl-20 px-lg-10 px-sm-7 pt-120 pb-lg-20 pb-10 custom-cursor-none">
            <div class="container-fluid">
                <div class="row g-6 align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-8 col-xs-10 mx-lg-0 mx-auto">
                        <div class="landing-banner reveal-left">
                            <div class="circle-spin position-absolute top-0 start-100 translate-middle z-3">
                                <img class="w-100" src="assets/images/circle-stripes.png" alt="img">
                            </div>
                            <img class="w-100" src="assets/images/feature-cyclecity.png" alt="banner">
                        </div>
                    </div>
                    <div class="col-4xl-5 col-lg-6">
                        <div class="mb-xxl-15 mb-xl-10 mb-8">
                            <div class="mb-xl-10 mb-lg-8 mb-6">
                                <span class="text-animation-line text-h1 text-n100 mb-lg-4 mb-3">
                                    Advancing Biking with Innovation, Performance, and Sustainability.
                                </span>
                                <p class="text-sm fw-normal text-n50">
                                    At Rexbikes, we revolutionized bikes and scooters. Our innovative designs combine cutting-edge technology with unmatched
                                    performance, offering a seamless and exhilarating ride for every cyclist. Join us on
                                    this beautiful journey.
                                </p>
                            </div>
                            <div class="d-flex align-items-center gap-lg-5 gap-3">
                                <a href="allproduct.php" class="btn-secondary">Shop Bikes
                                    <span class="icon">
                                        <i class="ph ph-arrow-up-right"></i>
                                        <i class="ph ph-arrow-up-right"></i>
                                    </span>
                                </a>
                                <a href="about.php"
                                    class="text-decoration-underline fw-medium hover-text-secondary2">Learn
                                    More</a>
                            </div>

                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- landing section end -->


   

    <!-- product section start -->
        <section class="product-section px-xl-20 px-lg-10 px-sm-7 pt-120 pb-120 bg-n20">
            <div class="container-fluid">
                <div class="row g-6 justify-content-between align-items-end mb-lg-15 mb-md-10 mb-8">
                    <div class="col-lg-6 col-md-9">
                        <h2 class="text-animation-word display-four text-n100 text-uppercase">Our Top Bikes</h2>
                    </div>
                    <div class="col-auto">
                        <a href="allproduct.php" class="outline-btn radius-pill text-n100 fw-medium box-style box-secondary2">More Bikes</a>
                    </div>
                </div>
                <div class="row g-0">
                <?php
                    $statement = $pdo->prepare("SELECT * FROM tbl_product WHERE  p_is_active=? ORDER BY p_id DESC LIMIT ".$total_latest_product_home);
                    $statement->execute(array(1));
                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
                    foreach ($result as $row) {
                ?>
                    <div class="col-lg-4 col-xs-6">
                        <!-- product item -->
                        <div
                            class="product-card2 position-relative p-xl-10 p-lg-8 p-6 bg-n0 border border-n100-5 box-style box-n20 card-tilt animate-box">
                            <div
                                class="product-type py-lg-3 py-2 ps-lg-4 ps-2 pe-lg-6 pe-4 bg-secondary2 position-absolute top-0 start-0 parallelogram-path z-2">
                                <span class="text-sm fw-medium text-n0">Top</span>
                            </div>
                            <div class="product-thumb-wrapper position-relative">
                                <button
                                    class="single-wishlist-btn text-secondary2 text-xl icon-52px bg-n0 position-absolute top-0 right-0 z-3 tooltip-btn tooltip-left"
                                    data-tooltip="Add to wishlist">
                                    <i class="ph ph-heart"></i>
                                </button>
                                <div class="product-thumb reveal-left hover-cursor" data-hover-text="View Product">
                                    <a href="product.php?id=<?php echo $row['p_id']; ?>" class="product-thumb-link d-block">
                                       <div class="product-image">
                                            <img src="assets/uploads/<?php echo $row['p_featured_photo']; ?>" alt="<?php echo $row['p_name']; ?>">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <span class="d-block h-1px w-100 bg-n100-1 mb-lg-6 mb-4 mt-lg-10 mt-6"></span>
                            <div class="product-info-wrapper">
                                <div class="mb-xxl-7 mb-md-5 mb-3">
                                    <a href="product.php?id=<?php echo $row['p_id']; ?>">
                                        <h4 class="text-animation-line text-n100 mb-2 hover-text-secondary2"><?php echo $row['p_name']; ?>
                                        </h4>
                                    </a>
                                    <span class="text-sm fw-normal text-n50"><?php echo $row['p_short_description']; ?></span>
                                </div>
                                <div class="d-between flex-wrap gap-4">
                                    <div class="d-grid">
                                        <span class="text-sm fw-normal text-n50 text-decoration-line-through">$<?php echo $row['p_old_price']; ?>USD</span>
                                        <span class="text-xl fw-semibold text-secondary2">$ <?php echo $row['p_current_price']; ?> USD</span>
                                    </div>
                                    <a href="product.php?id=<?php echo $row['p_id']; ?>" class="outline-btn text-n100 fw-medium box-style box-secondary2">VIEW PRODUCT </a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php }
              ?>
                </div>
            </div>
        </section>
        <!-- product section end -->
    <!-- <?php if($home_featured_product_on_off == 1): ?>
    <div class="product pt_70 pb_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="headline">
                        <h2><?php echo $featured_product_title; ?></h2>
                        <h3><?php echo $featured_product_subtitle; ?></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="product-carousel">
                        
                        <?php
                        $statement = $pdo->prepare("SELECT * FROM tbl_product WHERE p_is_featured=? AND p_is_active=? LIMIT ".$total_featured_product_home);
                        $statement->execute(array(1,1));
                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
                        foreach ($result as $row) {
                            ?>
                            <div class="item">
                                <div class="thumb">
                                    <div class="photo" style="background-image:url(assets/uploads/<?php echo $row['p_featured_photo']; ?>);"></div>
                                    <div class="overlay"></div>
                                </div>
                                <div class="text">
                                    <h3><a href="product.php?id=<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></a></h3>
                                    <h4>
                                        $<?php echo $row['p_current_price']; ?> 
                                        <?php if($row['p_old_price'] != ''): ?>
                                        <del>
                                            $<?php echo $row['p_old_price']; ?>
                                        </del>
                                        <?php endif; ?>
                                    </h4>
                                    <div class="rating">
                                        <?php
                                        $t_rating = 0;
                                        $statement1 = $pdo->prepare("SELECT * FROM tbl_rating WHERE p_id=?");
                                        $statement1->execute(array($row['p_id']));
                                        $tot_rating = $statement1->rowCount();
                                        if($tot_rating == 0) {
                                            $avg_rating = 0;
                                        } else {
                                            $result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($result1 as $row1) {
                                                $t_rating = $t_rating + $row1['rating'];
                                            }
                                            $avg_rating = $t_rating / $tot_rating;
                                        }
                                        ?>
                                        <?php
                                        if($avg_rating == 0) {
                                            echo '';
                                        }
                                        elseif($avg_rating == 1.5) {
                                            echo '
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            ';
                                        } 
                                        elseif($avg_rating == 2.5) {
                                            echo '
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            ';
                                        }
                                        elseif($avg_rating == 3.5) {
                                            echo '
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            ';
                                        }
                                        elseif($avg_rating == 4.5) {
                                            echo '
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            ';
                                        }
                                        else {
                                            for($i=1;$i<=5;$i++) {
                                                ?>
                                                <?php if($i>$avg_rating): ?>
                                                    <i class="fa fa-star-o"></i>
                                                <?php else: ?>
                                                    <i class="fa fa-star"></i>
                                                <?php endif; ?>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>

                                    <?php if($row['p_qty'] == 0): ?>
                                        <div class="out-of-stock">
                                            <div class="inner">
                                                Out Of Stock
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <p><a href="product.php?id=<?php echo $row['p_id']; ?>"><i class="fa fa-shopping-cart"></i> View</a></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?> -->


    <!-- <?php if($home_latest_product_on_off == 1): ?>
    <div class="product bg-gray pt_70 pb_30">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="headline">
                        <h2><?php echo $latest_product_title; ?></h2>
                        <h3><?php echo $latest_product_subtitle; ?></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="product-carousel">

                        <?php
                        $statement = $pdo->prepare("SELECT * FROM tbl_product WHERE p_is_active=? ORDER BY p_id DESC LIMIT ".$total_latest_product_home);
                        $statement->execute(array(1));
                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
                        foreach ($result as $row) {
                            ?>
                            <div class="item">
                                <div class="thumb">
                                    <div class="photo" style="background-image:url(assets/uploads/<?php echo $row['p_featured_photo']; ?>);"></div>
                                    <div class="overlay"></div>
                                </div>
                                <div class="text">
                                    <h3><a href="product.php?id=<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></a></h3>
                                    <h4>
                                        $<?php echo $row['p_current_price']; ?> 
                                        <?php if($row['p_old_price'] != ''): ?>
                                        <del>
                                            $<?php echo $row['p_old_price']; ?>
                                        </del>
                                        <?php endif; ?>
                                    </h4>
                                    <div class="rating">
                                        <?php
                                        $t_rating = 0;
                                        $statement1 = $pdo->prepare("SELECT * FROM tbl_rating WHERE p_id=?");
                                        $statement1->execute(array($row['p_id']));
                                        $tot_rating = $statement1->rowCount();
                                        if($tot_rating == 0) {
                                            $avg_rating = 0;
                                        } else {
                                            $result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($result1 as $row1) {
                                                $t_rating = $t_rating + $row1['rating'];
                                            }
                                            $avg_rating = $t_rating / $tot_rating;
                                        }
                                        ?>
                                        <?php
                                        if($avg_rating == 0) {
                                            echo '';
                                        }
                                        elseif($avg_rating == 1.5) {
                                            echo '
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            ';
                                        } 
                                        elseif($avg_rating == 2.5) {
                                            echo '
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            ';
                                        }
                                        elseif($avg_rating == 3.5) {
                                            echo '
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            ';
                                        }
                                        elseif($avg_rating == 4.5) {
                                            echo '
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            ';
                                        }
                                        else {
                                            for($i=1;$i<=5;$i++) {
                                                ?>
                                                <?php if($i>$avg_rating): ?>
                                                    <i class="fa fa-star-o"></i>
                                                <?php else: ?>
                                                    <i class="fa fa-star"></i>
                                                <?php endif; ?>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                    <?php if($row['p_qty'] == 0): ?>
                                        <div class="out-of-stock">
                                            <div class="inner">
                                                Out Of Stock
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <p><a href="product.php?id=<?php echo $row['p_id']; ?>"><i class="fa fa-shopping-cart"></i> View</a></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                    </div>


                </div>
            </div>
        </div>
    </div>
    <?php endif; ?> -->


    <!-- <?php if($home_popular_product_on_off == 1): ?>
    <div class="product pt_70 pb_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="headline">
                        <h2><?php echo $popular_product_title; ?></h2>
                        <h3><?php echo $popular_product_subtitle; ?></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="product-carousel">

                        <?php
                        $statement = $pdo->prepare("SELECT * FROM tbl_product WHERE p_is_active=? ORDER BY p_total_view DESC LIMIT ".$total_popular_product_home);
                        $statement->execute(array(1));
                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
                        foreach ($result as $row) {
                            ?>
                            <div class="item">
                                <div class="thumb">
                                    <div class="photo" style="background-image:url(assets/uploads/<?php echo $row['p_featured_photo']; ?>);"></div>
                                    <div class="overlay"></div>
                                </div>
                                <div class="text">
                                    <h3><a href="product.php?id=<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></a></h3>
                                    <h4>
                                        $<?php echo $row['p_current_price']; ?> 
                                        <?php if($row['p_old_price'] != ''): ?>
                                        <del>
                                            $<?php echo $row['p_old_price']; ?>
                                        </del>
                                        <?php endif; ?>
                                    </h4>
                                    <div class="rating">
                                        <?php
                                        $t_rating = 0;
                                        $statement1 = $pdo->prepare("SELECT * FROM tbl_rating WHERE p_id=?");
                                        $statement1->execute(array($row['p_id']));
                                        $tot_rating = $statement1->rowCount();
                                        if($tot_rating == 0) {
                                            $avg_rating = 0;
                                        } else {
                                            $result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($result1 as $row1) {
                                                $t_rating = $t_rating + $row1['rating'];
                                            }
                                            $avg_rating = $t_rating / $tot_rating;
                                        }
                                        ?>
                                        <?php
                                        if($avg_rating == 0) {
                                            echo '';
                                        }
                                        elseif($avg_rating == 1.5) {
                                            echo '
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            ';
                                        } 
                                        elseif($avg_rating == 2.5) {
                                            echo '
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            ';
                                        }
                                        elseif($avg_rating == 3.5) {
                                            echo '
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            ';
                                        }
                                        elseif($avg_rating == 4.5) {
                                            echo '
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            ';
                                        }
                                        else {
                                            for($i=1;$i<=5;$i++) {
                                                ?>
                                                <?php if($i>$avg_rating): ?>
                                                    <i class="fa fa-star-o"></i>
                                                <?php else: ?>
                                                    <i class="fa fa-star"></i>
                                                <?php endif; ?>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                    <?php if($row['p_qty'] == 0): ?>
                                        <div class="out-of-stock">
                                            <div class="inner">
                                                Out Of Stock
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <p><a href="product.php?id=<?php echo $row['p_id']; ?>"><i class="fa fa-shopping-cart"></i> View</a></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php endif; ?> -->

    

     <!-- services section start -->
    <?php if($home_service_on_off == 1): ?>
        <section class="category-section px-xl-20 px-lg-10 px-sm-7 pt-120 pb-120 bg-n20">
            <div class="container-fluid">
                <div class="row g-6 justify-content-center align-items-end mb-lg-15 mb-md-10 mb-8">
                    <div class="col-lg-6 text-center">
                        <h2 class="text-animation-word display-four text-n100 text-uppercase mb-lg-6 mb-4">
                            Our Top Services
                        </h2>
                        <p class="text-sm text-n50 fw-normal ch-85 mx-auto">Take a look at our Perfect Services.</p>
                    </div>
                </div>
                <div class="row g-6">
                    <?php
                    $statement = $pdo->prepare("SELECT * FROM tbl_service");
                    $statement->execute();
                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
                    foreach ($result as $row) {
                        ?>
                    <div class="col-lg-4 col-xs-6">
                        <div class="animate-box">
                            <a href="allproduct.php" class="d-block category-card shake-animation">
                                <div class="shake-thumb">
                                    <img class="w-100" src="assets/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['title']; ?>">
                                </div>
                                <div class="shake-thumb">
                                    <img class="w-100" src="assets/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['title']; ?>">
                                </div>
                                <div class="position-absolute bottom-0 left-0 z-3 mb-lg-8 mb-6 ms-lg-8 ms-6">
                                    <span class="outline-btn bg-n0 radius-pill box-style box-secondary2"><?php echo $row['title']; ?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                        <?php
                    }
                ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!-- category section end -->

</div>

<div id="phone">
    <?php if($home_latest_product_on_off == 1): ?>
    <div class="product bg-gray pt_30">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="headline">
                        <h2><?php echo $latest_product_title; ?></h2>
                        <h3><?php echo $latest_product_subtitle; ?></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="product-carousel">

                        <?php
                        $statement = $pdo->prepare("SELECT * FROM tbl_product WHERE p_is_active=? ORDER BY p_id DESC LIMIT ".$total_latest_product_home);
                        $statement->execute(array(1));
                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
                        foreach ($result as $row) {
                            ?>
                            <div class="item">
                                <div class="thumb">
                                    <div class="photo" style="background-image:url(assets/uploads/<?php echo $row['p_featured_photo']; ?>);"></div>
                                    <div class="overlay"></div>
                                </div>
                                <div class="text">
                                    <h3><a href="product.php?id=<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></a></h3>
                                    <h4>
                                        $<?php echo $row['p_current_price']; ?> 
                                        <?php if($row['p_old_price'] != ''): ?>
                                        <del>
                                            $<?php echo $row['p_old_price']; ?>
                                        </del>
                                        <?php endif; ?>
                                    </h4>
                                    <div class="rating">
                                        <?php
                                        $t_rating = 0;
                                        $statement1 = $pdo->prepare("SELECT * FROM tbl_rating WHERE p_id=?");
                                        $statement1->execute(array($row['p_id']));
                                        $tot_rating = $statement1->rowCount();
                                        if($tot_rating == 0) {
                                            $avg_rating = 0;
                                        } else {
                                            $result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($result1 as $row1) {
                                                $t_rating = $t_rating + $row1['rating'];
                                            }
                                            $avg_rating = $t_rating / $tot_rating;
                                        }
                                        ?>
                                        <?php
                                        if($avg_rating == 0) {
                                            echo '';
                                        }
                                        elseif($avg_rating == 1.5) {
                                            echo '
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            ';
                                        } 
                                        elseif($avg_rating == 2.5) {
                                            echo '
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            ';
                                        }
                                        elseif($avg_rating == 3.5) {
                                            echo '
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            ';
                                        }
                                        elseif($avg_rating == 4.5) {
                                            echo '
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            ';
                                        }
                                        else {
                                            for($i=1;$i<=5;$i++) {
                                                ?>
                                                <?php if($i>$avg_rating): ?>
                                                    <i class="fa fa-star-o"></i>
                                                <?php else: ?>
                                                    <i class="fa fa-star"></i>
                                                <?php endif; ?>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                    <?php if($row['p_qty'] == 0): ?>
                                        <div class="out-of-stock">
                                            <div class="inner">
                                                Out Of Stock
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <p><a href="product.php?id=<?php echo $row['p_id']; ?>"><i class="fa fa-shopping-cart"></i> View</a></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                    </div>


                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>


    <?php if($home_popular_product_on_off == 1): ?>
    <div class="product pt_30 pb_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="headline">
                        <h2><?php echo $popular_product_title; ?></h2>
                        <h3><?php echo $popular_product_subtitle; ?></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="product-carousel">

                        <?php
                        $statement = $pdo->prepare("SELECT * FROM tbl_product WHERE p_is_active=? ORDER BY p_total_view DESC LIMIT ".$total_popular_product_home);
                        $statement->execute(array(1));
                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
                        foreach ($result as $row) {
                            ?>
                            <div class="item">
                                <div class="thumb">
                                    <div class="photo" style="background-image:url(assets/uploads/<?php echo $row['p_featured_photo']; ?>);"></div>
                                    <div class="overlay"></div>
                                </div>
                                <div class="text">
                                    <h3><a href="product.php?id=<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></a></h3>
                                    <h4>
                                        $<?php echo $row['p_current_price']; ?> 
                                        <?php if($row['p_old_price'] != ''): ?>
                                        <del>
                                            $<?php echo $row['p_old_price']; ?>
                                        </del>
                                        <?php endif; ?>
                                    </h4>
                                    <div class="rating">
                                        <?php
                                        $t_rating = 0;
                                        $statement1 = $pdo->prepare("SELECT * FROM tbl_rating WHERE p_id=?");
                                        $statement1->execute(array($row['p_id']));
                                        $tot_rating = $statement1->rowCount();
                                        if($tot_rating == 0) {
                                            $avg_rating = 0;
                                        } else {
                                            $result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($result1 as $row1) {
                                                $t_rating = $t_rating + $row1['rating'];
                                            }
                                            $avg_rating = $t_rating / $tot_rating;
                                        }
                                        ?>
                                        <?php
                                        if($avg_rating == 0) {
                                            echo '';
                                        }
                                        elseif($avg_rating == 1.5) {
                                            echo '
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            ';
                                        } 
                                        elseif($avg_rating == 2.5) {
                                            echo '
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            ';
                                        }
                                        elseif($avg_rating == 3.5) {
                                            echo '
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            ';
                                        }
                                        elseif($avg_rating == 4.5) {
                                            echo '
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            ';
                                        }
                                        else {
                                            for($i=1;$i<=5;$i++) {
                                                ?>
                                                <?php if($i>$avg_rating): ?>
                                                    <i class="fa fa-star-o"></i>
                                                <?php else: ?>
                                                    <i class="fa fa-star"></i>
                                                <?php endif; ?>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                    <?php if($row['p_qty'] == 0): ?>
                                        <div class="out-of-stock">
                                            <div class="inner">
                                                Out Of Stock
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <p><a href="product.php?id=<?php echo $row['p_id']; ?>"><i class="fa fa-shopping-cart"></i> View</a></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    
   <!-- product section start -->
    <?php if($home_featured_product_on_off == 1){ ?>
        <section class="product-section px-xl-20 px-lg-10 px-sm-7 pt-120 pb-120 bg-n20">
            <div class="container-fluid">
                <div class="row g-6 justify-content-between align-items-end mb-lg-15 mb-md-10 mb-8">
                    <div class="col-lg-6 col-md-9">
                        <h2 class="text-animation-word display-four text-n100 text-uppercase">NEW ARRIVALS</h2>
                    </div>
                    <div class="col-auto">
                        <a href="allproduct.php" class="outline-btn radius-pill text-n100 fw-medium box-style box-secondary2">More Bikes</a>
                    </div>
                </div>
                <div class="row g-0">
                <?php
                    $statement = $pdo->prepare("SELECT * FROM tbl_product WHERE  p_is_active=? AND p_is_featured=? LIMIT ".$total_latest_product_home);
                    $statement->execute(array(1,1));
                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
                    foreach ($result as $row) {
                ?>
                    <div class="col-lg-4 col-xs-6">
                        <!-- product item -->
                        <div
                            class="product-card2 position-relative p-xl-10 p-lg-8 p-6 bg-n0 border border-n100-5 box-style box-n20 card-tilt animate-box">
                            <div
                                class="product-type py-lg-3 py-2 ps-lg-4 ps-2 pe-lg-6 pe-4 bg-secondary2 position-absolute top-0 start-0 parallelogram-path z-2">
                                <span class="text-sm fw-medium text-n0">New</span>
                            </div>
                            <div class="product-thumb-wrapper position-relative">
                                <button
                                    class="single-wishlist-btn text-secondary2 text-xl icon-52px bg-n0 position-absolute top-0 right-0 z-3 tooltip-btn tooltip-left"
                                    data-tooltip="Add to wishlist">
                                    <i class="ph ph-heart"></i>
                                </button>
                                <div class="product-thumb reveal-left hover-cursor" data-hover-text="View Product">
                                    <a href="product.php?id=<?php echo $row['p_id']; ?>" class="product-thumb-link d-block">
                                       <div class="product-image">
                                            <img src="assets/uploads/<?php echo $row['p_featured_photo']; ?>" alt="<?php echo $row['p_name']; ?>">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <span class="d-block h-1px w-100 bg-n100-1 mb-lg-6 mb-4 mt-lg-10 mt-6"></span>
                            <div class="product-info-wrapper">
                                <div class="mb-xxl-7 mb-md-5 mb-3">
                                    <a href="product.php?id=<?php echo $row['p_id']; ?>">
                                        <h4 class="text-animation-line text-n100 mb-2 hover-text-secondary2"><?php echo $row['p_name']; ?>
                                        </h4>
                                    </a>
                                    <span class="text-sm fw-normal text-n50"><?php echo $row['p_short_description']; ?></span>
                                </div>
                                <div class="d-between flex-wrap gap-4">
                                    <div class="d-grid">
                                        <span class="text-sm fw-normal text-n50 text-decoration-line-through">$<?php echo $row['p_old_price']; ?>USD</span>
                                        <span class="text-xl fw-semibold text-secondary2">$ <?php echo $row['p_current_price']; ?> USD</span>
                                    </div>
                                    <a href="product.php?id=<?php echo $row['p_id']; ?>" class="outline-btn text-n100 fw-medium box-style box-secondary2">VIEW PRODUCT </a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php }
              } ?>
                </div>
            </div>
        </section>
    <!-- product section end -->
    <section class="product-section px-xl-20 px-lg-10 px-sm-7 pt-120 pb-120 bg-n20">
        <div class="container-fluid">
            <div class="row g-6 justify-content-between align-items-end mb-lg-15 mb-md-10 mb-8">
                <div class="col-lg-6 col-md-9">
                    <h2 class="text-animation-word display-four text-n100 text-uppercase">Our Top Bikes</h2>
                </div>
                <div class="col-auto">
                    <a href="allproduct.php" class="outline-btn radius-pill text-n100 fw-medium box-style box-secondary2">More Bikes</a>
                </div>
            </div>
            <div class="row g-0">
            <?php
                $statement = $pdo->prepare("SELECT * FROM tbl_product WHERE  p_is_active=? ORDER BY p_id DESC LIMIT ".$total_latest_product_home);
                $statement->execute(array(1));
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
                foreach ($result as $row) {
            ?>
                <div class="col-lg-4 col-xs-6">
                    <!-- product item -->
                    <div
                        class="product-card2 position-relative p-xl-10 p-lg-8 p-6 bg-n0 border border-n100-5 box-style box-n20 card-tilt animate-box">
                        <div
                            class="product-type py-lg-3 py-2 ps-lg-4 ps-2 pe-lg-6 pe-4 bg-secondary2 position-absolute top-0 start-0 parallelogram-path z-2">
                            <span class="text-sm fw-medium text-n0">Top</span>
                        </div>
                        <div class="product-thumb-wrapper position-relative">
                            <button
                                class="single-wishlist-btn text-secondary2 text-xl icon-52px bg-n0 position-absolute top-0 right-0 z-3 tooltip-btn tooltip-left"
                                data-tooltip="Add to wishlist">
                                <i class="ph ph-heart"></i>
                            </button>
                            <div class="product-thumb reveal-left hover-cursor" data-hover-text="View Product">
                                <a href="product.php?id=<?php echo $row['p_id']; ?>" class="product-thumb-link d-block">
                                    <div class="product-image">
                                        <img src="assets/uploads/<?php echo $row['p_featured_photo']; ?>" alt="<?php echo $row['p_name']; ?>">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <span class="d-block h-1px w-100 bg-n100-1 mb-lg-6 mb-4 mt-lg-10 mt-6"></span>
                        <div class="product-info-wrapper">
                            <div class="mb-xxl-7 mb-md-5 mb-3">
                                <a href="product.php?id=<?php echo $row['p_id']; ?>">
                                    <h4 class="text-animation-line text-n100 mb-2 hover-text-secondary2"><?php echo $row['p_name']; ?>
                                    </h4>
                                </a>
                                <span class="text-sm fw-normal text-n50"><?php echo $row['p_short_description']; ?></span>
                            </div>
                            <div class="d-between flex-wrap gap-4">
                                <div class="d-grid">
                                    <span class="text-sm fw-normal text-n50 text-decoration-line-through">$<?php echo $row['p_old_price']; ?>USD</span>
                                    <span class="text-xl fw-semibold text-secondary2">$ <?php echo $row['p_current_price']; ?> USD</span>
                                </div>
                                <a href="product.php?id=<?php echo $row['p_id']; ?>" class="outline-btn text-n100 fw-medium box-style box-secondary2">VIEW PRODUCT </a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php }
            ?>
            </div>
        </div>
    </section>

     <!-- services section start -->
    <?php if($home_service_on_off == 1): ?>
        <section class="category-section px-xl-20 px-lg-10 px-sm-7 pt-120 pb-120 bg-n20">
            <div class="container-fluid">
                <div class="row g-6 justify-content-center align-items-end mb-lg-15 mb-md-10 mb-8">
                    <div class="col-lg-6 text-center">
                        <h2 class="text-animation-word display-four text-n100 text-uppercase mb-lg-6 mb-4">
                            Our Top Services
                        </h2>
                        <p class="text-sm text-n50 fw-normal ch-85 mx-auto">Take a look at our Perfect Services.</p>
                    </div>
                </div>
                <div class="row g-6">
                    <?php
                    $statement = $pdo->prepare("SELECT * FROM tbl_service");
                    $statement->execute();
                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
                    foreach ($result as $row) {
                        ?>
                    <div class="col-lg-4 col-xs-6">
                        <div class="animate-box">
                            <a href="allproduct.php" class="d-block category-card shake-animation">
                                <div class="shake-thumb">
                                    <img class="w-100" src="assets/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['title']; ?>">
                                </div>
                                <div class="shake-thumb">
                                    <img class="w-100" src="assets/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['title']; ?>">
                                </div>
                                <div class="position-absolute bottom-0 left-0 z-3 mb-lg-8 mb-6 ms-lg-8 ms-6">
                                    <span class="outline-btn bg-n0 radius-pill box-style box-secondary2"><?php echo $row['title']; ?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                        <?php
                    }
                ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!-- category section end -->
</div>

  <script>
    function toggleDivs() {
      const div1 = document.getElementById("desktop");
      const div2 = document.getElementById("phone");

      if (window.innerWidth <= 1100) {
        div1.style.display = "none";  // hide first div
        div2.style.display = "block"; // show second div
      } else {
        div1.style.display = "block"; // show first div
        div2.style.display = "none";  // hide second div
      }
    }

    // Run once on page load
    toggleDivs();

    // Run every time the window is resized
    window.addEventListener("resize", toggleDivs);
  </script>

<?php require_once('footer.php'); ?>