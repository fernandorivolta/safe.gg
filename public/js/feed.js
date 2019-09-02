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
                    var circle = new ldBar('#count');
                    var post = $('#textarea').val();
                    $('#textarea').val('');
                    circle.set(0);
                    $('.feed-body').prepend(`<div class="row" id="postednow" style="display: none">
                    <div class="col-md-12 white-font">
                          <div class="card-header news-card-text">
                            ${user.name} - <a href="user/${user.id}">@${user.username}</a>
                          </div>
                          <div class="card-body text-center news-card-text">
                            <div class="row">
                                <div class="col-md-2">
                                    <img style="width:65%" class="img-fluid" src="/storage/${user.icon}" alt="user image">
                                </div>
                                <div class="col-md-10">
                                    <p class="card-text">${post}</p>
                                </div>
                            </div>
                                <div class="card-footer text-muted text-right news-card-text">
                                  Postado segundos atras
                                </div>
                          </div>
                    </div>
                </div>`);
                }
                $("#postednow").fadeIn('slow');
            },
            error: function () {
            }
        });
    });
});
