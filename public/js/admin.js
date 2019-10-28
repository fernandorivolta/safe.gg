$(document).ready(function () {
    get_data();
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


    $('#noticia').on('click', function(){
        $.ajax({
            type: 'GET',
            url: `/api/news`,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                $('.content').html(`
                    <div class="row justify-content-center">
                        <span class="header-name m-2">NOTÍCIAS</span>
                    </div>`
                );
                $.each(data, function (i, news) {
                    $('.content').append(`
                        <div class="row p-2 bt">
                            <div class="col-md-11 justify-content-center">
                                <span class="gray-light-font">${news.title}</span>
                            </div>
                            <div class="col-md-1 justify-content-center">
                                <div class="dropdown">
                                    <a class="side-bar-item-link" href="" class="dropdown-toggle" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" onclick='update_form_news(${JSON.stringify(news)})' href="#">Editar</a>
                                        <a class="dropdown-item" onclick="delete_news(${news.id})" href="#">Excluir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `);
                });
                $('.content').append(`
                    <div class="row justify-content-center m-5">
                        <a class="btn btn-primary" onclick="create_form_news()" href="#">CRIAR</a>
                    </div>`
                );
            },
            error: function () {
                
            }
        });
    });

    $('#lol-proplayer').on('click', function(){
        $.ajax({
            type: 'GET',
            url: `/api/lol/proplayers`,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                $('.content').html(`
                    <div class="row justify-content-center">
                        <img class="game-logo" src="/images/icons/lol-logo.png"/> 
                    </div>`
                );
                $.each(data, function (i, proplayer) {
                    $('.content').append(`
                        <div class="row p-2 bt">
                            <div class="col-md-11 justify-content-center">
                                <span class="gray-light-font">${proplayer.nick}</span>
                            </div>
                            <div class="col-md-1 justify-content-center">
                                <div class="dropdown">
                                    <a class="side-bar-item-link" href="" class="dropdown-toggle" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Editar</a>
                                        <a class="dropdown-item" href="#">Excluir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `);
                });
                $('.content').append(`
                    <div class="row justify-content-center m-5">
                        <a class="btn btn-primary" href="">CRIAR</a>
                    </div>`
                );
            },
            error: function () {
                
            }
        });
    });

    $('#csgo-proplayer').on('click', function(){
        $.ajax({
            type: 'GET',
            url: `/api/cs/proplayers`,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                $('.content').html(`
                    <div class="row justify-content-center">
                        <img class="game-logo" src="/images/icons/csgo-logo.png"/> 
                    </div>`
                );
                $.each(data, function (i, proplayer) {
                    $('.content').append(`
                        <div class="row p-2 bt">
                            <div class="col-md-11 justify-content-center">
                                <span class="gray-light-font">${proplayer.nick}</span>
                            </div>
                            <div class="col-md-1 justify-content-center">
                                <div class="dropdown">
                                    <a class="side-bar-item-link" href="" class="dropdown-toggle" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Editar</a>
                                        <a class="dropdown-item" href="#">Excluir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `);
                });
                $('.content').append(`
                    <div class="row justify-content-center m-5">
                        <a class="btn btn-primary" href="">CRIAR</a>
                    </div>`
                );
            },
            error: function () {
                
            }
        });
    });

    $('#usuarios').on('click', function(){
        $.ajax({
            type: 'GET',
            url: `/api/users`,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                $('.content').html(`
                    <div class="row justify-content-center">
                        <span class="header-name m-2">USUÁRIOS</span>
                    </div>`
                );
                $.each(data, function (i, user) {
                    $('.content').append(`
                        <div class="row p-2 bt">
                            <div class="col-md-11 justify-content-center">
                                <span class="gray-light-font">${user.name}</span>
                            </div>
                            <div class="col-md-1 justify-content-center">
                                <div class="dropdown">
                                    <a class="side-bar-item-link" href="" class="dropdown-toggle" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" onclick="set_admin('${user.username}')" href="#">Tornar Administrador</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `);
                });
            },
            error: function () {
                
            }
        });
    });
});

