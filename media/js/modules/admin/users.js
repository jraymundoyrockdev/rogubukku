$(".ministrySwitch").bootstrapSwitch();

$(".ministrySwitch").on('switchChange.bootstrapSwitch', function (event, state) {

    var userId = $(this).attr('id');
    var state = (state) ? 'Y' : 'N';

    $.post("/admin/users/changestatus", {id: userId, active_flag: state})
        .done(function (data) {

        });

});