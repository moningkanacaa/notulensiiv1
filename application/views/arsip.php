
<div class="col-md-10">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-dashboard"></i> Halaman Arsip</h3>
      </div>
      <div class="panel-body">
        <h1 class="h3 mb-2 text-gray-800">Arsip rapat</h1>
      <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

        <!-- DataTales Example
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
          </div> -->
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nomor</th>
                    <!-- <th>Nomor Surat</th> -->
                    <th> Nama Rapat </th>
                    <!-- <th>Pelaksanaan</th>  -->
                    <th>Notulensi</th>
                    <th>Kesimpulan</th>
                    <th>Download</th>
                    <!-- <th>Action</th> -->
                  </tr>
                  <?php
              		$no = 1;
              		foreach($datamasuk->result_array() as $u){
              		?>
                </thead>
                <tbody>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <!-- <td><?php echo $u['id'];?></td> -->
                    <td><?php echo $u['agenda_r'];?></td>
                    <!-- <td><?php echo $u['lokasi_r'];?></td> -->
                    <td><?php echo $u['pembahasan'];?></td>
                    <td><?php echo $u['hasilrapat']; ?></td>
                    <td><a href = "<?php echo base_url()?>index.php/Notulensi/generate_pdf/<?php echo $u['id']; ?>" class="fa fa-Download"> PDF </a></td>
                    <!-- <td><a href = "<?php echo base_url('index.php/notulensi/edit/'.$u['id'])?>" </a> Edit </td> -->
                  </tr>
                  </tbody>
                  <?php } ?>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
</div>
</div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
