// DataTable
$(document).ready(function () {
    var table = $('#leave').DataTable({        
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
        "columnDefs": [{ "searchable": false,"orderable": false, "targets": [0] }]
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
