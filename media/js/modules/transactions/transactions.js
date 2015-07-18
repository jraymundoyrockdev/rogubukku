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

$(document).ready(function () {
    if($('#transaction_date').val() != '')
    {
        $('#icon-calendar').click(function(){
            $('#transaction_date').val('');
        });

        $('#transaction_date').val(
                                $.formatDateTime(
                                    'mm/dd/yy g:ii a', 
                                    new Date(
                                        String($('#transaction_date').val()).replace(/\-/g, '/')
                                        )
                                    )
                                );
    }

    if($('#transaction').val() == 'encode' || $("#transaction").val() == 'others')
        $('.print_color').hide();

    if ($('table#transaction_list').length != 0) {
        transaction_list
        var t = $('#transaction_list').DataTable({
            "columnDefs": [{
                "searchable": false,
                "orderable": false,
                "targets": 3
            }],
            "order": [[2, "desc"]]
        });
    }

    var transactionId = null;

    $(".deleteLink").on('click', function (event, state) {

        transactionId = $(this).attr('id');
    });

    $('#deleteButtonYes').click(function(e) {

        $('#deleteModal').modal('hide');
            if(!transactionId) {
                return false;
            }

            $.post("/transactions/destroy/"+transactionId, {id: transactionId})
                    .done(function (data) {
                        $('#tr_'+transactionId).fadeOut(1000, function(){
                            $(this).remove();
                        });
                    });
    });

});



$(function () {
    $('#datetimepicker1').datetimepicker({maxDate:moment()});
    
    $('#datetimepicker1').on('dp.change dp.show', function (e) {
        
        $('#transactions_form').formValidation('revalidateField', 'transaction_date');
    });
});