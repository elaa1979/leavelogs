<!-- The Modal -->
<form>
  <div class="modal fade" id="AddBranchModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add a New Branch</h4>
        </div>
        <!-- Modal body -->
        <div class="modal-body" style="min-height:420px;">         
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group tn_chosen_lg">
              <label>Select a Time Zone</label>
              <select class="chosen"></select>
            </div>
            <div class="form-group tn_chosen_lg">
              <label>Select a Location</label>
              <select class="chosen"></select>
            </div>
            <div class="form-group tn_chosen_lg">
              <label>Status</label>
              <select class="chosen">
                <option>Active</option>
                <option>Inactive</option>
              </select>
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
