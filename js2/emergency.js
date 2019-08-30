$(document).ready(function () {

    var icon = "";
    // q1: when user clicks 1st question panel,
    // its content will slide up/down and its icon will change
    $("#q1").click(function () {
        // change icon
        icon = $("#q1 i").attr("class");
        if (icon == "fa fa-plus-square") {
            $("#q1 i").attr("class", "fa fa-minus-square");
        } else {
            $("#q1 i").attr("class", "fa fa-plus-square");
        }
        $("#q2 i").attr("class", "fa fa-plus-square");
        $("#q3 i").attr("class", "fa fa-plus-square");
        $("#q4 i").attr("class", "fa fa-plus-square");
    });

    // q2: when user clicks 2nd question panel,
    // its content will slide up/down and its icon will change
    $("#q2").click(function () {
        // change icon
        icon = $("#q2 i").attr("class");
        if (icon == "fa fa-plus-square") {
            $("#q2 i").attr("class", "fa fa-minus-square");
        } else {
            $("#q2 i").attr("class", "fa fa-plus-square");
        }
        $("#q1 i").attr("class", "fa fa-plus-square");
        $("#q3 i").attr("class", "fa fa-plus-square");
        $("#q4 i").attr("class", "fa fa-plus-square");
    });

    // q3: when user clicks 3rd question panel,
    // its content will slide up/down and its icon will change
    $("#q3").click(function () {
        // change icon
        icon = $("#q3 i").attr("class");
        if (icon == "fa fa-plus-square") {
            $("#q3 i").attr("class", "fa fa-minus-square");
        } else {
            $("#q3 i").attr("class", "fa fa-plus-square");
        }
        $("#q1 i").attr("class", "fa fa-plus-square");
        $("#q2 i").attr("class", "fa fa-plus-square");
        $("#q4 i").attr("class", "fa fa-plus-square");
    });

    // q4: when user clicks 4th question panel,
    // its content will slide up/down and its icon will change
    $("#q4").click(function () {
        // change icon
        icon = $("#q4 i").attr("class");
        if (icon == "fa fa-plus-square") {
            $("#q4 i").attr("class", "fa fa-minus-square");
        } else {
            $("#q4 i").attr("class", "fa fa-plus-square");
        }
        $("#q1 i").attr("class", "fa fa-plus-square");
        $("#q2 i").attr("class", "fa fa-plus-square");
        $("#q3 i").attr("class", "fa fa-plus-square");
    });
});