$.ajax({
    url: "select.php",
    success: function (val) {
        $("#content").html(val);
    }
});

$("#save").click(function () {
    $title = $("#title").val()
    $description = $("#description").val()

    $.ajax({
        url: "insert.php",
        method: "POST",
        data: {
            title: $title,
            description: $description,
        },
        success: function (_) {
            $("#insertModal").modal("hide")
            $.ajax({
                url: "select.php",
                success: function (val) {
                    $("#content").html(val);
                }
            });
        }
    })
})