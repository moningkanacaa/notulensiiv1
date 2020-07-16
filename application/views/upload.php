
<div class="col-md-9">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Upload</h3>
      </div>
      <div class="panel-body">
        <h3> Upload File Undangan Rapat </h3>
        <br>
        <br>
        <form>
          <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">Nomor</label>
            <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Nomor">
            </div>
          </div>
      <div class="form-group row">
        <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm">Perihal</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Perihal">
        </div>
      </div>
          <div class="form-group row">
        <label for="colFormLabelSm" class="col-sm-2">  Peserta Rapat :</label>
        </div>
        <div class="custom-control custom-checkbox">
          <?php $namadosen = $this->db->get('namadosen');
            foreach ($namadosen->result() as $row) {?>
              <input type="checkbox" class="custom-control-input" id="defaultUnchecked" value="<?php echo $row->nidn;?>">
              <label class="custom-control-label" for="defaultUnchecked"><?php echo $row->name; ?></label> <br>
            <?php } ?>

      </div>
      <!-- <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
      <label class="custom-control-label" for="defaultUnchecked">Pak Fitrah</label>
    </div>
    <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
    <label class="custom-control-label" for="defaultUnchecked">Pak syahid</label>
    </div>
  <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
  <label class="custom-control-label" for="defaultUnchecked">Pak Jejen</label>
  </div> -->
  <br>
  <button  type="submit" nama="submit" class="btn Submit"> Submit </button>
    </form>
<br>
    <!-- <div class="custom-file">
     <input type="file" class="custom-file-input" id="validatedCustomFile" required>
     <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
        </div>
    </div> -->
</div>
</div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
