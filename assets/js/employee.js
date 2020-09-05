// DataTable

// DataTable
function format(d) {
    return '<table class="table table-bordered mb-0" style="width:100%">' +
        '<tr>' +
        '<td>Id:</td>' +
        '<td>' + d.EmployeeId + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>First Name</td>' +
        '<td>' + d.FirstName + '</td>' +
        '</tr>' +  
        '<tr>' +
        '<td>Last Name</td>' +
        '<td>' + d.LastName + '</td>' +
        '</tr>' +  
        '<tr>' +      
        '<td>Email:</td>' +
        '<td>' + d.EmailId + '</td>' +
        '</tr>' +
        '<tr>' +      
        '<td>Phone</td>' +
        '<td>' + d.PhoneNumber + '</td>' +
        '</tr>' +
        '<tr>' +      
        '<td>Department</td>' +
        '<td>' + d.DepartmentId + '</td>' +
        '</tr>' +
        '</table>';
}
//
$(document).ready(function () {
    var table = $('#employee').DataTable({
        //"ajax": "../assets/data/objects3.txt",
        data:data,
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
        "order": [[3, "desc"]],
        "columnDefs": [{ "searchable": false,"orderable": false, "targets": [0, 1] }],
        "columns": [
            {
                "className": 'details-control',
                "orderable": false,
                "data": "null",
                "defaultContent": ''
            },
            { "data": "EmployeeId" },
            { "data": "FirstName" },
            { "data": "LastName" },
            { "data": "EmailId" },
            { "data": "DepartmentId" },
            {
                "orderable": false,
                "data": "null",
                "defaultContent": '<a href="javascript:;" class="btn btn-sm btn-primary float-right">Edit</button>'
            }
        ]
    });

    // Add event listener for opening and closing details
    $('#employee tbody').on('click', 'td.details-control', function () {
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

    $('.table-left').append($('.dataTables_filter'));

    $('.dataTables_filter').after($('<button type="button" id="Uploademployee" class="btn btn-sm btn-primary ml-3" data-toggle="modal" data-target="#uploademployeeModal" data-backdrop="static" data-keyboard="false">Upload Employees</button>'));

    $('#Uploademployee').after($('<button type="button" id="Addemployee" class="btn btn-sm btn-primary ml-3">Add Employee</button>'));
    
    $('#Addemployee').after($('<button type="button" data-toggle="modal" data-target=".DeleteModal" id="bulkDelete" class="d-none btn btn-sm btn-danger ml-3">Block</button>'));

    $('.dataTables_info').appendTo('.table-right');

    $('.dataTables_info').before($('.dataTables_length'));

    $('.dataTables_info').before($('.dataTables_paginate'));
    //  

    //Employees bulk upload
    $("#fp").hide(); 
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      // get file size
      var totalBytes = this.files[0].size;
      if(totalBytes < 1000000){
         var _size = Math.floor(totalBytes/1000) + 'KB';
         $("#fp").show(); 
         $("#fp").text(_size); 
      }else{
         var _size = Math.floor(totalBytes/1000000) + 'MB';  
         $("#fp").show(); 
         $("#fp").text(_size); 
      }
      
    });     
});

