$(document).ready(function () {

    var user = (serverCurrentUserTypeAdmin != '') ? '' : serverCurrentUser;
    var uri = '/api.timeline/transaction_timeline/10/0/' + user;

    $.ajax({
        url: uri,
        method: 'get',
        dataTypa: 'json'
    }).done(function (result) {
        $.each(result, function (key, transaction) {
            var timelineBox = timelineBoxBuilder.buildTimeline(transaction);
            $('.timeline').append(timelineBox);
        });
    });
});