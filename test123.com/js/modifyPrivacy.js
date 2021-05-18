//global data
var member_data;

//개인정보 수정
$(document).ready(function () {
    $("#modifyPrivacy_submit").click(function () {
        $.post("./php/privacyModify.php",
                {
                    name: $("#privacy_name").val(),
                    email: $("#privacy_email").val(),
                    password: $("#modify_check_password").val()
                }, function (data) {
            if (data === '0') {
                alert("개인 정보가 수정되었습니다\n다시 로그인 해주세요");
                location.href = "../login.php";
            } else {
                alert("비밀번호를 확인해 주세요");
            }
        })
    })
})

//비밀번호 변경 버튼 누를시
$(document).ready(function () {
    $("#modify_password").click(function () {
        $("#content").load("./content/modifyPassword.php");
    })
})

