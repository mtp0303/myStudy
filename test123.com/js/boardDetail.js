//board 수정
$(document).ready(function () {
    $("#board_password_submit").click(function () {
        var re = /\d+/;
        var idx = parseInt($("#board_content_idx").text().match(re));
        $.post("../php/boardPasswordCheck.php",
                {
                    idx: idx,
                    password: $("#board_check_password").val()
                }, function (data) {
            if (data) {
                location.href='/board/modify.php?idx=' + idx;
            } else {
                alert("비밀번호가 맞지 않습니다");
            }
        })
    })
})

//// 게시글 삭제
$(document).ready(function () {
    $("#board_delect_password_submit").click(function () {
        var re = /\d+/;
        var idx = parseInt($("#board_content_idx").text().match(re));
        $.post("../php/boardDelete.php",
                {
                    password: $("#board_delete_check_password").val(),
                    idx: idx
                }, function (data) {
            if (data === "true") {
                alert("게시글이 삭제되었습니다");
                location.href='/board?page=1';
            } else {
                alert("비밀번호를 확인해 주세요");
            }
        })
    })
})

//다음글 이동
$(document).ready(function(){
    $("#board_content_next_page").click(function(){
        var re = /\d+/;
        var idx = parseInt($("#board_content_idx").text().match(re)) + 1
        $.get("/php/findBoard.php",
        {
            idx: idx,
            move: 'next'
        },function(data){
            console.log(data);
            if(data === ""){
                alert("다음글이 없습니다");
            } else {
                var board_data = JSON.parse(data);
                location.href='/board/detail.php?idx=' + board_data['idx'];
            }
        })
    })
})

//이전글 이동
$(document).ready(function(){
    $("#board_content_back_page").click(function(){
        var re = /\d+/;
        var idx = parseInt($("#board_content_idx").text().match(re)) - 1
        console.log(idx);
        $.get("/php/findBoard.php",
        {
            idx: idx,
            move: 'back'
        },function(data){
            console.log(data);
            if(data === ""){
                alert("마지막 게시글 입니다");
            } else {
                var board_data = JSON.parse(data);
                location.href='/board/detail.php?idx=' + board_data['idx'];
            }
        })
    })
})

