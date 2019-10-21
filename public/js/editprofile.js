var user = JSON.parse(localStorage.getItem("user"));

$(document).ready(function () {
    $('#nome-completo').val(user.name);
    console.log(user);
    $('#summonerName').val(user.summonerName);
    $('#steam').val(user.steam);
    $('#user-photo').attr('src', `/storage/${user.icon}`)
    $('#username').html(user.username.toUpperCase());
    $('#editar-dados').on('click', function () {
        change_user_info();
    });
});

function change_user_info() {
    let json = {
        id: user.id,
        name: $('#nome-completo').val(),
        summonerName: $('#summonerName').val(),
        steam: $('#steam').val()
    };
    $.ajax({
        type: 'POST',
        url: `/api/user/update`,
        contentType: 'application/json',
        data: JSON.stringify(json),
        dataType: 'json',
        success: function (data) {
            alertify.notify('Dados alterados com sucesso', 'success', 5, function () {
                console.log('dismissed');
            });
        },
        error: function () {
            alertify.notify('Erro ao alterar dados', 'success', 5, function () {
                console.log('dismissed');
            });
        }
    });
}

function change_user_photo() {
    let json = {
        id: user.id,
        photo: $('#fileToUpload').val()
    };
    $.ajax({
        type: 'POST',
        url: `/api/user/icon`,
        contentType: 'application/json',
        data: JSON.stringify(json),
        dataType: 'json',
        success: function (data) {
            alertify.notify('Dados alterados com sucesso', 'success', 5, function () {
                console.log('dismissed');
            });
        },
        error: function () {
            alertify.notify('Erro ao alterar dados', 'success', 5, function () {
                console.log('dismissed');
            });
        }
    });
}
