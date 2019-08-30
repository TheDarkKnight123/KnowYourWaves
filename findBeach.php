<?php include "inc/dbinfo.inc"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Find Beach | KYW</title>
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
    <link rel="stylesheet" type="text/css" href="styles2/findBeach.css">

    <!-- JS -->
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

    <!-- Google Map API -->
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDz99-I8kOYcHYscV8IC8TWX4poQe7Rtqo&callback=initMap">
    </script>

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
    <!-- Chart.js -->
    <script src="js2/chart.js"></script>
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
        <div class="parallax_background parallax-window" data-parallax="scroll"
             data-image-src="img/findBeach/bg_beach1.png"
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
                                                    <li class="active"><a href="findBeach.php">Find beach</a></li>
                                                    <li><a href="learnToSwim.php?suburb=Melbourne+CBD">Learn to swim</a>
                                                    </li>
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
                            <div class="home_title">Find Beach</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Search form -->
    <div id="search_form" class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 mx-auto text-center">
                <form role="form" action="findBeach.php" method="get">
                    <label for="beach_keyword">Please Select a Beach:</label>&#160;
                    <select id="beach_keyword" class="form-control" name="id">
                        <?php
                        $beachList = getDataArray("select * from beach");
                        foreach ($beachList as $beach) {
                            ?>
                            <option <?php if ($beach[0] == $_GET['id']) {
                                echo "selected='selected'";
                            } ?> value="<?php echo $beach[0]; ?>">
                                <?php echo $beach[1]; ?>
                            </option>
                            <?php
                        }
                        ?>
                    </select>
                    <button id="btn_search_beach" type="submit" class="btn btn-primary btn-block">Search</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Search result -->

    <?php
    $beachId = $_GET['id'] ? $_GET['id'] : '1';
    $selectedBeach = getDataArray("select * from beach where id = " . $beachId);
    ?>

    <input id="map_lat" type="text" style="display: none" value="<?php echo $selectedBeach[0][5]; ?>">
    <input id="map_lng" type="text" style="display: none" value="<?php echo $selectedBeach[0][6]; ?>">
    <input id="map_title" type="text" style="display: none" value="<?php echo $selectedBeach[0][1]; ?>">

    <div id="search_result" class="container">
        <h2 class="text-center" id="beach_name"><?php echo $selectedBeach[0][1]; ?></h2>
        <div class="row row-eq-height text-justify">
            <!-- Part 1: Weather  -->
            <div class="col-md-12">
                <h3>Weather
                    <small id="update_time"></small>
                </h3>

                <!-- button group -->
                <div class="btn-group" id="change_buttons">
                    <button id="btn_today" type="button" class="btn btn-primary">Today</button>
                    <button id="btn_tmr" type="button" class="btn">Tomorrow</button>
                    <button id="btn_future" type="button" class="btn">Next 5 Days</button>
                </div>

                <div id="today_chart" class="row">
                    <div id="cu_icon" class="col-md-3 col-sm-6 text-center"></div>
                    <div id="cu_temp" class="col-md-3 col-sm-6 text-center"></div>
                    <div class="col-md-6 col-sm-12">
                        <table id="current_weather" class="text-justify table table-bordered table-responsive-sm">
                            <tr>
                                <td id="cu_wind"></td>
                                <td id="cu_high"></td>
                                <td id="cu_sunrise"></td>
                            </tr>
                            <tr>
                                <td id="cu_humidity"></td>
                                <td id="cu_low"></td>
                                <td id="cu_sunset"></td>
                            </tr>
                        </table>
                    </div>
                    <table id="today_temp"
                           class="temp_box text-center table table-bordered table-responsive-sm"></table>
                    <canvas id="today_wind" height="100px"></canvas>
                </div>

                <div id="tmr_chart">
                    <table id="tmr_temp"
                           class="temp_box text-center table table-bordered table-responsive-sm"></table>
                    <canvas id="tmr_wind" height="100px"></canvas>
                </div>

                <div id="future_chart">
                    <table id="future_temp"
                           class="temp_box text-center table table-bordered table-responsive-sm"></table>
                    <canvas id="future_wind" height="100px"></canvas>
                </div>
            </div>

            <!-- Parr 2: Map -->
            <div id="map_box" class="col-md-12">
                <h3>Map</h3>
                <div id="beach_map"></div>
            </div>

        </div>
        <div class="row row-eq-height text-justify">

            <!-- Part 4: Activities -->
            <div class="col-md-12">
                <h3>Activities</h3>
                <p><i>You may have an opportunity to experience these activities</i></p>
                <table id="activity" class="table table-bordered table-responsive-lg">
                    <tr>
                        <?php
                        $activityList = getDataArray("select a.id, a.activity_name from activity a, beach_activity_bridge b where a.id = b.activity_id and b.beach_id = " . $beachId);
                        foreach ($activityList as $activity) {
                            ?>
                            <td>
                                <img width="80" class="img-fluid"
                                     src="img/findBeach/activity/<?php echo $activity[0]; ?>.png"
                                     alt="<?php echo $activity[1]; ?>">
                                &#160;<span><?php echo $activity[1]; ?></span>
                            </td>
                            <?php
                        }
                        ?>
                    </tr>
                </table>
            </div>

            <!-- Part 3: Warning signs -->
            <div class="col-md-12">
                <h3>Warning signs</h3>
                <p><i>For your safety, please pay attention to following signs</i></p>
                <table id="warning" class="table table-bordered table-responsive-lg">
                    <tr>
                        <?php
                        $warningList = getDataArray("select w.id, w.warning_name from warning_sign w, beach_warning_bridge b where w.id = b.warning_id and b.beach_id = " . $beachId);
                        foreach ($warningList as $warning_sign) {
                            ?>
                            <td>
                                <img width="160" class="img-fluid"
                                     src="img/findBeach/warning/<?php echo $warning_sign[0]; ?>.jpg"
                                     alt="<?php echo $warning_sign[1]; ?>">
                            </td>
                            <?php
                        }
                        ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <!-- Animation -->
    <div id="animation" class="container">
        <div id="animation_title" class="text-center">
            <h2>Safety Measures</h2>
        </div>
        <div class="row row-eq-height text-justify">

            <!-- a1 -->

            <div id="a1" class="col-md-4 col-sm-6 animation_box" data-toggle="modal" data-target="#myModal1">
                <img class="img-fluid rounded animation_screen" src="img/findBeach/animation/fishing.png"
                     alt="animation">
                <img class="animation_icon" src="img/findBeach/icons/fishing.png" alt="icon" height="50">
                &#160;<span class="animation_title">Rock Fishing</span>
                <p class="animation_text">
                    Rock fishing is a popular pastime in Australia and New Zealand. But do you know its fatal if you
                    don’t take proper care?
                </p>
            </div>

            <!-- a2 -->

            <div id="a2" class="col-md-4 col-sm-6 animation_box" data-toggle="modal" data-target="#myModal2">
                <img class="img-fluid rounded animation_screen" src="img/findBeach/animation/currents.png"
                     alt="animation">
                <img class="animation_icon" src="img/findBeach/icons/currents.png" alt="icon" height="50">
                &#160;<span class="animation_title">Rip Currents</span>
                <p class="animation_text">
                    Often simply called a rip, or by the misnomer rip tide, is a specific kind of water current which
                    can occur near beaches with breaking waves.
                </p>
            </div>

            <!-- a3 -->

            <div id="a3" class="col-md-4 col-sm-6 animation_box" data-toggle="modal" data-target="#myModal3">
                <img class="img-fluid rounded animation_screen" src="img/findBeach/animation/sunburn.png"
                     alt="animation">
                <img class="animation_icon" src="img/findBeach/icons/sunburn.png" alt="icon" height="50">
                &#160;<span class="animation_title">Sunburn</span>
                <p class="animation_text">
                    A form of radiation burn that affects living tissue, such as skin, that results from an overexposure
                    to ultraviolet radiation from the sun.
                </p>
            </div>

            <!-- a4 -->

            <div id="a4" class="col-md-4 col-sm-6 animation_box" data-toggle="modal" data-target="#myModal4">
                <img class="img-fluid rounded animation_screen" src="img/findBeach/animation/heat.png" alt="animation">
                <img class="animation_icon" src="img/findBeach/icons/heat.png" alt="icon" height="50">
                &#160;<span class="animation_title">Heat Exhaustion</span>
                <p class="animation_text">
                    A condition characterized by heavy sweating and a rapid pulse, a result of your body overheating.
                </p>
            </div>

            <!-- a5 -->

            <div id="a5" class="col-md-4 col-sm-6 animation_box" data-toggle="modal" data-target="#myModal5">
                <img class="img-fluid rounded animation_screen" src="img/findBeach/animation/noAlcohol.png"
                     alt="animation">
                <img class="animation_icon" src="img/findBeach/icons/noAlcohol.png" alt="icon" height="50">
                &#160;<span class="animation_title">No Alcohol</span>
                <p class="animation_text">
                    Alcohol can impair your senses, alter your sense of distance, and make you feel disoriented.
                </p>
            </div>

            <!-- a6 -->

            <div id="a6" class="col-md-4 col-sm-6 animation_box" data-toggle="modal" data-target="#myModal6">
                <img class="img-fluid animation_screen" src="img/findBeach/animation/jellyfish.png" alt="animation">
                <img class="animation_icon" src="img/findBeach/icons/jellyfish.png" alt="icon" height="50">
                &#160;<span class="animation_title">Jellyfish Sting</span>
                <p class="animation_text">
                    Jellyfish stings vary greatly in severity. Most often they result in immediate pain and red,
                    irritated marks on the skin.
                </p>
            </div>

            <!-- animation end -->

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
                                    <li><a href="findBeach.php">Find Beach</a></li>
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


    <!-- Modals -->

    <div id="animation_modal">

        <!-- Modal_1 -->

        <div class="modal fade" id="myModal1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!-- modal head -->
                    <div class="modal-header">
                        <h3 class="modal-title">Rock Fishing</h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- modal body -->
                    <div class="modal-body">
                        <iframe width="100%" height="350" src="https://www.youtube.com/embed/NzeYEVrBLTA"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        <ul>
                            <li>Not Planned - Very fatal</li>
                            <li>Check weather and tell others</li>
                            <li>Fish in group</li>
                            <li>Wear a life jacket and footwear</li>
                        </ul>
                    </div>
                    <!-- modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal_2 -->

        <div class="modal fade" id="myModal2">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!-- modal head -->
                    <div class="modal-header">
                        <h3 class="modal-title">Rip Currents</h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- modal body -->
                    <div class="modal-body">
                        <iframe width="100%" height="350" src="https://www.youtube.com/embed/pnq1hSOtJnA"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        <ul>
                            <li>Do not swim in deeper and darker water</li>
                            <li>Caught in rip? Stay calm and raise arm for attention</li>
                            <li>Swim parallel to rip</li>
                            <li>Rips can return you to shore</li>
                        </ul>
                    </div>
                    <!-- modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal_3 -->

        <div class="modal fade" id="myModal3">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!-- modal head -->
                    <div class="modal-header">
                        <h3 class="modal-title">Sunburn</h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- modal body -->
                    <div class="modal-body">
                        <iframe width="100%" height="350" src="https://www.youtube.com/embed/drfBGwnc0KE"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        <ul>
                            <li>Apply sunscreen every 1 hour</li>
                            <li>Got sunburn? Drink lots of fluids</li>
                        </ul>
                    </div>
                    <!-- modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal_4 -->

        <div class="modal fade" id="myModal4">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!-- modal head -->
                    <div class="modal-header">
                        <h3 class="modal-title">Heat Exhaustion</h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- modal body -->
                    <div class="modal-body">
                        <iframe width="100%" height="350" src="https://www.youtube.com/embed/cC321_alg6g"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        <ul>
                            <li>Lots of physical activity causes weakness and nausea</li>
                            <li>Rehydrate</li>
                            <li>Move to cooler environment</li>
                        </ul>
                    </div>
                    <!-- modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal_5 -->

        <div class="modal fade" id="myModal5">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!-- modal head -->
                    <div class="modal-header">
                        <h3 class="modal-title">No Alcohol</h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- modal body -->
                    <div class="modal-body">
                        <iframe width="100%" height="350" src="https://www.youtube.com/embed/f0dqCdsdfsI"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        <ul>
                            <li>Don’t swim after a meal</li>
                            <li>Don’t swim after consuming alcohol</li>
                            <li>Police will impose fines</li>
                        </ul>
                    </div>
                    <!-- modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal_6 -->

        <div class="modal fade" id="myModal6">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!-- modal head -->
                    <div class="modal-header">
                        <h3 class="modal-title">Jellyfish Sting</h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- modal body -->
                    <div class="modal-body">
                        <iframe width="100%" height="350" src="https://www.youtube.com/embed/LaWbBIvONFo"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        <ul>
                            <li>Sting? Wash off tentacles with water</li>
                            <li>Put affected are in hot water for 20 minutes</li>
                            <li>A cold ice pack is effective too</li>
                            <li>Don’t rub sand</li>
                            <li>Don’t urinate on sting or pour soft drinks</li>
                        </ul>
                    </div>
                    <!-- modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- js2 -->
<script src="js2/findBeach.js"></script>
</body>
</html>