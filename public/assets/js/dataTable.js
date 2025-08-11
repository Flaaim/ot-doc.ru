$(function () {
    let templatesList = [1, 2, 3, 4, 5, 6];
    let template_id = $("#myTable").data('template');
    console.log(template_id);
    if($.inArray(template_id, templatesList) === -1){
        window.FlashMessage.error('Ошибка отправки запроса. Обновите страницу!')
        return;
    }
    new DataTable('#myTable', {
        layout: {
            topStart: 'searchPanes'
        },
        ajax: '/document/js/' + template_id,
        dataSrc: '',
        columns: [
            {data: 'id', "fnCreatedCell": function(nTd, sData, oData, iRow, iCol){
                    iRow = iRow + 1;
                    $(nTd).html(iRow);
                }},
            {data: 'title', "fnCreatedCell": function(nTd, sData, oData, iRow, iCol){
                    $(nTd).html("<a href='/document/"+ oData.template_id +"/"+oData.id+"'>"+oData.title+"</a>");
                }},
            {data: 'type_name_1',searchPanes: {show: true}},
            {data: 'type_name_2', searchPanes: {show: true}},
            {data: 'date', searchPanes: {show: false}}
        ]
    });
} );