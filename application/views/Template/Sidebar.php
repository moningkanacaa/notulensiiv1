<!DOCTYPE html>
<html>
<head>
    <title> Dashboard - Login CodeIgniter & Bootstrap</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
              <a href="#" class="list-group-item active" style="text-align: center;background-color: black;border-color: black">
                ADMINISTRATOR
              </a>
              <a href="<?php echo base_url('index.php/Dashboard'); ?>" class="list-group-item"><i class="fa fa-dashboard"></i> Welcome </a>
              <a href="<?php echo base_url('index.php/Upload'); ?>" class="list-group-item"><i class="fa fa-upload"></i> Undangan Rapat</a>
              <a href="<?php echo base_url('index.php/Notulensi'); ?>" class="list-group-item"><i class="fa fa-book"></i> Notulensi</a>
              <a href="<?php echo base_url('index.php/Arsip'); ?>" class="list-group-item"><i class="fa fa-archive"></i> Arsip </a>
              <a href="<?php echo base_url() ?>index.php/dashboard/logout" class="list-group-item"><i class="fa fa-sign-out"></i> Logout</a>
            </div>
        </div>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
