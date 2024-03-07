<?php

include_once('config/connection.php');
include_once('header.php');
?>

<style>
    .about1 {
        background-image: url('assets/imgaes/about1.webp');
    }

    .cerouter {
        border: 2px solid gray;
    }
</style>

<body>
    <div class="container-fluid about1" id="aboutpage">
        <div class="contaienr">
            <div class="row text-center">
                <a href="aboutpage.php">
                    <h1>Our Certificates</h1>
                </a>

            </div>
        </div>
    </div>


    <div class="container-fluid mt-5 mb-5">
        <div class="container mt-5 mx-auto">
            <div class="row row-cols-lg-3 gy-4">

                <?php
                $connection = mysqli_connect("localhost", "root", "", "herbs") or die("connection Error");

                $s = "SELECT * FROM ourcertificatespage";
                $ex = mysqli_query($connection, $s);

                while ($featch = mysqli_fetch_assoc($ex)) {
                ?>
                    <div class="col">

                        <div class="cerouter p-5 pt-2 text-center text-danger shadow-lg">
                            <h5><?php echo $featch['imgtitle']?></h5>
                            <img src="assets/imgaes/cer (1).jpg" class="img-fluid" alt="">
                        </div>

                    </div>
                <?php  }  ?>
            </div>
        </div>
    </div>




</body>
<?php include_once('footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>