<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('assets/AdminLTE/dist/img/1.jpg')?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata("nama_user"); ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    </form>
    <ul class="sidebar-menu">
      <li class="header">MENU UTAMA</li>
      <li class="treeview dash">
        <a href="<?php echo site_url('dashboard'); ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <!-- <li class="treeview dash">
        <a href="<?php echo site_url('beranda'); ?>" target="_blank">
          <i class="fa fa-dashboard"></i> <span>Tampilan Web</span>
        </a>
      </li> -->
      <li class="header">Master</li>
      <li class="treeview data">
        <a href="#">
          <i class="fa fa-database"></i> <span>Master</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
      <ul class="treeview-menu data">
          <li class="penjualandet"><a href="<?php echo site_url('tampillaporan'); ?>"><i class="fa fa-calendar-plus-o"></i>Data Penduduk</a></li>
     </ul>
     </li>
  </section>
</aside>
<div class="content-wrapper">