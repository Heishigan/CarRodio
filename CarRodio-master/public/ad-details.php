<?php
session_start();

$ID = $_GET['id'];
$IDU = $_SESSION["buyerID"];
// echo $ID;
include("../src/backend/includes/autoloader.inc.php");



$Brands = new BrandsView();
$Details = new CarDetailsView();
$Cars = new CarView();
$add = new Ads();
$user = new Users();



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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

    <!-- custom javascript -->
    <script src="../src/frontend/assets/js/script2.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>


    <style>
        .checked {
            color: orange;
        }
    </style>
    <script type="text/javascript">
        /// some script

        // jquery ready start
        $(document).ready(function() {
            // jQuery code

        });
        // jquery end

        // var rating="";
        // function starmark(item) {
        //     var count=item.id[0];
        //     rating=count;

        //     var subid=item.id.substring(1);
        //     for(var i=0;i<5;i++) {
        //         if(i<count) {
        //             document.getElementById((i+1)+subid).style.color="orange";
        //         }
        //         else {
        //             document.getElementById((i+1)+subid).style.color="black";
        //         }
        //     }

        // }
        $(function() {

            $("#rateYo").rateYo({
                fullStar: true,
                onSet: function(rating, rateYoInstance) {
                    $("#rating").val(rating);
                }
            });

        });
    </script>

</head>

<body>

    <?php

    include_once('../src/backend/includes/navbar.php')

    ?>
    <!-- section-header.// -->


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




            <h1>comments</h1>
            <form action="" method="post">
                <div id="rateYo"></div>
                <div class="form-group">
                    <input type="text" name="comment" placeholder="enter comment" class="form-control">
                    <input type="hidden" name="rating" id="rating">
                </div>
                <button class="btn btn-primary">submit</button>

            </form>
            <br>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'carrodio');
            $sql = "SELECT * FROM commentsrating";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);


            if ($resultcheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $val2 = $add->getadid($ID);
                    if ($row['AdID'] == $val2) {
                        $uuid = $row['UserID'];

                        $name = $user->getname($uuid);


            ?>
                        <div class="card">
                            <div class="card-header">
                                <?php
                                foreach ($name as $value) {
                                    print_r($value['username']);
                                }
                                ?>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['Rating']; ?>/5 stars</h5>
                                <p class="card-text"><?php echo $row['Comment']; ?></p>
                            </div>
                        </div>
            <?php
                    }
                }
            }

            ?>






















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
<?php
if (isset($_POST['rating'])) {
    $mysqli = mysqli_connect('localhost', 'root', '', 'carrodio');
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];
    $val = $add->getadid($ID);
    echo $val;
    $add->addcr($comment, $rating, $val, $IDU);

    // $stmt->bind_param('isss',$comment, $rating, $val2, $ID);
    // $stmt->execute();
    // $stmt->close();
    // $mysqli->close();




}

?>

</html>