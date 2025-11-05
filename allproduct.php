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
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <script defer src="assets/js/main.js"></script><link href="assets/css/style.css" rel="stylesheet">
</head>

<?php if(1 == 1): ?>

<div class="page-banner">
    <div class="overlay"></div>
    <div class="page-banner-inner">
        <h1> All Products</h1>
    </div>
</div>

<?php endif; ?>
                <?php require_once('sidebar-category.php'); ?>
<div class="col-md-3">
</div>
<?php if($home_featured_product_on_off == 1): ?>
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
                                    <?php echo $row['p_current_price']; ?> CFA
                                    <?php if($row['p_old_price'] != ''): ?>
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
                                    <p><a style="background-color:green;" href="product.php?id=<?php echo $row['p_id']; ?>" >View</a></p>
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
<?php endif; ?>


<?php if($home_popular_product_on_off == 1): ?>
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
<?php endif; ?>

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
                                    <span class="text-sm fw-normal text-n50"><?php if($row['p_old_price']!='') echo $row['p_old_price']." USD"; ?></span>
                                </div>
                                <div class="d-between flex-wrap gap-4">
                                    <div class="d-grid">
                                        <span class="text-sm fw-normal text-n50 text-decoration-line-through">$<?php if($row['p_old_price']!='') echo $row['p_old_price']." USD"; ?></span>   
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

<?php require_once('footer.php'); ?>