$(document).ready(function() {
    /* $('#textarea').keyup(function() {  
        $('#textarea_feedback').html($('#textarea').val().length + ' / 240');
    }); */
    var circle = new ldBar('#count');
    $('#textarea').keyup(function() {  
        circle.set($('#textarea').val().length);
    });


    $('#btn-publicar').on('click', function () {
        var text = $('#textarea').val();
        var user = JSON.parse(localStorage.getItem('user'));
        var json = {
            user_id : user.id,
            post : text
        }        
        $.ajax({
            type: 'POST',
            url: `/api/user/post`,
            contentType: 'application/json',
            data: JSON.stringify(json),
            dataType: 'json',
            success: function (data) {
                if (data.message == "Success") {
                    $('#textarea').val('');
                    $("#textarea_feedback").html('0 / 240');
                }
            },
            error: function () {
            }
        });
    });
});
