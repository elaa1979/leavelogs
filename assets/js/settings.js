// DataTable
$(document).ready(function () {
    $('#manageusers').DataTable({
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
        "columnDefs": [{ "orderable": false, "targets": [4] }]        
    });    
    $('.table').wrap('<div class="table-scroll" />');

    $('.dataTables_filter').appendTo($('.table-left'));

    $('.dataTables_info').appendTo('.table-right');

    $('.dataTables_info').before($('.dataTables_length'));

    $('.dataTables_info').before($('.dataTables_paginate'));

});