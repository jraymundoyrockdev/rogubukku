function loadCustomerDetails() {
    var url = '/crm/panel-customer-details';
    if (customer_code == '-1') {
        url = '/crm/panel-new-customer';
    }
    $('#contact-back').load(url, {'code': customer_code}, function (data) {

        if (url == '/crm/panel-new-customer') {
            $('.customer-front').removeClass('face front');
            $('.customer-front').addClass('face back');

            $('.customer-back').removeClass('face back');
            $('.customer-back').addClass('face front');
        }

        //Adjust tile positions
        adjustCustomerDetailsTiles();
        adjustSecondRowTiles();

        //Change the dropdown in to button dropdown
        $('#contact-back select').selectpicker({style: 'btn-sm', 'noneSelectedText': ''});

        // Convert all the SELECT's to some nice bootstrappy looking drop-downs
        if (customer_code != '-1') { // Only for existing customers at the moment
            $('.avatar').unbind('click').click(function () {
                // Show the image edit modal, select from the Gravatar, blank image or uploaded image
                $('#image_edit_modal').load('/crm/' + customer_code + '/images', function (data) {
                    // Show the modal
                    $('#image_edit_modal').modal('show');
                    $('#image_upload').fileinput({
                        browseClass: 'btn btn-primary btn-block',
                        showCaption: false,
                        showRemove: false,
                        showUpload: false,
                        previewSettings: {
                            image: {width: "auto"}
                        }
                    });
                    $('#image_upload').ajaxfileupload({
                        'action': '/crm/' + customer_code + '/images',
                        'params': {
                            'code': customer_code,
                            '_token': $('meta[name="csrf-token"]').attr('content')
                        },
                        'onComplete': function (response) {
                            if (JSON.stringify(response.status) == "false") {
                                $("#image_upload_error").html(JSON.stringify(response.message));
                                $(".file-preview").addClass("hidden");
                            }
                            $("#image_upload").click(function () {
                                $("#image_upload_error").empty();
                                $("div").removeClass("hidden");
                            });
                        },
                        'valid_extensions': ['gif', 'png', 'jpg', 'jpeg', 'bmp']
                    });
                    $('#image_upload').click(function () {
                        $('input:radio[name=avatar]').filter('[value=custom]').prop('checked', true);
                    });
                    $('#save_image_settings').click(function () {
                        var avatar = 'current';
                        $('input[name="avatar"]').each(function (index, value) {
                            if ($(this).is(':checked')) avatar = $(this).val();
                        });
                        if (avatar == 'current') {
                            $('#image_edit_modal').modal('hide');
                        }
                        if (avatar != 'custom') {
                            $.ajax('/crm/' + customer_code + '/images/1', {
                                'type': 'PUT',
                                'data': {
                                    'code': customer_code,
                                    'avatar': avatar
                                }
                            }).done(function (data) {
                                // Update completed, refresh the customers details
                                $('#image_edit_modal').modal('hide');
                                // Serve as flag the the image has been updated
                                $('#contact-back').attr("img", "1");
                                loadCustomerDetails();

                            });
                        } else {
                            $('#image_edit_modal').modal('hide');
                            // Serve as flag the the image has been updated
                            $('#contact-back').attr("img", "1");
                            loadCustomerDetails();

                        }
                    });
                })
            });

        }
        $('#birth_date').datepicker({
            'format': 'yyyy-mm-dd'
        }).on('changeDate', function (ev) {
            // Close the date picker as soon as a selection has been made
            $(this).datepicker('hide');
        });
        $('#country').change(function () {
            switch ($('#country').val()) {
                case 'NZ':
                    $('#state').val('');
                    $('#state').prop('disabled', true);
                    $('#state').selectpicker('refresh');
                    break;
                default:
                    $('#state').prop('disabled', false);
                    $('#state').selectpicker('refresh');
                    break;
            }
            ;
            $('#state').selectpicker('render');
        });
        // Tag manager
        $.get('/crm/' + customer_code + '/tags', function (data) {
            $('.tm-input').tagsManager({
                CapitalizeFirstLetter: true,
                prefilled: data,
                AjaxPush: '/crm/' + customer_code + '/tags',
                AjaxPushAllTags: true
            });
        });
        // Card flipper
        $('#flip-edit').click(function () {
            $('#contact-back').toggleClass('flipped');
            $('#country').change();

            //Adjust tile positions
            adjustCustomerDetailsTiles();
            adjustSecondRowTiles();
        });
        // Save button
        $('#contact-save').click(function () {
            // Update the contacts details
            $('.validation-error-profiles').empty().parent().removeClass('has-error');
            $('.error-gender').removeClass('error');
            $('.error-state').removeClass('error');
            var code = $('#code').val();
            $.ajax({
                type: 'POST',
                url: (code == '') ? '/crm/create' : '/crm/update/' + code,
                data: $('#customer_details').serialize(),
                dataType: 'json'
            }).done(function (data) {
                if (data.code) {
                    customer_code = data.code;
                }
                loadCustomerDetails();
            }).fail(function (data) {

                if (data.responseJSON.fields.type) {
                    $('.error-gender').addClass('error');
                }

                if (data.responseJSON.fields.state) {
                    $('.error-state').addClass('error')
                }

                showCrmFormErrors(JSON.parse(data.responseText).fields, "profiles");
            });
        });

        $('#contact-cancel').click(function () {
            if (customer_code == '-1') {
                window.location.href = '/crm';
                return;
            }
            $('#contact-back').toggleClass('flipped');

            //Adjust tile positions
            adjustCustomerDetailsTiles();
            adjustSecondRowTiles();

        });

        // Load the payment plans, options, appointments and transactions
        // Is this a new customer? Flip the top card to start
        loadNotes(location.pathname);
        loadPaymentPlans();
        loadPaymentOptions();


        // Also checks if the image flag has been set. This is to avoid displaying the customer details
        if ((customer_code != '-1') && ($('#contact-back').attr('img')) != 1) {
            $('#contact-back').attr("img", "0");
        }

        $('#contact-back select').selectpicker({style: 'btn-sm'});
    });
    $(window).resize(function () {
        adjustCustomerDetailsTiles();
        adjustSecondRowTiles();
    });

}

