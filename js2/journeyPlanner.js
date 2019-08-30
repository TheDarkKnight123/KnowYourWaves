$(document).ready(function () {

    /**
     * Start Quiz: when user clicks "start" button, this div disappears and 1st question appears
     */
    $("#btn_start_quiz").click(function () {
        $("#start_quiz").fadeOut('800', function () {
            $("#quiz").fadeIn('1000');
        });
    });

    /**
     * Quiz Content
     */
    // q1: when user clicks the radio button, following effects display
    $("input[type='radio'][name='q1']").click(function () {
        // renew progress bar
        $("#quiz_progress .progress .progress-bar").animate({width: "20%"}).text("20%");
        // display fact
        $("#quiz_q1 p").fadeIn();
        // change style of "next" button
        $("#q1_btn2").removeClass("disabled").css("cursor", "pointer");
    });

    // q1: when user clicks "next" button, q1 hides and q2 shows
    $("#q1_btn2").click(function () {
        if (!$("#q1_btn2").hasClass("disabled")) {
            $("#quiz_q1").hide();
            $("#quiz_q2").show();
        }
    });

    // q2: when user clicks the radio button, following effects display
    $("input[type='radio'][name='q2']").click(function () {
        // renew progress bar
        $("#quiz_progress .progress .progress-bar").animate({width: "40%"}).text("40%");
        // display fact
        $("#quiz_q2 p").fadeIn();
        // change style of "next" button
        $("#q2_btn2").removeClass("disabled").css("cursor", "pointer");
    });

    // q2: when user clicks "next" button, q2 hides and q3 shows
    $("#q2_btn2").click(function () {
        if (!$("#q2_btn2").hasClass("disabled")) {
            $("#quiz_q2").hide();
            $("#quiz_q3").show();
        }
    });

    // q2: when user clicks "previous" button, q2 hides and q1 shows
    $("#q2_btn1").click(function () {
        $("#quiz_q2").hide();
        $("#quiz_q1").show();
    });

    // q3: when user clicks the radio button, following effects display
    $("input[type='radio'][name='q3']").click(function () {
        // renew progress bar
        $("#quiz_progress .progress .progress-bar").animate({width: "60%"}).text("60%");
        // display fact
        $("#quiz_q3 p").fadeIn();
        // change style of "next" button
        $("#q3_btn2").removeClass("disabled").css("cursor", "pointer");
    });

    // q3: when user clicks "next" button, q3 hides and q4 shows
    $("#q3_btn2").click(function () {
        if (!$("#q3_btn2").hasClass("disabled")) {
            $("#quiz_q3").hide();
            $("#quiz_q4").show();
        }
    });

    // q3: when user clicks "previous" button, q3 hides and q2 shows
    $("#q3_btn1").click(function () {
        $("#quiz_q3").hide();
        $("#quiz_q2").show();
    });

    // q4: when user clicks the radio button, following effects display
    $("input[type='radio'][name='q4']").click(function () {
        // renew progress bar
        $("#quiz_progress .progress .progress-bar").animate({width: "80%"}).text("80%");
        // display fact
        $("#quiz_q4 p").fadeIn();
        // change style of "next" button
        $("#q4_btn2").removeClass("disabled").css("cursor", "pointer");
    });

    // q4: when user clicks "next" button, q4 hides and q5 shows
    $("#q4_btn2").click(function () {
        if (!$("#q4_btn2").hasClass("disabled")) {
            $("#quiz_q4").hide();
            $("#quiz_q5").show();
        }
    });

    // q2: when user clicks "previous" button, q4 hides and q5 shows
    $("#q4_btn1").click(function () {
        $("#quiz_q4").hide();
        $("#quiz_q3").show();
    });

    //q5: when user clicks the radio button, following effects display
    $("input[type='checkbox'][name='q5']").click(function () {
        // renew progress bar
        $("#quiz_progress .progress .progress-bar").animate({width: "100%"}).text("100%");
        // change style of "next" button
        $("#q5_btn2").removeClass("disabled").css("cursor", "pointer");

    });

    // q5: when user clicks "previous" button, q5 hides and q4 shows
    $("#q5_btn1").click(function () {
        $("#quiz_q5").hide();
        $("#quiz_q4").show();
    });

    // the user can at most select 2 activities
    $("input[type='checkbox'][name='q5']").click(function () {
        var numOfActivity = $("input[type='checkbox'][name='q5']:checked").length;
        if (numOfActivity === 2) {
            $("input[type='checkbox'][name='q5']:not(:checked)").each(function () {
                $(this).attr("disabled", "disabled");
            });
        } else {
            $("input[type='checkbox'][name='q5']:not(:checked)").each(function () {
                $(this).removeAttr("disabled");
            });
        }
    });

    // q5: when user clicks "view result" button, result displays
    $("#q5_btn2").click(function () {
        var selected_activity = [];
        $("input[type='checkbox'][name='q5']:checked").each(function () {
            var activity = $(this).val();
            selected_activity.push(activity);
        });
        if (selected_activity.length === 0) {
            alert("Please select at least on item!");
        } else {
            setResult(selected_activity);
            setResult2(result_set);
            setResult3();

            $("#quiz").fadeOut("fast", function () {
                $("#quiz_result").fadeIn("slow", function () {
                    $("#result_part1").fadeIn("slow", function () {
                        $("#result_part3").fadeIn("slow", function () {
                            $("#result_part2").fadeIn("slow");
                        });
                    });
                });
            });
        }
    });

    /**
     * Quiz Result
     */

        // set recommended beaches (no more than 2) and display
    var result_set = [];

    function setResult(activity_array) {
        result_set = [];
        var htmlString = "";
        var data1_array = $("#data1").val().split("|");
        for (index in data1_array) {
            var row = data1_array[index].split("+");
            for (index2 in activity_array) {
                if (row[1] === activity_array[index2]) {
                    var test = true;
                    for (index3 in result_set) {
                        if (row[0] === result_set[index3][0]) {
                            test = false;
                            break;
                        }
                    }
                    if (test) {
                        result_set.push(row);
                        break;
                    }
                }
            }
        }

        if (result_set.length > 3) {
            result_set = result_set.slice(0, 3);
        }
        for (index4 in result_set) {
            var beach = result_set[index4][0];
            var parameter = beach.split(" ").join("+");
            htmlString += "<tr><td><a href='findBeach.php?name="
                + parameter + "' target='_blank'>" + beach + "</a></td></tr>";
        }
        $("#result_part1 table").html(htmlString);
    }

    // set all activities of recommended beaches and display
    var result_set2 = [];

    function setResult2(beach_array) {
        result_set2 = [];
        var htmlString = "";
        var data2_array = $("#data2").val().split("|");
        for (index in data2_array) {
            var row = data2_array[index].split("+");

            for (index2 in beach_array) {
                if (row[0] === beach_array[index2][0]) {
                    var test = true;
                    for (index3 in result_set2) {
                        if (row[2] === result_set2[index3][2]) {
                            test = false;
                            break;
                        }
                    }
                    if (test) {
                        result_set2.push(row);
                        break;
                    }
                }
            }
        }
        for (index4 in result_set2) {
            htmlString += "<tr><td><img src='img/findBeach/activity/" + result_set2[index4][1] + ".png' alt='activity_icon' width='60'></td>";
            htmlString += "<td><b>" + result_set2[index4][2] + "</b></td>";
            htmlString += "<td>" + result_set2[index4][3] + "</td></tr>";
        }
        $("#result_part2 table tbody").html(htmlString);

    }

    // set safety measures based on answers to q1 to q4 and display
    function setResult3() {
        var answer1 = $("input[type='radio'][name='q1']:checked").val();
        var answer2 = $("input[type='radio'][name='q2']:checked").val();
        var answer4 = $("input[type='radio'][name='q4']:checked").val();

        var htmlString = "";
        var text = "";

        if (answer1.toLowerCase() === "yes") {
            text = "Please be aware that migrants and tourists account for a third of drownings in Australia. Please read the below safety instructions carefully.";
            htmlString += "<li>" + text + "</li>";
        }

        if (answer2.toLowerCase() === "no") {
            text = "Learn swimming in your favourite suburb. For more details visit <a href='learnToSwim.php' target='_blank'>learn to swim</a> page.";
            htmlString += "<li>" + text + "</li>";
        }

        if (answer4.toLowerCase() === "yes") {
            text = "At the beach, teach children to swim between the flags and always be within arm’s reach of them with all of your attention, all of the time.";
            htmlString += "<li>" + text + "</li>";
        }

        if (htmlString !== "") {
            $("#result_part3 h4").text("Safety Measures");
            $("#result_part3 ul").html(htmlString).css({
                "list-style": "disc",
                "color": "#5B5B5B",
                "font-size": "16px",
                "margin-left": "20px",
                "margin-right": "20px"
            });
        }
    }

    // redo quiz: when user clicks "redo" button, the page will refresh
    $("#btn_redo").click(function () {
        window.location.reload();
    });
});