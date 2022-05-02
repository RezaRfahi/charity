<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/index" class="nav-link">خانه</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav mr-auto">
        <li class="nav-icon">
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf

                <button href="{{ route('logout') }}" class="btn btn-secondary "
                type="submit"@click.prevent="$root.submit();">
                {{ __('خروج') }}
                </button>
            </form>
          </li>
    </ul>
  </nav>
  <!-- /.navbar -->
