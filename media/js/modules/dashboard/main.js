$(document).ready(function () {

    //TOTALS PER TRANSACTIONS
    var user = (serverCurrentUserTypeAdmin != '') ? '' : serverCurrentUser;
    var transactionTotalUri = '/api.dashboard/transaction_totals/' + serverYear + '/' + user;

    $.ajax({
        url: transactionTotalUri,
        method: 'get',
        dataTypa: 'json'
    }).done(function (result) {
        $('.dash-print').hide().text(result.print).fadeIn(1000);
        $('.dash-encode').hide().text(result.encode).fadeIn(1000);
        $('.dash-all').hide().text(result._all).fadeIn(1000);
        $('.dash-others').hide().text(result.others).fadeIn(1000);
    });

    //TOTAL TRANSACTIONS PER MONTH
    var perMonthUri = '/api.dashboard/transaction_totals_per_month/' + serverYear + '/' + user;

    var reportType = ['stepline', 'line'];

    $.get(perMonthUri, function (result) {
        var monthlyResult = $.map(result, function (value, key) {
            return parseInt(value);
        });

        $("#totalTransactionsPerMonth").shieldChart({
            theme: "bootstrap",
            primaryHeader: {
                text: "Transactions Monthly Overview"
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
                    mode: 'x'
                }
            },
            dataSeries: [{
                seriesType: reportType[Math.floor(Math.random() * reportType.length)],
                collectionAlias: "Total",
                data: monthlyResult
            }]
        });
    }, "json");

    if (serverCurrentUserTypeAdmin) {

        //TOTAL TRANSACTIONS PER MINISTRY
        var ministryURI = '/api.dashboard/transaction_totals_per_ministry/' + serverYear;

        $.get(ministryURI, function (result) {
            var ministries = $.map(result, function (value, key) {
                return value.ministry;
            });

            var ministryTotal = $.map(result, function (value, key) {
                return parseInt(value.total);
            });

            $("#totalTransactionsPerMinistry").shieldChart({
                theme: "bootstrap",
                primaryHeader: {
                    text: "Ministry Usage"
                },
                exportOptions: {
                    image: true,
                    print: true
                },
                axisX: {
                    categoricalValues: ministries,
                },
                isInverted: true,
                tooltipSettings: {
                    chartBound: true,
                    axisMarkers: {
                        enabled: true,
                        mode: 'x'
                    }
                },
                dataSeries: [{
                    seriesType: 'bar',
                    collectionAlias: "Total",
                    data: ministryTotal
                }]
            });
        }, "json");

    }

    setTimeout(function () {
        $('tspan ').each(function () {
            if ($(this).text() == 'Demo Version') {
                $(this).text('');
            }
        });
    }, 400);




});