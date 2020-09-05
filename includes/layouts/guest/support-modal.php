<!-- The Modal -->
<form>
  <div class="modal fade" id="supportModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Contact Support 
            <br /><span class="text-mute text-14">(Reply time as soon as possible, if support team is not too busy.)</span></h4>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          
            <div class="form-group">
              <label>Email address</label>
              <input type="email" name="email" value="john@doe.com" readonly class="form-control" required>
            </div>
            <div class="form-group">
              <label>Subject&nbsp;<span class="text-danger text-14">(Please enter the subject)</span></label>
              <input type="text" name="subject" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Query&nbsp;<span class="text-danger text-14">(Please enter your query)</span></label>
              <textarea class="form-control" required></textarea>
            </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit Query</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>

      </div>
    </div>
  </div>
</form>
