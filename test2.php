<?php
if (isset($_POST['submit'])) {
    $to = "melkotoury@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $gen = $_POST['gen'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " " . $tel . " wrote the following:" . "\n\n" . $gen . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $gen . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!---- meta tags ---->
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!---- meta tags ---->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!---- title ---->
    <title>Eco Bikes</title>
    <!---- title ---->

    <!---- syles ---->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/PlacardMT-Condensed.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" type="image/png" sizes="96x96" href="imges/favicon-96x96.png">
    <!---- syles ---->


</head>
<body>

<!---- Header ---->
<section class="header">
    <img class="img-responsive side" src="imges/Side.png">

    <nav id="nav" class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div>
                <ul class="nav navbar-nav">
                    <li class="nav-active"><a class="active" href="#nav"><span class="abouA">ABOUT</span></a></li>
                    <li class="nav-active"><a class="fea" href="#nav"><span class="feaA">FEATURES</span></a></li>
                    <li class="nav-active"><a class="safty" href="#nav"><span>SAFETY</span></a></li>
                    <li class="nav-active"><a class="acc" href="#nav"><span>ACC.</span></a></li>
                    <li class="nav-active"><a href="#nav"><span class="speA">SPECS.</span></a></li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <!-- logo -->
    <div class="row">
        <img class="logo img-responsive" src="imges/logo.png">
    </div>
    <!-- logo -->

    <!-- BG-on -->
    <!-- BG-on -->



</section>

<!---- Header ---->

<section id="about" class="background">
    <div class="container">
        <p class="about">
            ECOBIKE IS A REVOLUTIONARY CITY BIKE THAT IS REDEFINING THE BIKE AS WE KNOW IT. IT HAS AN ELECTRIC MOTOR AND A LITHIUM ION BATTERY INSTALLED TO IT. IT WEIGHTS 25 KG AND HAS A MAX SPEED OF 30 KM/HR THAT CAN GO ON AT FULL CAPACITY FOR AT LEAST 40 KM ON ONE CHARGE OF THE BATTERY. SIMPLY, ECO BIKES WILL CHANGE THE WAY PEOPLE COMMUTE IN CITIES.
        </p>
    </div>
</section>

<section id="features" class="background2">
    <div class="row">
        <h2>
            DRIVE MODES
        </h2>
    </div>

    <div class="row">
        <h2>
            NORMAL PEDAL <span class="">Pedaling without assistance from the motor.</span>
        </h2>
    </div>


    <div class="row">
        <h2 style="border: 0">
            PEDAL ASSIT
        </h2>
        <p>
            This mode uses three levels of assistance. After choosing the desired mode,<br>
            the motor supplies power accordingly as soon as the rider starts pedaling.<br>
            The motor's supply speeds are as follows for each level of assistance.
        </p>

        <ul>
            <li>
                <img classs="img-responsive" src="imges/icons/1.png">
                LOW <br>15 KM/H
            </li>

            <li>
                <img classs="img-responsive" src="imges/icons/2.png">
                MED <br>23 KM/H
            </li>

            <li>
                <img classs="img-responsive" src="imges/icons/2.png">
                HIG <br>30 KM/H
            </li>


        </ul>

    </div>
    <div class="row">
        <h2 class="thro">
            THROTTLE MODE
        </h2>
        <p>
            This mode doesn't need any pedal assistance.
        </p>
    </div>

</section>

<section id="safty" class="background2">
    <div class="container">
        <h2>
            BUILT-IN ACCESSORIES
        </h2>

        <ul>
            <li><img src="imges/icons/4.png"> MOTOR ON/ OFF KEY</li>

            <li><img src="imges/icons/5.png"> BATTERY LOCK KEY</li>

            <li><img src="imges/icons/6.png"> ON/OFF BUTTON FOR THROTTLE HANDLE</li>
        </ul>

    </div>
</section>

<section id="acc" class="background2">
    <div class="container">
        <div class="row">
            <h2>
                BUILT-IN ACCESSORIES
            </h2>

            <ul style="list-style:none">
                <li><img src="imges/icons/7.png"> REAR TAILIGHTS</li>

                <li><img src="imges/icons/8.png"> REAR RACK</li>

                <li><img src="imges/icons/9.png"> DIGITAL HORN (BUILT - IN FRONT HEADLIGHT)</li>
                <li><img src="imges/icons/10.png"> LIGHT REFLECTORS IN WHEELS</li>

            </ul>
        </div>
    </div>
</section>

<section id="speces" class="background2">
    <div class="container">
        <div class="row">
            <h2>
                SPECIFICATIONS
            </h2>
        </div>
        <div class="row">
            <div class="box-spec">
                <div class="col-sm-3">
                    <h4>
                        FRAME
                    </h4>
                </div>
                <div class="col-sm-9">
                    <p>
                        Aluminum Alloy
                    </p>
                </div>
            </div>

            <div class="box-spec">
                <div class="col-sm-3">
                    <h4>
                        WEIGHT
                    </h4>
                </div>
                <div class="col-sm-9">
                    <p>
                        25 kg
                    </p>
                </div>
            </div>

            <div class="box-spec">
                <div class="col-sm-3">
                    <h4>
                        WHEEL SIZE
                    </h4>
                </div>
                <div class="col-sm-9">
                    <p>
                        26"
                    </p>
                </div>
            </div>

            <div class="box-spec">
                <div class="col-sm-3">
                    <h4>
                        BATTERY
                    </h4>
                </div>
                <div class="col-sm-9">
                    <p>
                        36V 10Ah lithium Ion Battery
                    </p>
                </div>
            </div>

            <div class="box-spec">
                <div class="col-sm-3">
                    <h4>
                        CHARGE TIME
                    </h4>
                </div>
                <div class="col-sm-9">
                    <p>
                        5 - 6 Hours
                    </p>
                </div>
            </div>

            <div class="box-spec">
                <div class="col-sm-3">
                    <h4>
                        MOTOR
                    </h4>
                </div>
                <div class="col-sm-9">
                    <p>
                        350W ( 1/2 HP )
                    </p>
                </div>
            </div>

            <div class="box-spec">
                <div class="col-sm-3">
                    <h4>
                        MAX SPEED
                    </h4>
                </div>
                <div class="col-sm-9">
                    <p>
                        30 km/h
                    </p>
                </div>
            </div>

            <div class="box-spec">
                <div class="col-sm-3">
                    <h4>
                        DISTANCE/<br>FULL BATTERY CHARGE
                    </h4>
                </div>
                <div class="col-sm-9">
                    <p>
                        40-80 km (dependent on terrain & drive mode used)
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>
<section class="imgs-box">
    <div class="container-fluid">
        <div class="row">
            <div class="feature1-div col-sm-4 padding-0">
                <img class="feature1" src="imges/1.jpg">
            </div>
            <div class="feature2-div col-sm-4 padding-0">
                <img class="feature2" src="imges/2.jpg">
            </div>
            <div class="feature3-div col-sm-4 padding-0">
                <img class="feature3" src="imges/3.jpg">
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="col-xs-12">
            <div class="row">

                <div class="col-sm-12">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>

                    </ul>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-12">
                    <ul>
                        <li><a href="#"><span class="text-big">&nbsp;&nbsp;&nbsp;Hotline - 16148</span></a></li>
                        <li>/</li>
                        <li><a href="ecobikes_catalogue.pdf" target="_blank" class="btn btn-default"><span class="text-big">Catalogue - كتالوج</span></a></li>

                        <li>/</li>

                        <li><a class="popup-modal" href="#test-modal" data-effect="mfp-zoom-out"><span class="text-big">Where to buy<span></a>
                            <div id="test-modal" class="white-popup mfp-hide" data-effect="mfp-zoom-out">
                                <p><a class="popup-modal-dismiss pull-right" href="#"><i class="fa fa-times"></i></a></p>
                                <div class="row">
                                    <div class="form">
                                        <form action="" method="post">
                                            <header>
                                                <img class="img-responsive" src="imges/logo.png" style="text-align: center">
                                            </header>
                                            <input class="form-control" type="text" placeholder="Name..." required name="name">
                                            <div style="border: 1px dashed #fff">
                                                <input type="radio" name="gen" value="male">Male &nbsp; &nbsp;/&nbsp; &nbsp;
                                                <input type="radio" name="gen" value="female">Female
                                            </div>
                                            <input class="form-control" type="tel" placeholder="Mobile... EX: +(200)123-4567-890" name="tel" required>
                                            <input type="email" class="form-control" required name="email" placeholder="@email">
                                            <input type="text" class="form-control" name="message" placeholder="Location/adress" required>



                                            <input class="btn btn-defuclt" type="submit" name="submit" value="Send">

                                        </form>
                                    </div>
                                </div>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <p class="text-left" style="font-size: 14px;font-weight:300; text-align:center">
            Mashroey Microfinance Consultancy Services Co. S.A.E & part of Ghabbour Automotive Group
        </p>
    </div>
</footer>

<!---- JavaScript Files ---->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="js/bootstrap.min.js"></script>
<!---- JavaScript Files ---->

<!-- SmothScroll -->
<script src="js/SmoothScroll.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Custom JS file -->
<script src="js/jsFile.js"></script>
</body>
</html>

