$(document).ready(function () {

    transactionsList
    var transactionTable = $('#transactionsList').DataTable({
        "columnDefs": [{
            "searchable": false,
            "orderable": false,
            "targets": 0
        }],
        "order": [[6, "desc"]]
    });

    transactionTable.on('order.dt search.dt', function () {
        transactionTable.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1;
        });
    }).draw();


    $.fn.dataTable.ext.search.push(
        function (settings, data, dataIndex) {

            var transactionType = $('#transactionType').val().toLowerCase();
            var transactionTypeColumn = data[1].toLowerCase();

            var ministryType = $('#ministry').val().toLowerCase();
            var ministryTypeColumn = data[5].toLowerCase();

            var loggedBy = $('#loggedBy').length;


            if (loggedBy) {
                var loggedBy = $('#loggedBy').val().toLowerCase()
                var loggedByColumn = data[8].toLowerCase();
                if (transactionTypeColumn.indexOf(transactionType) != -1 && ministryTypeColumn.indexOf(ministryType) != -1 && loggedByColumn.indexOf(loggedBy) != -1) {
                    return true;
                }
            }

            if (!loggedBy) {
                if (transactionTypeColumn.indexOf(transactionType) != -1 && ministryTypeColumn.indexOf(ministryType) != -1) {
                    return true;
                }
            }

            return false;
        }
    );

    $('#transactionType, #ministry, #loggedBy').keyup(function () {
        transactionTable.draw();
    });


    $('#btnPrint').click(function (e) {
        e.preventDefault();

        var dateFrom = ($('#dateFrom').val() != '') ? convert12HourTo24Hours($('#dateFrom').val()) : get24HoursNow();
        var dateTo = ($('#dateTo').val() != '') ? convert12HourTo24Hours($('#dateTo').val()) : get24HoursNow();

        var url = '/print_report/transactions?transaction_type=' +
            $('#transactionType').val() +
            '&ministry=' + $('#ministry').val() +
            '&user=' + $('#loggedBy').val() +
            '&dateFrom=' + dateFrom +
            '&dateTo=' + dateTo;

        window.open(url, '_blank');
    });

    $('#dateFromDatepicker').datetimepicker({maxDate: moment()});
    $('#dateToDatepicker').datetimepicker();

    function convert12HourTo24Hours(dateTime) {
        return $.formatDateTime('yy-mm-dd hh:ii:ss', new Date(dateTime));
    }

    function get24HoursNow() {
        return $.formatDateTime('yy-mm-dd hh:ii:ss', new Date());
    }
});