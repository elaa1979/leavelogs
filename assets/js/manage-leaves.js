// DataTable
function format(d) {
    return '<table class="table table-bordered mb-0" style="width:100%">' +
        '<tr>' +
        '<td>ID:</td>' +
        '<td>' + d.id + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Leave Reason:</td>' +
        '<td>' + d.reason + '</td>' +
        '</tr>' +  
        '<tr>' +      
        '<td>Cancel Reason:</td>' +
        '<td>' + d.cancel + '</td>' +
        '</tr>' +
        '<tr>' +      
        '<td>Paid/Unpaid:</td>' +
        '<td>' + d.paid_unpaid + '</td>' +
        '</tr>' +
        '</table>';
}
$(document).ready(function () {
    var table = $('#LeaveApplication').DataTable({
        "ajax": "../assets/data/objects2.txt",
        "language": {
            "lengthMenu": "_MENU_",
            "search": " ",
            "searchPlaceholder": "Search leave...",
            "info": "_START_ &ndash; _END_ of _TOTAL_",
            "infoEmpty": "0 &ndash; _END_ of _TOTAL_",
            "infoFiltered": "",
            "paginate": {
                "next": "<i class='fa fa-angle-right'></i>",
                "previous": "<i class='fa fa-angle-left'></i>"
            },
        },
        "pagingType": "simple",
        "order": [[1, "desc"]],
        "columnDefs": [{ "searchable": false,"orderable": false, "targets": [0] }],
        "columns": [
            {
                "className": 'details-control',
                "orderable": false,
                "data": null,
                "defaultContent": ''
            },
            { "data": "name" },
            { "data": "leavetype" },
            { "data": "day" },
            { "data": "start_date" },
            { "data": "end_date" },
            { "data": "no_leave" },
            { "data": "status" },
            { "data": "action" }
        ]
    });

    // Add event listener for opening and closing details
    $('#LeaveApplication tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row(tr);

        if (row.child.isShown()) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child(format(row.data())).show();
            tr.addClass('shown');
        }
    });
    //
    $('.table').wrap('<div class="table-scroll" />');

    $('.dataTables_filter').appendTo($('.table-left'));
    $('.dataTables_filter').addClass('mr-3');
    $('.dataTables_filter').after($('<div class="tn_chosen_sm"><select class="chosen"></select><div>'));

    $('.dataTables_info').appendTo('.table-right');

    $('.dataTables_info').before($('.dataTables_length'));

    $('.dataTables_info').before($('.dataTables_paginate'));   

    //
    $(".chosen").chosen({disable_search_threshold: 10, width: "200px"}); 
});