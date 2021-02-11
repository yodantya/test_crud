<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laporan Penduduk</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <?php
  $this->load->view('template/head');
  ?>
  <!--tambahkan custom css disini-->
  <style type="text/css">
  </style>
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/plugins/datatables/dataTables.bootstrap.css')?>">
  <!-- Date Picker -->
  <link href="<?php echo base_url('assets/AdminLTE/plugins/datepicker/datepicker3.css') ?>" rel="stylesheet"
    type="text/css" />
  <!-- Daterange picker -->
  <link href="<?php echo base_url('assets/AdminLTE/plugins/daterangepicker/daterangepicker.css') ?>" rel="stylesheet"
    type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/plugins/datepicker/datepicker3.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/boostrap/css/boostrap.min.css')?>">


</head>
<?php
  $this->load->view('template/topbar');
  $this->load->view('template/sidebar');
?>
<section class="content-header">
  <h1>
    Laporan Penduduk
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url(''); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Laporan Penduduk</li>
  </ol>
</section>


<div class="modal fade" id="modal_img">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Large Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
          <div class="box-body pad">
            <form id="img" class="needs-validation" role="form"><div class="form-row">
                <div class="col-md-12 mb-3">
                  <div class="form-group" id="photo-preview">
                      <div class="col-md-12">
                        (No photo)
                        <span class="help-block"></span>
                      </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
          <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          </form>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="modal_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title" id="exampleModalLabel"></h3>
          </div>
        <div class="modal-body">
          <div class="box-body pad">
            <form  id="form" class="form-horizontal">
              <input type="hidden" value="" name="id"/>
                <div class="form-body">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="NIK" name="nik" aria-label="Username" aria-describedby="basic-addon1">
                  </div> 
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nama" name="nama" aria-label="Username" aria-describedby="basic-addon1">
                  </div> 
                  <!-- select -->
                  <div class="form-group">
                    <select name="jeniskelamin" class="form-control">
                      <option value="P">Pria</option>
                      <option value="W">Wanita</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                </div>
            </form>
          </div>
        </div>
          <div class="modal-footer">
            <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Simpan</button>
            <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
          </div>
        </div>
      </div>
    </div>


<section class="content">
  <!-- <div class="col-md-10">
        </div> -->
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
      </div>
      <div class="box box-info">
        <div class="box-header">
          <button class="btn btn-primary pull-left" onclick="add()" data-toggle="tooltip" data-placement="top"
            title="Tambah Data"><span class="glyphicon glyphicon-file"></span>Tambah Data</button>
          <button class="btn btn-default " onclick="reload_table()" data-toggle="tooltip" data-placement="top"
            title="Reload Table"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
        </div>

        <div class="box-body">

          <div class="table-responsive mailbox-messages">
            <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>NIK</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Tanggal Input</th>
                  <th>User Input</th>
                  <th>Tanggal Update</th>
                  <th>User Update</th>
                  <th>Action</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
        $this->load->view('template/js');
        ?>
<script src="<?php echo base_url('assets/AdminLTE/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/delconfirmation.js')?>"></script>
<script src="<?php echo base_url('assets/AdminLTE/plugins/select2/select2.full.min.js')?>"></script>
<script src="<?php echo base_url(); ?>assets/AdminLTE/bootstrap/js/moment.min.js"></script>
<script src="<?php echo base_url('assets/AdminLTE/plugins/datepicker/bootstrap-datepicker.js')?>"></script>
<script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>

</script>
<script>
  $('#datepicker').datepicker({
          autoclose: true,
          });  
          $('#datepicker2').datepicker({
          autoclose: true,
          });        
</script>


<script type="text/javascript">
  var table;
        var tablemodal;
        var save_method;

      $(document).ready(function() {
          table = $('#table').DataTable({  
            "processing": true, 
            "ajax": {
                "url": "<?php echo base_url('Tampillaporan/getlist'); ?>",
                "type": "GET",
            },
            "columns": [

              { "data": "no" },
              { "data": "nik" },   
              { "data": "nama" },
              { "data": "jnskelamin" },
              { "data": "alamat" },
              { "data": "tglinput" },
              { "data": "userinput" },
              { "data": "tglupdate" },
              { "data": "userupdate" },
              { "data": "action" }
            ],
            "order": [[0, 'asc']]
          });
        });


       function save()
    {
    $('#btnSave').text('Saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable
    var url;
    var notif;
    
    if(save_method == 'add') {
    url = "<?php echo base_url('Tampillaporan/ajax_add')?>";
    } else {
    url = "<?php echo base_url('Tampillaporan/ajax_update')?>";
    }
    // ajax adding data to database
    $.ajax({
    url : url,
    type: "POST",
    data: $('#form').serialize(),
    dataType: "JSON",
    success: function(data)
    {
    if(data.status) //if success close modal and reload ajax table
    {
    $('#modal_form').modal('hide');
    reload_table();
    }
    
    $('#btnSave').text('Save'); //change button text
    $('#btnSave').attr('disabled',false); //set button enable
    
    },
    error: function (jqXHR, textStatus , errorThrown)
    {
    
    $('#btnSave').text('save'); //change button text
    $('#btnSave').attr('disabled',false); //set button enable
    
    }
    });
    }

    function reload_table()
    {
    table.ajax.reload(null,false); //reload datatable ajax
    }

    function add()
    {
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Input jenis'); // Set Title to Bootstrap modal title
    }

    function delete_data(id)
    {
    if(confirm('Yakin Hapus Data ?'))
    {
    // ajax delete data to database
    $.ajax({
    url : "<?php echo base_url('Tampillaporan/ajax_delete')?>/"+id,
    type: "POST",
    dataType: "JSON",
    success: function(data)
    {
    //if success reload ajax table
    $('#modal_form').modal('hide');
    reload_table();
    },
    error: function (jqXHR, textStatus , errorThrown)
    {
    alert('Error deleting data');
    }
    });
    
    }
    }

    function edit_data(id)
    {
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    //Ajax Load data from ajax
    $.ajax({
    url : "<?php echo base_url('Tampillaporan/ajax_edit')?>/" + id,
    type: "GET",
    dataType: "JSON",
    success: function(data)
    {
    $('[name="id"]').val(data.id);
    $('[name="nik"]').val(data.nik);
    $('[name="nama"]').val(data.nama);
    $('[name="jeniskelamin"]').val(data.jenis_kelamin);
    $('[name="alamat"]').val(data.alamat);

    $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
    $('.modal-title').text('Validasi Data'); // Set title to Bootstrap modal title
    
    },
    error: function (jqXHR, textStatus , errorThrown)
    {
    alert('Error get data from ajax');
    }
    });
    }



    
</script>
<script>
  $(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
  });
</script>

<?php
  $this->load->view('template/sidebar_theme');
  ?>
<script>
  $( ".master" ).addClass( "active" );
</script>
<script>
  $( ".jenis" ).addClass( "active" );
</script>
<script>
  $(document).ready(function(){
  setTimeout(function() {
  $('.alrt-success').fadeOut('fast');
  }, 2000); // <-- time in milliseconds
  });
</script>
</body>

</html>