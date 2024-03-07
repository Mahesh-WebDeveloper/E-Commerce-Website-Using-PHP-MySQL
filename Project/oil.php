<?php

include_once('config/connection.php');
include_once('header.php');
?>

<style>
    .about1 {
        background-image: url('assets/imgaes/about1.webp');

    }
    .imgoutercolmidinner img{
    width: 347px !important;
    height: 347px !important; 
}
</style>

<body>
    <div class="container-fluid about1" id="aboutpage">
        <div class="contaienr">
            <div class="row text-center">
                <a href="aboutpage.php">
                    <h1>Oil and Seeds</h1>
                </a>

            </div>
        </div>
    </div>


    <div class="container-fluid mt-5 mb-5">
        <div class="container mt-5 mx-auto">
            <section class="services-sections pb-60 pb-md-140">
                <div class="container">
                    <div class="Populartitle text-center">
                        <h2>Popular Oil & Seeds</h2>
                        <span class="decor"><span class="inner"></span></span>
                    </div>
                    <div class="row gy-4">

                        <?php
                        $connection = mysqli_connect("localhost", "root", "", "herbs") or die("connection Error");

                        $s = "SELECT * FROM oilpageitem";
                        $ex = mysqli_query($connection, $s);
                        while ($featch = mysqli_fetch_assoc($ex)) {
                        ?>
                            <div class="col-lg-4 col-md-6 col-12">
                            <div class="colmdinner">
                                <div class="imgoutercolmidinner">
                                <img src="uploadimg/<?php echo $featch['imgname']; ?>" class="" alt="ORGANIC GINGER" width="347" height="347">
                                    <div class="contentpooutal">
                                    <h4 class="title"><a href=""><?php echo $featch['title']?></a></h4>

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




</body>
<?php include_once('footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>