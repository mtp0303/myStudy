//비회원 게시물 등록
$(document).ready(function () {
    $("#add_board_guset_submit").click(function () {
        console.log('hi');
        if (!$("#add_board_title").val() | !$("#add_board_writer").val()) {
            alert("제목과 글쓴이는 필수 입력사항 입니다");
        } else {
            $.post("../php/addBoard.php",
                    {
                        title: $("#add_board_title").val(),
                        writer: $("#add_board_writer").val(),
                        content: $("#add_board_text").val(),
                        board_password: $("#add_board_password").val()
                    },
                    function (data) {
                        alert(data);
                        location.href="/board?page=1/";
                    });
        }

    });
});

//회원 게시물 등록
$(document).ready(function () {
    $("#add_board_submit").click(function () {
        if (!$("#add_board_title").val() | !$("#add_board_writer").val()) {
            alert("제목과 글쓴이는 필수 입력사항 입니다");
        } else {
            $.post("../php/addBoard.php",
                    {
                        title: $("#add_board_title").val(),
                        writer: $("#add_board_writer").val(),
                        content: $("#add_board_text").val(),
                    },
                    function (data) {
                        alert(data);
                        location.href="/board?page=1/";
                    });
        }

    });
});

$(document).ready(function(){
    $("#cencle").click(function(){
        window.history.back();
    })
})