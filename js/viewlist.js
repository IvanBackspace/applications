$(document).ready(function() {
    $("#getDataButton").click(function() {
        $.ajax({
            url: "db/viewlist.php",
            method: "POST",
            data: {
                name: "значение_имени",
                email: "значение_email",
                phone: "значение_телефона"
            },
            success: function(response) {
                document.getElementById("list").innerHTML = response
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log("Ошибка: " + errorThrown);
            }
        });
    });
});