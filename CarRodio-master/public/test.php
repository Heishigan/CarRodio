<?php

include("../src/backend/includes/autoloader.inc.php");



$Brands = new BrandsView();
$Details = new CarDetailsView();
$Cars = new CarView();
$Ads = new AdsView();

// $Details->showDetails();

?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="max-age=604800" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ads</title>

    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">

    <!-- jQuery -->
    <script src="../src/frontend/assets/js/jquery-2.0.0.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


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
    <?php

    include_once('../src/backend/includes/navbar.php')

    ?>
    <!-- section-header.// -->




    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-y">
        <div class="container">

            <div class="row">
                <aside class="col-md-3">

                    <div class="card">
                        <article class="filter-group">
                            <header class="card-header">
                                <a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
                                    <i class="icon-control fa fa-chevron-down"></i>
                                    <h6 class="title">Search</h6>
                                </a>
                            </header>
                            <div class="filter-content collapse show" id="collapse_1" style="">
                                <div class="card-body">
                                    <form class="pb-3" action="search.php" method="POST">
                                        <div class="input-group">
                                            <input name="search" type="text" class="form-control" placeholder="Search">
                                            <div class="input-group-append">
                                                <button name="submit-search" class="btn btn-light" type="submit"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>



                                </div> <!-- card-body.// -->
                            </div>
                        </article> <!-- filter-group  .// -->
                        <article class="filter-group">
                            <header class="card-header">
                                <a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true" class="">
                                    <i class="icon-control fa fa-chevron-down"></i>
                                    <h6 class="title">Brands </h6>
                                </a>
                            </header>
                            <div class="filter-content collapse show" id="collapse_2" style="">
                                <div class="card-body">
                                    <form class="pb-3" action="filter.php" method="POST">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" name="brand[]" value="Mercedes" class="custom-control-input">
                                            <div class="custom-control-label">Mercedes

                                            </div>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" name="brand[]" value="Toyota" class="custom-control-input">
                                            <div class="custom-control-label">Toyota

                                            </div>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" name="brand[]" value="Mitsubishi" class="custom-control-input">
                                            <div class="custom-control-label">Mitsubishi

                                            </div>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" name="brand[]" value="Nissan" class="custom-control-input">
                                            <div class="custom-control-label">Nissan

                                            </div>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" name="brand[]" value="Honda" class="custom-control-input">
                                            <div class="custom-control-label">Honda

                                            </div>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" name="brand[]" value="Porsche" class="custom-control-input">
                                            <div class="custom-control-label">Porsche

                                            </div>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" name="brand[]" value="BMW" class="custom-control-input">
                                            <div class="custom-control-label">BMW

                                            </div>
                                        </label>
                                        <div class="input-group-append">
                                            <input type="submit" class=" btn btn-block btn-primary" name="submit" value="Apply">
                                        </div>
                                    </form>
                                </div> <!-- card-body.// -->
                            </div>
                        </article> <!-- filter-group .// -->
                        <!-- filter-group .// -->
                        <!-- filter-group .// -->

                        <!-- filter-group .// -->
                    </div> <!-- card.// -->

                </aside> <!-- col.// -->
                <main class="col-md-9">

                    <header class="border-bottom mb-4 pb-3">
                        <div class="form-inline">
                            <span class="mr-md-auto">
                                <p id="ItemsFound"></p>
                            </span>
                            <select class="mr-2 form-control">
                                <option>Latest items</option>
                                <option>Trending</option>
                                <option>Most Popular</option>
                                <option>Cheapest</option>
                            </select>

                            <div class="btn-group">
                                <a href="#" class="btn btn-outline-secondary" data-toggle="tooltip" title="List view">
                                    <i class="fa fa-bars"></i></a>
                                <a href="#" class="btn  btn-outline-secondary active" data-toggle="tooltip" title="Grid view">
                                    <i class="fa fa-th"></i></a>
                            </div>
                        </div>
                    </header><!-- sect-heading -->

                    <div class="row">
                        <!-- col.// -->
                        <?php

                        $Ads->showAds();


                        ?>

                    </div> <!-- row end.// -->


                    <nav class="mt-4" aria-label="Page navigation sample">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>

                </main> <!-- col.// -->

            </div>

        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

    <!-- ========================= FOOTER ========================= -->
    <footer class="section-footer border-top padding-y">
        <div class="container">
            <p class="float-md-right">
                &copy Copyright 2019 All rights reserved
            </p>
            <p>
                <a href="#">Terms and conditions</a>
            </p>
        </div><!-- //container -->
    </footer>
    <!-- ========================= FOOTER END // ========================= -->



    <script>
        let spantag = document.getElementById("ItemsFound");
        let items = document.querySelectorAll('.col-md-4').length;
        spantag.innerText = items + " ads found";
    </script>
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <script src="../src/frontend/assets/js/simplenav.js"></script>
</body>

</html>