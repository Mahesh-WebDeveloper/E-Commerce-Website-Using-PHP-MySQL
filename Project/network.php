<?php

include_once('config/connection.php');
include_once('header.php');
?>

<style>
    .about1 {
        background-image: url('assets/imgaes/about1.webp');
    }

    tbody tr th {
        font-size: 16px !important;
    }

    .Grouplac a {
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
        border: 2px solid gray !important;
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

    <div class="container-fluid mt-5 my-4">
        <div class="container mt-5 mx-auto py-4">
            <section class="services-sections pb-60 pb-md-140">
                <div class="container">
                    <div class="Populartitle text-center">
                        <h2> <span style="color:yellowgreen;">OUR</span> FARMERS NETWORK</h2>

                    </div>
                    <table class="table table-bordered border-dark text-center ">
                        <thead>
                            <tr>
                                <td class="fs-4" colspan="4">FARMER DETAIL</td>
                            </tr>


                            <tr>

                                <th scope="col">SN</th>
                                <th scope="col">ICS NAME</th>
                                <th scope="col">STATE</th>
                                <th scope="col">FARMER</th>


                            </tr>
                        </thead>
                        <tbody class="fs-6">

                            <?php
                            $connection = mysqli_connect("localhost", "root", "", "herbs") or die("connection Error");

                            $s = "SELECT * FROM farmerdetail";
                            $ex = mysqli_query($connection, $s);
                            $i=1;
                            while ($featch = mysqli_fetch_assoc($ex)) {
                            ?>
                                <tr>

                                    <th scope="row"><?php echo $i;?></th>
                                    <td><?php echo $featch['ICSname'];?></td>
                                    <td><?php echo $featch['STATE'];?></td>
                                    <td><?php echo $featch['FARMER'];?></td>


                                </tr>
                            <?php $i++;  }  ?>




                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>





</body>
<?php include_once('footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>