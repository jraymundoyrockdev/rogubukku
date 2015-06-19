$(document).ready(function () {
    var user = (serverCurrentUserTypeAdmin != '') ? '' : serverCurrentUser;
    var transactionTotalUri = '/api.dashboard/transaction_totals/'+ serverYear + '/' + user;

    $.ajax({
        url: transactionTotalUri,
        method: 'get',
        dataTypa: 'json'
    }).done(function (result) {

        $.grep(result,
            function (apiRes) {
                $('.dash-print').hide().text(apiRes.print).fadeIn(1000);
                $('.dash-encode').hide().text(apiRes.encode).fadeIn(1000);
                $('.dash-all').hide().text(apiRes._all).fadeIn(1000);
                $('.dash-others').hide().text(apiRes.others).fadeIn(1000);
            }
        );
    });

    var uri = "//api.worldweatheronline.com/free/v1/weather.ashx?q=Washington&format=json&num_of_days=5&key=zbgkc4rxu5agfhf4rugfwcuk";

    $.get(uri, function (r) {
        $("#clientTransactionChart").shieldChart({
            theme: "bootstrap",
            primaryHeader: {
                text: "User Transaction Overview 2015"
            },
            exportOptions: {
                image: true,
                print: true
            },
            axisX: {
                categoricalValues: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
            },
            tooltipSettings: {
                chartBound: true,
                axisMarkers: {
                    enabled: true,
                    mode: 'xy'
                }
            },
            dataSeries: [{
                seriesType: 'bar',
                collectionAlias: "Transaction Monitor per month",
                data: [100, 320, 453, 234, 553, 665, 345, 123, 432, 545, 654, 988]
            }]
        });
    }, "jsonp"); // end jQuery.get()

});