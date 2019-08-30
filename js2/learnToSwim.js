$(document).ready(function () {

    // set map
    function initMap(lat1, lng1, title1) {
        var myLatLng = {lat: lat1, lng: lng1};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: title1
        });
    }

    // User clicks "view map" button
    $(".btn_map").click(function () {
        var btn_val = $(this).val().split("+");
        var lat = parseFloat(btn_val[0]);
        var lng = parseFloat(btn_val[1]);
        var title = btn_val[2];
        initMap(lat, lng, title);
    });

    // fact slide up and down: when user clicks the title panel of facts, the content will slide up/down
    $("#fact_heading").click(function () {
        $("#fact").slideToggle("5000", function () {
            var icon = $("#fact_heading h2 i");
            if (icon.attr("class") === "fa fa-toggle-up") {
                icon.attr("class", "fa fa-toggle-down");
            } else {
                icon.attr("class", "fa fa-toggle-up");
            }
        });
    });

    /* end */

});
