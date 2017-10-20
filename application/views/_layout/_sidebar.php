<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $userdata->nama; ?></p>
        <!-- Status -->
        <a href="<?php echo base_url(); ?>"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">LIST MENU</li>
      <!-- Optionally, you can add icons to the links -->

      <li <?php if ($page == 'home') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Home'); ?>">
          <i class="fa fa-home"></i>
          <span>Home</span>
        </a>
      </li>
      
      <li <?php if ($page == 'apps') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('apps/Apps'); ?>">
          <i class="fa fa-microphone"></i>
          <span>Aplikasi</span>
        </a>
      </li>
      
      <li <?php if ($page == 'user') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('apps/User'); ?>">
          <i class="fa fa-user"></i>
          <span>Data User</span>
        </a>
      </li>
      
      <li <?php if ($page == 'ruang') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('apps/Ruang'); ?>">
          <i class="fa fa-home"></i>
          <span>Data Ruang</span>
        </a>
      </li>
      
      <li <?php if ($page == 'notulen') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('apps/Notulen'); ?>">
          <i class="fa fa-table"></i>
          <span>Data Notulen</span>
        </a>
      </li>
      
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>