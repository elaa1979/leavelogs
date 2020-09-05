// DataTable

$(document).ready(function () {
    var table = $('#aprrovers').DataTable({
        "ajax": "../assets/data/objects4.txt",
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
        "columnDefs": [{ "searchable": false,"orderable": false, "targets": [0, 6] }],
        "columns": [            
            { "data": "img" },
            { "data": "name" },
            { "data": "designation" },
            { "data": "admin" },
            { "data": "leaveapp" },
            { "data": "clockapp" },
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

    $("#selectall").click(function () {
        var checked = $(this).is(':checked');
        var deleteFlag = 0;
        var countRow = $('#aprrovers tbody tr').length;
        if (countRow == 1) {
            var singleRowCheck = $('#aprrovers tbody tr')["0"].innerText;
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

