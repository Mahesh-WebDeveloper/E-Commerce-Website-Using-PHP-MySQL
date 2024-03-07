<?php

include_once('config/connection.php');
error_reporting(0);
?>

<style>
    .owl-nav {
        display: none;
    }

    .imgoutercolmidinner img {
        width: 100%;
        height: 347px !important;
    }
</style>

<body>

    <?php include_once('header.php'); ?>
    <!-- fsection 1 -->
    <div class="container-fluid p-0">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">


                <?php
                $connection = mysqli_connect("localhost", "root", "", "herbs") or die("connection Error");

                $sel = "SELECT * FROM slider";
                $exs = mysqli_query($connection, $sel);

                while ($featch = mysqli_fetch_assoc($exs)) {  ?>

                    <div class="carousel-item active">
                        <img src="uploadimg/<?php echo $featch['imgname']; ?>" class="d-block w-100" alt="...">

                        <div class="carousel-caption text-center">
                            <div class="animated fadeInLeft firstslidertext">
                                <p class="p-0 m-0 d-inline "><?php echo $featch['title2']; ?></p>
                            </div>
                            <div class="secondslidertext ">
                                <p class="animated fadeInUp ms-3" loading="lazy"><?php echo $featch['title1']; ?></p>
                            </div>

                            <?php
                            $btnText = $featch['btn'];
                            ?>

                            <?php if (!empty($btnText)) : ?>
                                <p class="animated fadeInUp threesliderbtn">
                                    <a href="#" class="btn btn-transparent btn-rounded btn-large">
                                        <button><?php echo $btnText; ?></button>
                                    </a>
                                </p>
                            <?php endif; ?>

                        </div>
                    </div>



                <?php } ?>


                <!-- <div class="carousel-item active">
                    <img src="assets/imgaes/slide3.webp" class="d-block w-100" alt="...">

                    <div class="carousel-caption text-center">
                        <div class="animated fadeInLeft firstslidertext">
                            <p class="p-0 m-0 d-inline ">Farm Fresh</p>
                        </div>
                        <div class="secondslidertext ">
                            <p class="animated fadeInUp ms-3" loading="lazy">Hers & Spices directly from our Farms</p>
                        </div>
                        <p class="animated fadeInUp threesliderbtn"><a href="#" class="btn btn-transparent btn-rounded btn-large"><button>Get Free Samples</button></a></p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="assets/imgaes/slide2.webp" class="d-block w-100" alt="...">

                    <div class="carousel-caption text-center">
                        <div class="animated fadeInLeft firstslidertext">
                            <p class="p-0 m-0 d-inline">Organic Spices</p>
                        </div>
                        <div class="secondslidertext">
                            <p class="animated fadeInUp ms-3" loading="lazy">Pure and organic spices directly from the farms</p>
                        </div>
                        <p class="animated fadeInUp threesliderbtn"><a href="#" class="btn btn-transparent btn-rounded btn-large"><button>Get Free Samples</button></a></p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="assets/imgaes/slide1.webp " class="d-block w-100" alt="...">
                </div> -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- fsection 2 -->
    <!-- chose start -->
    <div class="container-fluid">
        <div class="row row-cols-lg-3 row-cols-1 mainrow">
            <div class="col-lg-4 firstdiv p-4">
                <div class="content-box">
                    <div class="logo-out mx-auto mb-1">
                        <img src="assets/imgaes/grow-blocks.webp" class="img-fluid" alt="">
                    </div>
                    <h3 class="mt-1">Export</h3>
                    <p>If you're looking for fully organic certified products with complete farm-level traceability, Romofy Agro India is the place for you. We export the highest-quality certified Organic products worldwide.</p>
                </div>
            </div>
            <div class="col-lg-4 firstdiv p-4 second">
                <div class="content-box">
                    <div class="logo-out mx-auto mb-1">
                        <img src="assets/imgaes/peat-bricks.webp" class="img-fluid" alt="">
                    </div>
                    <h3 class="mt-1">IMPORT AGENT</h3>
                    <p>We export high-quality organic certified goods around the globe. If you're looking for premium quality spices, herbs, seeds, and other organically grown products, delivered on time with complete compliance, Romofy Agro India is the place to go.</p>
                </div>
            </div>
            <div class="col-lg-4 firstdiv p-4 THIRD">
                <div class="content-box">
                    <div class="logo-out mx-auto mb-1">
                        <img src="assets/imgaes/grow-blocks.webp" class="img-fluid" alt="">
                    </div>
                    <h3 class="mt-1">SOURCING AGENT</h3>
                    <p>Managing multiple organic certified farmer groups, we are micro-managing the growth of every organic product we offer. We are sourcing the highest-quality products from India in accordance with our customer's specifications.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- chose close -->

    <!-- fsection 3 -->
    <div class="container-fluid my-5">
        <div class="container">


            <?php
            $connection = mysqli_connect("localhost", "root", "", "herbs") or die("connection Error");

            $sel = "SELECT * FROM about WHERE Status = 1";
            $exs = mysqli_query($connection, $sel);

            while ($featch = mysqli_fetch_assoc($exs)) {  ?>
                <div class="col-12 headrow text-center">
                    <h4>
                        <?php echo $featch['title'] ?>
                    </h4>
                    <h2>
                        ABOUT
                        <span><?php echo $featch['heading'] ?></span>

                    </h2>
                </div>

                <div class="row">
                    <div class="col-12 contetextabout">
                        <p>

                            <?php echo $featch['des'] ?>
                        </p>



                        <p></p>
                        <p></p>
                        <div class="con-12 text-center btndiv">

                            <a href="aboutpage.php">
                                <button>
                                   Read More
                                </button>
                            </a>
                        </div>


                    </div>
                </div>

            <?php } ?>

        </div>
    </div>
    <!-- fsection 4 -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4  p-0 bg-y text-center text-start d-lg-block d-none">
                <div class="slicont ">
                    <div>
                        <h3>
                            Our Products
                        </h3>
                        <p class="d-lg-block d-none">
                            All of our products go through a rigorous testing process as part of our strict quality control procedures.
                        </p>
                        <p class="d-lg-none d-block">We take pride in the quality of our products</p>
                        <a href="" class="d-lg-block d-none">All Products</a>
                        <span>
                            <!-- Previous Button -->
                            <div class="row btnrownestpre text-end justify-content-end pe-5 mt-4 ">
                                <div class="col-2 me-4">
                                    <a class="prev" href="#carouselExampleAutoplaying" role="button" data-bs-slide="prev">
                                        <i class="fas fa-chevron-left"></i>
                                    </a>
                                </div>
                                <div class="col-2">
                                    <a class="next" href="#carouselExampleAutoplaying" role="button" data-bs-slide="next">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>

                        </span>
                    </div>
                </div>
            </div>

            <div class="col whitebg d-lg-none b-block">
                <h3>
                    Our Products
                </h3>
                <p class="d-lg-none d-block">We take pride in the quality of our products</p>

            </div>

            <!-- /////////start -->
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 p-0 d-flex align-items-center px-4">
                <div class="owl-carousel">
                    <!-- Item 1 -->
                    <?php
                    $connection = mysqli_connect("localhost", "root", "", "herbs") or die("connection Error");

                    $sel = "SELECT * FROM productslider";
                    $exs = mysqli_query($connection, $sel);

                    while ($featch = mysqli_fetch_assoc($exs)) {  ?>

                        <div class="item">
                            <div class="productouter">
                                <img src="uploadimg/<?php echo $featch['ImageName']; ?>" alt="Product 1" class="img-fluid">
                                <div class="greenpati">
                                    <h4 class="h4color">
                                        <?php echo $featch['title'] ?>
                                    </h4>
                                </div>

                                <div class="overlaygreen">
                                    <p> </p>
                                    <a class="btn-link" href="https://www.romofyagroindia.com/others.htm">read more <i class="fa fa-arrow-circle-right"></i></a>
                                </div>

                            </div>
                        </div>


                    <?php } ?>

                </div>
            </div>










        </div>
    </div>

    <!-- fsection 5 -->

    <!-- Popular Herbs slider -->
    <div class="container-fluid mt-5">
        <div class="container mt-5 mx-auto">
            <section class="services-sections pb-60 pb-md-140">
                <div class="container">
                    <div class="Populartitle text-center">
                        <h2>Popular Spices</h2>
                        <span class="decor"><span class="inner"></span></span>
                    </div>
                    <div class="row gy-4">



                        <?php
                        $connection = mysqli_connect("localhost", "root", "", "herbs") or die("connection Error");

                        $sel = "SELECT * FROM homespices";
                        $exs = mysqli_query($connection, $sel);

                        while ($featch = mysqli_fetch_assoc($exs)) {  ?>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="colmdinner">
                                    <div class="imgoutercolmidinner">
                                        <img src="uploadimg/<?php echo $featch['imgname']; ?>" class="" alt="ORGANIC GINGER">
                                        <div class="contentpooutal">
                                            <h4 class="title"><a href=""><a href=""><?php echo $featch['imgtitle']; ?></a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        <?php } ?>






                        <!-- Add more columns as needed -->
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Popular Herbs copy slider -->

    <div class="container-fluid mt-5">
        <div class="container mt-5 mx-auto">
            <section class="services-sections pb-60 pb-md-140">
                <div class="container">
                    <div class="Populartitle text-center">
                        <h2>Popular Herbs</h2>
                        <span class="decor"><span class="inner"></span></span>
                    </div>
                    <div class="row gy-4">


                        <?php
                        $connection = mysqli_connect("localhost", "root", "", "herbs") or die("connection Error");

                        $sel = "SELECT * FROM homeherbs";
                        $exs = mysqli_query($connection, $sel);

                        while ($featch = mysqli_fetch_assoc($exs)) {  ?>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="colmdinner">
                                    <div class="imgoutercolmidinner">
                                        <img src="uploadimg/<?php echo $featch['imgname']; ?>" class="" alt="ORGANIC GINGER">
                                        <div class="contentpooutal">
                                            <h4 class="title"><a href=""><?php echo $featch['imgtitle']; ?></a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        <?php } ?>



                        <!-- Add more columns as needed -->
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- Popular Herbs copy  ENd -->

    <!-- Our Certificates -->

    <div class="container-fluid  Certificates mt-5 mb-5">
        <div class="container pb-4 ">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="mt-5">Our Certificates</h2>
                    <p>Take a look at our product photos</p>
                    <div class="row m-0 mb-5 p-0">
                        <div class="col-lg-4 mx-auto m-0 p-0">
                            <div class="text-design m-0 p-0">
                                <div class="line"></div>
                                <div class="circle"></div>
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="owl-carousel">
                <!-- Item 1 -->

                <?php
                $connection = mysqli_connect("localhost", "root", "", "herbs") or die("connection Error");

                $sel = "SELECT * FROM certifacte";
                $exs = mysqli_query($connection, $sel);

                while ($featch = mysqli_fetch_assoc($exs)) {  ?>

                    <div class="item">
                        <div class="">
                            <img src="uploadimg/<?php echo $featch['name']; ?>" alt="Product 1" class="img-fluid">
                        </div>
                    </div>


                <?php } ?>
                <!-- Item 1 -->

            </div>

            <div class="certiactie ps-5">
                <div class=" row certiactiebtn  text-center justify-content-center ps-5 pe-5 mt-4 ">
                    <div class="col-2 me-4 ms-4">
                        <button class="prev btnclassformlsider d-md-block d-none">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                    </div>
                    <div class="col-2">
                        <button class="next btnclassformlsider d-md-block d-none">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- location start -->

    <div class="container-fluid my-5 bgibakgimg">
        <div class="container py-3">
            <div class="row">
                <div class="col col-lg-6 col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3768.069466996833!2d72.83819!3d19.192168!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b721abfc2c85%3A0xf0c69d102e7e9017!2sRomofy%20Agro!5e0!3m2!1sen!2sin!4v1694976774987!5m2!1sen!2sin" width="600" height="450" style="border:0; width:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col col-lg-6 col-12 mapcolser shadow-md mt-5 pt-4  mt-0 pt-0 ">
                    <!-- formsss -->

                    <?php

                    $connection = mysqli_connect("localhost", "root", "", "herbs") or die("Connection Error");

                    if (isset($_POST['save'])) {
                        $NAME = $_POST['name'];
                        $phone = $_POST['phone'];
                        $EMAIL = $_POST['email'];
                        $ADDRESS = $_POST['city'];
                        $ABOUT = $_POST['about'];

                        // Corrected SQL INSERT statement
                        $ins = "INSERT INTO contactform (`name`,`phone`, `email`, `address`, `about`)
                        VALUES ('$NAME', '$phone', '$EMAIL', '$ADDRESS', '$ABOUT')";

                        mysqli_query($connection, $ins);
                    }




                    ?>
                    <h2>Contact us for Free Samples</h2>
                    <form method="post">
                        <div class="row my-3 ms-2">
                            <div class="col-lg-6 col-12 inputmappass">
                                <input class="py-2 w-full" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Name*" name="name">
                            </div>
                            <div class="col-lg-6 col-12 inputmappass">
                                <input class="py-2 w-full" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone" placeholder="Enter your Phone*">
                            </div>
                            <div class="col-lg-6 col-12 inputmappass">
                                <input class="py-2 w-full" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter your Email*">
                            </div>
                            <div class="col-lg-6 col-12 inputmappass">
                                <input class="py-2 w-full" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="city" placeholder="Enter your City/State*">
                            </div>

                            <div class="col-lg-12 inputmappass">
                                <textarea class="firstpagetextara" placeholder="Describe Your Needs to Us" name="about" id="" cols="30" rows="10"></textarea>
                            </div>

                            <div class="col-lg-7" data-sitekey="6LchMYwkAAAAAEJ2T2RFiJGvDZWbuYlbENQYRmIp">
                                <iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&k=6LchMYwkAAAAAEJ2T2RFiJGvDZWbuYlbENQYRmIp&co=aHR0cHM6Ly93d3cucm9tb2Z5YWdyb2luZGlhLmNvbTo0NDM.&hl=en&v=uEf7E1417z6GNSkRx7AyL8K8&size=normal&cb=gxph7uawh9f" frameborder="0" scrolling="no"></iframe>
                            </div>


                            <div class="col0-lg-12 text-center mapssdivend ">
                                <button class="firstbtn" name="save">SUBMIT</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- location End -->
    <!-- footer section -->


    <?php include_once('footer.php') ?>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    window.addEventListener("load", function animationfunction() {
        const loadingBar = document.getElementById("loading-bar");

        // Use setTimeout to simulate the loading animation
        setTimeout(function() {
            loadingBar.style.width = "100%";
        }, 500);
        loadingBar.style.width = "0%";


    });

    setInterval(animationfunction, 1000);
</script>

<script>
    $(document).ready(function() {
        // Initialize the Owl Carousel
        var owl = $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            nav: false,
            dots: false,
            autoplay: true,
            lazyLoad: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: true
                }
            }
        });

        // Add click events for the custom navigation buttons
        $('.prev').click(function() {
            owl.trigger('prev.owl.carousel');
        });

        $('.next').click(function() {
            owl.trigger('next.owl.carousel');
        });
    });
</script>

</html>