$(function() {
    $("#button").click(function () {
        if ($("#list").css("display") === "none") {
            jQuery("#list").fadeIn("slow");
        } else {
            jQuery("#list").fadeOut("slow");
        }
    });
});