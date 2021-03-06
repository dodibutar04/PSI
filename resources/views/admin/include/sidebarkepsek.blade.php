      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ URL::asset('auth/images/teacher.png') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Kepala Sekolah</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION KEPALA SEKOLAH</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Kepsek</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{{route('reset.password.kepsek')}}}"><i class="fa fa-circle-o"></i> Reset Password </a></li>
               
              </ul>
            </li>
            
          
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Modal -->
      <div class="modal fade" id="myModalq" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabelq">Modal title</h4>
            </div>
            <div class="modal-bodyq">
              ...
            </div>
            <div class="modal-footerq">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <!-- end of modal -->
