
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <h4> Eco Search Admin </h4>
        </div>
        <ul class="nav">

            <li class="nav-item nav-category">
                <span class="nav-link">Menus</span>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/users')}}">
              <span class="menu-icon">
                <i class="mdi mdi-account-multiple"></i>
              </span>
                    <span class="menu-title">Users</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/team-list')}}">
              <span class="menu-icon">
                <i class="mdi mdi-account-multiple"></i>
              </span>
                    <span class="menu-title">Add Team</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/teams-list')}}">
              <span class="menu-icon">
                <i class="mdi mdi-account-multiple"></i>
              </span>
                    <span class="menu-title">All Team</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/candidate-list')}}">
              <span class="menu-icon">
                <i class="mdi mdi-account-circle"></i>
              </span>
                    <span class="menu-title">Candidates</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/contactus-list')}}">
              <span class="menu-icon">
                <i class="mdi mdi-account-circle"></i>
              </span>
                    <span class="menu-title">Contact Us</span>
                </a>
            </li>
        </ul>
    </nav>
