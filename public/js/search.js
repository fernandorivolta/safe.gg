var search = "";

$.urlParam = function(name){
  var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
  return results[1] || 0;
}

if(window.location.href.indexOf('search') !== -1) {
    search = $.urlParam('search');
}else{
  window.location.replace('http://localhost/safe.gg/view/userFeed.php');
}

$(document).ready(function(){
    if(search){
      var json;
      $.ajax({
        type : 'GET',
        url : 'http://localhost/safe.gg/controller/search.php?search=' + search,
        dataType : 'json',
        async: false,
        success: function(data){
          if(data!=null){
            if(!$.isArray(data)){
              newJson = "["+ JSON.stringify(data) + "]";
              json = JSON.parse(newJson);
            }else{
              json = data;
            } 
          }else{
            json = null;
          }
        }
      }); 

      if(json){
        $(".feed-body").html("");
        $.each(json, function(i, dados){
          $(".feed-body").append('<div class="card card-feed shadow-sm"> <div class="card-body" style="padding: 0.5rem !important"> <div class="row" "> <div class="col-md-3" > <img class="player-img" src=' + dados.foto +'> </div> <div class="col-md-7 my-auto" style="font-size: 13px"> <div class="row"> <div class="col-md-12"> <h5 class="text-uppercase"><strong>'+dados.nomePro+'</strong></h5></div></div><hr><div class="row"><div class="col-md-6"><p class="text-left">Região: </p></div><div class="col-md-6"> <p class="text-right">' + dados.regiao + '</p></div></div><div class="row"><div class="col-md-6"><p class="text-left">Time: </p></div><div class="col-md-6"><p class="text-right">'+ dados.team +'</p></div></div><div class="row"><div class="col-md-6"> <p class="text-left">Posição: </p> </div> <div class="col-md-6"> <p class="text-right">'+ dados.posicao +'</p> </div> </div> </div> <div class="col-md-2 my-auto"> <button type="button" class="btn btn-outline-primary btn-follow">Seguir</button> </div> </div> </div>'); 
        });
      }
    }  
});