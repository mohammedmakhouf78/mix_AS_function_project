<?php
    $header = [
        'title' => "مرحبا بك في الموقع",
        'description' => "ازيك يله"
    ];
?>

<!-- Header -->
<header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h1>
                            <?php echo $header['title']; ?>
                        </h1>
                        <p class="p-large p-heading">
                            <?php echo $header['description']; ?>
                        </p>
                        <a class="btn-solid-lg" href="#your-link"><i class="fab fa-apple"></i>تشغيل</a>
                        <a class="btn-solid-lg" href="#your-link"><i class="fab fa-google-play"></i>لعب</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="image-container">
                        <img class="img-fluid" src="images/header-iphone.png" alt="alternative">
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
        <div class="deco-white-circle-1">
            <img src="images/decorative-white-circle.svg" alt="alternative">
        </div> <!-- end of deco-white-circle-1 -->
        <div class="deco-white-circle-2">
            <img src="images/decorative-white-circle.svg" alt="alternative">
        </div> <!-- end of deco-white-circle-2 -->
        <div class="deco-blue-circle">
            <img src="images/decorative-blue-circle.svg" alt="alternative">
        </div> <!-- end of deco-blue-circle -->
        <div class="deco-yellow-circle">
            <img src="images/decorative-yellow-circle.svg" alt="alternative">
        </div> <!-- end of deco-yellow-circle -->
        <div class="deco-green-diamond">
            <img src="images/decorative-green-diamond.svg" alt="alternative">
        </div> <!-- end of deco-yellow-circle -->
    </header> <!-- end of header -->
    <!-- end of header -->