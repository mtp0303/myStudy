function searchBoardData() {
    $.get("/board/",
    {
        page: 1,
        search: $("#search_text").val()
    })
}
    
//검색기능
$(document).ready(function () {
    $("#search").click(function () {
        searchBoardData();
    })
})

$(document).on('keyup', function (e) {
    if (e.which == 13) {
        searchBoardData();
    }
});