function set_admin(username){
    let admin_username = username;
    if(admin_username.length > 0){
        $.ajax({
            type: 'GET',
            url: `/api/setadmin/${admin_username}`,
            success: function (data) {
                if(data.message == "success"){
                    alertify.notify(`O usuário ${username} se tornou um administrador.`, 'success', 5, function(){  console.log('dismissed'); });
                }else if(data.message == "user not found"){
                    alertify.notify(`O usuário ${username} não foi encontrado.`, 'error', 5, function(){  console.log('dismissed'); });
                }
            },
            error: function () {
                alertify.notify(`Erro ao executar ação.`, 'error', 5, function(){  console.log('dismissed'); });
            }
        });
    }else{
        alert("Preencha o campo de username!");
    }
}

function create_form_news(){
    $('.content').html(`
        <div class="row justify-content-center">
            <span class="header-name m-2">NOTÍCIAS</span>
        </div>
        <form>
            <div class="form-group">
              <label class="gray-light-font" for="news-link">Link da Notícia</label>
              <input type="text" class="form-control" id="news-link" placeholder="https://vs.com.br/artigo...">
            </div>
            <div class="form-group">
              <label class="gray-light-font" for="news-img">Link da Imagem</label>
              <input type="text" class="form-control" id="news-img" placeholder="https://images.vs.com.br/resize?compression=8...">
            </div>
            <div class="form-group">
              <label class="gray-light-font" for="news-tag">Tag</label>
              <input type="text" class="form-control" id="news-tag" placeholder="cs:go, lol...">
            </div>
            <div class="form-group">
              <label class="gray-light-font" for="news-title">Título da Notícia</label>
              <input type="text" class="form-control" id="news-title" placeholder="TEKKEN: JOGADOR IMPRESSIONA...">
            </div>
            <div class="form-group">
              <label class="gray-light-font" for="news-body">Conteúdo da Notícia</label>
              <input type="text" class="form-control" id="news-body" placeholder="Para chegar ao topo do competitivo de fighting games...">
            </div>
            <div class="form-group">
              <label class="gray-light-font" for="news-author">Autor da Notícia</label>
              <input type="text" class="form-control" id="news-author" placeholder="Helena Nogueira...">
            </div>
            <div class="form-group">
              <label class="gray-light-font" for="news-date">Data da Notícia</label>
              <input type="date" class="form-control" id="news-date">
            </div>
            <div class="row justify-content-center m-2">
                <button type="button" onclick="create_news()" class="btn btn-primary">Confirmar</button>
            </div>
        </form>
        `
    );
}

function update_form_news(news){
    console.log(news);
    $('.content').html(`
        <div class="row justify-content-center">
            <span class="header-name bt m-2">NOTÍCIAS</span>
        </div>
        <form>
            <input type="text" class="d-none" id="news-id" value="${news.id}">
            <div class="form-group">
              <label class="gray-light-font" for="news-link">Link da Notícia</label>
              <input type="text" class="form-control" id="news-link" value="${news.link}" placeholder="https://vs.com.br/artigo...">
            </div>
            <div class="form-group">
              <label class="gray-light-font" for="news-img">Link da Imagem</label>
              <input type="text" class="form-control" id="news-img" value="${news.img}" placeholder="https://images.vs.com.br/resize?compression=8...">
            </div>
            <div class="form-group">
              <label class="gray-light-font" for="news-tag">Tag</label>
              <input type="text" class="form-control" id="news-tag" value="${news.tag}" placeholder="cs:go, lol...">
            </div>
            <div class="form-group">
              <label class="gray-light-font" for="news-title">Título da Notícia</label>
              <input type="text" class="form-control" id="news-title" value="${news.title}" placeholder="TEKKEN: JOGADOR IMPRESSIONA...">
            </div>
            <div class="form-group">
              <label class="gray-light-font" for="news-body">Conteúdo da Notícia</label>
              <input type="text" class="form-control" id="news-body" value="${news.body}" placeholder="Para chegar ao topo do competitivo de fighting games...">
            </div>
            <div class="form-group">
              <label class="gray-light-font" for="news-author">Autor da Notícia</label>
              <input type="text" class="form-control" id="news-author" value="${news.author}" placeholder="Helena Nogueira...">
            </div>
            <div class="form-group">
              <label class="gray-light-font" for="news-date">Data da Notícia</label>
              <input type="date" class="form-control" value="${news.date}" id="news-date">
            </div>
            <div class="row justify-content-center m-2">
                <button type="button" onclick="update_news()" class="btn btn-primary">Confirmar</button>
            </div>
        </form>
        `
    );
}

