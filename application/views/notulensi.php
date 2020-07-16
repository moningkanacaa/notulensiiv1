
<div class="col-md-9">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Notulensi</h3>
      </div>
      <div class="panel-body">
        <h3> Notulensi Rapat FT TI </h3>
        <br>
        <br>
        <!-- <form action="<?php echo base_url(). 'Notulensi/add/'; ?>" method="post"> -->
        <?= form_open('Notulensi/add'); ?>
          <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nomor</label>
            <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="id" placeholder="Nomor surat">
            </div>
          </div>
      <div class="form-group row">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm" >Agenda Rapat</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="agenda_r" placeholder="Agenda Rapat">
        </div>
      </div>
      <div class="form-group row">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm" >Waktu Pelaksanaan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="waktu" placeholder="Waktu">
        </div>
      </div>
      <div class="form-group row">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm" >Undangan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="lokasi_r" placeholder="Undangan rapat">
        </div>
      </div>

      <div class="form-group ">
    <label for="exampleFormControlTextarea1">Pembahasan Rapat</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="pembahasan" rows="3"></textarea>
  </div>
  <div class="form-group ">
<label for="exampleFormControlTextarea2">Hasil Rapat</label>
<textarea class="form-control" id="exampleFormControlTextarea1" name="hasilrapat" rows="3"></textarea>
</div>
<div class="form-group ">
<label for="exampleFormControlTextarea2">Keterangan</label>
<textarea class="form-control" id="exampleFormControlTextarea1" name="keterangan" rows="3"></textarea>
</div>

<button  type="submit" nama="submit" class="btn Submit"> Submit </button>
        <!-- </form> -->
<?= form_close(); ?>
          </div>
</div>
</div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
