function validateForm(form) {
  var user = document.forms["login-form"]["username"].value;
  var pass = document.forms["login-form"]["password"].value;
  if (user == "" || pass == "") {
    alertify.error('Preencha os campos!');
    return false;
  }else{
    return true;
  }
  form.submit();
}

$(document).ready(function(){
	$('#btn-create-account').click(function(){
		window.location.href = '/safe.gg/view/registerIndex.php';
	});
  $('#back-home').click(function(){
    window.location.href = '/safe.gg/view/index.php';
  });
});