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