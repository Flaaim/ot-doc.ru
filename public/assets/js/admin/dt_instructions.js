$(function(){
    let templatesList = [1, 2, 3, 4, 5, 6];
    let template_id = $("#myTable").data('template');

        if($.inArray(template_id, templatesList) === -1){
            window.FlashMessage.error('Ошибка отправки запроса. Обновите страницу!')
            return;
        }
        let table = new DataTable('#myTable', {
            ajax: '/admin/document/get_documents/' + template_id,
            dataSrc: '',
            columns: [
                {data: 'id'},
                {data: 'title', "fnCreatedCell": function(nTd, sData, oData, iRow, iCol){
                        $(nTd).html("<a href='/document/"+ oData.template_id +"/"+oData.id+"'>"+oData.title+"</a>");
                    }},
                {data: 'type_name_1',searchPanes: {show: true}},
                {data: 'type_name_2', searchPanes: {show: true}},
                {data: 'date'},
                {data: null, render: function (data, type, row, meta){
                        return '<input type="button" class="btn btn-outline-danger delete" data-delete="'+data.id+'" id="n-' + meta.row + '" value="Удалить"/>';
                    }}
            ]
        });

    $('#myTable tbody').on('click', '.delete', function () {
        let id = $(this).attr("id").match(/\d+/)[0];
        let data = $('#myTable').DataTable().row( id ).data();

        $.ajax({
            url: "/admin/document/delete",
            type: "POST",
            data: {data:data},
            beforeSend(jqXHR, settings) {
                $("#overlay").fadeIn(300);
            },
            success: function (res){
                table.ajax.reload();
            },
            complete(){
                setTimeout(function(){
                    $("#overlay").fadeOut(300);
                },500);
            }
        })
    });
})