/**
 * Register events for the forms on this page, to save re-registering them each time the form loads
 *
 * Allows for delegation of events for descendant elements which may not yet be loaded
 */
function registerEvents() {
    $('#payment_options').on('click', '#option-save', handleOptionSave);
    $('#payment_options').on('click', '#plan-cancel', handleOptionCancel);
    $('#payment_options').on('click', '#add_new_option', handleOptionAdd);
    $('#payment_options').on('click', '.edit_option', handleOptionEdit);
    $('#payment_options').on('click', 'input[name="option_type"]', showHidePaymentOptions);

    $('#payment_plans').on('click', '#plan-save', handlePlanSave);

    $('#notes').on('click', '#add_new_note', addNewNote);
    $('#notes').on('click', '.note-flip-edit', editNote);
    $('#notes').on('click', '#note-cancel', handleNoteCancel);
    $('#notes').on('click', '#note-save', handleNoteSave);
    $("#notes").on('click', '#note_list_cancel', handleNoteListCancel);
    $("#editable").on('blur', '.note', updateNote);
    $("#editable").on('focus', '.note', setOldNote);
}

/**
 * Return the login form if session goes stale
 */

function checkFormResponse(status) {
    if (status == 401) {
        window.location = '/login';
    }
}

/**
 * Handle the editing of an existing payment option
 */
function handleOptionEdit() {
    var optionCode = $(this).attr('data-code');
    $('#option-back .back').load('/crm/' + customer_code + '/options/' + optionCode + '/edit', function (data, status, xhr) {
        checkFormResponse(xhr.status);
        showHidePaymentOptions();
        toggleCardFlip($('#payment_options'));
        $('#option-back').addClass('flipped');
        $('#option-back select').selectpicker({style: 'btn-sm'});
        adjustThirdRowTiles();
    });
}

/**
 * Handle the creation of a new payment option
 */
function handleOptionAdd() {
    $('#option-back .back').load('/crm/' + customer_code + '/options/create', function (data, status, xhr) {
        checkFormResponse(xhr.status);
        $('input[name="option_type"]').click(showHidePaymentOptions);
        toggleCardFlip($('#payment_options'));
        $('#option-back').addClass('flipped');
        $('#option-back select').selectpicker({style: 'btn-sm'});
        showHidePaymentOptions();
        $('.card-date').removeClass('error has-error');
        adjustThirdRowTiles();
    });
}

