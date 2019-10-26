$(document).ready(function () {
    user = JSON.parse(localStorage.getItem('user'));
    if(user.admin==1){
        $('#admin').css('display', 'inline-block');
    }
});