function delete_news(id){
    $.ajax({
        type: 'DELETE',
        url: `/api/news/${id}/delete`,
        success: function (data) {
            alertify.notify(`Notícia excluida com sucesso!`, 'success', 5, function(){  console.log('dismissed'); });
            $('#noticia').trigger('click');
        },
        error: function () {
            alertify.notify(`Erro ao excluir notícia!`, 'error', 5, function(){  console.log('dismissed'); });
        }
    });
}

function create_news() {
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
        $.ajax({
            type: 'POST',
            url: `/api/news/create`,
            contentType: 'application/json',
            data: JSON.stringify(json),
            dataType: 'json',
            success: function (data) {
                if (data.message == "Success") {
                    alertify.notify(`Notícia criada com sucesso!`, 'success', 5, function(){  console.log('dismissed'); });
                }
                $("#news-link").val('');
                $("#news-img").val('');
                $("#news-tag").val('');
                $("#news-title").val('');
                $("#news-body").val('');
                $("#news-author").val('');
                $("#news-date").val('');
            },
            error: function () {
                alertify.notify(`Erro ao criar notícia!`, 'error', 5, function(){  console.log('dismissed'); });
            }
        });
    }else{
        alertify.notify(`Preencha todos os campos!`, 'error', 5, function(){  console.log('dismissed'); });
    }
    
}

function update_news() {
    let news_id = $("#news-id").val();
    let news_link = $("#news-link").val();
    let news_img = $("#news-img").val();
    let news_tag = $("#news-tag").val();
    let news_title = $("#news-title").val();
    let news_body = $("#news-body").val();
    let news_author = $("#news-author").val();
    let news_date = $("#news-date").val();
    if(news_id.length > 0 && news_link.length > 0 && news_img.length > 0 && news_tag.length > 0 && news_title.length > 0 && news_body.length > 0 && news_author.length > 0 && news_date.length > 0){
        var json = {
            id: news_id,
            link : news_link,
            img : news_img,
            tag : news_tag,
            title : news_title,
            body : news_body,
            author : news_author,
            date : news_date
        }   
        $.ajax({
            type: 'PUT',
            url: `/api/news/update`,
            contentType: 'application/json',
            data: JSON.stringify(json),
            dataType: 'json',
            success: function (data) {
                if (data.message == "Success") {
                    alertify.notify(`Notícia editada com sucesso!`, 'success', 5, function(){  console.log('dismissed'); });
                }
                $('#noticia').trigger('click');
            },
            error: function () {
                alertify.notify(`Erro ao criar notícia!`, 'error', 5, function(){  console.log('dismissed'); });
            }
        });
    }else{
        alertify.notify(`Preencha todos os campos!`, 'error', 5, function(){  console.log('dismissed'); });
    }
    
}

function get_data(){
    $.ajax({
        type: 'GET',
        url: '/api/dashboard/resumo',
        success: function (data) {
            $('game-data').html('');
            $.each(data.most_followed_games, function (i, game) {
                $('.game-data').append(`
                    <div class="row">
                        <span class="gray-font text-uppercase">${game.name}</span>
                    </div>
                    <div class="progress m-1">
                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                            style="width: ${game.percent}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">${game.percent}%
                        </div>
                    </div>`
                );
            });
            $('#total-users').html(`${data.users}`);
            $('#total-likes').html(`${data.likes}`);
            $('#total-comments').html(`${data.comments}`);
            $('.card-pro').attr('style',`background-image: url(${data.most_followed_pro.photo});`);
            $('#pro-name').html(`${data.most_followed_pro.name}`);
            $('#pro-team').html(`${data.most_followed_pro.team}`);
            $('#pro-followers').html(`${data.most_followed_pro.followers}`);
        },
        error: function () {
            alertify.notify(`Erro ao resgatar dados!`, 'error', 5, function(){  console.log('dismissed'); });
        }
    });
}
