<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <nav id="topNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="home.php"><i class="ion-android-car"></i> Car Rodio</a>
            </div>
            <div class="navbar-collapse collapse" id="bs-navbar">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="page-scroll" href="#">Browse Cars</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Contact Us</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Login/SignUp</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header id="first">
        <div class="header-content">
            <div class="inner">
                <h1 class="cursive">Car Rodio</h1>
                <lottie-player src="https://assets10.lottiefiles.com/datafiles/HN7OcWNnoqje6iXIiZdWzKxvLIbfeCGTmvXmEm1h/data.json" background="transparent" speed="0.8" style="width: 100%; height: 100%;" loop autoplay></lottie-player>
                <h4>Life is a journey so choose your car wisely.</h4>
                <hr>
                <a href="#one" class="btn btn-primary btn-xl page-scroll">Get Started</a>
            </div>
        </div>

    </header>
    <section class="bg-primary" id="one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="margin-top-0 text-secondary">Search for a vehicle</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="tabPanel-widget">
                    <label for="tab-1" tabindex="0"></label>
                    <input id="tab-1" type="radio" name="tabs" checked="true" aria-hidden="true">
                    <h2> Brand New Vehicles </h2>
                    <div>
                        <form action="#" method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                                <option>Select Make</option>
                                                <option>Toyota</option>
                                                <option>Nissan</option>
                                                <option>Audi</option>
                                                <option>BMW</option>
                                                <option>Land Rover</option>
                                                <option>Honda</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <input type="text" class="form-control search-slt" placeholder="Enter Model">
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                                <option>Select Vehicle Type</option>
                                                <option>Car</option>
                                                <option>Van</option>
                                                <option>SUV</option>
                                                <option>PickUp</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <button type="button" class="btn btn-primary">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <label for="tab-2" tabindex="0"></label>
                    <input id="tab-2" type="radio" name="tabs" aria-hidden="true">
                    <h2> Used Vehicles </h2>
                    <div>
                        <form action="#" method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                                <option>Select Make</option>
                                                <option>Toyota</option>
                                                <option>Nissan</option>
                                                <option>Audi</option>
                                                <option>BMW</option>
                                                <option>Land Rover</option>
                                                <option>Honda</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <input type="text" class="form-control search-slt" placeholder="Enter Model">
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                                <option>Select Vehicle Type</option>
                                                <option>Car</option>
                                                <option>Van</option>
                                                <option>SUV</option>
                                                <option>PickUp</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <button type="button" class="btn btn-primary">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="margin-top-0 text-primary">Popular Brands</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="feature">
                        <img src="icons/toyotaicon.ico" class="icon-lg ion-android-laptop wow fadeIn" data-wow-delay=".3s"></i>
                        <h3 class="text-secondary">Toyota</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="feature">
                        <img src="icons/nissanicon.ico" class="icon-lg ion-social-sass wow fadeInUp" data-wow-delay=".2s"></i>
                        <h3 class="text-secondary">Nissan</h3>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-4 text-center">
                    <div class="feature">
                        <img src="icons/hondaicon.ico" class="icon-lg ion-ios-star-outline wow fadeIn" data-wow-delay=".3s"></i>
                        <h3 class="text-secondary">Honda</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 text-center">
                        <div class="feature">
                            <img src="icons/bmwicon.ico" class="icon-lg ion-android-laptop wow fadeIn" data-wow-delay=".3s"></i>
                            <h3 class="text-secondary">BMW</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 text-center">
                        <div class="feature">
                            <img src="icons/fordicon.ico" class="icon-lg ion-social-sass wow fadeInUp" data-wow-delay=".2s"></i>
                            <h3 class="text-secondary">Ford</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 text-center">
                        <div class="feature">
                            <img src="icons/landrovericon.ico" class="icon-lg ion-ios-star-outline wow fadeIn" data-wow-delay=".3s"></i>
                            <h3 class="text-secondary">Land Rover</h3>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <footer id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-sm-3 column">
                    <h4>Information</h4>
                    <ul class="list-unstyled">
                        <li><a href="">Inquiries</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Career Opportunities</a></li>
                        <li><a href="">Leave a feedback</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-sm-3 column">
                    <h4>About</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-sm-3 column">

                </div>
                <div class="col-xs-6 col-sm-3 column">
                    <br>
                    <h2>All Rights Reserved &copy;</h2>
                    </ul>
                </div>
            </div>
            <br />
        </div>
    </footer>
    <div id="galleryModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="//placehold.it/1200x700/222?text=..." id="galleryImage" class="img-responsive" />
                </div>
            </div>
        </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script src="js/script.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>