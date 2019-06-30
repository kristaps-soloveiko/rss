$('body').on('change','#email',function(e){
    $.ajax({
        url: '/auth/validate/email?email=' + $('#email').val(),
        type: "GET",
        success : function() {
            $('#email').removeClass('is-invalid');
        },
        error : function() {
            $('#email').addClass('is-invalid');
        }
    })
});


