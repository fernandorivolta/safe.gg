$(document).ready(function(){
  validaNomeUsuario();
  $('#loading_wrap').remove();
});

function validaNomeUsuario(usuario){
  var flex, soloduo;
  var json;
  $.ajax({
    type : 'GET',
    url : 'http://localhost/safe.gg/controller/dadosUsuario.php',
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
      $("#user-name").html("@"+dados.login);
      $("#user-icon").attr('src',dados.icone);
      if(dados.soloduo!='null'){
        pdl = dados.soloduo.split(" ");
        tier = pdl[0] + " " + pdl[1];
        pdl = pdl[2];
        $("#solo-duo-pdl").html(pdl);
        $("#solo-duo-ranked").html(tier);
        winrate = ((dados.soloduowin/(dados.soloduowin + dados.soloduoloses))*100);
        $("#solo-duo-win-defeat").html(dados.soloduowin+"V "+dados.soloduoloses+"D")
        $("#solo-duo-winrate").html("Winrate: "+Math.ceil(winrate)+"%");
        $("#solo-duo-league-name").html(dados.leaguenamesolo)
      }
      if(dados.flex!='null'){
        pdl = dados.flex.split(" ");
        tier = pdl[0] + " " + pdl[1];
        pdl = pdl[2];
        $("#flex-pdl").html(pdl);
        $("#flex-ranked").html(tier);
        winrateflex = ((dados.flexwin/(dados.flexwin + dados.flexlosses))*100);
        $("#flex-win-defeat").html(dados.flexwin+"V "+dados.flexlosses+"D")
        $("#flex-winrate").html("Winrate: "+Math.ceil(winrateflex)+"%");
        $("#flex-league-name").html(dados.leaguenameflex);
      }
      $("#solo-duo-ranked-img").attr('src',setIconRank(dados.soloduo));
      $("#flex-ranked-img").attr('src',setIconRank(dados.flex));
    }); 
  }
}

function setIconRank(rank){
  var src;
  /*switch(rank.split(" ", 1)){
    case 'IRON':
      src = "../images/elobadge/Emblem_Iron.png";
      break;
    case 'BRONZE':
      src = "../images/elobadge/Emblem_Bronze.png";
      break;
    case 'SILVER':
      src = "../images/elobadge/Emblem_Silver.png";
      break;
    case 'GOLD':
      src = "../images/elobadge/Emblem_Gold.png";
      break;
    case 'PLATINUM':
      src = "../images/elobadge/Emblem_Platinum.png";
      break;
    case 'DIAMOND':
      src = "../images/elobadge/Emblem_Diamond.png";
      break;
    case 'MASTER':
      src = "../images/elobadge/Emblem_Master.png";
      break;
    case 'GRAND_MASTER':
      src = "../images/elobadge/Emblem_Grand_Master.png";
      break;
    case 'CHALLENGER':
      src = "../images/elobadge/Emblem_Challenger.png";
      break;
    default:
      console.log("neymR");
  }
  console.log(src);*/
  if(rank.split(" ", 1)=="IRON"){
      src = "../images/elobadge/Emblem_Iron.png";
  }else if(rank.split(" ", 1)=="BRONZE"){
      src = "../images/elobadge/Emblem_Bronze.png";
  }else if(rank.split(" ", 1)=="SILVER"){
      src = "../images/elobadge/Emblem_Silver.png";
  }else if(rank.split(" ", 1)=="GOLD"){
      src = "../images/elobadge/Emblem_Gold.png";
  }else if(rank.split(" ", 1)=="PLATINUM"){
      src = "../images/elobadge/Emblem_Platinum.png";
  }else if(rank.split(" ", 1)=="DIAMOND"){
      src = "../images/elobadge/Emblem_Diamond.png";
  }else if(rank.split(" ", 1)=="MASTER"){
      src = "../images/elobadge/Emblem_Master.png";
  }else if(rank.split(" ", 1)=="GRAND_MASTER"){
      src = "../images/elobadge/Emblem_Grand_Master.png";
  }else if(rank.split(" ", 1)=="CHALLENGER"){
      src = "../images/elobadge/Emblem_Challenger.png";
  }else{
      src = "";
  }
  console.log(src);
  return src;
}
