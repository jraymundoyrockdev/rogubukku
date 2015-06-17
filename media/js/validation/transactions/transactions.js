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
            row: '.ministry-type-error',
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
                }
            }
        },

        non_colored: {
            row: '.non-colored-error',
            validators: {
                integer: {
                    message: 'The value is not an integer'
                }
            }
        },

        reason: {
            row: '.reason-error',
            validators: {
                notEmpty: {
                    message: 'Reason is required.'
                },

                stringLength: {
                    min: 5,
                    max: 500,
                    message: 'The full name must be more than 5 and less than 500 characters long'
                },
            }
        },
        
        /*transaction_date: {
            row: '.transaction-date-error',
            validators: {
                notEmpty: {
                    message: 'Transaction date is required.'
                }
            }
        }*/
    }
})
.on('success.form.fv', function(e) {

    e.preventDefault();

    var $form = $(e.target);    
    var $that = $(this);

    $(window).scrollTop();
    $("html, body").animate({
        scrollTop:0
     },"slow");

    $.post($form.attr('action'), $form.serialize(), function(result) {

        var print_color = $('.print_color');

        if(result.isSuccess){
            $("#transaction_failed").fadeOut();
            $that.formValidation('resetForm', true);
            $("#trasaction_created").show().delay(1000).fadeOut(2000);

            print_color.removeClass('has-success');
            print_color.removeClass('has-error');
            
            $('.colored_fields').fadeOut();

            if(result.save_type == 'save_exit')
                setTimeout(function(){  window.location.href="http://rogubukku.com/dashboard"; }, 2000);
            //else
              //  setTimeout(function(){  window.location.reload(); }, 2000);
        }
        else {
            $.each(result.errorFields, function(fieldName, fieldMessage) {
                $that.formValidation('updateStatus', fieldName, 'INVALID', 'notEmpty');
                $('small[data-fv-for=' + fieldName + ']').text(fieldMessage).addClass('removableFromAjax');
            });

            if(result.transaction != 'encode' && result.transaction!= 'others')
            {
                if(result.colored == '' && result.nonColored == '')
                {
                    
                    var non_colored = $( "i[data-fv-icon-for*='non_colored']" );
                    var colored = $( "i[data-fv-icon-for*='colored']" );

                    $('.colored_fields').fadeIn();

                    non_colored.removeClass("glyphicon-ok");
                    non_colored.addClass("glyphicon-remove");

                    colored.removeClass("glyphicon-ok");
                    colored.addClass("glyphicon-remove");

                    

                    print_color.addClass('has-feedback has-error');
                }
            }

            $("#transaction_failed").show().delay(1000);
        }

        console.log(result);

    }, 'json');
    
    
   
});