<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
  <?php
    $this->load->view('template/head');
    $this->load->helper('indonesian_date');
  ?>
  <style type="text/css">
  </style>
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/plugins/datatables/dataTables.bootstrap.css')?>">
  <link href="<?php echo base_url('assets/AdminLTE/plugins/datepicker/datepicker3.css') ?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets/AdminLTE/plugins/daterangepicker/daterangepicker.css') ?>" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/plugins/datepicker/datepicker3.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/AdminLTE/plugins/morris/morris.css">
  </head>

  <?php
    $this->load->view('template/topbar');
    $this->load->view('template/sidebar');
  ?>

  <section class="content-header">
    <center>
    <h2>
      SELAMAT DATANG ADMIN
    </h2>
    </center>
    <ol class="breadcrumb">
      <li><a href="<?php echo site_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">            
      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3 id="penduduk">0</h3>
            <p>Total penduduk</p>
          </div>
          <div class="icon">
            <i class="fa fa-file"></i>
          </div>
          <a href="<?php echo site_url('product') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-red">
          <div class="inner">
            <h3 id="pria">0</h3>
            <p>Total Pria</p>
          </div>
          <div class="icon">
            <i class="fa fa-file-o"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
          <div class="inner">
            <h3 id="wanita">0</h3>
            <p>Total Wanita</p>
          </div>
          <div class="icon">
            <i class="fa fa-file-o"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3 id="login">0</h3>
            <p>Total User</p>
          </div>
          <div class="icon">
            <i class="fa fa-archive"></i>
          </div>
          <a href="<?php echo site_url('customer'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

    </div>
  </section>

  <?php
    $this->load->view('template/js');
  ?>

  <script src="<?php echo base_url('assets/AdminLTE/plugins/datatables/jquery.dataTables.min.js')?>"></script>
  <script src="<?php echo base_url('assets/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js')?>"></script>
  </script>        
  <script src="<?php echo base_url(); ?>assets/AdminLTE/bootstrap/js/raphael-min.js"></script>
  <script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/morris/morris.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/sparkline/jquery.sparkline.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/knob/jquery.knob.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
         get_count();
      });
    
    function get_count(){
          $.ajax({
              url : "<?php echo site_url('Dashboard/count'); ?>",
              type: "GET",
              data: "",
              dataType: "json",
              cache:false,
              success: function(data){
                $('#penduduk').text(data.penduduk);
                $('#pria').text(data.pria);
                $('#wanita').text(data.wanita);
                $('#login').text(data.login);
              },
              error: function (jqXHR, textStatus, errorThrown){
                  console.log(errorThrown);
              }
            });
        }

  </script>

  <script>
    $( ".dash" ).addClass( "active" );
  </script>

  </body>
</html>