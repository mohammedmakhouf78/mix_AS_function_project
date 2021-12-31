<?php include "./layouts/head.php"; ?>

<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <?php include "./layouts/navbar.php"; ?>


    <?php include "./components/header.php"; ?>


    <!-- Small Features -->
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Identify Goals</h5>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image green">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Situation Analysis</h5>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image red">
                            <i class="fas fa-cog"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Tasks Settings</h5>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image yellow">
                            <i class="fas fa-comments"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Social Interaction</h5>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image blue">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Get Things Done</h5>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of small features -->


    <!-- Description 1 -->
    <div id="description" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/description-1-app.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Organize Your Time And Start Getting Results</h2>
                        <p>Sync is the first mobile app on the market to harness the power of social connections to help you stop procrastinating and start getting things done. Give it a try and see the changes right away</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Analyse and evaluate your current status and productivity</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Begin monitoring your day to day routine with Sync app</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">See the improved results in no more than a couple of weeks</div>
                            </li>
                        </ul>
                        <a class="btn-solid-reg popup-with-move-anim" href="#description-1-details-lightbox">LIGHTBOX</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of description 1 -->

    
    <!-- Description 1 Details Lightbox -->
	<!-- Details Lightbox -->
	<div id="description-1-details-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
			<div class="col-lg-8">
                <div class="image-container">
                    <img class="img-fluid" src="images/description-1-details-lightbox.jpg" alt="alternative">
                </div> <!-- end of image-container -->
			</div>
			<div class="col-lg-4">
                <h3>Goals Setting</h3>
				<hr>
                <p>The app can easily help you track your personal development evolution if you take the time to set it up.</p>
                <h4>User Feedback</h4>
                <p>This is a great app which can help you save time and make your live easier. And it will help improve your productivity.</p>
                <ul class="list-unstyled li-space-lg">
                    <li class="media">
                        <i class="far fa-check-square"></i><div class="media-body">Splash screen panel</div>
                    </li>
                    <li class="media">
                        <i class="far fa-check-square"></i><div class="media-body">Statistics graph report</div>
                    </li>
                    <li class="media">
                        <i class="far fa-check-square"></i><div class="media-body">Events calendar layout</div>
                    </li>
                    <li class="media">
                        <i class="far fa-check-square"></i><div class="media-body">Location details screen</div>
                    </li>
                    <li class="media">
                        <i class="far fa-check-square"></i><div class="media-body">Onboarding steps interface</div>
                    </li>
                </ul>
                <a class="btn-solid-reg mfp-close page-scroll" href="#download">DOWNLOAD</a> <button class="btn-outline-reg mfp-close as-button" type="button">BACK</button>
			</div>
		</div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox -->
    <!-- end of description 1 details lightbox -->



    <!-- Description 2 -->
    <div class="tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tabs-container">

                        <!-- Tabs Links -->
                        <ul class="nav nav-tabs" id="cedoTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><i class="far fa-clock"></i>Schedule</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"><i class="fas fa-list"></i>Tracking</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false"><i class="far fa-calendar-alt"></i>Organize</a>
                            </li>
                        </ul>
                        <!-- end of tabs links -->
                        
                        <!-- Tabs Content -->
                        <div class="tab-content" id="cedoTabsContent">
                            <!-- Tab -->
                            <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                                <p><strong>Schedule tasks</strong> to keep track of their completion. Sync provides multiple scheduling options including alarms and reminders.</p>
                                <ul class="list-unstyled li-space-lg">
                                    <li class="media">
                                        <i class="far fa-check-square"></i>
                                        <div class="media-body">You can always add new tasks or change the settings of existing ones in your calendar view or the app control panel</div>
                                    </li>
                                    <li class="media">
                                        <i class="far fa-check-square"></i>
                                        <div class="media-body">It's easy to stay focused on your most important daily activities that will get you closer to meeting your goals</div>
                                    </li>
                                    <li class="media">
                                        <i class="far fa-check-square"></i>
                                        <div class="media-body">Use phone reminders to free up your long term memory which will reduce stress and make you more productive</div>
                                    </li>
                                </ul>
                                <a class="btn-solid-reg page-scroll" href="terms-conditions.html">TERMS</a> <a class="btn-outline-reg page-scroll" href="privacy-policy.html">PRIVACY</a>
                            </div> <!-- end of tab-pane -->
                            <!-- end of tab -->

                            <!-- Tab -->
                            <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                                <p><strong>Keep track of everything</strong> and analyse your progress while using the app. In less than a month you should be seeing improved results when it comes to time management and task prioritization</p>
                                <p><strong>Anyone can enjoy the app</strong> no matter their gender, age, occupation or location in the world. Sync's algorithms have been built to be flexible and functional for any person in the world</p>
                                <p><strong>Achieve the impossible</strong> just by carefully monitoring your progress and keeping the app updated with daily operations. It's easier than you think and it only takes a couple of minutes</p>
                                <a class="red" href="terms-conditions.html">Terms & Conditions >></a>
                            </div> <!-- end of tab-pane -->
                            <!-- end of tab -->

                            <!-- Tab -->
                            <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                                <p><strong>Use the power of social interactivity</strong> to keep you motivated and focused on your daily and long term goals. It's revolutionary</p>
                                <ul class="list-unstyled li-space-lg">
                                    <li class="media">
                                        <i class="far fa-check-square"></i>
                                        <div class="media-body">Commiting to something in front of a crowd gives you little room to walk back on your promise and makes you push on</div>
                                    </li>
                                    <li class="media">
                                        <i class="far fa-check-square"></i>
                                        <div class="media-body">No more frustrations of loosing focus and not being efficient. Sync main purpose is to solve just that and make you happy</div>
                                    </li>
                                    <li class="media">
                                        <i class="far fa-check-square"></i>
                                        <div class="media-body">It's the first mobile app that can turn you in a better organized person without the pressure of failing like other systems</div>
                                    </li>
                                    <li class="media">
                                        <i class="far fa-check-square"></i>
                                        <div class="media-body">Recognized by a lot of trainers and life coaches Sync is the number one tool they recommend time management</div>
                                    </li>
                                </ul>
                            </div> <!-- end of tab-pane -->
                            <!-- end of tab -->
                        </div> <!-- end of tab-content -->
                        <!-- end of nav tabs content -->
                    
                    </div> <!-- end of tabs-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/description-2-app.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of tabs -->
    <!-- end of description 2 -->


    <!-- Features -->
    <div id="features" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Special Features</h2>
                    <p class="p-heading">Sync's features are designed to help you improve your time management skills and become a better organized person. Organize your tasks, schedule your appointments and meet your personal development goals with Sync</p>
                </div> <!-- end of div -->
            </div> <!-- end of div -->
            <div class="row">
                <div class="col-lg-4">
                    <ul class="list-unstyled li-space-lg first">
                        <li class="media">
                            <span class="fa-stack">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fas fa-users fa-stack-1x"></i>
                            </span>
                            <div class="media-body">
                                <h4>Goal Setting</h4>
                                <p>Like any self improving process, everything starts with setting your goals and committing to them</p>
                            </div>
                        </li>
                        <li class="media">
                            <span class="fa-stack">
                                <i class="fas fa-circle fa-stack-2x green"></i>
                                <i class="fas fa-code fa-stack-1x"></i>
                            </span>
                            <div class="media-body">
                                <h4>Situation Analysis</h4>
                                <p>Sync provides a well designed and ergonomic visual editor for you to edit your quick notes</p>
                            </div>
                        </li>
                        <li class="media">
                            <span class="fa-stack">
                                <i class="fas fa-circle fa-stack-2x red"></i>
                                <i class="fas fa-cog fa-stack-1x"></i>
                            </span>
                            <div class="media-body">
                                <h4>Tasks Settings</h4>
                                <p>Each option packaged in the app's menus is provided in order to improve you personally</p>
                            </div>
                        </li>
                    </ul>
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <img class="img-fluid" src="images/features-app.jpg" alt="alternative">
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <span class="fa-stack">
                                <i class="fas fa-circle fa-stack-2x yellow"></i>
                                <i class="fas fa-comments fa-stack-1x"></i>
                            </span>
                            <div class="media-body">
                                <h4>Social Interaction</h4>
                                <p>Schedule your appointments, meetings and periodical evaluations using the tools</p>
                            </div>
                        </li>
                        <li class="media">
                            <span class="fa-stack">
                                <i class="fas fa-circle fa-stack-2x blue"></i>
                                <i class="fas fa-rocket fa-stack-1x"></i>
                            </span>
                            <div class="media-body">
                                <h4>Get Things Done</h4>
                                <p>Reading focus mode for long form articles, ebooks and other materials with long text</p>
                            </div>
                        </li>
                        <li class="media">
                            <span class="fa-stack">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fas fa-download fa-stack-1x"></i>
                            </span>
                            <div class="media-body">
                                <h4>Good Foundation</h4>
                                <p>Get a solid foundation for your self development efforts. Try Sync mobile app for devices</p>
                            </div>
                        </li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of features -->


   

    <?php include "./components/screens.php"; ?>




    
    
    <?php include "./components/Testimonials.php"; ?>






    <!-- Statistics -->
    <div class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Counter -->
                    <div id="counter">
                        <div class="cell">
                            <i class="fas fa-users"></i>
                            <div class="counter-value number-count" data-count="231">1</div>
                            <p class="counter-info">Happy Users</p>
                        </div>
                        <div class="cell">
                            <i class="fas fa-code green"></i>
                            <div class="counter-value number-count" data-count="385">1</div>
                            <p class="counter-info">Issues Solved</p>
                        </div>
                        <div class="cell">
                            <i class="fas fa-cog red"></i>
                            <div class="counter-value number-count" data-count="159">1</div>
                            <p class="counter-info">Good Reviews</p>
                        </div>
                        <div class="cell">
                            <i class="fas fa-comments yellow"></i>
                            <div class="counter-value number-count" data-count="127">1</div>
                            <p class="counter-info">Case Studies</p>
                        </div>
                        <div class="cell">
                            <i class="fas fa-rocket blue"></i>
                            <div class="counter-value number-count" data-count="211">1</div>
                            <p class="counter-info">Orders Received</p>
                        </div>
                    </div>
                    <!-- end of counter -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of statistics -->


    <!-- Download -->
    <div id="download" class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="image-container">
                        <img class="img-fluid" src="images/download-iphone.png" alt="alternative">
                    </div> <!-- end of image-container -->
                    <p class="p-large">Do you feel like you're wasting time with small stuff instead of working towards your goals? Start using Sync to organize your time and get a grip on your personal development</p>
                    <a class="btn-solid-lg" href="#your-link"><i class="fab fa-apple"></i>DOWNLOAD</a>
                    <a class="btn-solid-lg" href="#your-link"><i class="fab fa-google-play"></i>DOWNLOAD</a>
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
    </div> <!-- end of basic-3 -->
    <!-- end of download -->


    <?php include "./layouts/footer.php"; ?>

