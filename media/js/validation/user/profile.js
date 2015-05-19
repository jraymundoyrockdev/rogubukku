$('#user_profile_form').formValidation({
    message: 'This value is not valid',

    icon: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
    },

    fields: {
        full_name: {
            row: '.full-name-error',
            validators: {
                notEmpty: {
                    message: 'Fullname is required.'
                },
            }   
        },
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
 .on('success.form.fv', function(e) {

        e.preventDefault();

        var $form = $(e.target);    
        var $that = $(this);

        $.post($form.attr('action'), $form.serialize(), function(result) {
            if(result.isSuccess){
                console.log(result);
                $that.formValidation('resetForm', false);
                $('.full_avatar_name').text(result.updatedUser);
                $("#profile_updated_status").show().delay(1000).fadeOut(2000);
            }
            else{
                $.each(result.errorFields, function(fieldName, fieldMessage) {
                    $that.formValidation('updateStatus', fieldName, 'INVALID', 'notEmpty');
                    $('small[data-fv-for=' + fieldName + ']').text(fieldMessage).addClass('removableFromAjax');
                });
            }
            
        }, 'json');
    });

  //Change Profile Picure
jQuery(document).off('click', '#click_dp');
jQuery(document).on('click', '#click_dp', function(e){
    
    $('#change_dp').click();

});

$("#change_dp").change(function(){
    bootbox.confirm(
        'Change Your Profile Picture?'
        , function(confirm_result) 
            {
                if(confirm_result === true)
                {
                    $("#form-change-dp").ajaxSubmit({
                        dataType:  'json',
                        success: function(result){
                                if(result.isSuccess)
                                {
                                    console.log('success');
                                }
                                else
                                {
                                    console.log('sorry hindi success');
                                }
                        }
                    });
                }
            }
    );
});