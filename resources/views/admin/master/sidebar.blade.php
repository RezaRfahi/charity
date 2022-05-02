
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
              <img src={{asset('img/avatar2.png')}} class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="/user/profile" class="d-block">حسام موسوی</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class="nav-item has-treeview menu-open">
                <a href="/admin/index" class="nav-link active">
                  <i class="nav-icon fa fa-dashboard"></i>
                  <p>
                    داشبورد
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-pie-chart"></i>
                  <p>
                    مدیریت کاربران
                    <i class="right fa fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/charts/chartjs.html" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>مشاهده</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>نمودار Flot</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/charts/inline.html" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>نمودار Inline</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-edit"></i>
                  <p>
                    مدیریت ادمین ها
                    <i class="fa fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/forms/general.html" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>اجزا عمومی</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/advanced.html" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>پیشرفته</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/editors.html" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>ویشرایشگر</p>
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
                    <a href="pages/tables/data.html" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>جداول داده</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-header">مثال‌ها</li>
              <li class="nav-item">
                <a href="/admin/calender" class="nav-link">
                  <i class="nav-icon fa fa-calendar"></i>
                  <p>
                    تقویم
                    <span class="badge badge-info right">2</span>
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
                    <a href="pages/examples/invoice.html" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>پرداختی های شما</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/profile.html" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>پرداختهای کاربران</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/login.html" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>کل پرداختها</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/register.html" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>صفحه عضویت</p>
                    </a>
                  </li>
                </ul>
                <li class="nav-icon">
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <button href="{{ route('logout') }}" class="btn btn-secondary "
                        type="submit"@click.prevent="$root.submit();">
                        {{ __('خروج') }}
                        </button>
                    </form>
                  </li>
              </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
      </div>
      <!-- /.sidebar -->
    </aside>

      <!-- Content Wrapper. Contains page content -->
