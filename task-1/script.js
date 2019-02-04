window.onload = function(){
    var button = document.querySelector(".button");
    var kph = document.querySelector(".task-1__way input[name='kilometre_per_hour']");
    
    button.onclick = function () {
        var kph_counting = kph.value * 1000 / 3600;
        var createText = document.createTextNode(kph_counting.toFixed(2) + " м/с");
        var answer = document.querySelector(".task-1__answer");

        answer.innerHTML = "";
        kph.value = "";

        answer.appendChild(createText);
    }

    var kph2 = document.querySelector(".task-2__way textarea");

    kph2.onkeyup = function () {
        var answer_input = document.querySelector(".task-2__way input[name='meter_per_second']");
        var kph2_counting = kph2.value * 1000 / 3600;
        answer_input.value = kph2_counting.toFixed(2);
    }
};