$('body').on('change','#email',function(e){
    $.ajax({
        url: '/auth/validate/email?email=' + $('#email').val(),
        type: "GET",
        success : function(data) {
            $('#email').removeClass('is-invalid');
        },
        error : function(data) {
            $('#email').addClass('is-invalid');
        }
    })
});


