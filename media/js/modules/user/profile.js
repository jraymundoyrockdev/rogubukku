$(document).off('click', '#click_dp');
$(document).on('click', '#click_dp', function (e) {
    $('#avatar').click();
});

$("#avatar").change(function () {
    bootbox.confirm(
        'Change Avatar?'
        , function (confirm_result) {
            if (confirm_result === true) {
                $("#form-change-dp").ajaxSubmit({
                    dataType: 'json',
                    type: 'post',
                    success: function (result) {
                        if (result.isSuccess) {
                            $("#img_avatar").attr('src', result.src);
                        }
                        else {
                            alert(result.errorFields);
                        }
                    }
                });
            }
        }
    );
});