/**
 * Handle the canceling of a payment option edit or create
 */
function handleOptionCancel() {
    toggleCardFlip($('#payment_options'));
    $('#option-back').removeClass('flipped');
    adjustThirdRowTiles();
}

/**
 * Save handler
 */
function handleOptionSave() {
    resetFormErrors("options");
    $('.card-date').removeClass('error has-error');
    if ($('#cc_option_code').val()) {
        var type = 'PUT';
        var url = '/crm/' + customer_code + '/options/' + $('#cc_option_code').val();
    }

    $.ajax(url || '/crm/' + customer_code + '/options', {
        type: type || 'POST',
        data: {
            code: '',
            type: ($('#option_type_cc').is(':checked')) ? 'CreditCard' : 'BS',
            number: ($('#option_type_cc').is(':checked')) ? $('#number').val() : $('#bank_number').val(),
            accessory: ($('#option_type_cc').is(':checked')) ? $('select[name="month"]').val() + $('select[name="year"]').val() : $('#bank_bsb').val(),
            cvv2: ($('#option_type_cc').is(':checked')) ? $('#cvv2').val() : '',
            name: ($('#option_type_cc').is(':checked')) ? $('#name').val() : $('#bank_name').val()
        },
        dataType: 'json'

    }).done(function () {
        toggleCardFlip($('#payment_options'));
        $('#option-back').removeClass('flipped');
        loadPaymentOptions();
        flashMessage('Payment option saved');
    }).fail(function (result) {
        showCrmFormErrors(JSON.parse(result.responseText).fields, "options");

        //custom error for date
        if (result.responseJSON.fields.accessory) {
            $('.card-date').addClass('error has-error');
        }
    });
}

/**
 * Toggle the classes when a card is flipped
 */
function toggleCardFlip(selector) {
    selector.toggleClass('col-xs-12 col-sm-12 col-md-12 col-xs-4 col-sm-4 col-md-4');
}

/**
 * Show or hide the payment options based on whether the payment option is selected
 */
function showHidePaymentOptions() {
    if ($('#option_type_cc').is(':checked')) {
        $('.cc_section').show();
        $('.bank_section').hide();
        $('.card-date').removeClass('error');
    } else {
        $('.cc_section').hide();
        $('.bank_section').show();
    }
}

function handlePlanSave() {
    resetFormErrors("plans");

    if ($('input[name="id"]').val()) {
        var type = 'PUT';
        var url = '/crm/' + customer_code + '/plans/' + $('input[name="id"]').val();
    }

    $('.error_paymentOption').removeClass('error has-error');
    $('.error_billingCycle').removeClass('error has-error');

    $.ajax(url || '/crm/' + customer_code + '/plans', {
        type: type || 'POST',
        data: {
            'amount': ($('#amount').val()) ? Math.floor($('#amount').val() * 100) : '',
            'billingCycleCode': $('select[name="billingCycle"]').val(),
            'paymentOption': $('#paymentOption').val()
        }
    }).done(function () {
        $('#plan-back').removeClass('flipped');
        toggleCardFlip($('#payment_plans'));
        loadPaymentPlans();
        flashMessage('Payment plan saved');
    }).fail(function (result) {

        if (result.responseJSON.fields.paymentOption) {
            $('.error_paymentOption').addClass('error has-error');
        }

        if (result.responseJSON.fields.billingCycleCode) {
            $('.error_billingCycle').addClass('error has-error');
        }

        showCrmFormErrors(JSON.parse(result.responseText).fields, "plans");
    });
}

/**
 * Load customer payment options
 */
function loadPaymentOptions() {

    if (customer_code == '-1') {
        return;
    }
    $('#payment_options').load('/crm/' + customer_code + '/options', function (data, status, xhr) {

        adjustCustomerDetailsTiles();
        adjustSecondRowTiles();

        // handle 404 errors
        if (status === 'error') {
            $(this).html(data);
        }
        checkForPaymentOption();
        adjustThirdRowTiles();
    });
}

