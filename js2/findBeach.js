$(document).ready(function () {

    // focus & blur
    var search_bar = $("#beach_keyword");
    search_bar.focus(function () {
        search_bar.css('background-color', '#FFFFCC');
    });
    search_bar.blur(function () {
        search_bar.css('background-color', '#FCFCFC');
    });

    // set map
    initMap();
    function initMap() {
        var map_lat = parseFloat($("#map_lat").val());
        var map_lng = parseFloat($("#map_lng").val());
        var map_title = $("#map_title").val();
        var myLatLng = {lat: map_lat, lng: map_lng};
        var map = new google.maps.Map(document.getElementById('beach_map'), {
            zoom: 12,
            center: myLatLng
        });
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: map_title
        });
    }

    // change chart
    $("#btn_today").click(function () {
        $("#tmr_chart").hide();
        $("#future_chart").hide();
        $("#today_chart").show();

        $("#btn_today").attr("class", "btn btn-primary");
        $("#btn_tmr").attr("class", "btn");
        $("#btn_future").attr("class", "btn");
    });

    $("#btn_tmr").click(function () {
        $("#today_chart").hide();
        $("#future_chart").hide();
        $("#tmr_chart").show();

        $("#btn_today").attr("class", "btn");
        $("#btn_tmr").attr("class", "btn btn-primary");
        $("#btn_future").attr("class", "btn");
    });

    $("#btn_future").click(function () {
        $("#today_chart").hide();
        $("#tmr_chart").hide();
        $("#future_chart").show();

        $("#btn_today").attr("class", "btn");
        $("#btn_tmr").attr("class", "btn");
        $("#btn_future").attr("class", "btn btn-primary");
    });

    // set current Weather
    setCurrentWeather();
    function setCurrentWeather() {
        var lat = $("#map_lat").val();
        var lng = $("#map_lng").val();
        var current_weather_json = new XMLHttpRequest();
        var url = "http://api.openweathermap.org/data/2.5/weather?lat=" + lat + "&lon=" + lng
            + "&appid=ad4407e24f4a4842d8daea5cb69f2dfd";
        current_weather_json.open("GET", url, false);
        current_weather_json.send(null);
        var current_weather_info = JSON.parse(current_weather_json.response);

        var icon = current_weather_info.weather[0].icon;
        var iconUrl = "http://openweathermap.org/img/w/" + icon + ".png";
        var temp = current_weather_info.main.temp;
        var high = current_weather_info.main.temp_max;
        var low = current_weather_info.main.temp_min;
        temp = convertTemp(temp);
        high = convertTemp(high);
        low = convertTemp(low);

        var wind = current_weather_info.wind.speed;
        var humidity = current_weather_info.main.humidity;
        var sunrise = current_weather_info.sys.sunrise;
        var sunset = current_weather_info.sys.sunset;
        var time1 = getFormatTime(new Date(sunrise * 1000));
        var time2 = getFormatTime(new Date(sunset * 1000));
        var htmlString = "<img src='" + iconUrl + "' alt='' width='100'>";
        $("#cu_icon").html(htmlString);
        $("#cu_temp").text(temp + "°C");
        $("#cu_wind").text("Wind speed: " + wind + " km/h");
        $("#cu_high").text("High: " + high + "°C");
        $("#cu_sunrise").text("Sunrise: " + time1);
        $("#cu_humidity").text("Humidity: " + humidity + "%");
        $("#cu_low").text("Low: " + low + "°C");
        $("#cu_sunset").text("Sunset: " + time2);
        // update time
        var myDate = new Date();
        var mytime = myDate.toLocaleTimeString();     //获取当前时间
        $("#update_time").text("(updated at " + mytime + ")");
    }

    // set hourly weather
    setHourlyWeather();
    function setHourlyWeather() {
        var lat = $("#map_lat").val();
        var lng = $("#map_lng").val();
        var weather_json = new XMLHttpRequest();
        var url = "http://api.openweathermap.org/data/2.5/forecast?lat=" + lat + "&lon=" + lng
            + "&appid=ad4407e24f4a4842d8daea5cb69f2dfd";
        weather_json.open("GET", url, false);
        weather_json.send(null);
        var weather_info = JSON.parse(weather_json.response);
        getTodayWeather(weather_info);
        getTmrWeather(weather_info);
        getFutureWeather(weather_info);
        $("#today_chart").show();
        $("#tmr_chart").hide();
        $("#future_chart").hide();
        $("#btn_today").attr("class", "btn btn-primary");
        $("#btn_tmr").attr("class", "btn");
        $("#btn_future").attr("class", "btn");
    }

    // set today weather
    function getTodayWeather(weather_info) {
        // today temp
        var today_date = getFormatDate(0);
        var i = 0;
        var hourArray = [];
        var iconArray = [];
        var tempArray = [];
        var htmlString = "<tr>";
        var windArray = [];
        for (i = 0; i < 39; i++) {
            var dt = weather_info.list[i].dt_txt;
            if (dt.indexOf(today_date) !== -1) {
                // hour
                var hour = dt.split(" ")[1].substring(0, 5);
                hourArray.push(hour);
                // icon
                var icon = weather_info.list[i].weather[0].icon;
                if (hour > "06:00" && hour < "18:00") {
                    icon = icon.replace('n','d');
                } else {
                    icon = icon.replace('d','n');
                }
                var iconUrl = "http://openweathermap.org/img/w/" + icon + ".png";
                iconArray.push(iconUrl);
                // temp
                var temp = weather_info.list[i].main.temp;
                temp = convertTemp(temp);
                tempArray.push(temp);
                // wind
                var wind = weather_info.list[i].wind.speed;
                windArray.push(wind);
            }
        }

        for (i = 0; i < iconArray.length; i++) {
            htmlString += "<td><img class='img-fluid' src='" + iconArray[i] + "' alt='' height='75px'></td>";
        }
        htmlString += "</tr><tr>";
        for (i = 0; i < hourArray.length; i++) {
            htmlString += "<td>" + hourArray[i] + "</td>";
        }
        htmlString += "</tr><tr>";
        for (i = 0; i < tempArray.length; i++) {
            htmlString += "<td><b>" + tempArray[i] + "°C</b></td>";
        }
        htmlString += "</tr>";
        $("#today_temp").html(htmlString);

        // today wind
        var chart_id = "today_wind";
        var legend = "Wind Speed (km/h)";
        generateChart(chart_id, legend, hourArray, windArray);
    }
    // tomorrow weather
    function getTmrWeather(weather_info) {

        var tmr_date = getFormatDate(1);
        // tmr temp
        var i = 0;
        var hourArray = [];
        var iconArray = [];
        var tempArray = [];
        var htmlString = "<tr>";
        var windArray = [];

        for (i = 0; i < 39; i++) {
            var dt = weather_info.list[i].dt_txt;
            if (dt.indexOf(tmr_date) !== -1) {
                // hour
                var hour = dt.split(" ")[1].substring(0, 5);
                hourArray.push(hour);
                // icon
                var icon = weather_info.list[i].weather[0].icon;
                if (hour > "06:00" && hour < "18:00") {
                    icon = icon.replace('n','d');
                } else {
                    icon = icon.replace('d','n');
                }
                var iconUrl = "http://openweathermap.org/img/w/" + icon + ".png";
                iconArray.push(iconUrl);
                // temp
                var temp = weather_info.list[i].main.temp;
                temp = convertTemp(temp);
                tempArray.push(temp);
                // wind
                var wind = weather_info.list[i].wind.speed;
                windArray.push(wind);
            }
        }
        for (i = 0; i < iconArray.length; i++) {
            htmlString += "<td><img class='img-fluid' src='" + iconArray[i] + "' alt='' height='75px'></td>";
        }
        htmlString += "</tr><tr>";
        for (i = 0; i < hourArray.length; i++) {
            htmlString += "<td>" + hourArray[i] + "</td>";
        }
        htmlString += "</tr><tr>";
        for (i = 0; i < tempArray.length; i++) {
            htmlString += "<td><b>" + tempArray[i] + "°C</b></td>";
        }
        htmlString += "</tr>";
        $("#tmr_temp").html(htmlString);


        // tmr wind
        var chart_id = "tmr_wind";
        var legend = "Wind Speed (km/h)";
        generateChart(chart_id, legend, hourArray, windArray);
    }
    // future weather
    function getFutureWeather(weather_info) {
        // future temp
        var i = 0;
        var dateArray = [];
        for (i = 0; i < 5; i++) {
            var date = getFormatDate(i);
            dateArray.push(date);
        }

        // start: choose a time in the middle
        var today_date = getFormatDate(0);
        var x = 0;
        for (i = 0; i < 39; i++) {
            var dt = weather_info.list[i].dt_txt;
            if (dt.indexOf(today_date) !== -1) {
                var time = dt.split(" ")[1].substring(0, 5);
                if (time >= "09:00" && time <= "15:00") {
                    x = i;
                    break;
                }
            }
        }
        // end: choose a time in the middle

        var iconArray = [];
        var tempArray = [];
        var htmlString = "<tr>";
        for (i = 0; i < 5; i++) {
            var icon = weather_info.list[8 * i + x].weather[0].icon;
            var dt = weather_info.list[8 * i + x].dt_txt.split(" ")[1];
            if (dt > "06:00:00" && dt < "18:00:00") {
                icon = icon.replace('n', 'd');
            } else {
                icon = icon.replace('d', 'n');
            }
            var iconUrl = "http://openweathermap.org/img/w/" + icon + ".png";
            iconArray.push(iconUrl);
            var temp = weather_info.list[8 * i + x].main.temp;
            temp = convertTemp(temp);
            tempArray.push(temp);
        }
        for (i = 0; i < iconArray.length; i++) {
            htmlString += "<td><img class='img-fluid' src='" + iconArray[i] + "' alt='' height='75px'></td>";
        }
        htmlString += "</tr><tr>";
        for (i = 0; i < dateArray.length; i++) {
            htmlString += "<td>" + dateArray[i] + "</td>";
        }
        htmlString += "</tr><tr>";
        for (i = 0; i < tempArray.length; i++) {
            htmlString += "<td><b>" + tempArray[i] + "°C</b></td>";
        }
        htmlString += "</tr>";
        $("#future_temp").html(htmlString);


        // future wind
        var chart_id = "future_wind";
        var windArray = [];
        for (i = 0; i < 5; i++) {
            var wind = weather_info.list[4 + 8 * i].wind.speed;
            windArray.push(wind);
        }
        var legend = "Wind Speed (km/h)";
        generateChart(chart_id, legend, dateArray, windArray);
    }

    // convert the temperature
    function convertTemp(k) {
        var c = k - 273.15;
        c = c.toFixed(1);
        return c;
    }

    // get date
    function getFormatDate(n) {
        var date = new Date();
        date = new Date(date.getTime() + 24 * 60 * 60 * 1000 * n);
        var seperator1 = "-";
        var year = date.getFullYear();
        var month = date.getMonth() + 1;
        var strDate = date.getDate();
        if (month >= 1 && month <= 9) {
            month = "0" + month;
        }
        if (strDate >= 0 && strDate <= 9) {
            strDate = "0" + strDate;
        }
        var dateString = year + seperator1 + month + seperator1 + strDate;
        return dateString;
    }

    // get time
    function getFormatTime(date) {
        var seperator1 = ":";
        var hour = date.getHours();
        var min = date.getMinutes();
        var endWith = "am";
        if (hour > 12) {
            hour -= 12;
            endWith = "pm";
        }
        if (min >= 0 && min <= 9) {
            min = "0" + min;
        }
        var dateString = hour + seperator1 + min + endWith;
        return dateString;
    }

    // get chart
    function generateChart(id, legend, arr1, arr2) {
        var ctx = document.getElementById(id);
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: arr1,
                datasets: [{
                    label: legend,
                    data: arr2,
                    backgroundColor: [
                        '#32c69a'
                    ],
                    borderColor: [
                        '#006030'
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    }

    /* end */

    // Animation
    $("#a1").addClass("animation_box_border");

    $("#a1").hover(function () {
        $("#a1").addClass("animation_box_border");
        $("#a2").removeClass("animation_box_border");
        $("#a3").removeClass("animation_box_border");
        $("#a4").removeClass("animation_box_border");
        $("#a5").removeClass("animation_box_border");
        $("#a6").removeClass("animation_box_border");
    });

    $("#a2").hover(function () {
        $("#a1").removeClass("animation_box_border");
        $("#a2").addClass("animation_box_border");
        $("#a3").removeClass("animation_box_border");
        $("#a4").removeClass("animation_box_border");
        $("#a5").removeClass("animation_box_border");
        $("#a6").removeClass("animation_box_border");
    });

    $("#a3").hover(function () {
        $("#a1").removeClass("animation_box_border");
        $("#a2").removeClass("animation_box_border");
        $("#a3").addClass("animation_box_border");
        $("#a4").removeClass("animation_box_border");
        $("#a5").removeClass("animation_box_border");
        $("#a6").removeClass("animation_box_border");
    });

    $("#a4").hover(function () {
        $("#a1").removeClass("animation_box_border");
        $("#a2").removeClass("animation_box_border");
        $("#a3").removeClass("animation_box_border");
        $("#a4").addClass("animation_box_border");
        $("#a5").removeClass("animation_box_border");
        $("#a6").removeClass("animation_box_border");
    });

    $("#a5").hover(function () {
        $("#a1").removeClass("animation_box_border");
        $("#a2").removeClass("animation_box_border");
        $("#a3").removeClass("animation_box_border");
        $("#a4").removeClass("animation_box_border");
        $("#a5").addClass("animation_box_border");
        $("#a6").removeClass("animation_box_border");
    });

    $("#a6").hover(function () {
        $("#a1").removeClass("animation_box_border");
        $("#a2").removeClass("animation_box_border");
        $("#a3").removeClass("animation_box_border");
        $("#a4").removeClass("animation_box_border");
        $("#a5").removeClass("animation_box_border");
        $("#a6").addClass("animation_box_border");
    });

});