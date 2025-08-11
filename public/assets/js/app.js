$(function(){


    let templatesList = ["1", "2", "3", "4", "5", "6"];

    $(".templateList").on('click', function(e){
        e.preventDefault();
        let template = {};
        template.id = $(this).data('template');
        template.name = $(this).text();
        $("#searched").attr('data-template', template.id).text(template.name);
    })
    $(".searched-input #search").on('click', function (e){
        e.preventDefault();
        let id = $(".searched-input #searched").attr('data-template');
        let s = $("#s").val();

        if($.inArray(id, templatesList) === -1){
            window.FlashMessage.error('Пожалуйста выберите шаблон документа!')
            return;
        }

        if(s.length === 0){
            window.FlashMessage.error('Пожалуйста заполните строку поиска!')
            return;
        }
        $.ajax({
            url: "/search",
            type: "POST",
            data: {id:id, s:s},
            beforeSend(jqXHR, settings) {
                $("#overlay").fadeIn(300);
            },
            success: function (res){
                let result = JSON.parse(res);
                show_search_results(result.search)
            },
            complete(){
                setTimeout(function(){
                    $("#overlay").fadeOut(300);
                },500);
            }
        })
    })

    function show_search_results(data)
    {
        let html = '<p><b>Результаты поиска: </b></p>'
        html += '<ol class="list-group list-group-flush">';
        $.each(data, function (item, value){
            item++;
            html += '<li class="list-group-item">' + item + ' .' +
                '<a href="/document/'+ value.template_id +'/'+ value.id +'">'+ value.title + '</a>' +
                '</li>'
        })
        html += '</ol>';
        $(".search-result").html(html);

    }

    $("#filter_reset").on('click', function (e){
        e.preventDefault();
       window.location = window.location.pathname;
    })
});