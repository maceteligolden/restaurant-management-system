<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
       
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{Request:: is('admin/dashboard') ? 'active' :''}}" href="{{route('admin.dashboard')}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Request:: is('admin/slider') ? 'active' :''}}" href="{{route('slider.index')}}">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Slider</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Request:: is('admin/category') ? 'active' :''}}" href="{{route('category.index')}}">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Category</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Request:: is('admin/item') ? 'active' :''}}" href="{{route('item.index')}}">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Menu</span>
              </a>
            </li>    
            <li class="nav-item">
              <a class="nav-link {{Request:: is('admin/reservation') ? 'active' :''}}" href="{{route('reservation.index')}}">
                <i class="ni ni-collection text-Warning"></i>
                <span class="nav-link-text">Reservation</span>
              </a>
            </li> 
            <li class="nav-item">
              <a class="nav-link {{Request:: is('admin/table') ? 'active' :''}}" href="{{route('table.index')}}">
                <i class="ni ni-shop text-Info"></i>
                <span class="nav-link-text">Tables</span>
              </a>
            </li> 
            <li class="nav-item">
              <a class="nav-link {{Request:: is('admin/time') ? 'active' :''}}" href="{{route('time.index')}}">
                <i class="ni ni-time-alarm text-green"></i>
                
                <span class="nav-link-text">Time</span>
              </a>
            </li> 
          </ul>
        </div>
      </div>
    </div>
  </nav>