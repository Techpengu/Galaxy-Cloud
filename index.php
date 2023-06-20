<?php
session_start();
session_regenerate_id();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Galaxy Cloud | Home</title>
    <?php include "include/css-url.php"; ?>
    
    <!-- Dynamic Meta Content -->
    <meta name="description" content="Build Linux Career with Galaxy Cloud, our Linux training is based on live industry projects that helps participant to get jobs in top MNC">
    <meta name="title" content="Galaxy Cloud">
    <meta name="keywords" content="Linux Course in Delhi, Linux Training in Noida, Linux Training Institute, Best IT course training institute in Delhi, Linux Industrial Training in Delhi, Industrail training on linux in Delhi, Linux Best Training Institute in Delhi, Linux Online Training in Delhi NCR, Linux training institute in India">
    <meta name="url" content="https://galaxycloud.in/">
/
    <!-- Fixed Meta Content -->
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="images/favicon.png">
    <!-- <meta name="google-play-app" content="app-id=com.ued"> -->
    <meta name="language" content="English">
    <meta name="robots" content="index, follow">

    <!-- Fixed Meta Content -->

    <meta property="og:site_name" content="Galaxy Cloud">
    <meta property="og:locale" content="en_US">
    <meta property="og:title" content="Galaxy Cloud">
    <meta property="og:url" content="https://galaxycloud.in/">
    <meta property="og:description" content="Build Linux Career with Galaxy Cloud, our Linux training is based on live industry projects that helps participant to get jobs in top MNC">
    <meta property="og:image" content="https://galaxycloud.in/img/favicon.png">
    <meta property="og:image:alt" content="Galaxy Cloud logo">
    <meta property="og:type" content="service">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:domain" content="www.galaxycloud.in">
    <meta name="twitter:site" content="@galaxycloud">
    <meta name="twitter:title" content="Galaxy Cloud">
    <meta name="twitter:url" content="https://galaxycloud.in/">
    <meta name="twitter:description" content="Build Linux Career with Galaxy Cloud, our Linux training is based on live industry projects that helps participant to get jobs in top MNC">
    <meta name="twitter:image" content="https://galaxycloud.in/img/favicon.png">

    <meta itemprop="name" content="Galaxy Cloud">
    <meta itemprop="url" content="https://galaxycloud.in/">
    <meta itemprop="description" content="Build Linux Career with Galaxy Cloud, our Linux training is based on live industry projects that helps participant to get jobs in top MNC">
    <meta itemprop="image" content="https://galaxycloud.in/img/favicon.png">

    <link rel="canonical" href="https://galaxycloud.in/">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
    <!-- Dynamic Meta Content -->
</head>

