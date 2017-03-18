<form class="form-horizontal" role="form" method="post">
    <div class="form-group">
        <label class="control-label col-sm-2" for="status">Status :</label>
        <div class="col-sm-8">
            <select class="form-control" id="status" name="status">
                <option value="">Select status</option>
                <option value="Accepted">Accepted</option>
                <option value="Not Accepted">Not Accepted</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="reason">Reason :</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="reason" name="reason" placeholder="Enter Reason (if not accepted)">
        </div>
    </div>

    <!-- Multiple Checkboxes -->
    <div class="form-group">
        <label class="col-sm-2 control-label" for="checkboxes">Action :</label>
        <div class="col-md-4">
            <div class="checkbox">
                <label for="checkboxes-0">
                    <input type="checkbox" name="action[]" id="checkboxes-0" value="0"> Pengurus Asrama Kanan
                </label>
            </div>
            <div class="checkbox">
                <label for="checkboxes-1">
                    <input type="checkbox" name="action[]" id="checkboxes-1" value="1"> Pegawai Pembangunan Pelajar
                </label>
            </div>
            <div class="checkbox">
                <label for="checkboxes-2">
                    <input type="checkbox" name="action[]" id="checkboxes-2" value="2"> Pegawai Kaunseling / Pusat Islam
                </label>
            </div>
            <div class="checkbox">
                <label for="checkboxes-3">
                    <input type="checkbox" name="action[]" id="checkboxes-3" value="3"> Tatatertib
                </label>
            </div>
            <div class="checkbox">
                <label for="checkboxes-4">
                    <input type="checkbox" name="action[]" id="checkboxes-4" value="4"> Simpanan / Fail
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>
</form>
