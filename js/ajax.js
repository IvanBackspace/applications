$(document).ready(function () {
    const phpValid = document.getElementById("phpValid")
    $("#applicationForm").submit(function (e) {
        e.preventDefault();

        var name = $("#name").val();
        var tel = $("#tel").val();
        var email = $("#email").val();

        $.ajax({
            url: "db/form.php",
            type: "POST",
            data: { name: name, email: email, tel: tel },
            success: function (response) {
                if (response === "valid") {
                    document.getElementById("popup").style.display = "block";
                    document.getElementById("myModal").style.display = "none";
                } else {
                    phpValid.innerHTML = response
                }
            }
        });
    });
});