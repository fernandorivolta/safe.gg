$(document).ready(function () {
    var user = JSON.parse(localStorage.getItem('user'));
    $('#summonername').val(user.summonerName);
    $('.game-cs').on('click', function () {
        verify_user_sign_up('CSGO');
    });
    $('.game-lol').on('click', function () {
        verify_user_sign_up('LOL');
    });
    $('.voltar').on('click', function () {
        $('#menu').show('slow');
        $('#csgo-find').hide('slow');
        $('#lol-find').hide('slow');
        $('#players-cs').html('');
        $('#players-lol').html(' ');
        $('.voltar').hide();

    });
});

function verify_user_sign_up(game) {
    var user = JSON.parse(localStorage.getItem('user'));
    $.ajax({
        type: 'GET',
        url: `/api/find/${user.id}/${game}`,
        contentType: 'application/json',
        dataType: 'json',
        success: function (data) {
            if (!data.user) {
                alertify.alert('Cadastro necessário!', 'Para prosseguir é necessário se cadastrar na funcionalidade!').set('onok', function (closeEvent) {
                    $('.card-choose').fadeOut();
                    if (game == "CSGO") {
                        setTimeout(function () {
                            $('.card-form-csgo').fadeIn();
                        }, 500);
                    } else {
                        setTimeout(function () {
                            $('.card-form-lol').fadeIn();
                        }, 500);
                    }
                });
            } else {
                console.log(data)
                $('.list').html('');
                $('.card-choose').fadeOut();
                if (!(data.user_list.length > 0)) {
                    $('.list').append(`
                        <div class="row justify-content-center pt-5 p-2">
                            <img class="error-img" src="/images/funcs/error-404.png" alt="">
                        </div>

                        <div class="row justify-content-center p-5">
                            <span class="title gray-font">NENHUM USUÁRIO ENCONTRADO</span>
                        </div>
                    `);
                }

                if (game == "CSGO") {
                    $.each(data.user_list, function (i, user) {
                        $('.list').append(`
                            <div class="card card-user shadow-none bg-dark-two mb-2">
                                <div class="row p-3 align-items-center" style="background-repeat: no-repeat;background-position: right;background-size: contain;background-image: url(/images/csgo-roles/${user.funcao}.svg);">
                                    <div class="col-md-2">
                                        <img class="rounded-circle img-user"
                                            src="/storage/${user.icon}"
                                            alt="">
                                    </div>
                                    <div class="col-md-2">
                                        <div class="row">
                                            <span class="card-user-subtitle font-shadow gray-font">POSIÇÃO</span>
                                        </div>
                                        <div class="row">
                                            <span class="card-user-title text-uppercase font-shadow green-font">${user.funcao}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="row">
                                            <span class="card-user-subtitle font-shadow gray-font">ELO</span>
                                        </div>
                                        <div class="row">
                                            <span class="card-user-title text-uppercase font-shadow green-font">${user.patente}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="row">
                                            <span class="card-user-subtitle font-shadow gray-font">DISPONIBILIDADE</span>
                                        </div>
                                        <div class="row">
                                            <span class="card-user-title text-uppercase font-shadow green-font">${user.disponibilidade}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="row">
                                            <span class="card-user-subtitle font-shadow gray-font">PERFIL</span>
                                        </div>
                                        <div class="row">
                                            <a href="${user.steam}" class="card-user-title text-uppercase font-shadow green-font">STEAM</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `);
                    });
                } else {
                    $.each(data.user_list, function (i, user) {
                        $('.list').append(`
                            <div class="card card-user shadow-none bg-dark-two mb-2">
                                <div class="row p-3 align-items-center" style="background-repeat: no-repeat;background-position: right;background-size: contain;background-image: url(/images/lol-lanes/${user.posicao}.png);">
                                    <div class="col-md-2">
                                        <img class="rounded-circle img-user"
                                            src="/storage/${user.icon}"
                                            alt="">
                                    </div>
                                    <div class="col-md-2">
                                        <div class="row">
                                            <span class="card-user-subtitle font-shadow gray-font">POSIÇÃO</span>
                                        </div>
                                        <div class="row">
                                            <span class="card-user-title text-uppercase font-shadow green-font">${user.posicao}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="row">
                                            <span class="card-user-subtitle font-shadow gray-font">ELO</span>
                                        </div>
                                        <div class="row">
                                            <span class="card-user-title text-uppercase font-shadow green-font">${user.elo}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="row">
                                            <span class="card-user-subtitle font-shadow gray-font">DISPONIBILIDADE</span>
                                        </div>
                                        <div class="row">
                                            <span class="card-user-title text-uppercase font-shadow green-font">${user.disponibilidade}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="row">
                                            <span class="card-user-subtitle font-shadow gray-font">NICK</span>
                                        </div>
                                        <div class="row">
                                            <span class="card-user-title text-uppercase font-shadow green-font">${user.sumonnername}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `);
                    });
                }
                setTimeout(function () {
                    $('.users-list').fadeIn();
                }, 500);
            }
        },
        error: function () {

        }
    });
}

function cadastre_csgo() {
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

    $.ajax({
        type: 'POST',
        url: `/api/find/register/cs`,
        contentType: 'application/json',
        data: JSON.stringify(json),
        dataType: 'json',
        success: function (data) {
            if (data.message == "Success") {
                alertify.notify('Usuário cadastrado com sucesso', 'success', 5, function () {
                    console.log('dismissed');
                });
                verify_user_sign_up('CSGO');
            }
        },
        error: function () {
        }
    });

}


function cadastre_lol() {
    var disp = $('#disponibilidade').val();
    var summonernameval = $('#summonername').val();
    var eloval = $('#patente').val();
    var posicaoval = $('#posicao').val();
    var user = JSON.parse(localStorage.getItem('user'));
    var json = {
        user_id: user.id,
        sumonnername: summonernameval,
        disponibilidade: disp,
        elo: eloval,
        posicao: posicaoval
    }

    $.ajax({
        type: 'POST',
        url: `/api/find/register/lol`,
        contentType: 'application/json',
        data: JSON.stringify(json),
        dataType: 'json',
        success: function (data) {
            if (data.message == "Success") {
                $('#lol-find').hide('slow');
                verify_user_sign_up('LOL');
            }
        },
        error: function () {
        }
    });
}