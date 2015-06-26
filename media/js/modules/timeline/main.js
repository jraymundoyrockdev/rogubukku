$(document).ready(function () {

    var user = (serverCurrentUserTypeAdmin != '') ? '' : serverCurrentUser;

    loadTimeline(10, 0, user);

    $(window).scroll(function() {

        var scrollOffset = $('#offset').val();

        if ($(window).scrollTop() == $(document).height() - $(window).height()) {
            loadTimeline(10, scrollOffset, user);
            $('#offset').val(parseInt(scrollOffset) + 10);
        }
    });

});

function loadTimeline(limit, offset, userId) {

    var uri = '/api.timeline/transaction_timeline/' + limit + '/' + offset + '/' + userId;

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
}