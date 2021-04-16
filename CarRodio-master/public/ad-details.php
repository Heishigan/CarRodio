<?php


$ID = $_GET['id'];
// echo $ID;
include("../src/backend/includes/autoloader.inc.php");



$Brands = new BrandsView();
$Details = new CarDetailsView();
$Cars = new CarView();




?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bootstrap-ecommerce by Vosidiy M.">

    <?php

    $Cars->getCarTitle($ID);
    ?>

    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">

    <!-- jQuery -->
    <script src="../src/frontend/assets/js/jquery-2.0.0.min.js" type="text/javascript"></script>


    <!-- Bootstrap4 files-->
    <script src="../src/frontend/assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <link href="../src/frontend/assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../src/frontend/assets/css/nav.css" rel="stylesheet" type="text/css" />
    <!-- Font awesome 5 -->
    <link href="../src/frontend/assets/css/all.min.css" type="text/css" rel="stylesheet">

    <!-- plugin: fancybox  -->
    <script src="plugins/fancybox/fancybox.min.js" type="text/javascript"></script>
    <link href="plugins/fancybox/fancybox.min.css" type="text/css" rel="stylesheet">

    <!-- custom style -->
    <link href="../src/frontend/assets/css/ui.css" rel="stylesheet" type="text/css" />
    <link href="../src/frontend/assets/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

    <!-- custom javascript -->
    <script src="../src/frontend/assets/js/script2.js" type="text/javascript"></script>


    <script type="text/javascript">
        /// some script

        // jquery ready start
        $(document).ready(function() {
            // jQuery code

        });
        // jquery end
    </script>

</head>

<body>

    <header class="section-header">
        <section class="header-main">
            <div class="container">
                <a href="http://bootstrap-ecommerce.com" class="brand-wrap"><img class="logo" src="../images/logo.png"></a>
            </div> <!-- container.// -->
        </section>
    </header> <!-- section-header.// -->


    <section class="section-content padding-y bg">
        <div class="container">

            <!-- ============================ COMPONENT 1 ================================= -->
            <div class="card">
                <?php
                $Details->showDetail($ID);
                ?>
                <!-- row.// -->
            </div> <!-- card.// -->
            <!-- ============================ COMPONENT 1 END .// ================================= -->

            <br><br><br><br>
            <!-- ========================= FOOTER ========================= -->
            <footer class="section-footer border-top padding-y">
                <div class="container">
                    <p class="float-left text-muted"> Designed by <a href="http://pixsellz.io">Pixsellz</a> <br> Developed by
                        <a target="_blank" href="http://behance.net/vosidiy">Vosidiy Muslimbek</a>
                    </p>
                    <p target="_blank" class="float-right text-muted">
                        Copyright &copy 2019 <br>
                        <a href="http://bootstrap-ecommerce.com">Bootstrap-ecommerce UI kit</a>
                    </p>
                </div><!-- //container -->
            </footer>
            <!-- ========================= FOOTER END // ========================= -->


</body>

</html>