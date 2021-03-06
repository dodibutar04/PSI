      <header class="main-header">

        <!-- Logo -->
        <a href="{{URL::to('/')}}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels
          <span class="logo-mini"><b>S</b>ia</span> -->
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Sistem Informasi SD</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <!-- <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">0</span>
                </a>

              </li> -->
              <!-- Notifications: style can be found in dropdown.less -->
              <!-- <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">0</span>
                </a>
               
              </li> -->
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">0</span>
                </a> -->
                <ul class="dropdown-menu">
                  <li class="header">You have 0 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Create a nice theme
                            <small class="pull-right">40%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">40% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Some task I need to do
                            <small class="pull-right">60%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Make beautiful transitions
                            <small class="pull-right">80%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    @if(Auth::user()->level==1)
                      <img src="{{ URL::asset('admin/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                    @elseif(Auth::user()->level==2)
                      <img src="{{ URL::asset('auth/images/teacher.png') }}" class="user-image" alt="User Image">
                    @elseif(Auth::user()->level==3)
                      <img src="{{ URL::asset('auth/images/teacher.png') }}" class="user-image" alt="User Image">
                    @elseif(Auth::user()->level==4)
                      <img src="{{ URL::asset('auth/images/teacher.png') }}" class="user-image" alt="User Image">
                    @elseif(Auth::user()->level==5)
                      <img src="{{ URL::asset('auth/images/teacher.png') }}" class="user-image" alt="User Image">
                    @elseif(Auth::user()->level==6)
                      <img src="{{ URL::asset('auth/images/teacher.png') }}" class="user-image" alt="User Image">
                    @endif 
                    
                  <span class="hidden-xs">{{ Auth::user()->name  }} <!-- (level {{Auth::user()->level}}) --></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    @if(Auth::user()->level==1)
                      <img src="{{ URL::asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                    @elseif(Auth::user()->level==2)
                      <img src="{{ URL::asset('auth/images/teacher.png') }}" class="img-circle" alt="User Image">
                    @elseif(Auth::user()->level==3)
                      <img src="{{ URL::asset('auth/images/teacher.png') }}" class="img-circle" alt="User Image">
                    @elseif(Auth::user()->level==4)
                      <img src="{{ URL::asset('auth/images/teacher.png') }}" class="img-circle" alt="User Image">
                    @elseif(Auth::user()->level==5)
                      <img src="{{ URL::asset('auth/images/teacher.png') }}" class="img-circle" alt="User Image">
                    @elseif(Auth::user()->level==6)
                      <img src="{{ URL::asset('auth/images/teacher.png') }}" class="img-circle" alt="User Image">
                    @endif   
                    <p>
                      {{ Auth::user()->name  }}<br>
                      <b>Otoritas user : </b>          
                        @if(Auth::user()->level==1)
                          <span class="label label-warning"> Admin </span>
                        @elseif(Auth::user()->level==2)
                          <span class="label label-warning"> Dosen </span>
                        @elseif(Auth::user()->level==3)
                          <span class="label label-warning"> Mahasiswa </span>
                        @elseif(Auth::user()->level==4)
                          <span class="label label-warning"> Kepsek </span>
                        @elseif(Auth::user()->level==5)
                          <span class="label label-warning"> Guru </span>
                        @elseif(Auth::user()->level==6)
                          <span class="label label-warning"> Pustakawan </span>
                        @endif 
                      <small></small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{{URL::to('/logout')}}}" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <!-- <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li> -->
            </ul>
          </div>

        </nav>
      </header>