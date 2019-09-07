$(document).ready(function() {
    /* $('#textarea').keyup(function() {  
        $('#textarea_feedback').html($('#textarea').val().length + ' / 240');
    }); */
    var circle = new ldBar('#count');
    $('#textarea').keyup(function() {  
        circle.set($('#textarea').val().length);
    });

    //zerar os comentarios do modal qnd fechar pra evitar comentarios duplicados
    $(document).on('hidden.bs.modal', function () {
        $('.modal-comments').html('');
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
                          <div class="card-body news-card-text">
                            <div class="row">
                                <div class="col-md-3 text-center">
                                    <img style="width:65%" class="img-fluid" src="/storage/${user.icon}" alt="user image">
                                </div>
                                <div class="col-md-9 text-left my-auto">
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


function like_post(post_id, button){
    var user = JSON.parse(localStorage.getItem('user'));
    $.ajax({
        type: 'GET',
        url: `/api/post/${post_id}/like/${user.id}`,
        contentType: 'application/json',
        success: function (data) {
            if (data.message == "Success") {
                num_like=parseInt($(`#post-${post_id}`).html());
                num_like+=1;
                $(`#post-${post_id}`).html(` ${num_like}`);
                button.removeClass('far');
                button.addClass('fas');
                button.attr('style', 'color: #d64343');
                button.attr('onclick', `unlike_post(${post_id}, $(this))`);
            }
        },
        error: function () {
        }
    });
}

function unlike_post(post_id, button){
    var user = JSON.parse(localStorage.getItem('user'));
    $.ajax({
        type: 'GET',
        url: `/api/post/${post_id}/unlike/${user.id}`,
        contentType: 'application/json',
        success: function (data) {
            if (data.message == "Success") {
                num_like=parseInt($(`#post-${post_id}`).html());
                console.log(num_like);
                num_like-=1;
                console.log(num_like);
                $(`#post-${post_id}`).html(` ${num_like}`);
                button.removeClass('fas');
                button.addClass('far');
                button.attr('style', 'color: #bac2ca');
                button.attr('onclick', `like_post(${post_id}, $(this))`);
            }
        },
        error: function () {
        }
    });
}