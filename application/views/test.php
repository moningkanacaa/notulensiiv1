<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>From UTS</title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    .line-title{
      border: 0;
      border-style: inset;
      border-top: 1px solid #000;
    }
  </style>
</head>
<body>
  <img src="assets/img/ft-uika.png" style="position: absolute; width: 700px; height: auto;">
  <table style="width: 100%;">
    <tr>
      <td align="center">
        <span style="line-height: 1.6; font-weight: bold;">
          <br> <br><br><br><br>
          <br>
        </span>
      </td>
    </tr>
  </table>

<br>
  <table style="width: 100%;">
    <tr>
      <td align="center">
        <span style="line-height: 1.6; font-weight: bold;">
            NOTULENSI RAPAT FT TI
          <br>
        </span>
      </td>
    </tr>
    <br> <br> <br>
    <table class="table table-bordered">
      <tr>
        <th>No</th>
        <th>Judul Rapat </th>
        <th>Pembahasan</th>
        <th>Hasil Rapat</th>
      </tr>
      <?php $no=1;
      foreach($generate as $u) { ?>
      <tr>

        <td><?php echo $no++; ?></td>
        <td><?php echo $u->agenda_r ?> </td>
        <td><?php echo $u->pembahasan ?></td>
        <td><?php echo $u->hasilrapat ?></td>
        <?php } ?>
      </tr>

  </table>


</body>
</html>
