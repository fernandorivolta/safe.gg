$(document).ready(function(){
    $("#search-pro").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $(".card-pro").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });