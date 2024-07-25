{{-- //resources/views/layouts/sidebar.blade.php --}}
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-20">
      <i class="fas fa-fire"></i>
    </div>
    <div class="sidebar-brand-text mx-1"> <sup>Fire Detection</sup></div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Nav Item - Dashboard -->
  <!---------------- A D M I N -------------->
  @if (Auth::user()->role == 'admin')
  <li class="nav-item">
    <a class="nav-link" href="/index">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/live">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Monitoring Kamera</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/history">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>History Data</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/upload-form">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Upload</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/articles">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Blog</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="users">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Data User</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="/profile">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Profile</span></a>
  </li>
  @endif
<!------------------- U S E R ------------->
  @if (Auth::user()->role == 'user')
  <li class="nav-item">
    <a class="nav-link" href="/index">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/live">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Monitoring Kamera</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/history">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>History Data</span></a>
  </li>
  @endif
  

  
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
  
</ul>