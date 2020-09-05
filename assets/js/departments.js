// DataTable

// DataTable
function format(d) {
    return '<table class="table table-bordered mb-0" style="width:100%">' +
        '<tr>' +
        '<td>Id:</td>' +
        '<td>' + d.Name + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>First Name</td>' +
        '<td>' + d.ShortName + '</td>' +
        '</tr>' +  
        '<tr>' +
        '<td>Last Name</td>' +
        '<td>' + d.Code + '</td>' +
        '</tr>' +  
        '<tr>' +      
        '<td>Department</td>' +
        '<td>' + d.Active + '</td>' +
        '</tr>' +
        '</table>';
}
//
$(document).ready(function () {
    var table = $('#departments').DataTable({
        //"ajax": "../assets/data/objects3.txt",
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
        "order": [[0, "desc"]],
        "columnDefs": [{ "searchable": false,"orderable": false, "targets": [0, 1, 2, 4] }],
        "columns": [
            {
                "className": 'details-control',
                "orderable": false,
                "data": "null",
                "defaultContent": ''
            },
            { "data": "Name" },
            { "data": "ShortName" },
            { "data": "Code" },
            { "data": "Active" }
        ]
    });

    // Add event listener for opening and closing details
    $('#departments tbody').on('click', 'td.details-control', function () {
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
    
    $('.dataTables_filter').after($('<button type="button" data-toggle="modal" data-target=".DeleteModal" id="bulkDelete" class="d-none btn btn-sm btn-danger ml-3">Block</button>'));

    $('.dataTables_info').appendTo('.table-right');

    $('.dataTables_info').before($('.dataTables_length'));

    $('.dataTables_info').before($('.dataTables_paginate'));

    $("#selectall").click(function () {
        var checked = $(this).is(':checked');
        var deleteFlag = 0;
        var countRow = $('#departments tbody tr').length;
        if (countRow == 1) {
            var singleRowCheck = $('#departments tbody tr')["0"].innerText;
            if (singleRowCheck != 'No records found...') {
                deleteFlag = 1;
            }
        }
        else if (countRow > 1) {
            deleteFlag = 1;
        }

        if (checked && deleteFlag == 1) {
            $("#bulkDelete").removeClass('d-none');
        }
        else {
            $("#bulkDelete").addClass('d-none');
        }
        $("input[name='DeleteSelectedItem']").each(function () {
            this.checked = checked;
            $(this).click(function (e) {
                if (this.checked && $("input[name='DeleteSelectedItem']").length == $("input[name='DeleteSelectedItem']:checked").length) {
                    $("#selectall")[0].checked = true;
                    return;
                }
                $("#selectall")[0].checked = false;
            });
        });
    });   
    //
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

