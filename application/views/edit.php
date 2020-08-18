
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
      <?= form_open('Notulensi/edit'); ?>
      <div class="form-group ">
        <label>Nomor Surat</label>
        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="id" placeholder="Agenda Rapat" readonly="" value="<?php echo $user['id'];?>" >
      </div>
      <div class="form-group">
        <label  >Agenda Rapat</label>
        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="agenda_r" placeholder="Agenda Rapat" readonly="" value="<?php echo $user['agenda_r'];?>">
        </div>
      <div class="form-group">
        <label >Waktu Pelaksanaan</label>
        <input type="date" class="form-control form-control-sm" id="colFormLabelSm" name="waktu" placeholder="Waktu" readonly="" value="<?php echo $user['waktu'];?>" >
          </div>
      <div class="form-group">
        <!-- <label >Undangan</label>
        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="lokasi_r" placeholder="Undangan rapat" readonly="" value="<?php echo $user['lokasi_r'];?>">
      </div>

      <div width="100%" class="float-right form-group">
        <button type="button" name="button" id="add" class="btn btn-primary"><i class="fa fa-plus"></i></button>

      </div> -->


      <div class="container-rapat">
        <div class="row">
          <div class="col-md-5">
            <div class="form-group ">
              <label for="exampleFormControlTextarea1">Pembahasan Rapat</label>
              <textarea class="form-control" id="pembahasan" name="pembahasan" rows="3" ></textarea>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group ">
              <label for="exampleFormControlTextarea2">Hasil Rapat</label>
              <textarea class="form-control" id="hasilrapat" name="hasilrapat" rows="3" ></textarea>
            </div>
          </div>
          <div class="col-md-1 ">
            <button class="btn btn-danger mt-5">-</button>
          </div>
        </div>

      </div>
      <div class="form-group ">
        <label for="exampleFormControlTextarea2">Keterangan</label>
        <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
      </div>

      <button  type="submit" nama="submit" class="btn Submit"> Update </button>
      <!-- </form> -->
      <?= form_close(); ?>
    </div>
  </div>
</div>
</div>
<script src="<?php echo base_url()?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type='text/javascript'>

tinymce.init(
  {
    selector: 'textarea#keterangan, textarea#hasilrapat, textarea#pembahasan',
    height: 500,
    menubar: false,
    content_css: '//www.tiny.cloud/css/codepen.min.css'
  }
);
</script>
</body>
</html>
