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
                $('.card-choose').fadeOut();
                console.log('alooooooooo');
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
    $('#steam-url').focus(function () {
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
    if (steam_url.length > 0) {
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
    } else {
        $('#feedback').fadeIn();
    }
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
    console.log(json);
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