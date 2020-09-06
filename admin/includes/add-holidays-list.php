<!-- The Modal -->
<form>
  <div class="modal fade" id="addholidayslistModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Holiday's List</h4>
        </div>
        <!-- Modal body -->
        <div class="modal-body">         
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label>Date</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group mb-0">
              <label>Select Branch(es)</label>
            </div>
            <div class="form-group mb-0">
              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" checked="checked" class="custom-control-input" id="customCheck" name="example1">
                <label class="custom-control-label" for="customCheck">All</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                <label class="custom-control-label" for="customCheck">India</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                <label class="custom-control-label" for="customCheck">Australia</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                <label class="custom-control-label" for="customCheck">USA</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                <label class="custom-control-label" for="customCheck">UK</label>
              </div>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer text-right">
          <button type="button" class="btn btn-primary">Add</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</form>
