function get_match_data(id) {
    $.ajax({
        type: 'GET',
        url: `/api/user/${id}/history`,
        dataType: 'json',
        success: function (data) {
            localStorage.setItem('match-history', JSON.stringify(data));
            // $.each(data.player_matchs_info, function (i, match) {
            //     $('.feed-body').append(`<div class="card card-feed shadow-sm ${match.win ? 'card-win' : 'card-lose'} white-font"><div class="card-body" style="padding: 0.5rem !important"> <div class="col-md-12"> <div class="row"><span>${match.queue}</span><div class="my-auto circle-card"> <i class="fas fa-circle fa-xs"></i> </div><small class="span-card my-auto"> ${match.gameDuration} </small></div> <hr style="width:100%; margin-bottom: 10px;"> <div class="row"> <div class="col-md-3 my-auto"> <div class="row"> <img class="img-champion img-fluid rounded-circle mx-auto" src="/images/squares/${match.championName}.png"> </div> <div class="row"><p class="text-center mx-auto">Level ${match.champLevel}</p></div> </div> <div class="col-md-2 my-auto"> <div class="row"><img class="img-spell img-fluid" src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/spell/Summoner${match.spell1}.png"> <img class="img-perk img-fluid" src="https://opgg-static.akamaized.net/images/lol/perk/${match.runa1}.png"></div> <div class="row"> <img class="img-spell img-fluid" src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/spell/Summoner${match.spell2}.png"> <img class="img-perk img-fluid" src="https://opgg-static.akamaized.net/images/lol/perkStyle/${match.runa2}.png"> </div></div> <div class="col-md-2 my-auto"> <div class="row"> <span>${match.kills}<small class="card-bars">/</small><span style="color: #a7a7a7;">${match.deaths}</span><small class="card-bars">/</small>${match.assists}</span> </div><div class="row"> <span>${match.kda} <small class="span-card">KDA</small></span> </div><div class="row"> <span>${match.totalMinionsKilled}<small class="span-card" data-tooltip="Minions por minuto" data-tooltip-position="bottom">(${(match.totalMinionsKilled / (match.gameDurationSec / 60)).toFixed(1)}) CS</small></span> </div> </div><div class="col-md-2 my-auto"> <div class="row"> ${match.item0 ? `<img class="img-fluid item-card" src="https://opgg-static.akamaized.net/images/lol/item/${match.item0}.png"></img>` : ``} ${match.item1 ? `<img class="img-fluid item-card" src="https://opgg-static.akamaized.net/images/lol/item/${match.item1}.png"></img>` : ``} ${match.item2 ? `<img class="img-fluid item-card" src="https://opgg-static.akamaized.net/images/lol/item/${match.item2}.png"></img>` : ``} </div> <div class="row"> ${match.item3 ? `<img class="img-fluid item-card" src="https://opgg-static.akamaized.net/images/lol/item/${match.item3}.png"></img>` : ``} ${match.item4 ? `<img class="img-fluid item-card" src="https://opgg-static.akamaized.net/images/lol/item/${match.item4}.png"></img>` : ``} ${match.item5 ? `<img class="img-fluid item-card" src="https://opgg-static.akamaized.net/images/lol/item/${match.item5}.png"></img>` : ``} </div> </div></div> </div> </div> </div>`);
            // });
            // $('#loader').remove();
        },
        error: function () {
            // $('#loader').remove();
        }
    });
}

function get_rank_data(id) {
    $.ajax({
        type: 'GET',
        url: `/api/user/${id}/rank`,
        dataType: 'json',
        success: function (data) {
            localStorage.setItem('ranks', JSON.stringify(data));
        },
        error: function () {

        }
    });
}

function get_rank_data_feed(id) {
    $.ajax({
        type: 'GET',
        url: `/api/user/${id}/rank`,
        dataType: 'json',
        success: function (data) {
            console.log(data);
            $.each(data, function (i, ranked) {
                $('.rank').append(`<div class="card bg-dark card-lol-info">
                <div class="card-body">
                    <div class="card-title">
                        <span class="ranked-title white-font">${ranked.queueType.replace('_', ' ')}</span>
                        <hr class="line-margin">
                        <div class="row">
                            <div class="col-md-6 text-center my-auto">
                                <img id="flex-ranked-img" src="images/elobadge/${ranked.tier}.png" class="rank-img">
                            </div>
                            <div class="col-md-6 my-auto">
                                <div class="row">
                                    <span class="rank-text white-font" id="flex-ranked">${ranked.tier} ${ranked.rank}</span>
                                </div>
                                <div class="row">
                                    <span class="second-stats gray-font" id="flex-win-defeat">${ranked.wins}V ${ranked.losses}D - ${Math.ceil(((ranked.wins / (ranked.wins + ranked.losses)) * 100))} % </span>
                                </div>
                                <div class="row">
                                    <span class="second-stats gray-font" id="flex-winrate"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="card-text user-bio"></p>
                </div>
            </div>`);
            });
        },
        error: function () {

        }
    });
}