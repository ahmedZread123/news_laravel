  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('Home_admin')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              
                Dashboard
              
              
            </a>
           
          </li>
         

       
         
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Posts
                <i class="fas fa-angle-left right"></i>
               
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('post.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Add Post </p>
                </a>
              </li>
           
              <li class="nav-item">
                <a href="{{route('post.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> list Posts </p>
                </a>
              </li>
          
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                category
                <i class="fas fa-angle-left right"></i>
               
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('category.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>create category  </p>
                </a>
              </li>
           
              <li class="nav-item">
                <a href="{{route('category.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> list category </p>
                </a>
              </li>
          
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                videos
                <i class="fas fa-angle-left right"></i>
               
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('video.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Add video </p>
                </a>
              </li>
           
              <li class="nav-item">
                <a href="{{route('video.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> list video </p>
                </a>
              </li>
          
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{route('Home')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Front Site
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('logout')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Logout
               
              
              </p>
            </a>
            
          </li>
         
        </ul>
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    
  </aside>