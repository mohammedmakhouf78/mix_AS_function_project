<?php

    $sliders = [
        [
            "id" => 1,
            "image" => "screenshot-1.jpg"
        ],
        [
            "id" => 2,
            "image" => "screenshot-2.jpg"
        ],
        [
            "id" => 3,
            "image" => "screenshot-3.jpg"
        ],
        [
            "id" => 4,
            "image" => "screenshot-4.jpg"
        ],
        [
            "id" => 5,
            "image" => "screenshot-5.jpg"
        ],
        [
            "id" => 6,
            "image" => "screenshot-6.jpg"
        ],
    ];

 ?>
 <!-- Screenshots -->
 <div id="screens" class="slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <?php foreach($sliders as $slider): ?>
                                <div class="swiper-slide">
                                    <a href="images/<?= $slider['image'] ?>" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/<?= $slider['image'] ?>" alt="alternative">
                                    </a>
                                </div>
                                <?php endforeach; ?>
                                <!-- end of slide -->
                                
                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider -->
    <!-- end of screenshots -->