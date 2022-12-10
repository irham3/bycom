<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ url('admin/dashboard') }}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="ti-settings menu-icon"></i>
        <span class="menu-title">Settings</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ url('admin/update-admin-password') }}">Update Password</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('admin/update-admin-details') }}">Update Details</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
        <i class="ti-desktop menu-icon"></i>
        <span class="menu-title">PC Components</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="{{ url('admin/cpu') }}">CPU</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('admin/motherboard') }}">Motherboard</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('admin/gpu') }}">GPU</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('admin/ram') }}">RAM</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('admin/psu') }}">Power Supply</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('admin/storage') }}">Storage</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('admin/case') }}">Casing PC</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <i class="icon-head menu-icon"></i>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
        </ul>
      </div>
    </li>
  </ul>
</nav>