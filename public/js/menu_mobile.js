/*$(document).ready(function () {

    $("#open").click(function(){
        if($("#open").hasClass("background1")){
            $("#open").removeClass("background1");
            $("#open").addClass("background2");
            $("#menu").addClass("activ");
        }else{
            $("#open").removeClass("background2");
            $("#open").addClass("background1");
            $("#menu").removeClass("activ");
        }
    });
});*/

function openClick() {
    var elem = document.getElementById("open");
    var m = document.getElementById("menu");
    if (elem.classList.contains("background1")) {
        elem.classList.toggle("background1");
        elem.classList.toggle("background2");
        m.classList.add("activ");
    } else {
        elem.classList.remove("background2");
        elem.classList.add("background1");
        m.classList.remove("activ");
    }
}
    /*var elem = document.querySelector("#open")
    elem.addEventListener('click', function () {
        var m = document.querySelector("#menu");
        if (elem.classList.contains("background1")) {
            elem.classList.toggle("background1");
            elem.classList.toggle("background2");
            m.classList.add("activ");
        } else {
            elem.classList.remove("background2");
            elem.classList.add("background1");
            m.classList.remove("activ");
        }
    }, false);*/



