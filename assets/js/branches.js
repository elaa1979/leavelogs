// DataTable
$(document).ready(function () {
    var table = $('#branches').DataTable({
        data:data,
        "language": {
            "lengthMenu": "_MENU_",
            "search": " ",
            "searchPlaceholder": "Search branch...",
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
            { "data"    : "Id" },
            { "data"    : "Name" },
            { "data"    : "Address" },
            { "data"    : "TimeZone" },
            { "targets" : [3],
                render : function (data, type, row) {
                    return data == '1' ? 'Active' : 'Inactive'
                }
            },
            {
                "searchable": false,
                "orderable": false,
                "data": "null",
                "defaultContent": '<button type="button" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#EditBranchModal" class="btn btn-sm btn-primary float-right">Edit</button>'
            }
        ]
    });
    //
    $('.table').wrap('<div class="table-scroll" />');

    $('.table-left').append($('.dataTables_filter'));
    
    $('.dataTables_filter').after($('<button type="button" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#AddBranchModal" class="btn btn-sm btn-primary ml-3">Add a Branch</button>'));

    $('.dataTables_info').appendTo('.table-right');

    $('.dataTables_info').before($('.dataTables_length'));

    $('.dataTables_info').before($('.dataTables_paginate'));
    //
    $(".chosen").chosen({disable_search_threshold: 10, width: "100%"}); 
});

