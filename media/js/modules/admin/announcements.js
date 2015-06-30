$("body").tooltip({selector: '[data-toggle=tooltip]'});

$(document).ready(function () {
    if ($('table#announcementsList').length != 0) {
        announcementsList
        var t = $('#announcementsList').DataTable({
            "columnDefs": [{
                "searchable": false,
                "orderable": false,
                "targets": 3
            }],
            "order": [[1, "desc"]]
        });
    }

    $(".deleteLink").on('click', function (event, state) {

        var announcementId = $(this).attr('id');

        $('#deleteButtonYes').click(function(){

            $('#deleteModal').modal('hide');

            $.post("/admin/announcements/destroy/"+announcementId, {id: announcementId})
                .done(function () {
                    $('#tr_'+announcementId).fadeOut(1000, function(){
                        $(this).remove();
                    });
                });
        });
    });
});