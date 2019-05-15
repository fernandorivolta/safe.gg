$(document).ready(function(){
  $('#btn-search-user').on('click', function(){
  	window.location.replace('http://localhost/safe.gg/view/userSearch.php?search='+$('#search-param-user').val());
  });
});