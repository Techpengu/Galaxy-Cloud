<?php
session_start();
session_regenerate_id();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Galaxy Cloud | Contact</title>
    <?php include "include/css-url.php"; ?>
</head>

<body ng-app="pengu" ng-cloak>
    
    <?php include "include/header.php"; ?>

    <section class="small-banner"
        style="background-image: linear-gradient(rgba(0, 0, 0, .8),rgba(0, 0, 0, .8)),url('images/bg/sm-banner.jpg');background-size: cover; background-repeat: no-repeat;">
        <div class="container-fluid">
            <div class="row">
                <div class="smbanner-text d-flex justify-content-center align-items-center flex-column text-center">
                    <h2 class="sm-banner-title">Contact us</h2>
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="addrss-section pt-50 pb-50">
        <div class="container">
            <div class="row d-flex justify-content-center g-4">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="addrss-item">
                        <h5 class="addrss-title mb-25">Inquiry</h5>
                        <div class="addrss-content">
                            <div class="single-addrss">
                                <div class="addrss-icon">
                                    <i class="las la-phone"></i>
                                </div>
                                <div class="addrss-text">
                                    <span>Phone</span>
                                    <p><a href="tel:+91-9718070460">+91-9718070460</a>, <br> <a href="tel:+91-9718070460">+91-9990746030</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="addrss-item">
                        <h5 class="addrss-title mb-25">Admission</h5>
                        <div class="addrss-content">
                            <div class="single-addrss">
                                <div class="addrss-icon">
                                    <i class="las la-map-marker-alt"></i>
                                </div>
                                <div class="addrss-text">
                                    <span>Location</span>
                                    <p>R-53, 1st Floor, Main Vikas<br> Marg, Near Shakarpur Bus<br> Stand, Laxmi Nagar, Opp<br> Hira Sweets, Shakarpur, <br>New Delhi - 110092</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="addrss-item">
                        <h5 class="addrss-title mb-25">Mail</h5>
                        <div class="addrss-content">
                            <div class="single-addrss mb-25">
                                <div class="addrss-icon">
                                    <i class="las la-envelope"></i>
                                </div>
                                <div class="addrss-text">
                                    <span>Email</span>
                                    <p><a href="mailto:info@galaxycloud.in">info@galaxycloud.in</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="form-section pt-50">
        <div class="container">
            <h3 class="form-title mb-25">Get In Touch With Us</h3>
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-7 mb-25">
                    <form class="form" id="Contactform" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Name*" name="name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" placeholder="Email*" name="email" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Phone*" name="phone" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" maxlength="10" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Subject" name="subject">
                            </div>
                            <div class="col-12">
                                <textarea placeholder="Message" name="message" rows="8"></textarea>
                            </div>
                            <?php
                                $randNum = mt_rand(100000, 999999);
                                $_SESSION['secNum'] = $randNum;
                            ?>

                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="security" class="form-control" placeholder="Enter Security Code *">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-sm-12">
                                    <div class="form-group mt-10">
                                        <p class="contact_secure_code" id="contact_code">
                                            <?= $randNum; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="primary--btn form-btn" type="button" onclick="submitForm('Contactform')" class="submit_btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5">
                    <div class="row d-flex justify-content-center g-4">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="addrss-item">
                                <h5 class="addrss-title mb-15">Inquiry</h5>
                                <div class="addrss-content">
                                    <div class="single-addrss">
                                        <div class="addrss-icon">
                                            <i class="las la-phone"></i>
                                        </div>
                                        <div class="addrss-text">
                                            <span>Phone</span>
                                            <p> <a href="tel:+91-9718070460">+91-9718070460</a>, <br> <a href="tel:011-45179154">011-45179154</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="addrss-item">
                                <h5 class="addrss-title mb-15">Address</h5>
                                <div class="addrss-content">
                                    <div class="single-addrss">
                                        <div class="addrss-icon">
                                            <i class="las la-map-marker-alt"></i>
                                        </div>
                                        <div class="addrss-text">
                                            <span><b>Nodia Office</b></span>
                                            <p><a href="https://www.google.com/maps/place/Penguin+Technology/@28.6883687,77.1620436,17z/data=!3m2!4b1!5s0x390ceec3e3ffaa01:0x14dffc0fd3ea4d9!4m6!3m5!1s0x390d030557107aa7:0x7cc54316e51931aa!8m2!3d28.6883687!4d77.1620436!16s%2Fg%2F11sbgt_k48" target="_blank"> 2nd Floor, Nirulas Hotel, Om Complex, opp. Captain Vijyant Thapar Marg, Pocket F, Naya Bans Village, Sector 15, Noida, Uttar Pradesh 201301</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="addrss-item">
                                <h5 class="addrss-title mb-15">Address</h5>
                                <div class="addrss-content">
                                    <div class="single-addrss">
                                        <div class="addrss-icon">
                                            <i class="las la-map-marker-alt"></i>
                                        </div>
                                        <div class="addrss-text">
                                            <span><strong>Delhi Office</strong></span>
                                            <p><a href="https://goo.gl/maps/yN6MwPwVqzpFZc49A" target="_blank"> R-53, First Floor, Vikas Marg, Block S1, Nanakpura, Laxmi Nagar, Delhi, 110092</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="addrss-item">
                                <h5 class="addrss-title mb-15">Mail</h5>
                                <div class="addrss-content">
                                    <div class="single-addrss">
                                        <div class="addrss-icon">
                                            <i class="las la-envelope"></i>
                                        </div>
                                        <div class="addrss-text">
                                            <span>Email</span>
                                            <p><a href="mailto:info@galaxy-cloud.com">info@galaxycloud.in</a></p>
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
    
    <div class="map-section pt-50">
        <div class="container-float">
            <!-- <div class="row"> -->
                <!-- <div class="col-lg-6 bg-light d-flex align-items-center">
                    <div class="animate-right"
                        style="background-image: url('images/bg/contact-bg.png');background-size: cover;background-repeat: no-repeat;width: 100%;height:100%;object-fit: cover; background-position: center;">
                        <img class="animate-tree" src="images/bg/contact-bgtree.png" alt="">
                    </div>
                </div> -->
                <!-- <div class="col-lg-12"> -->
                    <!--<div class="map contract-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112105.5390239956!2d77.21232260733308!3d28.59083279349871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfdfff14812db%3A0x748e8594c6af1540!2sGalaxy%20Cloud!5e0!3m2!1sen!2sin!4v1658554610800!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>-->
                    
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.0427189580787!2d77.16204359999999!3d28.688368699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d030557107aa7%3A0x7cc54316e51931aa!2sPenguin%20Technology!5e0!3m2!1sen!2sin!4v1680071104232!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    
                <!-- </div>
            </div> -->
        </div>
    </div>

    <section class="ans-ques counter-section pt-90 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="ans-title">We will Answer all your Questions</h2>
                </div>
            </div>
        </div>
    </section>

    <?php include "include/footer.php"; ?>
    
    <?php include "include/js-url.php"; ?>
</body>

</html>