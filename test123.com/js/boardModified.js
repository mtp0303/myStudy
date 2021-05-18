//데이터 수정
$(document).ready(function () {
    $("#board_content_modified").click(function () {
        if (modifiedVaildation()) {
            var re = /\d+/;
            var idx = parseInt($("#board_modified_board_no").text().match(re));
            $.post("../php/boardModified.php",
                    {
                        idx: idx,
                        title: $("#board_modified_title").val(),
                        writer: $("#board_modified_writer").val(),
                        content: $("#board_modified_content").val()
                    },
                    function (data) {
                        alert(data);
                        location.href='/board/detail.php?idx=' + idx;
                    })
        }
    })
})

//빈값 입력시 feedback 문구 띄우기
function modifiedVaildation() {
    var validation = true;
    var forms = {
        title: $("#board_modified_title").val(),
        writer: $("#board_modified_writer").val()
    };

    for (var x in forms) {
        if (forms[x] === "") {
            $("#modified_feedback_" + x).addClass("d-block");
            validation = false
        } else {
             $("#modified_feedback_" + x).removeClass("d-block");
        }
    }
    return validation;
}