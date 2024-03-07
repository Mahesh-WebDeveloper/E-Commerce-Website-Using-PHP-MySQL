<?php

include_once('config/connection.php');
include_once('header.php');
?>
<style>
    .about1 {
        background-image: url('assets/imgaes/about1.webp');

    }
    .contitem{
        border-bottom: 1px solid gray;
        margin-bottom: 5px;
    }

    #contamainh {
        background-image: url(assets/imgaes/bg-pattern.webp) !important;
        background-position: center;
        background-size: cover;
    }

    .contactthree h2 {
        color: orange !important;
        font-size: 26px !important;
    }

    .col-outer {
        margin: 0px 40px;

    }

    .contitem b {
        font-size: 14px;
        line-height: 1.1;
        color: inherit;
    }
    .contitem h2{
        color: orange;
    font-size: 26px;
}
    
    #reachus {
        margin-top: 20px !important;
        margin-bottom: 10px !important;
        color: gray !important;
        font-size: 30px !important;
    }
</style>


<body>
    <div class="container-fluid about1" id="aboutpage">
        <div class="contaienr">
            <div class="row text-center">
                <a href="aboutpage.php">
                    <h1>Contact Us</h1>
                </a>

            </div>
        </div>
    </div>


    <div class="container-fluid mt-5 mb-5 " id="contamainh">
        <div class="container mt-5 mx-auto">
            <section class="services-sections pb-60 pb-md-140">
                <div class="container">
                    <div class="Populartitle text-center">
                        <h2 class="pt-4">Contact Us</h2>
                        <span class="decor"><span class="inner"></span></span>
                    </div>
                    <div class="row row-cols-lg-3 gx-2 contactthree">
                        <div class="col shadow-md">
                            <div class="col-outer p-3  shadow-lg">
                                <h2>Registered Address: </h2>
                                <p>
                                    <i class="fa-solid fa-house"></i> 716, Agrawal B2B Center, Kachpada,Malad West, Mumbai, Maharashtra-400064
                                </p>
                            </div>
                        </div>
                        <div class="col shadow-md">
                            <div class="col-outer p-3  shadow-lg ">
                                <h2>Factory Address: </h2>
                                <p>
                                    <i class="fa-solid fa-house"></i> ROMOFY AGRO INDIA PVT. LTD. Near Filter House, Phalodi, Dist.-Jodhpur, Rajasthan, INDIA-342301
                                </p>
                            </div>
                        </div>

                        <div class="col shadow-md">
                            <div class="col-outer p-3 shadow-lg ">
                                <h2>Branch Office:
                                </h2>
                                <p>
                                    <i class="fa-solid fa-house"></i> C-21, Main Krish Upaj Mandi, Phalodi, Dist.- Jodhpur, Rajasthan, INDIA-342301
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="row row-cols-lg-2 mt-5">
                        <div class="col mt-5">

                            <form action="">
                                <div class="row my-3 ms-2">
                                    <div class="col-lg-6 col-12 inputmappass">
                                        <input class="py-2 w-full" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Name*">
                                    </div>
                                    <div class="col-lg-6 col-12 inputmappass">
                                        <input class="py-2 w-full" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Phone*">
                                    </div>
                                    <div class="col-lg-6 col-12 inputmappass">
                                        <input class="py-2 w-full" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Email*">
                                    </div>
                                    <div class="col-lg-6 col-12 inputmappass">
                                        <input class="py-2 w-full" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your City/State*">
                                    </div>

                                    <div class="col-lg-12 inputmappass">
                                        <textarea class="firstpagetextara" placeholder="Describe Your Needs to Us" name="" id="" cols="30" rows="10"></textarea>
                                    </div>

                                    <div class="col-lg-7" data-sitekey="6LchMYwkAAAAAEJ2T2RFiJGvDZWbuYlbENQYRmIp">
                                        <iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&k=6LchMYwkAAAAAEJ2T2RFiJGvDZWbuYlbENQYRmIp&co=aHR0cHM6Ly93d3cucm9tb2Z5YWdyb2luZGlhLmNvbTo0NDM.&hl=en&v=uEf7E1417z6GNSkRx7AyL8K8&size=normal&cb=gxph7uawh9f" frameborder="0" scrolling="no"></iframe>
                                    </div>


                                    <div class="col0-lg-12 text-center mapssdivend ">
                                        <button class="firstbtn">SUBMIT</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col contitemain">
                            <h2 id="reachus">Reach Us</h2>
                            <div class="contitem bg-light shadow-lg p-3">
                                <h2>Mukesh Thanvi</h2>
                                <b>( Founder )</b>
                                <ul class="p-0 m-0">
                                    <li><i class="fas fa-phone pe-2"></i>
                                        +91 8169076549</li>
                                    <li><i class="fas fa-envelope pe-2"></i>

                                        info@romofyagroindia.com</li>
                                </ul>
                            </div>
                            <div class="contitem bg-light shadow-lg p-3">
                                <h2>Narendra Thanvi</h2>
                                <b>(Director)</b>
                                <ul class="p-0 m-0">
                                    <li><i class="fas fa-phone pe-2"></i>
                                        +91 8169076549</li>
                                    <li><i class="fas fa-envelope pe-2"></i>

                                        info@romofyagroindia.com</li>
                                </ul>
                            </div>
                            <div class="contitem bg-light shadow-lg p-3">
                                <h2>Ruchi Thakkar</h2>
                                <b>(Chief Business Development Officer)</b>
                                <ul class="p-0 m-0">
                                    <li><i class="fas fa-phone pe-2"></i>
                                        +91 8169076549</li>
                                    <li><i class="fas fa-envelope pe-2"></i>

                                        info@romofyagroindia.com</li>
                                </ul>
                            </div>
                           

                        </div>

                    </div>

                    <div class="row text-center">
                        <div class="col-lg-12 mx-auto">

                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3768.069466996833!2d72.83819!3d19.192168!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b721abfc2c85%3A0xf0c69d102e7e9017!2sRomofy%20Agro!5e0!3m2!1sen!2sin!4v1694976774987!5m2!1sen!2sin" width="600" height="450" style="border:0; width:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>




</body>
<?php include_once('footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>