<?php

include_once('config/connection.php');
include_once('header.php');
?>

<style>
    .about1 {
        background-image: url('assets/imgaes/about1.webp');
    }
 .Grouplac a{
    outline: none;
    text-decoration: none;
    color: #337ab7;
    font-size: 14px;
    font-family: sans-serif;
    font-weight: bold;
 }
    .locmapouter {
        background-image: url('assets/imgaes/India-05-scaled (1).webp');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        height: 550px;
        width: 100%;
    }

    .Grouplac {
        border: 2px solid black;
        padding: 10px;
    }

    .Grouplac h5 {
        font-size: 25px;
        color: #ef7e19;
        font-weight: 400;
        line-height: initial;
        padding-bottom: 20px;
        font-family: sans-serif;
    }

    .Grouplac span {
        padding: 4px 10px;
        background: red;
        color: white;
        margin-right: 12px;
    }
</style>

<body>
    <div class="container-fluid about1" id="aboutpage">
        <div class="contaienr">
            <div class="row text-center">
                <a href="aboutpage.php">
                    <h1>Our Farmers Group</h1>
                </a>

            </div>
        </div>
    </div>


    <div class="container-fluid mt-5 mb-5">
        <div class="container mt-5 mx-auto">
            <div class="row row-cols-lg-2">
                <div class="col">
                    <div class="locmapouter">
                    
                    </div>
                </div>
                <div class="col">
                    <div class="Grouplac ">
                        <h5>Our 9 Farmers Group In India</h5>

                        <?php
                        $connection = mysqli_connect("localhost", "root", "", "herbs") or die("connection Error");

                        $s = "SELECT * FROM indiamap";
                        $ex = mysqli_query($connection, $s);
                        $i =1;
                        while ($featch = mysqli_fetch_assoc($ex)) {
                        ?>
                               
                               <div class="grouplink">
                           <a href=""><p> <span><?php echo $i;?></span> <?php echo $featch['Links']?></p></a> 
                        </div>


                        <?php $i++; }  ?>
                     

                

                    </div>
                </div>
            </div>
        </div>
    </div>




</body>
<?php include_once('footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>