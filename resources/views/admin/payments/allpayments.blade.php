@extends('admin.master.masterpage')

@section('Content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5><i class="fa fa-info"></i> نکته :</h5>
              این صفحه مناسب برای پرینت طراحی شده است
            </div>


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fa fa-globe"></i>سامانه خیریه شمسی پور
                  </h4>
                </div>
                <!-- /.col -->
              </div>

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>نام پرداخت کننده</th>
                      <th>سریال پرداخت</th>
                      <th>مبلغ</th>
                      <th>وضعیت</th>
                      <th>تاریخ و زمان</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($allPayments as $pay)
                    <tr>
                        <td>{{$pay->user->name}}</td>
                        <td>{{$pay->serial}}</td>
                        <td>{{$pay->price}}</td>
                        @if ($pay->status=='successful')
                        <td style="color: green">موفق</td>
                        @elseif ($pay->status=='failed')
                        <td style="color: red">ناموفق</td>
                        @else
                        <td style="color: gray">در انتظار نهایی شدن</td>
                        @endif
                        <td>{{$pay->created_at}}</td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print" style="
              bottom: 0.75%;
              position: fixed;">
                <div class="col-12">
                  <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> پرینت </a>
                  </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
