$(document).ready(function(){
    var user = JSON.parse(localStorage.getItem('user'));
    $('#summonername').val(user.summonerName);
    $('#csgo-image').on('click', function(){
        verify_user_sign_up('CSGO');
        $('#menu').hide('slow');
    });
    $('#lol-image').on('click', function(){
        $('#menu').hide('slow');
        $('#lol-find').show('slow');
    });
    $('.voltar').on('click', function(){
        $('#menu').show('slow');
        $('#csgo-find').hide('slow');
        $('#lol-find').hide('slow');
    });
});

function verify_user_sign_up(game){
    var user = JSON.parse(localStorage.getItem('user'));
    $.ajax({
        type: 'GET',
        url: `/api/find/${user.id}/${game}`,
        contentType: 'application/json',
        dataType: 'json',
        success: function (data) {
            if(game=="CSGO"){
                $('#csgo-info').html(' ');
                $.each(data.user_list, function(i, item){
                    console.log(item);
                    $('#csgo-info').append(`
                    <div class="row">
                    <div class="col-md-12 white-font">
                          <div class="card-header news-card-text">
                            ${item.name} - <a href="user/${item.id}">@${item.username}</a>
                          </div>
                          <div class="card-body news-card-text">
                            <div class="row">
                                <div class="col-md-3 text-center">
                                    <img style="width:35%" class="img-fluid" src="/storage/${item.icon}" alt="user image">
                                </div>
                                <div class="col-md-9 text-left my-auto">
                                    <div class="col-md-12 text-center">
                                        <div class="row">
                                            <div class="col-md-6 text-center">
                                                <p class="card-text">${item.patente}</p>
                                                <a class="card-text white-font" target="_nblank" href="${item.steamurl}">Steam URL</a>
                                            </div>
                                            <div class="col-md-6 text-center">
                                                <p class="card-text">${item.funcao}</p>
                                                <p class="card-text">${item.disponibilidade}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
                    `);
                //retornar as informacoes da tabela users para montar o card
                });
            }
        },
        error: function () {
            $('#csgo-find').show('slow');
        }
    });
}

function cadastre_csgo(){
    $('#steam-url').focus(function(){
        $('#feedback').fadeOut();
    });
    var disp = $('#disponibilidade').val();
    var steam_url = $('#steam-url').val();
    var patenteval = $('#patente').val();
    var funcaoval = $('#funcao').val();
    var user = JSON.parse(localStorage.getItem('user'));
    var json = {
        user_id: user.id,
        patente: patenteval,
        disponibilidade: disp,
        steamurl: steam_url,
        funcao: funcaoval
    }
    if(steam_url.length > 0){
        $.ajax({
            type: 'POST',
            url: `/api/find/register/cs`,
            contentType: 'application/json',
            data: JSON.stringify(json),
            dataType: 'json',
            success: function (data) {
                if (data.message == "Success") {
                    $('#csgo-find').hide('slow');
                    verify_user_sign_up('CSGO');
                }
            },
            error: function () {
            }
        });
    }else{
        $('#feedback').fadeIn();
    }
}