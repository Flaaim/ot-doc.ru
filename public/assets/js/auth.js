$(function(){
    $("#remember_me").on('change', function(e){
        e.preventDefault();
        this.value = this.checked ? 1 : 0;
    })

    $("#login").on('click', function(e){
        e.preventDefault();
        $.magnificPopup.open({
            items: {
                src: '#small-dialog',
                type: 'inline'
            },
        })
    })
})

