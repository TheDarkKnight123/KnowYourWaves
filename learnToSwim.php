<?php include "inc/dbinfo.inc"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Learn to Swim | KYW</title>
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
    <link rel="stylesheet" type="text/css" href="styles2/learnToSwim.css">
    <!-- Google Translate API -->
    <script type="text/javascript"
            src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
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
        <div class="parallax_background parallax-window" data-parallax="scroll"
             data-image-src="img/learnToSwim/bg_pool.png"
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
                                                    <li class="active"><a href="learnToSwim.php?suburb=Melbourne+CBD">Learn
                                                            to swim</a></li>
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
                            <div class="home_title">Learn to Swim</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pool -->

    <div id="pool" class="container">

        <!-- search pool bar -->
        <div id="pool_search" class="row row-eq-height text-center">
            <div class="col-lg-6 col-md-6 col-sm-8 mx-auto">
                <form role="form" action="learnToSwim.php" method="get">
                    <label for="pool_keyword">Please Select a Suburb</label>&#160;
                    <select id="pool_keyword" class="form-control" name="suburb">
                        <?php

                        $suburb_list = getDataArray("select distinct suburb, postcode from pool order by postcode");

                        foreach ($suburb_list as $suburb) {
                            ?>
                            <option <?php if ($suburb[0] == $_GET['suburb']) {
                                echo "selected='selected'";
                            } ?> value="<?php echo $suburb[0]; ?>">
                                <?php echo $suburb[0] . " - " . $suburb[1]; ?>
                            </option>
                            <?php
                        }
                        ?>
                    </select>
                    <button id="btn_search_pool" class="btn btn-primary btn-block" type="submit">Search</button>
                </form>
            </div>
        </div>

        <?php
        $default_suburb = $_GET['suburb'] ? $_GET['suburb'] : 'Melbourne CBD';
        $pool_list = getDataArray("select * from pool where suburb = '" . $default_suburb . "'");
        ?>

        <!-- pool result -->
        <div id="pool_result" class="row row-eq-height text-justify">
            <div class="col">
                <h3>Swimming Centres in <?php echo $default_suburb; ?></h3>
                <div>
                    <table class="table table-hover table-bordered table-responsive-lg">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Pool Name</th>
                            <th>Address</th>
                            <th>Map</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        for ($i = 0; $i < count($pool_list); $i++) {
                            ?>

                            <tr>
                                <td><?php echo($i + 1); ?></td>
                                <td><?php echo $pool_list[$i][1]; ?></td>
                                <td><?php echo $pool_list[$i][2]; ?></td>
                                <td>
                                    <button class="btn btn-primary btn_map"
                                            value="<?php echo $pool_list[$i][6] . '+' . $pool_list[$i][7] . '+' . $pool_list[$i][1]; ?>">
                                        View Map
                                    </button>
                                </td>
                            </tr>

                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>


        <div id="pool_map" class="row">
            <div class="col">
                <h3>Map</h3>
                <div id="map"></div>
            </div>
        </div>


        <script>
            var map;

            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: -37.813629, lng: 144.963058},
                    zoom: 10
                });
            }
        </script>

    </div>

    <!-- Fact -->
    <div id="fact_heading" class="container text-center">
        <!-- heading 1 -->
        <h2>Drowning is deadly, but it is preventable&#160;&#160;<i class="fa fa-toggle-up"></i></h2>
    </div>
    <div id="fact" class="container">
        <!-- fact 1 -->
        <div id="fact_1" class="row row-eq-height text-justify">
            <div class="col-md-8 fact_box">
                <h3>What to do when you see someone drowning?</h3>
                <ul>
                    <li>
                        If you see someone drowning, do not jump in to save lives unless you know swimming. You have
                        just multiplied your chances of drowning by many times.
                    </li>
                    <li>
                        Do you know? there are just half many drowning deaths of people who actually tried to save
                        someone drowning. If unsure of your drowning skills, let someone else help.
                    </li>
                    <li>
                        Call for help and do CPR immediately until the help is arrived.
                    </li>
                </ul>
            </div>
            <div class="col-md-4 img_box">
                <img class="rounded img-fluid" src="img/learnToSwim/fact1.png" alt="fact1">
            </div>
        </div>

        <!-- fact 2 -->
        <div id="fact_2" class="row row-eq-height text-justify">
            <div class="col-md-8 fact_box">
                <h3>Children are most susceptible for drowning</h3>
                <ul>
                    <li>
                        Do you know ? It only takes less than 2 inches of water level for your new born to drown.
                    </li>
                    <li>
                        Always watch your children around water ways, let someone be responsible by watching them over
                        all the time.
                    </li>
                    <li>
                        Keep children away from pool drains, pipes, and other openings to avoid entrapments.
                    </li>
                </ul>
            </div>
            <div class="col-md-4 img_box">
                <img class="rounded img-fluid" src="img/learnToSwim/fact2.png" alt="fact2">
            </div>
        </div>

        <!-- fact 3: CPR -->
        <div id="fact_3" class="row row-eq-height">
            <div class="col-md-12 fact_box">
                <h3>Do you know how to perform a CPR?</h3>
                <ul>
                    <li>
                        It’s not easy and if you are not trained you might hurt his/her chances of living.
                    </li>
                    <li>
                        Learn to perform CPR, it’s not easy but definitely not difficult.
                    </li>
                    <li>
                        This chart outlines simples steps to perform CPR.
                    </li>
                </ul>

            </div>
            <div class="col-md-12 img_box">
                <img class="rounded img-fluid" src="img/learnToSwim/cpr.png" alt="fact3_cpr">
            </div>
        </div>

        <!-- heading 2-->
        <h3 class="fact_footer text-center"><i>Teach your loved ones how to swim, its a lifeskill</i>&#160;<i
                    class="fa fa-heart"></i></h3>
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
<script src="js2/learnToSwim.js"></script>
<!-- Google Map API -->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDz99-I8kOYcHYscV8IC8TWX4poQe7Rtqo&callback=initMap">
</script>

</body>
</html>