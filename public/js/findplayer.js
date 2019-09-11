$(document).ready(function(){
    $('#csgo-image').on('click', function(){
        $('#csgo-find').show('slow');
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


function cadastre_csgo(){
    $('#steam-url').focus(function(){
        $('#feedback').fadeOut();
    });
    var disp = $('#disponibilidade').val();
    var steam_url = $('#steam-url').val();
    var patente = $('#patente').val();
    var funcao = $('#funcao').val();
    if(steam_url.lenght >= 1){

    }else{
        $('#feedback').fadeIn();
    }
}