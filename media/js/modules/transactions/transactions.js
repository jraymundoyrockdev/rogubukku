
//SET COLORED AND NONCOLORED TOOLTIP
$("body").tooltip({ selector: '[data-toggle=tooltip]' });

//SET TRANSACTIONS NAV TO ACTIVE 
$('#nav_dashboard').removeAttr('class');
$('#nav_reports').removeAttr('class');
$('#nav_transactions').addClass('active');

//HIDE COLORED AND NONCOLORED FIELDS WHEN SELECTING ENCODE AND OTHERS AS TRANSACTION TYPE
$("#transaction").change(function(){

	var transaction_value = $(this).val();

	if(transaction_value == 'encode' || transaction_value == 'others'){
        $("#transaction_failed").fadeOut();
		$('.print_color').fadeOut();

        var non_colored = $( "i[data-fv-icon-for*='non_colored']" );
        var colored = $( "i[data-fv-icon-for*='colored']" );

        non_colored.removeClass("glyphicon-remove");
        colored.removeClass("glyphicon-remove");

        $('.print_color').removeClass('has-feedback has-error');
        $('.colored_fields_input').val('');
        $('.colored_fields').fadeOut();
    }
	
	else
    {
        var colored_small = $( "small[data-fv-icon-for*='colored']" );

        $('.colored-error').removeClass('has-feedback has-success');
        $('.non-colored-error').removeClass('has-feedback has-success');
        $('.print_color').removeClass('has-success');
        
		$('.print_color').fadeIn();
    }
});

//SET DATETIME PICKER OPTIONS
$(function () {
    $('#datetimepicker1').datetimepicker({
        //defaultDate: Date(),
        disabledDates: [
            moment("12/25/2013"),
            new Date(2013, 11 - 1, 21),
            "11/22/2013 00:53"
        ],
        minDate:Date(),
        ignoreReadonly : true
    });

    $('#datetimepicker1').click(function(){
        $('.transaction_date_form').removeClass('has-feedback has-error');
        $('.transaction_date_form').addClass('has-feedback has-success');
        $('.transaction_date').fadeOut()
    });
});

//SAVE TRANSACTION BUTTON
$('.save_transaction').click(function(){
    var save_transaction_button_value = ($(this).val());

    $('#save_transaction_type').val(save_transaction_button_value);
});

$('.colored_fields_input').keyup(function(){

    var colored_fields_value = ($(this).val());
    var non_colored = $( "i[data-fv-icon-for*='non_colored']" );
    var colored = $( "i[data-fv-icon-for*='colored']" );
    var print_color = $('.print_color');
    var colored_fields = $('.colored_fields');

    colorFieldIsNumeric(colored_fields_value, non_colored, colored, print_color);
    
    colored_fields.fadeOut();

    if(!$(this).val())//if null
    {
        print_color.addClass('has-error');
        print_color.removeClass('has-success');

        non_colored.addClass("glyphicon-remove");
        colored.addClass("glyphicon-remove");

        non_colored.removeClass("glyphicon-ok");
        colored.removeClass("glyphicon-ok");

        colored_fields.fadeIn();
    }

});

function colorFieldIsNumeric(colored_fields_value, non_colored, colored, print_color)
{
    if($.isNumeric(colored_fields_value))
    {
        print_color.removeClass('has-error');
        print_color.addClass('has-success');

        non_colored.removeClass("glyphicon-remove");
        colored.removeClass("glyphicon-remove");

        non_colored.addClass("glyphicon-ok");
        colored.addClass("glyphicon-ok");
    }
}