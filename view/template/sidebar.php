<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="row" style="padding-top:10px">
      <div class="col-12"><h4 align="center" style="color:lightgrey;padding-top:5px">SiJawa</h4></div>
      <hr>
    </div>
    <div align="center">
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="index.php?dashboard" class="nav-link">
              <i class="fas fa-users"></i>
              <p>Dashboard</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="index.php?catatan" class="nav-link">
              <i class="fas fa-users"></i>
              <p>Catatan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?edukasi" class="nav-link">
              <i class="fas fa-users"></i>
              <p>Edukasi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?prediksi" class="nav-link">
              <i class="fas fa-users"></i>
              <p>Prediksi</p>
            </a>
          </li>


        
          <li class="nav-item">
            <a href="index.php?logout" class="nav-link <?php if($title=='logout'){echo 'active';}?>">
              <i class="fas fa-copy"></i>
              <p>Logout</p>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>