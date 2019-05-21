$(document).ready(function(){
  $('#btn-search').on('click', function(){
    window.location.replace('http://localhost/safe.gg/view/proPlayers.php?search='+$('#search-param').val());
  });
  $('.btn-profile').on('click', function(){
    window.location.replace('http://localhost/safe.gg/view/profilePro.php?id='+$(this).val());
  });
});
