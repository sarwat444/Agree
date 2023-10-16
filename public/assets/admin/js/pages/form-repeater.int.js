$(document).ready(function () {
    "use strict";
    $(".repeater").repeater({
        show: function () {
            $(this).slideDown()
        }, hide: function (e) {
            confirm("Are you sure you want to delete this element?") && $(this).slideUp(e)
        }, ready: function (e) {
        }
    })
});
