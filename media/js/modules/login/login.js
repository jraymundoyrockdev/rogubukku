$(".form_hover").hover(function () {
    $(".login-input").attr("autocomplete", "off");
}, function () {
    $(".login-input").attr("autocomplete", "on");
    $("#signin_username").focus();
});
