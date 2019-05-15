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

function validaNomeUsuario(usuario){
  $.ajax({
    dataType: 'html',
    url: 'validaUsuario.php?user=' + usuario,
    success: function(data) {
      if(data=='true'){
        $('#feedback').show(100);
        erro=1;
      }else{
        erro=0;
        $('#feedback').hide(100);      
      }
    }
  });
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