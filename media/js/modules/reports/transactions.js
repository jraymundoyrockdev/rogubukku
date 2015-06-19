$(document).ready(function () {

    transactionsList
    var transactionTable = $('#transactionsList').DataTable({
        "columnDefs": [{
            "searchable": false,
            "orderable": false,
            "targets": 0
        }],
        "order": [[3, "desc"]]
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

            if (transactionTypeColumn.indexOf(transactionType) != -1 && ministryTypeColumn.indexOf(ministryType) != -1) {
                return true;
            }

            return false;

        }
    );

    $('#transactionType, #ministry').keyup(function () {
        transactionTable.draw();
    });

});

