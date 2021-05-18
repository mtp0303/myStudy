//토글 위치 조정
$('a[data-toggle="tooltip"]').tooltip({
    placement: 'left',
    html: true
});

//패스워드 체크
function pw_check(){
    $("#submit").click(function(){
        var pw = $("#register_password").val();
        var pw_check = $("#register_password_check").val();
        if(pw != pw_check) {
            alert("비밀번호를 확인해 주세요");
            return false;
        } return true;
    })
}

//회원가입 유효성 검사
(function () 
{
        'use strict';
window.addEventListener('load', function () {
    var forms = document.getElementsByClassName('needs-validation');
    var pw_checking = pw_check();
    var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener('submit', function (event) {
            if (form.checkValidity() === false | pw_checking === false ) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
}, false);
})();
