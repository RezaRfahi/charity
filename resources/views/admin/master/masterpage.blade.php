<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>پنل مدیریت</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href={{asset('font-awesome/css/font-awesome.min.css') }}>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href={{asset('css/adminlte.min.css') }}>
  <!-- iCheck -->
  <link rel="stylesheet" href={{asset('iCheck/flat/blue.css')}}>
  <!-- Morris chart -->
  <link rel="stylesheet" href={{asset('morris/morris.css')}}>
  <!-- jvectormap -->
  <link rel="stylesheet" href={{ asset('jvectormap/jquery-jvectormap-1.2.2.css') }}>
  <!-- Date Picker -->
  <link rel="stylesheet" href={{asset('datepicker/datepicker3.css') }}>
  <!-- Daterange picker -->
  <link rel="stylesheet" href={{asset('daterangepicker/daterangepicker-bs3.css')}}>
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href={{asset('bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}>
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- bootstrap rtl -->
  <link rel="stylesheet" href={{asset('css/bootstrap-rtl.min.css')}}>
  <!-- template rtl version -->
  <link rel="stylesheet" href={{asset('css/custom-style.css')}}>

</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
 <!-- Navbar -->
 @include('admin.master.navbar')

  <!-- Sidebar -->

@include('admin.master.sidebar')


@yield('Content')

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src={{asset('bootstrap/js/bootstrap.bundle.min.js')}}></script>

<!-- OPTIONAL SCRIPTS -->
<script src={{asset('js/demo.js')}}></script>

<!-- PAGE PLUGINS -->
<!-- SparkLine -->
<script src={{asset('sparkline/jquery.sparkline.min.js')}}></script>
<!-- jVectorMap -->
<script src={{asset('jvectormap/jquery-jvectormap-1.2.2.min.js')}}></script>
<script src={{asset('jvectormap/jquery-jvectormap-world-mill-en.js')}}></script>
<!-- SlimScroll 1.3.0 -->
<script src={{asset('slimScroll/jquery.slimscroll.min.js')}}></script>
<!-- ChartJS 1.0.2 -->
<script src={{asset('chartjs-old/Chart.min.js')}}></script>

<!-- PAGE SCRIPTS -->
<script src={{asset('js/pages/dashboard2.js')}}></script>

<script src={{asset('jquery/jquery.min.js')}}></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src={{asset('bootstrap/js/bootstrap.bundle.min.js')}}></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src={{asset('morris/morris.min.js')}}></script>
<!-- Sparkline -->
<script src={{asset('sparkline/jquery.sparkline.min.js')}}></script>
<!-- jvectormap -->
<script src={{asset('jvectormap/jquery-jvectormap-1.2.2.min.js')}}></script>
<script src={{asset('jvectormap/jquery-jvectormap-world-mill-en.js')}}></script>
<!-- jQuery Knob Chart -->
<script src={{asset('knob/jquery.knob.js')}}></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src={{asset('daterangepicker/daterangepicker.js')}}></script>
<!-- datepicker -->
<script src={{asset('datepicker/bootstrap-datepicker.js')}}></script>
<!-- Bootstrap WYSIHTML5 -->
<script src={{asset('bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}></script>
<!-- Slimscroll -->
<script src={{asset('slimScroll/jquery.slimscroll.min.js')}}></script>
<!-- FastClick -->
<script src={{asset('fastclick/fastclick.js')}}></script>
<!-- AdminLTE App -->
<script src={{asset('js/adminlte.js')}}></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src={{asset('js/pages/dashboard.js')}}></script>
<!-- AdminLTE for demo purposes -->
<script src={{asset('js/demo.js')}}></script>

</body>
</html>
