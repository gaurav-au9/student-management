<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="{{(App\Helper\Common::getCurrentController() == 'AdminController') ? 'active' : ''}}"><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="{{(App\Helper\Common::getCurrentController() == 'CompanyController') ? 'active' : ''}}"><a href="{{route('department.index')}}"><i class="fa fa-bars"></i> <span>Department</span></a></li>

            <li class="{{(App\Helper\Common::getCurrentController() == 'CompanyController') ? 'active' : ''}}"><a href="{{route('student.index')}}"><i class="fa fa-bars"></i> <span>Student</span></a></li>

            <li class="{{(App\Helper\Common::getCurrentController() == 'CompanyController') ? 'active' : ''}}"><a href="{{route('class.index')}}"><i class="fa fa-bars"></i> <span>Class</span></a></li>


            <li class="{{(App\Helper\Common::getCurrentController() == 'CompanyController') ? 'active' : ''}}"><a href="{{route('class.index')}}"><i class="fa fa-bars"></i> <span>Subjects</span></a></li>


            

            <li class="treeview">
                <!--          <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Users</span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                          </a>-->
                <ul class="treeview-menu">
                    {{-- <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i>Admins</a></li> --}}

                </ul>
            </li>
            
            
            
              
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>