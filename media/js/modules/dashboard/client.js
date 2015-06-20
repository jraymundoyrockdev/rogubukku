$(document).ready(function () {
    var user = (serverCurrentUserTypeAdmin != '') ? '' : serverCurrentUser;
    var transactionTotalUri = '/api.dashboard/transaction_totals/' + serverYear + '/' + user;

    $.ajax({
        url: transactionTotalUri,
        method: 'get',
        dataTypa: 'json'
    }).done(function (result) {
        $('.dash-print').hide().text(result.print).fadeIn(1000);
        $('.dash-encode').hide().text(result.encode).fadeIn(1000);
        $('.dash-all'). hide().text(result._all).fadeIn(1000);
        $('.dash-others').hide().text(result.others).fadeIn(1000);
    });

    var transactionTotalUri = '/api.dashboard/transaction_totals_per_month/' + serverYear + '/' + user;

    $.get(transactionTotalUri, function (result) {
        var monthlyResult = $.map(result, function (value, key) {
            return parseInt(value);
        });

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
                data: monthlyResult
            }]
        });
    }, "json"); // end jQuery.get()

});