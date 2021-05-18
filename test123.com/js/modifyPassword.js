//비밀번호 수정
$(document).ready(function(){
    $("#modify_password_submit").click(function(){
        $.post("/php/modifyPassword.php",
        {
            current_password: $("#current_password").val(),
            new_password: $("#new_password").val(),
            new_password_check: $("#new_password_check").val()
        },
        function(data){
            switch(parseInt(data)){
                case 0:
                    alert("현재 비밀번호가 다릅니다");
                    break;
                case 1:
                    alert("새 비밀번호를 확인해 주세요");
                    break;
                case 2:
                    alert("비밀번호가 변경되었습니다\n다시 로그인해 주세요");
                    location.href="../login.php";
                    break;
            }
        })
    })
})
