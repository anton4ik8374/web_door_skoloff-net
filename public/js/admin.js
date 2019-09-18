let forms = {
    creteFile:function(){
        //отправка файла
        var $that = $("#create"),
            formData = new FormData($that.get(0)); // создаем новый экземпляр объекта и передаем ему нашу форму (*)
        $.ajax({
            type: 'POST',
            url: '/galery',
            contentType: false, // важно - убираем форматирование данных по умолчанию
            processData: false, // важно - убираем преобразование строк по умолчанию
            data: formData,
            beforeSend: function(){
                $('#preloader').removeClass('none');
            },
            success: function(data){
                $('#preloader').addClass('none');
                let $res = $("#result");
                $("#create").trigger('reset');
                $res.css('opacity',1).delay(4000);
                setTimeout(function () {
                    $res.css('opacity',0);
                },4000);
                

            },
            error: function (xhr, str) {
                alert(xhr.responseJSON.errors.file[0]);
                $('#preloader').addClass('none');

            }
        });
    },
    deletefoto:function(id,token){
        $.ajax({
            type: 'DELETE',
            url: '/galery/'+id,
            data:{"_token":token},
            success: function (data) {
                $(this).closest('div').detach();
            },
            error: function (xhr, str) {
                alert('Произошла ошибка.Попробуйте снова');

            }
        });
    },
}
//форма добавления файла в раздел
$("#download").on('click', function () {
    if($("form input[type=file]").val()) {
        forms.creteFile();
    }else{
        alert('ВЫ ЗАБЫЛИ ПРО ФАЙЛ ( *_*)')
    }
});
//Удаление фото
$(".btn-delete").on('click', function () {
    let token = $(this).attr('_token');
    let foto_id = $(this).attr('data-id');
    let ressult = forms.deletefoto(foto_id,token);
    $(this).closest('div').detach();
});