$(document).ready(function () {
    $("#excursion").click(function(){
        $("#form-modal").addClass("active_my2");
        $("#body").addClass("my-modal-open");
    });
    $("#my-close").click(function(){
        $("#form-modal").removeClass("active_my2");
        $("#body").removeClass("my-modal-open");
    });


    function getChar(event) {
        if (event.which != 0 && event.charCode != 0) {
            if (event.which < 32) return null;
            return String.fromCharCode(event.which) // остальные
        }
        return null; // специальная клавиша
    }
    function validatePhon(phon) {
        var re = /^\+[0-9]{1} \([0-9]{3}\) [0-9]{3}\-[0-9]{2}\-[0-9]{2}$/;
        return re.test(phon);
    }
    $("#send").click(function(){
        var phonval  = $("#phon").val();
        var yes = $("#yes").val();
        var phonvalid = validatePhon(phonval);

// Проверка правильности электронного адреса
        if(phonvalid == false) {
            $("#phon").addClass("error");
            $("#errors").removeClass("errors");
            $("#errors").addClass("error-msg");
        }
        else if(phonvalid == true){
            $("#phon").removeClass("error");
            sendAjaxForm('result_form', 'ajax_form_callkeper', '/jivo_ga/tilda_callkeeper/excursion');
        }
    });


    /*AJAX*/
    function sendAjaxForm(result_form, ajax_form, url) {
        jQuery.ajax({
            url: url, //url страницы (action_ajax_form.php)
            type: "POST", //метод отправки
            dataType: "html", //формат данных
            data: jQuery("#" + ajax_form).serialize(),  // Сеарилизуем объект
            success: function (response) { //Данные отправлены успешно
                console.log(response);
                if (response === "success") {
                    $("#grateful").removeClass("noactive");
                    $("#popup-content").addClass("noactive");
                    dataLayer.push({'event': 'excursion_ok'});
                } else {
                    $("#errors2").removeClass("errors");
                    $("#errors2").addClass("error-msg");

                }
            },
            error: function (response) { // Данные не отправлены
                document.getElementById(result_form).innerHTML = "Ошибка. Данные не отправленны.<br>Попробуйте снова.";
            }
        });
    }
    /*новая валидация телефона*/
    window.addEventListener("DOMContentLoaded", function() {
        function setCursorPosition(pos, elem) {
            elem.focus();
            if (elem.setSelectionRange) elem.setSelectionRange(pos, pos);
            else if (elem.createTextRange) {
                var range = elem.createTextRange();
                range.collapse(true);
                range.moveEnd("character", pos);
                range.moveStart("character", pos);
                range.select()
            }
        }
        function mask(event) {
            var matrix = "+7 (___) ___-__-__",
                i = 0,
                def = matrix.replace(/\D/g, ""),
                val = this.value.replace(/\D/g, "");
            if (def.length >= val.length) val = def;
            this.value = matrix.replace(/./g, function(a) {
                return /[_\d]/.test(a) && i < val.length ? val.charAt(i++) : i >= val.length ? "" : a
            });
            if (event.type == "blur") {
                if (this.value.length == 2) this.value = ""
            } else setCursorPosition(this.value.length, this)
        };
        var input = document.querySelector("#phon");
        input.addEventListener("input", mask, false);
        input.addEventListener("focus", mask, false);
        input.addEventListener("blur", mask, false);
    });
    /*конец валидации*/
});
