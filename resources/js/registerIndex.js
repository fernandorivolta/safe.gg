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
	$('#btn-back-home').click(function(){
		window.location.href = '/safe.gg/view/loginIndex.php';
	});
});

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
  $("#register-form").on('submit', function(event) {
    if(erro==1){
      event.preventDefault();
      event.stopPropagation();
      $('#feedback').fadeOut(150).fadeIn(150).fadeOut(150).fadeIn(150);
    }     
  });
});