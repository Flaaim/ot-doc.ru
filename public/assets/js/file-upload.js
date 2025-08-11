$(function(){
    $("form#upload").on('submit', function (e){
        e.preventDefault();
        let form = $(this);
        let formdata = false;
        if (window.FormData){
            formdata = new FormData(form[0]);
        }
        let formAction = form.attr('action');

        $.ajax({
            url         : '/admin/file/upload',
            data        : formdata ? formdata : form.serialize(),
            cache       : false,
            contentType : false,
            processData : false,
            type        : 'POST',
            success     : function(data, textStatus, jqXHR){
               console.log(data)
            }
        })
    })
})