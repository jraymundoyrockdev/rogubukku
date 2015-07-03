$("body").tooltip({selector: '[data-toggle=tooltip]'});

$(document).ready(function () {

    if($('#from_date').val() != '')
    {
        $('#icon-calendar').click(function(){
            $('#from_date').val('');
        });

        $('#from_date').val(
            $.formatDateTime(
                'mm/dd/yy',
                new Date(
                    String($('#from_date').val()).replace(/\-/g, '/')
                )
            )
        );
    }

    if($('#to_date').val() != '')
    {
        $('#icon-calendar').click(function(){
            $('#to_date').val('');
        });

        $('#to_date').val(
            $.formatDateTime(
                'mm/dd/yy',
                new Date(
                    String($('#to_date').val()).replace(/\-/g, '/')
                )
            )
        );
    }

    if ($('table#announcementsList').length != 0) {
        announcementsList
        var t = $('#announcementsList').DataTable({
            "columnDefs": [{
                "searchable": false,
                "orderable": false,
                "targets": 5
            }],
            "order": [[2, "desc"]]
        });
    }

    var announcementId = null;

    $(".deleteLink").on('click', function (event, state) {

         announcementId = $(this).attr('id');

    });

    
    $('#deleteButtonYes').click(function() {

        $('#deleteModal').modal('hide');
            if(!announcementId) {
                return false; 
            }
            
            $.post("/admin/announcements/destroy/"+announcementId)
                    .done(function () {
                        $('#tr_'+announcementId).fadeOut(1000, function(){
                            $(this).remove();
                        });
                    });
        
    });

    $('#updateAnnouncement').click(function () {
        $('#saveType').val($(this).attr('id'))
    });

    $(function () {
        $('#datetimepickerFromDate').datetimepicker({format:'L',pickTime: false});
        $('#datetimepickerToDate').datetimepicker({format:'L',pickTime: false});

        $('#datetimepickerFromDate').on('dp.change dp.show', function (e) {
            $('#announcements_form').formValidation('revalidateField', 'from_date');
            
        });

        $('#datetimepickerToDate').on('dp.change dp.show', function (e) {
            $('#announcements_form').formValidation('revalidateField', 'to_date');
        });
    });
});

function convertDateTime(dateTime) {

    for (var item in dateTime) {
        if (dateTime[item].name == "from_date" || dateTime[item].name == "to_date") {
            dateTime[item].value = $.formatDateTime('yy-mm-dd', new Date(dateTime[item].value));
            continue;
        }
    }

    return dateTime;
}