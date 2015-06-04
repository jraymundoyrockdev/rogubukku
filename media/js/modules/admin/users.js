$(".ministrySwitch").bootstrapSwitch();

$(".ministrySwitch").on('switchChange.bootstrapSwitch', function (event, state) {

    var userId = $(this).attr('id');

    $.post("/admin/users/changestatus", {id: userId, active_flag: state})
        .done(function (data) {

        });

});