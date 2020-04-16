$(document).ready(function () {
    $("#btnLogin").click(function () {
       $(location).attr('href','../login.php')
        //alert("Handler login clicked");
    });

    $("#btnSubmit").click(function () {
        $(location).attr('href','./inquiry.html')
    });
});
