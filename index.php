<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home | KYW</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/temp/logo_small.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <!-- Styles2 -->
    <link rel="stylesheet" type="text/css" href="styles2/index.css">
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
                <li class="menu_item"><a href="findBeach.php?id=1">Find beach</a></li>
                <li class="menu_item"><a href="learnToSwim.php?suburb=Melbourne+CBD">Learn to swim</a></li>
                <li class="menu_item"><a href="emergency.php">Emergency</a></li>
            </ul>
        </div>
    </div>

    <!-- Home -->

    <div class="home">
        <div class="background_image" style="background-image:url(img/index/bg2_index.jpg)"></div>

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
                                                    <li class="active"><a href="index.php">Home</a></li>
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
                            <div class="home_title">Know Your Waves<br>Swim In Peace</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Info Boxes -->

    <div class="info">
        <div class="container">
            <div class="row row-eq-height">

                <!-- Info Box 1 -->
                <!--<div class="col-lg-4 info_box_col">
                    <div class="info_box">
                        <div class="info_image"><img src="img/index/journey1.png" alt="info_box"></div>
                        <div class="info_content">
                            <div class="info_title">Beach Recommender</div>
                            <div class="info_text">
                                Interested to do swimming, rock fishing, surfing, snorkeling, watersports, etc.? But
                                don’t know which is the safest beach to visit? With KnowYourWaves it’s simple.
                            </div>
                            <div class="button info_button"><a
                                        href="journeyPlanner.php"><span>Plan</span><span>Plan</span></a>
                            </div>
                        </div>
                    </div>
                </div>-->

                <!-- Info Box 2 -->
                <div class="col-lg-6 info_box_col">
                    <div class="info_box">
                        <div class="info_image"><img src="img/index/beach1.jpg" alt="info_box"></div>
                        <div class="info_content">
                            <div class="info_title">Find Beach</div>
                            <div class="info_text">
                                Want to visit your favorite beach? KnowYourWaves provide you the weather forecasts,
                                warnings signs, safety information and much more.
                            </div>
                            <div class="button info_button"><a
                                        href="findBeach.php?id=1"><span>Learn More</span><span>Learn More</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Info Box 3 -->
                <div class="col-lg-6 info_box_col">
                    <div class="info_box">
                        <div class="info_image"><img src="img/index/pool1.png" alt="info_box"></div>
                        <div class="info_content">
                            <div class="info_title">Learn to Swim</div>
                            <div class="info_text">
                                Want to learn swimming in your favorite suburb? KnowYourWaves provide you with the
                                swimming pools information across a number of suburbs.
                            </div>
                            <div class="button info_button"><a
                                        href="learnToSwim.php?suburb=Melbourne+CBD"><span>Learn More</span><span>Learn More</span></a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- Drowning data -->
    <div class="milestones">
        <h2 class="text-center">249 People Drowned in Australian Waterways in 2018</h2>
        <div class="container">
            <div class="row row-eq-height text-center">
                <div class="milestone col-md-3 col-sm-6">
                    <img class="milestone_icon img-fluid" src="img/index/student.png" alt="student">
                    <span class="milestone_counter" data-end-value="500" data-sign-after="k">0</span>
                    <p class="milestone_text">Number of international students that came to Australia in 2018</p>
                </div>
                <div class="milestone col-md-3 col-sm-6">
                    <img class="milestone_icon img-fluid" src="img/index/student_percent.png" alt="student_percent">
                    <span class="milestone_counter" data-end-value="8" data-sign-after="%">0</span>
                    <p class="milestone_text">Drowning rate among international students</p>
                </div>
                <div class="milestone col-md-3 col-sm-6">
                    <img class="milestone_icon img-fluid" src="img/index/tourist.png" alt="tourist">
                    <span class="milestone_counter" data-end-value="910" data-sign-after="k">0</span>
                    <p class="milestone_text">Number of international tourists that came to Australia in 2018</p>
                </div>
                <div class="milestone col-md-3 col-sm-6">
                    <img class="milestone_icon img-fluid" src="img/index/tourist_percent.png" alt="tourist_percent">
                    <span class="milestone_counter" data-end-value="23" data-sign-after="%">0</span>
                    <p class="milestone_text">Drowning rate among overseas tourists</p>
                </div>
            </div>
        </div>
        <p class="text-center"><b>Source: </b>Royal life saving Victoria</p>
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
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>