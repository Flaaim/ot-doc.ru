$(function(){
    $("form#upload").on('submit', function (e){
        e.preventDefault();
        let form = $(this);
        let formdata = false;
        if (window.FormData){
            formdata = new FormData(form[0]);
        }
        formdata = formdata ? formdata : form.serialize()


        $.ajax({
            url         : '/admin/file/upload',
            data        : formdata ? formdata : form.serialize(),
            cache       : false,
            contentType : false,
            processData : false,
            type        : 'POST',
            success     : function(data){
                let result = JSON.parse(data)
                let files_upload = ('message' in result) ? result.message.length : 0;
                let files_errors = ('error' in result) ? result.error.length : 0;
                window.FlashMessage.success('Успешно! Загружено файлов: ' + files_upload + ' Ошибок при загрузке: ' + files_errors );
                clear_inputs();

            }
        })
    })

    function clear_inputs()
    {
        $("input:checkbox").prop('checked',false);
        $("input:file").val('');
    }

})

