$("body").tooltip({selector: '[data-toggle=tooltip]'});

$("#transaction").change(function () {
    $('.input_print').val(0);

    if ($(this).val() == 'encode' || $(this).val() == 'others') {
        $('.print_color').fadeOut();
        $('#transactions_form').formValidation('updateStatus', 'colored', 'VALIDATED');
    }

    if ($(this).val() == 'print' || $(this).val() == 'all') {
        $('.print_color').fadeIn();
        $('#transactions_form').formValidation('updateStatus', 'colored', 'NOT_VALIDATED', 'notEmpty');
        $('#transactions_form').formValidation('updateStatus', 'non_colored', 'NOT_VALIDATED', 'notEmpty');
    }
});
$('#datetimepicker1').click(function(){
        $('#transaction_date').val('');
    });
$(function () {
    $('#datetimepicker1').datetimepicker();
    
    $('#datetimepicker1').on('dp.change dp.show', function (e) {
        
        //$('#transactions_form').formValidation('revalidateField', 'transaction_date');
    });
});

$('.saveTransaction').click(function () {
    $('#saveType').val($(this).attr('id'))
});

function convertDateTime(dateTime) {
    for (var item in dateTime) {
        if (dateTime[item].name == "transaction_date") {
            dateTime[item].value = $.formatDateTime('yy-mm-dd hh:ii:ss', new Date(dateTime[item].value));
            continue;
        }
    }
    return dateTime;
}

var insertNewTransactionItem = '<li class="list-group-item "><b>test</b> <i class="pull-right"><small>test</small></i> <p class="list-group-item-text"></p></li>'


$(document).ready(function () {
    if ($('table#transaction_list').length != 0) {
        transaction_list
        var t = $('#transaction_list').DataTable({
            "columnDefs": [{
                "searchable": false,
                "orderable": false,
                "targets": 0
            }],
            "order": [[3, "desc"]]
        });

        t.on('order.dt search.dt', function () {
            t.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();

    }
});
