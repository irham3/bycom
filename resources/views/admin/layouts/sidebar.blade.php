<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ url('admin/dashboard') }}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('user.index') }}">
        <i class="icon-head menu-icon"></i>
        <span class="menu-title">Users</span>
      </a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#pc-components" aria-expanded="false" aria-controls="pc-components">
        <i class="ti-desktop menu-icon"></i>
        <span class="menu-title">PC Components</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="pc-components">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="{{ url('admin/processor-socket') }}">CPU Socket</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('admin/cpu') }}">CPU</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('admin/motherboard') }}">Motherboard</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('admin/gpu') }}">GPU</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('admin/memory') }}">Memory</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('admin/psu') }}">Power Supply</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('admin/internal-storage') }}">Storage</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('admin/case') }}">Casing PC</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#full-pc-builds" aria-expanded="false" aria-controls="full-pc-builds">
        <i class="ti-package menu-icon"></i>
        <span class="menu-title">PC Builds</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="full-pc-builds">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="{{ url('admin/custom-build') }}">User Build</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('admin/recommendation-pc') }}">Build Recommendation</a></li>
        </ul>
      </div>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="{{ url('admin/settings') }}">
        <i class="ti-settings menu-icon"></i>
        <span class="menu-title">Settings</span>
      </a>
    </li>
  </ul>
</nav>