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
            $('#csgo-info').html(' ');
            $.each(data.user_list, function(i, item){
                $('#csgo-info').append(``);
                //retornar as informacoes da tabela users para montar o card
            });
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
                    alert("Criado com sucesso");
                }
            },
            error: function () {
            }
        });
    }else{
        $('#feedback').fadeIn();
    }
}