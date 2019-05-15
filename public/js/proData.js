var id = "";

$.urlParam = function(name){
  var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
  return results[1] || 0;
}

if(window.location.href.indexOf('id') !== -1) {
    id = $.urlParam('id');
}else{
  window.location.replace('http://localhost/safe.gg/view/proPlayers.php?search=all');
}

$(document).ready(function(){
  dadosProPlayer(id);
  maestriaProPlayer(id);
  $('#loading_wrap').remove();
});

function dadosProPlayer(id){
  var json;
  $.ajax({
    type : 'GET',
    url : 'http://localhost/safe.gg/controller/dadosProPlayer.php?id=' + id,
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
    $.each(json, function(i, dados){
      $("#pro-nick").html(dados.nomePro);
      $("#pro-nome").html(" " + dados.nomeCompleto);
      $("#pro-flag").attr('src',"/safe.gg/images/flag/"+dados.nacionalidade+".svg");
      console.log(dados.team);
      console.log(dados.regiao);
      console.log(dados.posicao);
      $("#pro-icon").attr('src',dados.foto);
      console.log(dados.idProPlayer);
    }); 
  }
}

function maestriaProPlayer(id){
  var json;
  var y=1;
  $.ajax({
    type : 'GET',
    url : 'http://localhost/safe.gg/controller/dadosMaestriaPro.php?id=' + id,
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
    $.each(json, function(i, dados){
      $("#img-champion"+y).attr('src', "/safe.gg/images/squares/"+dados.championId+".png");
      $("#champion-point-"+y).html(dados.championPoints);
      $("#champion-name-"+y).html(dados.championId);
      console.log("img-champion"+y +"/safe.gg/images/squares/"+dados.championId+".png");
      console.log(dados.championPoints);
      y++;
    }); 
  }
}