function loadPaymentPlans() {

    $('#paymentPlansListLoadingMessage').show();
    $('.paymentPlansList').hide();

    if (customer_code == '-1') {
        console.log('code was -1');
        return;
    }

    // Need payment plans before we show any ability to add or change plans

    $('#payment_plans').load('/crm/' + customer_code + '/plans', function (data, status, xhr) {

        adjustCustomerDetailsTiles();
        adjustSecondRowTiles();

        $('#paymentPlansListLoadingMessage').hide();
        $('.paymentPlansList').show();

        // handle 404 errors
        if (status === 'error') {
            $(this).html(data);
            checkForPaymentOption();
        }
        console.log(data);
        console.log('Loaded payment plans');
        adjustSecondRowTiles();
        // Card flipper
        $('.plan-flip-edit').click(function () {
            var customerPlan = $(this).attr('data-plan');
            $('#plan-back .back').load('/crm/' + customer_code + '/plans/' + customerPlan + '/edit', function (data) {
                toggleCardFlip($('#payment_plans'));
                $('#plan-back').addClass('flipped');
                $('#plan-back select').selectpicker({
                    style: 'btn-sm',
                    'noneSelectedText': ''
                });
                $('#plan-cancel').click(function () {
                    toggleCardFlip($('#payment_plans'));
                    $('#plan-back').removeClass('flipped');
                });
            });
        });
        $('#add_new_plan').click(function () {
            // Load a new payment plan panel
            $('#plan-back .back').load('/crm/' + customer_code + '/plans/create', function (data) {
                toggleCardFlip($('#payment_plans'));
                $('#plan-back').addClass('flipped');
                adjustSecondRowTiles();
                $('#plan-back select').selectpicker({
                    style: 'btn-sm',
                    'noneSelectedText': ''
                });
                $('#plan-cancel').click(function () {
                    toggleCardFlip($('#payment_plans'));
                    $('#plan-back').removeClass('flipped');
                    adjustSecondRowTiles();
                });
            });
        });
    });
}

/**
 * Load customer notes
 */
function loadNotes(pathname) {
    if (customer_code == '-1') {
        return;
    }
    if (pathname == '/crm/' + customer_code + '/notes') {
        window.location = pathname;
    }

    $('#notes').load('/crm/' + customer_code + '/notes?limit=3');
    adjustThirdRowTiles();
}

function addNewNote() {

    $('#notes-back .back').load('/crm/' + customer_code + '/notes/create', function (data) {
        toggleCardFlip($('#notes'));
        $('#notes-back').addClass('flipped');
        adjustThirdRowTiles();

        //flip need to finish first before focusing
        setTimeout(function () {
            $('#note').focus();
        }, 700);

    });

}

/**
 * Handle the modification of an existing note
 */
function editNote() {

    var noteCode = $(this).attr('data-note');

    $('#notes-back .back').load('/crm/' + customer_code + '/notes/' + noteCode + '/edit', function (data, status, xhr) {
        checkFormResponse(xhr.status);
        toggleCardFlip($('#notes'));
        $('#notes-back').addClass('flipped');
        adjustThirdRowTiles();

        //flip need to finish first before focusing
        setTimeout(function () {
            $('#note').focus();
        }, 700);

    });
}

/**
 * Handle the canceling of notes edit or create
 */
function handleNoteCancel() {

    toggleCardFlip($('#notes'));
    $('#notes-back').removeClass('flipped');
    adjustThirdRowTiles();
}

function handleNoteListCancel() {

    window.location = '/crm/update/' + customer_code;
}

/**
 * Save handler
 */
function handleNoteSave() {
    resetFormErrors("notes");
    if ($('#note_code').val()) {
        var type = 'PUT';
        var url = '/crm/' + customer_code + '/notes/' + $('#note_code').val();
    }

    $.ajax(url || '/crm/' + customer_code + '/notes', {
        type: type || 'POST',
        data: {
            note: $('#note').val()
        },
        dataType: 'json'

    }).done(function () {
        toggleCardFlip($('#notes'));
        $('#notes-back').removeClass('flipped');
        loadNotes(location.pathname);
        flashMessage('Note saved');
    }).fail(function (result) {
        showCrmFormErrors(JSON.parse(result.responseText).fields, "notes");
    });
}

function setOldNote() {
    $(this).data('oldValue', $(this).text()).text();
}

