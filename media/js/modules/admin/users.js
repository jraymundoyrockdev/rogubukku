$(".ministrySwitch").click(function () {

    var userId = $(this).attr('id');
    var isChecked = $(this).is(':checked') ? 'Y' : 'N';

    $.post("/admin/users/changestatus", {userId: userId, activeFlag: isChecked})
        .done(function (data) {

        });

});