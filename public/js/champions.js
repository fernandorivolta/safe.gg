$(document).ready(function(){
  $("#championInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".championsList td").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});