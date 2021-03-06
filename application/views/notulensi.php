
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
      <div class="form-group ">
        <label>Nomor Surat</label>
        <select class="form-control no_surat" name="id" id="id" required>
          <option value="">Pilih Nomor Surat</option>
          <?php foreach($nomor_surat as $row):?>
            <option value="<?php echo $row->nomor_surat;?>"><?php echo $row->nomor_surat;?></option>
          <?php endforeach;?>
        </select>
      </div>
      <div class="form-group">
        <label  >Agenda Rapat</label>
        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="agenda_r" placeholder="Agenda Rapat">
        </div>
      <div class="form-group">
        <label >Waktu Pelaksanaan</label>
        <input type="date" class="form-control form-control-sm" id="colFormLabelSm" name="waktu" placeholder="Waktu">
          </div>
      <div class="form-group">
        <label >Undangan</label>
        <!-- <select name="foods[]" class="selectpicker" multiple title="Choose Foods" multiple data-max-options="2" data-live-search="true" -->
        <select class="js-multiple form-control" id="peserta_rapat" name="peserta_rapat[]" multiple="multiple">
        </select>
      </div>
      <div width="100%" class="float-right form-group">
        <!-- <button type="button" name="button" id="add" class="btn btn-primary"><i class="fa fa-plus"></i></button> -->

      </div>


      <div class="container-rapat">
        <div class="row">
          <div class="col-md-5">
            <div class="form-group ">
              <label for="exampleFormControlTextarea1">Pembahasan Rapat</label>
              <textarea class="form-control" id="pembahasan" name="pembahasan" rows="3"></textarea>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group ">
              <label for="exampleFormControlTextarea2">Hasil Rapat</label>
              <textarea class="form-control" id="hasilrapat" name="hasilrapat" rows="3"></textarea>
            </div>
          </div>
          <button type="button" style="margin-top:20%" name="button" id="add" class="btn btn-primary"><i class="fa fa-plus"></i></button>
        </div>

      </div>
      <div class="form-group ">
        <label for="exampleFormControlTextarea2">Keterangan</label>
        <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
      </div>

      <button  type="submit" nama="submit" class="btn Submit"> Submit </button>
      <!-- </form> -->
      <?= form_close(); ?>
    </div>
  </div>
</div>
</div>
<script src="<?php echo base_url()?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script type='text/javascript'>
$(document).ready(function() {

    let selector = 'textarea#keterangan, textarea#hasilrapat, textarea#pembahasan';
    $(".no_surat").change(function() {
      const no_surat = $(this).val();
      $.ajax({
        url : `<?= base_url(); ?>index.php/Notulensi/get_rapat`,
        type : 'POST',
        data : {no_surat : no_surat},
        dataType : 'JSON',
        success : function(result){

          let audience = '';
          result.forEach((nidn, i) => {
            const peserta = $.ajax({
              url : `<?= base_url() ?>index.php/Notulensi/get_data_dosen`,
              dataType : 'JSON',
              type : 'POST',
              data : {nidn : nidn },
              async : false,
              success : function(peserta) {
                audience += `<option value="${nidn}">${peserta}</option>`;
              },
            });


          });

          $("#peserta_rapat").html(audience);

        },
        error : function(err) {
          console.log(err);
        }
      });
    });

    $('.js-multiple').select2();
    let i = 1;
    $("#add").click(function(e) {
      e.preventDefault();
      console.log(i);
      const cloneForm = `
        <div class="row form-${i}">
          <div class="col-md-5">
            <div class="form-group ">
              <label for="exampleFormControlTextarea1">Pembahasan Rapat</label>
              <textarea class="form-control" id="pembahasan${i}" name="pembahasan[]" rows="3"></textarea>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group ">
              <label for="exampleFormControlTextarea2">Hasil Rapat</label>
              <textarea class="form-control" id="hasilrapat${i}" name="hasilrapat[]" rows="3"></textarea>
            </div>
          </div>
          <div class="col-md-1 btn-remove-rapat">
            <button class="btn btn-danger  mt-5">-</button>
          </div>
        </div>
      `;

      $('.container-rapat').append(cloneForm);
      selector += selector+`,textarea#pembahasan${i},textarea#hasilrapat${i}`;
      tinymce.init(
        {
          selector: selector,
          height: 300,
          menubar: false,
          content_css: '//www.tiny.cloud/css/codepen.min.css'
        }
      );
      i++;
    });
    tinymce.init(
      {
        selector: selector,
        height: 300,
        menubar: false,
        content_css: '//www.tiny.cloud/css/codepen.min.css'
      }
    );

    $(".container-rapat").on('click', '.btn-remove-rapat', function(e){
      e.preventDefault();
      console.log(i);
      $(this).parent().remove();
    });

});

</script>
</body>
</html>
