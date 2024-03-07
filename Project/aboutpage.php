<?php

include_once('config/connection.php');
include_once('header.php');
?>

<style>
    .about1 {
        background-image: url('assets/imgaes/about1.webp');

    }
</style>

<body>
    <div class="container-fluid about1" id="aboutpage">
        <div class="contaienr">
            <div class="row text-center">
                <h1>About Romofy Agro</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid my-5">
        <div class="container">

            <?php
            $connection = mysqli_connect("localhost", "root", "", "herbs") or die("connection Error");

            $s = "SELECT * FROM addaboutpage";
            $ex = mysqli_query($connection, $s);

            while ($featch = mysqli_fetch_assoc($ex)) {

            ?> 

                <div class="col-12 headrow text-center">
                    <h4>
                        <?php echo $featch['title'] ?>
                    </h4>
                    <h2>
                        ABOUT
                        <span> <?php echo $featch['heading'] ?></span>

                    </h2>
                </div>

                <div class="row">
                    <div class="col-12 contetextabout">
                        <p>
                            <strong>Fully Certified (NPOP NOP)</strong>

                        </p>
                        <?php echo $featch['des'] ?>

                        <p></p>
                        <p></p>
                        <div class="con-12 text-center btndiv">

                            <a href="">
                                <button>
                                    Read More
                                </button>
                            </a>
                        </div>


                    </div>
                </div>
            <?php  }  ?>

        </div>
    </div>


</body>
<?php include_once('footer.php'); ?>

</html>