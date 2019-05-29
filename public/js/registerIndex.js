function validateFormSignUp(form) {
  if (document.forms["register-form"]["nome"].value == "" || document.forms["register-form"]["email"].value == "" 
    || document.forms["register-form"]["user"].value == "" || document.forms["register-form"]["password"].value == "" 
    || document.forms["register-form"]["nicklol"].value == "" || document.forms["register-form"]["steam"].value == "" 
    || document.forms["register-form"]["datanasc"].value == "") {
    alertify.set('notifier','position', 'top-right');
    alertify.error('Preencha todos os campos!');
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
  $("#register-form").on('submit', function(event) {
    if(erro==1){
      event.preventDefault();
      event.stopPropagation();
      $('#feedback').fadeOut(150).fadeIn(150).fadeOut(150).fadeIn(150);
    }     
  });
});