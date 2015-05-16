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
                    message: 'ministry is required.'
                },
            }   
        },
    }
})
 .on('success.form.fv', function(e) {

        e.preventDefault();

        var $form = $(e.target);    
        var $that = $(this);

        $.post($form.attr('action'), $form.serialize(), function(result) {
            
            if(result.isSuccess){
                console.log(result);
                $that.formValidation('resetForm', true);
                $('.ministry_name').text(result.updatedMinistry);
                $("#ministry_updated").show().delay(1000).fadeOut(2000);
            }
            else{
                $.each(result.errorFields, function(fieldName, fieldMessage) {
                    $that.formValidation('updateStatus', fieldName, 'INVALID', 'notEmpty');
                    $('small[data-fv-for=' + fieldName + ']').text(fieldMessage).addClass('removableFromAjax');
                });
            }
            
        }, 'json');
    });