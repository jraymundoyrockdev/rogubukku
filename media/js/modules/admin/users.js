$(".ministrySwitch").bootstrapSwitch();

$(".ministrySwitch").on('switchChange.bootstrapSwitch', function (event, state) {

    var userId = $(this).attr('id');

    $.post("/admin/users/changestatus", {userId: userId, activeFlag: state})
        .done(function (data) {

        });

});