<body ng-app="pengu" ng-controller="slider-ctrl" ng-init="getData()" ng-cloak>

    <?php include "include/header.php"; ?>

    <section>
        <div class="slider home-slider">
            <!-- <div class="slider_img">
                <img src="images/slider/slider-1.jpg" alt="">
            </div>
            <div class="slider_img">
                <img src="images/slider/slider-2.jpg" alt="">
            </div> -->
            <div class="slider_img" ng-repeat="item in tableList">
                <img src="{{item.image_url}}" alt="">
            </div>
        </div>
    </section>

    <section class="why-choose fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="section-title2 mb-70">
                        <div class="sectionTile-img">
                            <img src="images/bg/stripe.png" alt="">
                        </div>
                        <!-- <p class="subtitle">Online Teaching Marketplace &amp; Learning Platform</p> -->
                        <h2 class="title mb-20">Why choose Galaxy Cloud?</h2>
                        <p class="title-para">One thing that is guaranteed when you choose Galaxy Cloud Linux Technology is value for the money. Our courses are well structured to promote fast learning. They go from basics to advanced concepts, and at various stages, we do a critical assessment of students. We follow their progress and provide guidance on how to define their career path.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="card">
                        <div class="icon">
                            <img src="images/icon/book.png" alt="">
                        </div>
                        <h3>Classroom Training</h3>
                        <p>Lifetime access to high-quality self-paced e-learning content curated by industry experts</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="card">
                        <div class="icon">
                            <img src="images/icon/training.png" alt="">
                        </div>
                        <h3>Online Training</h3>
                        <p>Blended learning delivery model (self-paced eLearning and/or instructor-led options)</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="card">
                        <div class="icon">
                            <img src="images/icon/teamwork.png" alt="">
                        </div>
                        <h3>Corporate Training</h3>
                        <p>We have one of the best dedicated team for you to provide enterprise industrial corporate training.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="courses-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="section-title2 mb-70">
                        <div class="sectionTile-img">
                            <img src="images/bg/stripe.png"  alt="">
                        </div>
                        <p class="subtitle">Get started with Career Oriented Course</p>
                        <h2 class="title">Our Courses</h2>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center g-4">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="course-item">
                        <div class="course-thumb">
                            <img src="images/courses/c1.jpg" alt="">
                        </div>
                        <div class="course-content">
                            <a href="linux-training.php">
                                <h4 class="course-title">Linux Training</h4>
                                <div class="featured-desc line_limit">
                                    <p>We at Galaxy Cloud provide Linux training by our corporate trainer and focus to deliver in-depth coverage on Linux system</p>
                                </div>
                            </a>
                            <a href="linux-training.php" class="primary--btn course-btn">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="course-item">
                        <div class="course-thumb">
                            <img src="images/courses/c2.jpg" alt="">
                        </div>
                        <div class="course-content">
                            <a href="aws-training.php">
                                <h4 class="course-title">AWS Cloud Training</h4>
                                <div class="featured-desc line_limit">
                                    <p>AWS Cloud Training is a set of practices that combines software development (Dev) and IT operations (Ops).</p>
                                </div>
                            </a>
                            <a href="aws-training.php" class="primary--btn course-btn">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="course-item">
                        <div class="course-thumb">
                            <img src="images/courses/c3.jpg" alt="">
                        </div>
                        <div class="course-content">
                            <a href="php-training.php">
                                <h4 class="course-title">Php Training</h4>
                                <div class="featured-desc line_limit">
                                    <p>Php Training is a set of practices that combines software development (Dev) and IT operations (Ops).</p>
                                </div>
                            </a>
                            <a href="php-training.php" class="primary--btn course-btn">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="course-item">
                        <div class="course-thumb">
                            <img src="images/courses/c4.jpg" alt="">
                        </div>
                        <div class="course-content">
                            <a href="python-training.php">
                                <h4 class="course-title">Python Training</h4>
                                <div class="featured-desc line_limit">
                                    <p>Python Training is a set of practices that combines software development (Dev) and IT operations (Ops).</p>
                                </div>
                            </a>
                            <a href="python-training.php" class="primary--btn course-btn">More Details</a>
                        </div>
                        
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="course-item">
                        <div class="course-thumb">
                            <img src="images/courses/c7.jpg" alt="">
                        </div>
                        <div class="course-content">
                            <a href="python-training.php">
                                <h4 class="course-title">System Admin</h4>
                                <div class="featured-desc line_limit">
                                    <p> IT Training is a set of practices that combines software development (Dev) and IT operations (Ops).</p>
                                </div>
                            </a>
                            <a href="IT-training.php" class="primary--btn course-btn">More Details</a>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="banner-section about-us banner-bg-shape vector-bg"
        style="background-image: url('images/bg/Ellipse.png');background-size: cover;background-position: center;">
        <img src="images/icon/faq-shap1.svg" alt="" class="shap1">
        <img src="images/icon/faq-shap2.svg" alt="" class="shap2">
        <img src="images/icon/faq-shap3.svg" alt="" class="shap3">
        <img src="images/icon/faq-shap4.svg" alt="" class="shap4">
        <img src="images/icon/faq-shap5.svg" alt="" class="shap5">
        <img src="images/icon/faq-shap6.svg" alt="" class="shap6">
        <img src="images/icon/faq-shap7.svg" alt="" class="shap7">
        <img src="images/icon/faq-shap8.svg" alt="" class="shap8">
        <img src="images/icon/faq-shap9.svg" alt="" class="shap9">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="banner-content text-lg-left">
                        <!-- <p class="banner-subtitle mb-0">Welcome to Galaxy Cloud</p> -->
                        <h1 class="banner-title mb-30">About Galaxy Cloud</h1>
                        <p class="banner-text mb-10">At Galaxy Cloud we are one of Linux, Cloud and DevOps best training institute in Delhi. We provide training viz-a-viz industry implementation IT solutions. Our hands-on practical approach to training can be leveraged by individuals and entities who want to build a strong background in Linux System Administration, Cloud Architecture and DevOps.</p>
                        <p class="banner-text mb-10">Classes are delivered by industry experts having years of experience with enterprise class implementation of Linux, DevOps and Cloud solutions. We create an enabling learning environment for students to make learning as smooth as it should be. Students are introduced to real world implementation projects of Linux, Cloud and DevOps to make them feel at home working in a live environment. </p>
                        <!-- <a href="contact.php" class="primary--btn banner-btn">Sign Up</a> -->
                    </div>
                </div>
                <!-- <div class="col-lg-6">
                    <div class="banner-thumb text-center">
                        <img src="images/bg/banner-bg.png" class="img-fluid" alt="">
                    </div>
                </div> -->
            </div>
            <!-- <div class="row">
                <div class="filter-area">
                    <div class="filter-icon">
                        <img src="images/icon/Group.png" alt="">
                        <h4 class="mb-0">Filters</h4>
                    </div>
                    <div class="select-box">
                        <form>
                            <select>
                                <option>All Categories</option>
                                <option>Categorie 01</option>
                                <option>Categorie 02</option>
                                <option>Categorie 03</option>
                            </select>
                            <select>
                                <option>All Language</option>
                                <option>English</option>
                                <option>German</option>
                                <option>Spanish</option>
                            </select>
                            <select>
                                <option>Price</option>
                                <option>500$</option>
                                <option>1000$</option>
                                <option>450$</option>
                            </select>
                            <select>
                                <option>Level</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <!-- <section class="counter-section">
        <div class="container">
            <div class="counter-wrap">
                <div class="counter-item">
                    <img src="images/icon/user.svg" alt="" class="mb-10">
                    <h3 class="odometer" data-odometer-final="55">&nbsp;</h3>
                    <p>Students Placement</p>
                </div>
                <div class="counter-item">
                    <img src="images/icon/presentation.svg" alt="" class="mb-15">
                    <h3 class="odometer" data-odometer-final="52">&nbsp;</h3>
                    <p>IT Courses</p>
                </div>
                <div class="counter-item">
                    <img src="images/icon/course.svg" alt="" class="mb-15">
                    <h3 class="odometer" data-odometer-final="11">&nbsp;</h3>
                    <p>Serives</p>
                </div>
            </div>
        </div>
    </section>


    <section class="instructor-section pt-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-title2 mb-70">
                        <div class="sectionTile-img">
                            <img src="images/bg/stripe.png" alt="">
                        </div>
                        <p class="subtitle">The Source Of Wisdom</p>
                        <h2 class="title">Our Expert Instructor</h2>
                    </div>
                </div>
            </div>
            <div class="row instructor-active">
                <div class="col-12">
                    <div class="instructor-item">
                        <div class="row gx-0">
                            <div class="col-sm-1 col-2 d-flex justify-content-center align-items-center">
                                <ul class="icons-left text-center">
                                    <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-sm-10 col-8">
                                <div class="instructor-thumb">
                                    <img src="images/expert/exp
                                    rt1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-sm-1 col-2 d-flex justify-content-center align-items-center">
                                <ul class="icons-right">
                                    <li><a href="#"><i class="lab la-tumblr"></i></a></li>
                                    <li><a href="#"><i class="lab la-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="lab la-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="instructor-details">
                                    <a href="instructor-details.html">
                                        <h4 class="instruc-name mb-0">Micheal Angelina</h4>
                                    </a>
                                    <p class="instruc-subtitle">Economic Teacher</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="instructor-item">
                        <div class="row gx-0">
                            <div class="col-sm-1 col-2 d-flex justify-content-center align-items-center">
                                <ul class="icons-left text-center">
                                    <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-sm-10 col-8">
                                <div class="instructor-thumb">
                                    <img src="images/expert/exprt2.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-sm-1 col-2 d-flex justify-content-center align-items-center">
                                <ul class="icons-right">
                                    <li><a href="#"><i class="lab la-tumblr"></i></a></li>
                                    <li><a href="#"><i class="lab la-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="lab la-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="instructor-details">
                                    <a href="instructor-details.html">
                                        <h4 class="instruc-name mb-0">Arnold </h4>
                                    </a>
                                    <p class="instruc-subtitle">Math Teacher</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="instructor-item">
                        <div class="row gx-0">
                            <div class="col-sm-1 col-2 d-flex justify-content-center align-items-center">
                                <ul class="icons-left text-center">
                                    <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-sm-10 col-8">
                                <div class="instructor-thumb">
                                    <img src="images/expert/exprt3.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-sm-1 col-2 d-flex justify-content-center align-items-center">
                                <ul class="icons-right">
                                    <li><a href="#"><i class="lab la-tumblr"></i></a></li>
                                    <li><a href="#"><i class="lab la-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="lab la-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="instructor-details">
                                    <a href="instructor-details.html">
                                        <h4 class="instruc-name mb-0">Brooklyn Simmons</h4>
                                    </a>
                                    <p class="instruc-subtitle">English Teacher</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="instructor-item">
                        <div class="row gx-0">
                            <div class="col-sm-1 col-2 d-flex justify-content-center align-items-center">
                                <ul class="icons-left text-center">
                                    <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-sm-10 col-8">
                                <div class="instructor-thumb">
                                    <img src="images/expert/exprt2.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-sm-1 col-2 d-flex justify-content-center align-items-center">
                                <ul class="icons-right">
                                    <li><a href="#"><i class="lab la-tumblr"></i></a></li>
                                    <li><a href="#"><i class="lab la-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="lab la-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="instructor-details">
                                    <a href="instructor-details.html">
                                        <h4 class="instruc-name mb-0">Brooklyn Simmons</h4>
                                    </a>
                                    <p class="instruc-subtitle">IT Teacher</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-section pb-110 pt-100" ng-controller="blog-ctrl" ng-init="getData()">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="section-title2 mb-70">
                        <div class="sectionTile-img">
                            <img src="images/bg/stripe.png" alt="">
                        </div>
                        <p class="subtitle">Read our latest post</p>
                        <h2 class="title">Latest Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row blog-active blog-slider">
                <div class="col-4 d-flex justify-content-center" ng-repeat="item in tableList">
                    <div class="blog-item">
                        <div class="blog-thumb">
                            <img src="{{item.image_url}}" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="meta d-flex justify-content-between mb-10">
                                <div class="author"><img src="images/icon/userr.svg" alt="">
                                    <span><a href="#">{{item.name}}</a></span>
                                </div>
                                <div class="blog-date"><img src="images/icon/calendar.svg" alt=""> {{item.created_at | date:'dd MMMM yyyy'}}</div>
                            </div>
                            <a href="blog-details.html">
                                <h4 class="blog-title">{{item.title}}</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="review-section pb-80" ng-controller="markets-ctrl" ng-init="getData()">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="section-title2 mb-70">
                        <div class="sectionTile-img">
                            <img src="images/bg/stripe.png" alt="">
                        </div>
                        <p class="subtitle">See What Our Clients Said</p>
                        <h2 class="title">Clients Review</h2>
                    </div>
                </div>
            </div>
            <div class="review-active review-silder">
                <div class="col-4 mb-40 pt-5" ng-repeat="item in tableList">
                    <div class="review-item">
                        <div class="qutoe-icon">
                            <svg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="1">
                                    <path
                                        d="M50 87.5C70.6781 87.5 87.5 70.6766 87.5 50C87.5 29.3234 70.6781 12.5 50 12.5C29.3234 12.5 12.5 29.3234 12.5 50C12.5 70.6766 29.3234 87.5 50 87.5ZM50 18.75C67.2313 18.75 81.25 32.7687 81.25 50C81.25 67.2313 67.2313 81.25 50 81.25C32.7687 81.25 18.75 67.2313 18.75 50C18.75 32.7687 32.7687 18.75 50 18.75Z" />
                                    <path
                                        d="M56.25 64.0625H68.75C70.475 64.0625 71.875 62.6625 71.875 60.9375V48.4375C71.875 46.7125 70.475 45.3125 68.75 45.3125H60.1219C60.7828 43.9891 61.85 42.8813 63.2375 42.1875L63.8984 41.8562C65.4422 41.0844 66.0672 39.2078 65.2953 37.6625C64.7469 36.5688 63.6438 35.9375 62.4984 35.9375C62.0281 35.9375 61.5516 36.0422 61.1016 36.2688L60.4422 36.5984C55.9281 38.8547 53.125 43.3922 53.125 48.4375V60.9375C53.125 62.6625 54.525 64.0625 56.25 64.0625ZM65.625 57.8125H59.375V51.5625H65.625V57.8125Z" />
                                    <path
                                        d="M31.25 64.0625H43.75C45.475 64.0625 46.875 62.6625 46.875 60.9375V48.4375C46.875 46.7125 45.475 45.3125 43.75 45.3125H35.1219C35.7828 43.9891 36.85 42.8812 38.2359 42.1891L38.8984 41.8578C40.4422 41.0859 41.0688 39.2094 40.2969 37.6641C39.7469 36.5687 38.6438 35.9375 37.4969 35.9375C37.0281 35.9375 36.5516 36.0422 36.1016 36.2672L35.4391 36.5984C30.9281 38.8547 28.125 43.3922 28.125 48.4375L28.125 60.9375C28.125 62.6625 29.525 64.0625 31.25 64.0625ZM40.625 57.8125H34.375V51.5625H40.625V57.8125Z" />
                                </g>
                            </svg>
                        </div>
                        <p>{{item.description}}</p>
                        <div class="reviewer">
                            <div class="er-thumb">
                                <img src="{{item.image_url}}" alt="">
                            </div>
                            <div class="reviewer-text">
                                <h6>{{item.title}}</h6>
                                <p class="mb-0">{{item.subTitle}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <section class="student-forum" id="student-forum">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="section-title2 mb-70">
                        <div class="sectionTile-img">
                            <img src="images/bg/stripe.png" alt="">
                        </div>
                        <p class="subtitle">Join Our Vast Community</p>
                        <h2 class="title">Query Form</h2>
                    </div>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="forum-content">
                        <h3 class="mobApp-title mb-40">Join Here To Fine Your Learning Partner</h3>
                        <form id="courseform" method="POST">
                            <div class="form-group">
                                <i class="far fa-user"></i>
                                <input type="text" placeholder="Your Name*" name="name" required>
                            </div>
                            <div class="form-group">
                                <i class="far fa-envelope"></i>
                                <input type="email" placeholder="Your E-mail*" name="email" required>
                            </div>
                            <div class="form-group">
                                <i class="las la-phone"></i>
                                <input type="tel" placeholder="Your Phone no.*" name="phone" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" maxlength="10" required>
                            </div>
                            <div class="form-group">
                                <i class="fab fa-discourse"></i>
                                <select name="course">
                                    <option selected disabled>Select Course</option>
                                    <option>Linux Training</option>
                                    <option>AWS Cloud Training</option>
                                </select>
                            </div>
                            <?php
                                $randNum3 = mt_rand(100000, 999999);
                                $_SESSION['secNum1'] = $randNum3;
                            ?>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="security" class="form-control" placeholder="Enter Security Code *">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mt-10">
                                        <p class="contact_secure_code" id="contact_code"><?= $randNum3; ?></p>
                                    </div>
                                </div>
                            </div>
                            <button type="button" onclick="CourseForm('courseform')" class="primary--btn w-100 py-3">Submit</button >
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-block d-none">
                    <!--<div class="forum-thumb">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112105.5390239956!2d77.21232260733308!3d28.59083279349871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfdfff14812db%3A0x748e8594c6af1540!2sGalaxy%20Cloud!5e0!3m2!1sen!2sin!4v1658554610800!5m2!1sen!2sin" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>-->
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.0427189580787!2d77.16204359999999!3d28.688368699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d030557107aa7%3A0x7cc54316e51931aa!2sPenguin%20Technology!5e0!3m2!1sen!2sin!4v1680071104232!5m2!1sen!2sin" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- <section class="teach-learn pt-110 pb-110 fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="section-title2 mb-70">
                        <div class="sectionTile-img">
                            <img src="images/bg/stripe.png" alt="">
                        </div>
                        <p class="subtitle">Online Teaching Marketplace & E-learning Platform</p>
                        <h2 class="title mb-20">Teach Anything, Learn Anytime</h2>
                        <p class="title-para">Upload your course tutorial & become an online teacher. Earn as much as
                            you can, it's FREE! Also, Browse our course categories where you can develop your skills
                            anytime from the best professionals.</p>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 ms-auto col-sm-6">
                    <div class="teach-area text-center">
                        <div class="teach-icon mb-40">
                            <img src="images/icon/class.svg" alt="">
                        </div>
                        <a href="instuctor.html" class="learn--btn">Start Teaching</a>
                    </div>
                </div>
                <div class="col-lg-4 me-auto col-sm-6">
                    <div class="learn-area text-center">
                        <div class="teach-icon mb-40">
                            <img src="images/icon/learn.svg" alt="">
                        </div>
                        <a href="courses.html" class="learn--btn">Start Learning</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <?php include "include/footer.php"; ?>

    <?php include "include/js-url.php"; ?>

</body>

</html>