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
        content="CycleCity offers a wide range of bicycles, gear, and accessories for every type of cyclist. Explore our collection and gear up for your next adventure!">
    <meta name="keywords"
        content="bicycles, bikes, cycling gear, bike accessories, mountain bikes, road bikes, CycleCity">
    <meta name="author" content="CycleCity Team">

    <meta property="og:title" content="CycleCity | Quality Bicycles and Cycling Gear">
    <meta property="og:description"
        content="Discover the best selection of bicycles, gear, and accessories at CycleCity. Shop now for top brands and quality service.">
    <meta property="og:image" content="assets/images/logo.png">
    <meta property="og:url" content="">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="CycleCity | Quality Bicycles and Cycling Gear">
    <meta name="twitter:description"
        content="Explore the latest in bicycles, cycling gear, and accessories at CycleCity. Gear up for your next adventure!">
    <meta name="twitter:image" content="assets/images/logo.png">
    <meta name="twitter:site" content="@CycleCity">

    <title>CycleCity | Your Hub for Quality Bicycles, Gear, and Accessories</title>
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
                            <span class="text-animation-word display-two text-n100 mb-1 text-center">FREEDOM RIDE</span>
                            <span class="text-animation-word d-block text-n100 mb-lg-5 mb-3 text-center">
                                Your personal electric bike with insurance from <span
                                    class="text-secondary2">€88/</span>month.
                            </span>
                            <div class="d-center gap-lg-5 gap-3">
                                <a href="shop.html" class="btn-secondary">Shop Bikes
                                    <span class="icon">
                                        <i class="ph ph-arrow-up-right"></i>
                                        <i class="ph ph-arrow-up-right"></i>
                                    </span>
                                </a>
                                <a href="about-us.html"
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
                                <a href="accessories.html"
                                    class="hero-banner-item d-block hover-border-secondary2 position-relative z-1 overflow-hidden">
                                    <div class="hero-banner-wrapper">
                                        <img class="w-100 transition" src="assets/images/hero-banner-1.png"
                                            alt="hero banner">
                                    </div>
                                </a>
                            </div>
                            <!-- hero banner item -->
                            <div class="animate-box">
                                <a href="accessories.html"
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
        <div class="my-6 p-lg-6 p-4 bg-primary overflow-hidden">
            <div class="swiper text-slider">
                <div class="swiper-wrapper">
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
                                Shipping through all of Europe
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
                                Check Out Our Trendy E-Bikes
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
                                Check Out Our Trendy E-Bikes
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
                                Shipping through all of Europe
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
                                Shipping through all of Europe
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
                                Check Out Our Trendy E-Bikes
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
                                Check Out Our Trendy E-Bikes
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
                                Shipping through all of Europe
                            </span>
                            <span class="d-block w-1px h-24px bg-n100"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div id="desktop">

    <section class="hero">
    <h1>Connect with Expert Service Providers</h1>
    <p>REXBIKES is a premium marketplace connecting businesses with top-quality service providers across various industries.</p>
    <div class="hero-buttons">
        <button class="btn btn-secondary">Find Services</button>
    </div>
    </section>

    <section class="categories">
    <h2>Popular Categories</h2>
    <p class="intro">Browse services by category to find exactly what your business needs</p>
    
    <div class="category-grid">
        <div class="category-card">
        <i class="fas fa-laptop-code"></i>
        <h3>IT & Development</h3><br><h3>Equipments</h3>
        </div>
        <div class="category-card">
        <i class="fas fa-pencil-alt"></i>
        <h3>Design & Creative</h3><br><h3>Tools</h3>
        </div>
        <div class="category-card">
        <i class="fas fa-chart-line"></i>
        <h3>Marketing & SEO</h3><br><h3>Products</h3>
        </div>
        <div class="category-card">
        <i class="fas fa-calculator"></i>
        <h3>Business & Finance</h3><br><h3>Stuffs</h3>
        </div>
    </div>
    </section>


    <?php if($home_featured_product_on_off == 1): ?>
    <section class="products">
        <div class="section-header">
            <h2>Featured Services</h2>
            <a href="allproduct.php" class="view-all">View All</a>
        </div>

        <div class="product-grid" id="product-grid">
        <!-- Products will be dynamically inserted here -->
        <?php
            $statement = $pdo->prepare("SELECT * FROM tbl_product WHERE  p_is_active=? LIMIT ".$total_latest_product_home);
            $statement->execute(array(1));
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
            foreach ($result as $row) {
        ?>
        <div class="product-card">
            <div class="product-image">
                <img src="assets/uploads/<?php echo $row['p_featured_photo']; ?>" alt="<?php echo $row['p_name']; ?>">
            </div>
            <div class="product-info">
                <h3><a href="product.php?id=<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></a></h3>
                <!-- <p><?php echo $row['p_description']; ?></p> -->
                <div class="product-price"><?php echo $row['p_current_price']; ?> CFA </div>
                <!-- <div class="product-rating">
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
                        elseif($avg_rating == 2) {
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
                </div> -->
                <div class="product-actions">
                    <button  class="view-details"><a href="product.php?id=<?php echo $row['p_id']; ?>" style="color: green;">View Details</a></button>
                </div>
            </div>
        </div>
        <?php
        }
        ?>


        </div>
    </section>
    <?php endif; ?>

 <section class="products">
        <div class="section-header">
            <h2>Products and Services</h2>
            <a href="allproduct.php" class="view-all">View All</a>
        </div>

        <div class="product-grid" id="product-grid">
        <!-- Products will be dynamically inserted here -->
        <?php
            $statement = $pdo->prepare("SELECT * FROM tbl_product WHERE  p_is_active=? ORDER BY p_id DESC");
            $statement->execute(array(1));
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
            foreach ($result as $row) {
        ?>
        <div class="product-card">
            <div class="product-image">
                <img src="assets/uploads/<?php echo $row['p_featured_photo']; ?>" alt="<?php echo $row['p_name']; ?>">
            </div>
            <div class="product-info">
                <h3><a href="product.php?id=<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></a></h3>
                <!-- <p><?php echo $row['p_description']; ?></p> -->
                <div class="product-price"><?php echo $row['p_current_price']; ?> CFA </div>
                <!-- <div class="product-rating">
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
                        elseif($avg_rating == 2) {
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
                </div> -->
                <div class="product-actions">
                    <button  class="view-details"><a href="product.php?id=<?php echo $row['p_id']; ?>" style="color: green;">View Details</a></button>
                </div>
            </div>
        </div>
        <?php
        }
        ?>


        </div>
    </section>
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

    <?php if($home_service_on_off == 1): ?>
    <div class="service bg-gray"  id="services">
        <div class="container">
            <div class="row">
                <?php
                    $statement = $pdo->prepare("SELECT * FROM tbl_service");
                    $statement->execute();
                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
                    foreach ($result as $row) {
                        ?>
                        <div class="col-md-4">
                            <div class="item">
                                <div class="photo"><img src="assets/uploads/<?php echo $row['photo']; ?>" width="150px" alt="<?php echo $row['title']; ?>"></div>
                                <h3><?php echo $row['title']; ?></h3>
                                <p>
                                    <?php echo nl2br($row['content']); ?>
                                </p>
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
    <?php endif; ?>

</div>

<div id="phone">

    <?php if($home_featured_product_on_off == 1): ?>
    <div class="product pt_70 ">
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
    <?php endif; ?>


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
    
   
      <div class="product pt_30 pb_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="headline">
                        <h2><?php// echo $popular_product_title; ?></h2>
                        <h3><?php //echo $popular_product_subtitle; ?></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="product">

                        <?php
                        $statement1 = $pdo->prepare("SELECT * FROM tbl_product WHERE p_is_active=? ORDER BY p_id DESC");
                        $statement1->execute(array(1));
                        $result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);                            
                        foreach ($result1 as $row) {
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