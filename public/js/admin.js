$(document).ready(function () {
    $("#set-admin").click(function() {
        let admin_username = $("#user-set-admin").val();
        if(admin_username.length > 0){
            $.ajax({
                type: 'GET',
                url: `/api/setadmin/${admin_username}`,
                success: function (data) {
                    if(data.message == "success"){
                        alert(`O usuario ${admin_username} se tornou admin`);
                    }else if(data.message == "user not found"){
                        alert(`O usuario ${admin_username} nao existe`);
                    }
                },
                error: function () {
                    alert(`Erro interno`);
                }
            });
        }else{
            alert("Preencha o campo de username!");
        }
    });

    $("#unset-admin").click(function() {
        let admin_username = $("#user-unset-admin").val();
        if(admin_username.length > 0){
            $.ajax({
                type: 'GET',
                url: `/api/unsetadmin/${admin_username}`,
                success: function (data) {
                    if(data.message == "success"){
                        alert(`O usuario ${admin_username} se tornou usuario comum`);
                    }else if(data.message == "user not found"){
                        alert(`O usuario ${admin_username} nao existe`);
                    }
                },
                error: function () {
                    alert(`Erro interno`);
                }
            });
        }else{
            alert("Preencha o campo de username!");
        }
    });
});