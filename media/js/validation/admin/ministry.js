$('#admin_ministry_form').formValidation({
    message: 'This value is not valid',

    icon: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
    },

    fields: {
        ministry: {
            row: '.ministry-error',
            validators: {
                notEmpty: {
                    message: 'Ministry is required.'
                },
            }
        },
    }
})
    .on('success.form.fv', function (e) {

        e.preventDefault();

        var $form = $(e.target);
        var $that = $(this);

        $.post($form.attr('action'), $form.serialize(), function (result) {

            if (result.isSuccess) {
                $that.formValidation('resetForm', true);
                $("#ministry_updated").show().delay(1000).fadeOut(2000);
                $('#ministryModal').modal('hide');

                var lastTrClass = $('#ministryList tr:last').attr("class");
                var newTrClass = (lastTrClass == 'sui-alt-row') ? 'sui-alt' : 'sui-alt-row';
                var rowcount = $('#ministryList tr').length + 1;
                $('#ministryList tr:last').after('<tr class="' + newTrClass + '"><td class="sui-cell">' + rowcount + '</td><td class="sui-cell">' + result.updatedMinistry + '</td></tr>');

            }
            else {
                $.each(result.errorFields, function (fieldName, fieldMessage) {
                    $that.formValidation('updateStatus', fieldName, 'INVALID', 'notEmpty');
                    $('small[data-fv-for=' + fieldName + ']').text(fieldMessage).addClass('removableFromAjax');
                });
            }

        }, 'json');
    });