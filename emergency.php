<!DOCTYPE html>
<html lang="en">
<head>
    <title>Emergency | KYW</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/temp/logo_small.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/services.css">
    <link rel="stylesheet" type="text/css" href="styles/services_responsive.css">
    <!-- Styles2 -->
    <link rel="stylesheet" type="text/css" href="styles2/emergency.css">
    <!-- Google Translate API -->
    <script type="text/javascript"
            src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                {
                    pageLanguage: 'en-US',
                    includedLanguages: 'en,zh-TW,zh-CN,hi,ta,ur',
                    layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                    autoDisplay: false
                },
                'google_translate_element'
            );
        }
    </script>
</head>
<body>

<div class="super_container">

    <!-- Menu -->

    <div class="menu trans_500">
        <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
            <div class="menu_close_container">
                <div class="menu_close"></div>
            </div>
            <ul>
                <li class="menu_item"><a href="index.php">Home</a></li>
                <!--<li class="menu_item"><a href="journeyPlanner.php">Beach Recommender</a></li>-->
                <li class="menu_item"><a href="findBeach.php?id=1">Find beach</a></li>
                <li class="menu_item"><a href="learnToSwim.php?suburb=Melbourne+CBD">Learn to swim</a></li>
                <li class="menu_item"><a href="emergency.php">Emergency</a></li>
            </ul>
        </div>
    </div>

    <!-- Home -->

    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="img/emergency/bg_emergency.png"
             data-speed="0.8"></div>

        <!-- Header -->

        <header class="header" id="header">
            <div>
                <div class="header_top">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="header_top_content d-flex flex-row align-items-center justify-content-start">
                                    <div class="logo">
                                        <a href="index.php">
                                            <img src="img/temp/logo_big.png" alt="brand" height="70">
                                        </a>
                                    </div>
                                    <div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
                                        <div class="header_top_nav">
                                            <ul class="d-flex flex-row align-items-center justify-content-start">
                                                <li>
                                                    <a id="emergency_call_on_top_bar" href="emergency.php"><i
                                                                class="fa fa-phone" aria-hidden="true"></i>&#160;Emergency</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="header_top_phone">
                                            <div id="google_translate_element"></div>
                                        </div>
                                    </div>
                                    <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header_nav" id="header_nav_pin">
                    <div class="header_nav_inner">
                        <div class="header_nav_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
                                            <nav class="main_nav">
                                                <ul class="d-flex flex-row align-items-center justify-content-start">
                                                    <li><a href="index.php">Home</a></li>
                                                    <!--<li><a href="journeyPlanner.php">Beach Recommender</a></li>-->
                                                    <li><a href="findBeach.php?id=1">Find beach</a></li>
                                                    <li><a href="learnToSwim.php?suburb=Melbourne+CBD">Learn to swim</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="home_title">Emergency</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Emergency -->
    <div id="emergency" class="container">
        <div id="emergency_title" class="text-center">
            <h2>How to call Triple Zero (000)</h2>
            <p><i>Stay focused, stay relevant, stay on the line</i></p>
        </div>

        <div id="accordion">
            <!-- question 1 -->
            <div class="card">
                <div class="card-header">
                    <a id="q1" class="card-link" data-toggle="collapse" href="#collapseOne">
                        <i class="fa fa-minus-square"></i>&#160;&#160;About Triple Zero (000)
                    </a>
                </div>
                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                    <div class="card-body">
                        The Triple Zero (000) service is the quickest way to get the right emergency service to help
                        you. You can contact Police, Fire or Ambulance in life threatening or emergency situations.
                    </div>
                </div>
            </div>
            <!-- question 2 -->
            <div class="card">
                <div class="card-header">
                    <a id="q2" class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                        <i class="fa fa-plus-square"></i>&#160;&#160;Assess the situation
                    </a>
                </div>
                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        <ul>
                            <li>Is someone seriously injured or in need of urgent medical help?</li>
                            <li>Is your life or property being threatened?</li>
                            <li>Have you just witnessed a serious accident or crime?</li>
                        </ul>
                        If you answered <strong>YES</strong> call Triple Zero (000).
                    </div>
                </div>
            </div>
            <!-- question 3 -->
            <div class="card">
                <div class="card-header">
                    <a id="q3" class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                        <i class="fa fa-plus-square"></i>&#160;&#160;Make your call
                    </a>
                </div>
                <div id="collapseThree" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        <ul>
                            <li>Stay calm and call Triple Zero from a safe place.</li>
                            <li>When your call is answered you will be asked if you need Police, Fire or Ambulance.</li>
                            <li>If requested by the operator, state your town and location.</li>
                            <li>When connected to the emergency service, stay on the line, speak clearly and answer the
                                questions.
                            </li>
                            <li>Don't hang up until the operator tells you to do so.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- question 4 -->
            <div class="card">
                <div class="card-header">
                    <a id="q4" class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                        <i class="fa fa-plus-square"></i>&#160;&#160;Providing location information
                    </a>
                </div>
                <div id="collapseFour" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        <ul>
                            <li>You will be asked where you are.</li>
                            <li>Try to provide street number, street name, nearest cross street and the area.</li>
                            <li>In rural areas give the full address and distances from landmarks and roads as well as
                                the property name.
                            </li>
                            <li>If calling from a mobile or satellite phone, the operator may ask you for other location
                                information.
                            </li>
                            <li>If you make a call while travelling, state the direction you are travelling and the last
                                motorway exit or town you passed.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <footer class="footer">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-speed="0.8"></div>
        <div class="footer_bar">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="footer_bar_content d-flex flex-sm-row flex-column align-items-lg-center align-items-start justify-content-start">
                            <nav class="footer_nav">
                                <ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                                    <li><a href="index.php">Home</a></li>
                                    <!--<li><a href="journeyPlanner.php">Beach Recommender</a></li>-->
                                    <li><a href="findBeach.php?id=1">Find Beach</a></li>
                                    <li><a href="learnToSwim.php?suburb=Melbourne+CBD">Learn to swim</a></li>
                                </ul>
                            </nav>
                            <div class="footer_links">
                                <ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                                    <li><a href="acknowledgment.php">ACKNOWLEDGMENT</a></li>
                                </ul>
                            </div>
                            <div class="footer_phone ml-lg-auto">
                                <a href="emergency.php">
                                    <i class="fa fa-phone" aria-hidden="true"></i>&#160;
                                    <span>Emergency call</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/services.js"></script>
<!-- js2 -->
<script src="js2/emergency.js"></script>
</body>
</html>