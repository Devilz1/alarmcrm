$(function () {
    $("#dateZodiac").on("change", function () {
        $.ajax({
            type: "POST",
            url: "Zodiak.php",
            data: $("#myForm").serialize(),
            success: function(msg){
                $(".conclusion__text").empty().append(msg);
            },
            error: function () {
                alert("Ошибка!")
            }
        });
    });
});