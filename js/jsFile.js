var $;
$(document).ready(function () {
    "use strict";

    $(".caption").css({
        position: "absolute",
        top: "50%",
        left: "50%",
        marginTop: $(".caption").height() / -2,
        marginLeft: $(".caption").width() / -2,
        width: "50%"
    });
});
