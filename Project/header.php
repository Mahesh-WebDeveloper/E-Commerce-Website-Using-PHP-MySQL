<?php

include_once('config/connection.php');
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

<style>
    .dropdown {
        position: relative;
        display: inline-block;


    }

    /* Style for the dropdown content (hidden by default) */
    .dropdown .dropdown-content {
        display: none;
        position: absolute;
        background-color: white !important;
        min-width: 180px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        margin-top: 20px;
        padding: 20px 0px;


    }

    /* Style for dropdown links */
    .dropdown .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-shadow: none;
        color: black;
    }

    /* Change color on hover */
    .dropdown .dropdown-content a:hover {
        background-color: orangered;
        color: white;
        text-shadow: none;
        color: white !important;
    }

    /* Show the dropdown content when hovering over the dropdown */
    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>

<body>

    <div class="container-fluid mobilesh d-lg-none mbconteiner">
        <div class="container  d-lg-none d-flex align-items-center justify-content-center relative ">
            <div class="mblog">
              <a href="index.php"> <img src="assets/imgaes/logo.webp" alt="Logo"></a> 
            </div>

            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileOffcanvas" aria-controls="mobileOffcanvas">
                <span class="navbar-toggler-icon"></span>
                <!-- Add a custom icon here -->
                <i class="fas fa-bars"></i>
            </button>

            <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="mobileOffcanvas" aria-labelledby="mobileOffcanvasLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="mobileOffcanvasLabel">Menu</h5>
                    <div class="btncross">
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">

                        </button>
                    </div>
                </div>
                <div class="offcanvas-body canvasbg">
                    <ul class="list-unstyled">
                        <?php
                        $connection = mysqli_connect("localhost", "root", "", "herbs") or die("connection Error");

                        $s = "SELECT * FROM navbar";
                        $ex = mysqli_query($connection, $s);
                        while ($featch = mysqli_fetch_assoc($ex)) {
                        ?>
                                 <li><a class="nav-link" href="Herbs.php"><?php echo $featch['li']?></a></li>
                           
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-lg-0 d-none d-md-block stickcon p-0">
        <header>
            <div class="container pt-3">
                <div class="row-p">
                    <div class="row row-cols-lg-4">
                        <div class="col d-flex c-h1">

                            <div class="i-outer">
                                <i class="fa-solid fa-envelope"></i>
                            </div>

                            <div class="contentheader">
                                <h3 class="">Email</h3>
                                <a href="mailto:info@romofyagroindia.com">
                                    <p class="">info@romofyagroindia.com</p>
                                </a>
                            </div>
                        </div>
                        <div class="col d-flex c2h1">
                            <div class="i-outer">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <div class="centered-div">
                                <h3>Call Now</h3>
                                <b>+91 8169076549</b>
                            </div>
                        </div>
                        <div class="col d-flex c2h1">
                            <div class="i-outer">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <div>
                                <h3>Call Now</h3>
                                <b>+91 8169076549</b>
                            </div>
                        </div>
                        <div class="col d-flex c-h1 ">
                            <button class="firstbtn">Free Sample</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid yellow-bg">
                <div class="container">
                    <div class="logo-outer">
                        <a href="index.php"><img src="assets/imgaes/logo.webp" alt="Logo"></a>

                    </div>
                    <nav>
                        <div class="custom-nav">
                            <div>
                                <ul>
                                    <li><a href="aboutpage.php">About</a></li>
                                    <li><a href="Herbs.php">Herbs</a></li>
                                    <li><a href="spices.php">Spices</a></li>
                                    <li><a href="Grains.php">Grains/Pulses</a></li>

                                    <li class="dropdown">
                                        <a href="#">Others</a>
                                        <div class="dropdown-content bg-light">
                                            <a href="oil.php">Oil and seeds</a>
                                            <a href="vegetables.php">Vegetable & fruits </a>
                                            <a href="dry.php">Dry Fruits </a>
                                        </div>
                                    </li>

                                    <li class="dropdown">
                                        <a href="#">Our Farmers Group</a>
                                        <div class="dropdown-content bg-light">
                                            <a href="location.php">Our Location</a>
                                            <a href="network.php">Our Network </a>

                                        </div>
                                    </li>

                                    <li><a href="Certificates.php">Our Certificates</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>




                                </ul>
                            </div>
                        </div>

                    </nav>
                </div>
            </div>
        </header>
        <div class="loading-container">
            <div class="loading-bar" id="loading-bar"></div>
        </div>
    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
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

</html>