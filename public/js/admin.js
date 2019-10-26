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

    $("#create-news").click(function() {
        let news_link = $("#news-link").val();
        let news_img = $("#news-img").val();
        let news_tag = $("#news-tag").val();
        let news_title = $("#news-title").val();
        let news_body = $("#news-body").val();
        let news_author = $("#news-author").val();
        let news_date = $("#news-date").val();
        if(news_link.length > 0 && news_img.length > 0 && news_tag.length > 0 && news_title.length > 0 && news_body.length > 0 && news_author.length > 0 && news_date.length > 0){
            var json = {
                link : news_link,
                img : news_img,
                tag : news_tag,
                title : news_title,
                body : news_body,
                author : news_author,
                date : news_date
            }   
            console.log(json);
            $.ajax({
                type: 'POST',
                url: `/api/news/create`,
                contentType: 'application/json',
                data: JSON.stringify(json),
                dataType: 'json',
                success: function (data) {
                    if (data.message == "Success") {
                        alert("Noticia criada com sucesso");
                    }
                },
                error: function () {
                }
            });
        }else{
            alert("Preencha todos os campos!");
        }
    });

    $("#create-procs").click(function() {
        let procs_roundcontribution = $('#procs-roundcontribution').val();
        let procs_deathperround = $('#procs-deathperround').val();
        let procs_mapsplayed = $('#procs-mapsplayed').val();
        let procs_kddiff = $('#procs-kddiff').val();
        let procs_team = $('#procs-team').val();
        let procs_age = $('#procs-age').val();
        let procs_nacionality = $('#procs-nacionality').val();
        let procs_nick = $('#procs-nick').val();
        let procs_steamlink = $('#procs-steamlink').val();
        let procs_proplayername = $('#procs-proplayername').val();
        if(procs_roundcontribution.length > 0 && procs_deathperround.length > 0 && procs_mapsplayed.length > 0 && procs_kddiff.length > 0 && procs_team.length > 0 && procs_age.length > 0 && procs_nacionality.length > 0 && procs_nick.length > 0 && procs_steamlink.length > 0){
            var json = {
                roundcontribution : procs_roundcontribution,
                deathperround : procs_deathperround,
                mapsplayed : procs_mapsplayed,
                kddiff : procs_kddiff,
                team : procs_team,
                age : procs_age,
                nacionality : procs_nacionality,
                proplayername : procs_proplayername,
                nick : procs_nick,
                steamlink : procs_steamlink
            }   
            console.log(json);
            $.ajax({
                type: 'POST',
                url: `/api/procs/create`,
                contentType: 'application/json',
                data: JSON.stringify(json),
                dataType: 'json',
                success: function (data) {
                    if (data.message == "Success") {
                        alert("ProPlayer de CS criado com sucesso");
                    }
                },
                error: function () {
                }
            });
        }else{
            alert("Preencha todos os campos!");
        }
    });

});