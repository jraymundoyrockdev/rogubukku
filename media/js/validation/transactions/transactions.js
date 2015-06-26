FormValidation.Validator.printValidator = {
    validate: function (validator, $field, options) {
        if ($('#colored').val() == '0' && $('#non_colored').val() == '0') {
            $('#colored').val('');
            $('#non_colored').val(0);
            return {
                valid: false,
                message: 'At least one of Colored and Non-Colored fields needs to have a value greater than 0.'
            };

        }
        return true;
    }
};

$('#transactions_form').formValidation({
    message: 'This value is not valid',
    icon: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
        transaction: {
            row: '.transaction-type-error',
            validators: {
                notEmpty: {
                    message: 'Transaction is required.'
                }
            }
        },
        ministry_id: {
            row: '.ministry-id-error',
            validators: {
                notEmpty: {
                    message: 'Ministry is required.'
                }
            }
        },
        colored: {
            row: '.colored-error',
            validators: {
                integer: {
                    message: 'The value is not an integer'
                },
                notEmpty: {
                    message: 'Colored is required.'
                },
                stringLength: {
                    min: 1,
                    max: 3,
                    message: 'The Colored field must be between 1-999 only'
                },
                printValidator: {}
            }
        },
        non_colored: {
            row: '.non-colored-error',
            validators: {
                integer: {
                    message: 'The value is not an integer'
                },
                notEmpty: {
                    message: 'Non-colored is required.'
                },
                stringLength: {
                    min: 1,
                    max: 3,
                    message: 'The Non-Colored field must be between 1-999 only'
                },
                printValidator: {}

            }
        },
        reason: {
            row: '.reason-error',
            validators: {
                notEmpty: {
                    message: 'Reason is required.'
                },
                stringLength: {
                    min: 10,
                    max: 500,
                    message: 'The reason must be more than 10 and less than 500 characters long'
                }
            }
        },

        transaction_date: {
            row: '.transaction-date-error',
            validators: {
                notEmpty: {
                    message: 'Transaction date is required.'
                },
                date: {
                    format: 'MM/DD/YYYY g:ii a',
                    message: 'The value is not a valid date'
                }
            }
        }
    }
})
    .on('success.form.fv', function (e) {
        e.preventDefault();

        if ($('#transaction').val() == 'print') {
            $('#transactions_form').formValidation('updateStatus', 'colored', 'NOT_VALIDATED', 'printValidator');
            $('#transactions_form').formValidation('updateStatus', 'non_colored', 'NOT_VALIDATED', 'printValidator');
        }

        var $form = $(e.target);
        var $that = $(this);

        $.post($form.attr('action'), convertDateTime($form.serializeArray()), function (result) {

            if (result.isSuccess) {
                $that.formValidation('resetForm', true);
                var insertNewTransactionItem = '<li class="list-group-item list-number-0"> <b>'+result.lastTransaction.charAt(0).toUpperCase()+result.lastTransaction.slice(1).toLowerCase()+'</b> <i class="pull-right"><small>'+result.lastLoggedDate+'</small></i> <p class="list-group-item-text">'+result.lastReason+'</p> </li>';
                
                if($('#saveType').val() == 'saveAndExit')
                    window.location = "/dashboard";

                if($('#saveType').val() == 'update')
                    window.location = "/transactions/list";

                if($("#transaction_list li").eq(4).val() == 0)
                {
                    $("#transaction_list li").eq(4).remove();
                    $(insertNewTransactionItem).insertBefore('#transaction_list li:eq(0)')
                }
                else
                {
                    $( "#prepend_list" ).prepend( insertNewTransactionItem );
                }

                $("#no_transaction").fadeOut();
                $("#trasaction_created").fadeIn().hide(2000);
            }
            else {
                $.each(result.errorFields, function (fieldName, fieldMessage) {
                    $that.formValidation('updateStatus', fieldName, 'INVALID', 'notEmpty');
                    $('small[data-fv-for=' + fieldName + ']').text(fieldMessage).addClass('removableFromAjax');
                });
            }

            console.log(result);
        }, 'json');


    });