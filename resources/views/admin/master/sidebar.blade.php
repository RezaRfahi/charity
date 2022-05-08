
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src={{asset('img/AdminLTELogo.png')}} alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">پنل مدیریت</span>
      </a>
          <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
        <div style="direction: rtl">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src={{$admin->profile_photo_url}} class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="/user/profile" class="d-block">{{$admin->name}}</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class="nav-item has-treeview menu-open">
                <a href="/admin" class="nav-link active">
                  <i class="nav-icon fa fa-dashboard"></i>
                  <p>
                    داشبورد
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-user"></i>
                  <p>
                    مدیریت کاربران
                    <i class="right fa fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('membersview')}}" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>مشاهده</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>افزودن</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-user-secret"></i>
                  <p>
                    مدیریت ادمین ها
                    <i class="fa fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('adminsview')}}" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>مشاهده</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('adminadd')}}" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>افزودن</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-table"></i>
                  <p>
                    اطلاعات
                    <i class="fa fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/tables/simple.html" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>جداول ساده</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('admin/session')}}" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>نشست ها</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="/admin/calender" class="nav-link">
                  <i class="nav-icon fa fa-calendar"></i>
                  <p>
                    تقویم
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-book"></i>
                  <p>
                    لیست ها
                    <i class="fa fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('payments/view',$admin->id)}}" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>پرداختی های شما</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('payments/user')}}" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>پرداختهای کاربران</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('payments/all')}}" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>کل پرداختها</p>
                    </a>
                  </li>
                </ul>
              </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
      </div>
      <!-- /.sidebar -->
    </aside>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
      <!-- Content Wrapper. Contains page content -->