function updateNote() {

    var noteCode = $(this).attr("id");
    var newNote = $(this).text();
    var oldNote = $(this).data('oldValue');
    if (newNote != oldNote) {
        $.ajax('/crm/' + customer_code + '/notes/' + noteCode, {
            type: 'PUT',
            data: {
                note: newNote
            },
            dataType: 'json'
        }).done(function () {
            flashMessage('Note saved');
        }).fail(function () {
            $('#' + noteCode).text(oldNote);
        });
    }
}

/**
 * Flash the message to the screen. Should probably be refactored to use css animations
 */
function flashMessage(message, type) {
    type = (typeof type === "undefined") ? "success" : type;
    $('.flash-message').addClass('alert-' + type).text(message).fadeIn();
    setTimeout(function () {
        $('.flash-message').fadeOut().removeClass('alert-' + type).empty()
    }, 3000);

}

/**
 * Check if customer has an existing payment option.
 */
function checkForPaymentOption() {
    $('#add_new_plan').prop('disabled', false);
    $('#add_new_membership').prop('disabled', false);

    if ($("#payment_options .no-items")[0] || $("#add_new_option").prop("disabled")) {
        $('#add_new_plan').prop('disabled', true);
        $('#add_new_membership').prop('disabled', true)
    }
}

function main() {
    loadCustomerDetails();
    registerEvents();
}

/**
 * Check the height of the component and adjust it accordingly
 */
function adjustCustomerDetailsTiles() {
    var margin = 20;

    var customerDetailsHeight = 0;
    if ($('#contact-back').hasClass('flipped')) {
        customerDetailsHeight = $('.flip .back .panel-default').height();
        $('.flip').animate({height: customerDetailsHeight + margin}, 200);
    }
    else {
        customerDetailsHeight = $('.flip .front .panel-default').height();
        $('.flip').animate({height: customerDetailsHeight + margin}, 200);
    }
}

/**
 * Check the height of the second row components and adjust them accordingly
 */
function adjustSecondRowTiles() {
    var margin = 20;

    var paymentPlansHeight = 0;
    if ($('#plan-back').hasClass('flipped'))
        paymentPlansHeight = $('#payment_plans .back .panel-success').height();
    else
        paymentPlansHeight = $('#payment_plans .front .panel').height();

    var customerMembershipHeight = 0;
    if ($('#membership-back').hasClass('flipped'))
        customerMembershipHeight = $('#membership .back .panel-primary').height();
    else
        customerMembershipHeight = $('#membership .front .panel').height();

    if (paymentPlansHeight > customerMembershipHeight)
        $('#payment_plans .flip').animate({height: paymentPlansHeight + margin}, 200);
    else {
        $('#membership .flip').animate({height: customerMembershipHeight + margin}, 200);

        // Adjust the tile if there are no available payment plans.
        if (paymentPlansHeight <= 134) {
            $('#payment_plans .flip').animate({height: paymentPlansHeight + margin}, 200);
        }
    }

    // apply the corresponding height adjustment if the tiles are flipped
    if ($('#plan-back').hasClass('flipped'))
        $('#payment_plans .flip').animate({height: paymentPlansHeight + margin}, 200);

    if ($('#membership-back').hasClass('flipped'))
        $('#membership .flip').animate({height: customerMembershipHeight + margin}, 200);
}

/**
 * Check the height of the third row components and adjust them accordingly
 */
function adjustThirdRowTiles() {
    var margin = 20;

    var paymentOptionsHeight = 0;
    if ($('#option-back').hasClass('flipped'))
        paymentOptionsHeight = $('#payment_options .back .panel-success').height();
    else
        paymentOptionsHeight = $('#payment_options .front .panel').height();

    var notesHeight = 0;
    if ($('#notes-back').hasClass('flipped'))
        notesHeight = $('#notes .back .panel-primary').height();
    else
        notesHeight = $('#notes .front .panel').height();

    if (paymentOptionsHeight > notesHeight)
        $('#payment_options .flip').animate({height: paymentOptionsHeight + margin}, 200);
    else
        $('#notes .flip').animate({height: notesHeight + margin}, 200);

    // apply the corresponding height adjustment if the tiles are flipped
    if ($('#option-back').hasClass('flipped'))
        $('#payment_options .flip').animate({height: paymentOptionsHeight + margin}, 200);

    if ($('#notes-back').hasClass('flipped'))
        $('#notes .flip').animate({height: notesHeight + margin}, 200);
}
