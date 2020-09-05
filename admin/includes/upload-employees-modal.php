<!-- The Modal -->
<form>
  <div class="modal fade" id="uploademployeeModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Upload Employees</h4>
        </div>
        <!-- Modal body -->
        <div class="modal-body">         
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="employeesuploadFile">
              <label class="custom-file-label" for="employeesuploadFile">Choose file</label>
            </div>
            <p id="fp" class="text-muted font-weight-bold mb-0"></p>            
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <div class="row">
            <div class="col-sm-6 text-right">
              <div class="progress" style="height:8px;">
              <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" 
              style="width:40%;height:8px;"></div>
            </div>
            </div>
            <div class="col-sm-6 text-right">
              <button type="button" class="btn btn-primary">Upload</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
