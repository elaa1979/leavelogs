// DataTable

$(document).ready(function () {
    var table = $('#blockedemployee').DataTable({
        "ajax": "../assets/data/objects5.txt",
        "language": {
            "lengthMenu": "_MENU_",
            "search": " ",
            "searchPlaceholder": "Search employee...",
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
        "columnDefs": [{ "searchable": false,"orderable": false, "targets": [0, 2] }],
        "columns": [            
            { "data": "img" },
            { "data": "name" },
            { "data": "action" }
        ]
    });
    
    //
    $('.table').wrap('<div class="table-scroll" />');

    $('.dataTables_filter').appendTo('.table-left');
    
    $('.dataTables_filter').after($('<button type="button" data-toggle="modal" data-target=".DeleteModal" id="bulkDelete" class="d-none btn btn-sm btn-danger ml-3">Block</button>'));

    $('.dataTables_info').appendTo('.table-right');

    $('.dataTables_info').before($('.dataTables_length'));

    $('.dataTables_info').before($('.dataTables_paginate'));
    
}); 

