var erro;

function validateFormSignUp(form) {
  var user = document.forms["signup-form"]["user"].value;
  var pass = document.forms["signup-form"]["nome"].value;
  var email = document.forms["signup-form"]["email"].value;
  if (user == "" || pass == "" || email == "") {
    alertify.set('notifier','position', 'bottom-right');
    alertify.error('Preencha os campos!');
    return false;
  }else{
    return true;
  }
  form.submit();
}

$(document).ready(function(){
  $("#user").focusout(function() {
      validaNomeUsuario($("#user").val()); 
  });
  $("#signup-form").on('submit', function(event) {
    if(erro==1){
      event.preventDefault();
      event.stopPropagation();
      $('#feedback').fadeOut(150).fadeIn(150).fadeOut(150).fadeIn(150);
    }     
  });
});