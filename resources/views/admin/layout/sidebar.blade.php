  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
      <img src="{{asset('assets/admin/dist/img/mentorian-logo2.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="background-color: #fff; opacity: .8;">
      <span class="brand-text font-weight-bold" style="font-size: 1rem;">Mentorian Opportunities</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      @if (Auth::check())
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/admin/dist/img/user.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> {{ Auth::user()->name }}</a>
        </div>
      </div>
      @endif

      <!-- Sidebar Menu -->
      @if (Auth::check())
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('category.index')}}" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>Category</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('job.index')}}" class="nav-link">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>Job</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('internship.index')}}" class="nav-link">
              <i class="nav-icon fas fa-user-md"></i>
              <p>Internship</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('workshop.index')}}" class="nav-link">
              <i class="nav-icon far fa-calendar-check"></i>
              <p>Workshop</p>
            </a>
          </li>
          
        </ul>
      </nav>
      @endif
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>