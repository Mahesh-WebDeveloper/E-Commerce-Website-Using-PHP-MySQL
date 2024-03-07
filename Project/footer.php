3<?php

include_once('config/connection.php');
?>
<style>
    .footer {
        background-image: url(assets/imgaes/footerback.webp) !important;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: auto;
        position: relative;
    }
</style>

<body>
    <footer class="container-fluid footer py-5">
        <div class="container py-2">
            <div class="row">

                <div class="col-md-4 col-sm-12 footer-1">
                    <div class="img-outer-footer bg-white">
                        <img src="assets/imgaes/footer-logo.webp" alt="">
                    </div>
                    <p>We are a Rajasthan-based company that focuses on producing Fully Certified (NPOP NOP) organic food using traditional methods, which means we use the minimum possible amount of external inputs like pesticides and chemical fertilizers.</p>
                    <div class="f1c1 mt-2">
                        <p><i class="fa-solid fa-location-dot px-1 fs-6"></i> 716, Agrawal B2B Center, Kachpada, Malad West, Mumbai, Maharashtra, INDIA-400064</p>
                    </div>
                    <ul class="m-0 p-0 pt-3">
                        <li>
                            <p><i class="fa-solid fa-phone py-2 px-1 fs-6"></i> +91 8169076549</p>
                        </li>
                        <li>
                            <p><i class="fa-solid fa-phone py-2 px-1 fs-6"></i> +91 8082686077</p>
                        </li>
                        <li>
                            <p><i class="fa fa-envelope py-2 px-2 fs-6"></i> info@romofyagroindia.com</p>
                        </li>
                    </ul>

                    <div class="row mt-2 flex row-cols-lg-3 mb-3 pt-3">
                        <div class="col d-inline">
                            <div class="img-iconf"><i class="fa-brands fa-facebook"></i></div>
                        </div>
                        <div class="col d-inline">
                            <div class="img-iconf"><i class="fa-brands fa-google"></i></div>
                        </div>
                        <div class="col d-inline">
                            <div class="img-iconf"><i class="fa-brands fa-youtube"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-sm-12  footer-2 ">
                    <h3 id="h3af" class="mt-4">Quick Links</h3>

                    <ul class="ful m-0 p-0  pt-4 list-unstyled">
                        <li>
                            <p class="pfl"><a href="#" class="p-0 m-0"></a>Home </p>
                        </li>
                        <li>
                            <p class="pfl"><a href="#" class="p-0 m-0"></a>About Us</p>
                        </li>
                        <li>
                            <p class="pfl"><a href="#" class="p-0 m-0"></a>Our Certifcates</p>
                        </li>
                        <li>
                            <p class="pfl"><a href="#" class="p-0 m-0"></a>Contact Us</p>
                        </li>
                        <li>
                            <p class="pfl"><a href="#" class="p-0 m-0"></a>Privacy Policy</p>
                        </li>
                        <li>
                            <p class="pfl"><a href="#" class="p-0 m-0"></a>Terms of Service</p>
                        </li>
                        <li>
                            <p class="pfl"><a href="#" class="p-0 m-0">Refund Policy</a></p>
                        </li>
                    </ul>
                </div>

                <div class="col-md-2 col-sm-12 footer-2 pt-4">
                    <h3 id="h3af">Products</h3>
                    <ul class="ful m-0 p-0 pt-5 list-unstyled">
                        <li>
                            <p class="pfl"><a href="#" class="p-0 m-0"></a>Herbs </p>
                        </li>
                        <li>
                            <p class="pfl"><a href="#" class="p-0 m-0"></a>Spices</p>
                        </li>
                        <li>
                            <p class="pfl"><a href="#" class="p-0 m-0"></a>Grains/Pulses</p>
                        </li>
                        <li>
                            <p class="pfl"><a href="#" class="p-0 m-0"></a>Others</p>
                        </li>

                    </ul>
                </div>

                <div class="col-md-4 col-sm-12 footer-2 pt-4">


                    <?php
                    $connection = mysqli_connect("localhost", "root", "", "herbs") or die("Connection Error");

                    if (isset($_POST['save'])) {
                        $name = $_POST['qname'];
                        $email = $_POST['qemail'];
                        $message = $_POST['message'];

                        $inst = "INSERT INTO quickcontact (`name`, `address`, `message`)
                         VALUES ('$name', '$email', '$message')";

                        mysqli_query($connection, $inst);
                    }
                    ?>


                    <h3 id="h3af">Quick Contact</h3>
                    <div class="form-outer-index mt-5">


                        <form method="post" <? echo $_SERVER['PHP_SELF'];?>>
                            <div class="mb-3">
                                <input type="text" placeholder="Full Name" class="form-control" name="qname">
                            </div>
                            <div class="mb-3">
                                <input type="email" placeholder="Email Address" class="form-control" name="qemail">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" name="message" id="" cols="30" rows="10" placeholder="Enter Message"></textarea>
                            </div>

                            <button type="submit" name="save">Send</button>
                        </form>

                        <?php 
                        
                        
                        if (isset($_POST['save'])) {
                            $to ="maheshchoudhary99820@gmail.com";
                            $message = $_POST['message'];
                            $from = $_POST['email'];

                                mail($to,$message,$from);
                        }

                        ?>


                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="container-fluid footer-bottam text-center">
        <div class="container">
            <div class="row ">
                <p>© Copyright 2023 by <span><a href="#">Romofy Agro India</a></span> | All rights reserved </p>
            </div>
        </div>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>