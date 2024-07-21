<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-start" href="index.html">
    <div class="sidebar-brand-icon">
      <img src="{{ asset('admin_assets/img/mylogo.png') }}" style="width:60%;" class="mr-5 ml-3 mb-2" alt="">
    </div>
    <div class="sidebar-brand-text px-3">{Company}</div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
    <img src="{{ asset('admin_assets/img/icon-dashboard.png') }}" style="width:13%;" alt="">
      <span class="mx-2">Home</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('products') }}">
    <img src="{{ asset('admin_assets/img/icon-product.png') }}" class="mb-3" style="width:17%;" alt="">
      <span class="mx-1">Product</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="/profile">
    <img src="{{ asset('admin_assets/img/icon-profile.png') }}" style="width:15%;" alt="">
      <span class="mx-2">Profile</span></a>
  </li>
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
  
</ul>