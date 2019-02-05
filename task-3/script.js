$(function () {
    $(".buttonActive").on("click", function () {
        $(".shadow-mask").fadeIn().on("click", function () {
            $(".shadow-mask").fadeOut();
            $(".window-auth").fadeOut().animate({
                "left": "0"
            });
            $(".window-auth2").fadeOut().animate({
                left: "-5000px",
                opacity: ""
            });
        });
        $(".window-auth").fadeToggle();
    });

    $(".window-auth__submit-yes").on("click", function () {
        $(".window-auth").animate({
            left: "-5000px",
        })

        $(".window-auth2").fadeIn().animate({
            left: "0",
            opacity: "1"
        }).children(".result").empty().append("Авторизация прошла успешно!<span>&#10004;</span>").css("color", "green");
    });

    $(".window-auth__submit-no").on("click", function () {
        $(".window-auth").animate({
            left: "-5000px",
        })

        $(".window-auth2").fadeIn().animate({
            left: "0",
            opacity: "1"
        }).children(".result").empty().append("Авторизация не выполнена!<span>&#10008;</span>").css("color", "red");
    });
});