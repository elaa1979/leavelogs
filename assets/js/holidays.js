// DataTable
$(document).ready(function () {
    var table = $('#holidays').DataTable({
        //"ajax": "../assets/data/objects3.txt",
        data:data,
        "language": {
            "lengthMenu": "_MENU_",
            "search": " ",
            "searchPlaceholder": "Search holiday...",
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
            { "data": "Id" },          
            { "data": "Name" },
            { "data": "Date" },
            {
                "orderable": false,
                "data": "null",
                "defaultContent": 'India, Australia, USA, Singapore'
            },
            {
                "orderable": false,
                "data": "null",
                "defaultContent": '<a href="javascript:;" class="btn btn-sm btn-primary float-right">Edit</a>'
            }
        ]
    });

    
    //
    $('.table').wrap('<div class="table-scroll" />');

    $('.table-left').append($('.dataTables_filter'));
    
    $('.dataTables_filter').after($('<button type="button" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#addholidayslistModal" id="AddHolidaysList" class="btn btn-sm btn-primary ml-3">Add Holidays List</button>'));

    $('.dataTables_info').appendTo('.table-right');

    $('.dataTables_info').before($('.dataTables_length'));

    $('.dataTables_info').before($('.dataTables_paginate'));
      
});

