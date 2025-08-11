$(function(){

    if(!localStorage.getItem('attempts')){
        localStorage.setItem('attempts', "3");
    }

    let Attempts = localStorage.getItem('attempts');
    function getAttempts(Attempts)
    {
        $("#attempts").html(Attempts)
    }
    function updateAttempts(Attempts)
    {
        Attempts = Attempts - 1;
        localStorage.setItem('attempts', Attempts);
        getAttempts(Attempts)
    }

    function isUserHasNoAttempts()
    {
        return localStorage.getItem('attempts') === '0';
    }
    $("#get-document").on('click', function(){
        let id = $(this).data('id');
        let template_id = $(this).data('template');

        // if(isUserHasNoAttempts()){
        //     window.FlashMessage.error('У вас закончились попытки для скачивания');
        //     return;
        // }

        $.ajax({
            url: '/get-document',
            type: "POST",
            data: {id:id, template_id:template_id},
            success:function (res){
                let result = JSON.parse(res);
                if(result.link === false){
                    window.FlashMessage.error(result.message);
                }else{
                   // updateAttempts(Attempts)

                    window.location.href = window.location.origin + '/download?f=' + result.link + '&tid=' + result.template_id + '&mime=' + result.mime ;
                }
            }
        })
    })

})
