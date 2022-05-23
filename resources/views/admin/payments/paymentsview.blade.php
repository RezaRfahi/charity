@extends('admin.master.masterpage')

@section('Content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
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
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    <strong>نام کاربری : {{$user->name}}</strong><br>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    <strong>ایمیل : {{$user->email}}</strong><br>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>ساخت اکانت : {{$user->created_at}}</b><br>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>سریال پرداخت</th>
                      <th>قیمت</th>
                      <th>وضعیت</th>
                      <th>تاریخ</th>
                    </tr>
                    </thead>
                    <tbody>
                   @foreach ($user_payments as $user_pay)
                   <tr>
                    <td>{{$user_pay->serial}}</td>
                    <td>{{$user_pay->price}} تومان</td>
                    @if ($user_pay->status=='successful')
                    <td style="color: green">موفق</td>
                    @elseif ($user_pay->status=='failed')
                    <td style="color: red">ناموفق</td>
                    @else
                    <td style="color: gray">در انتظار نهایی شدن</td>
                    @endif
                    <td>{{$user_pay->created_at}}</td>
                    <td></td>
                  </tr>
                   @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
<hr>
              <div class="row">
                <!-- /.col -->
                <div class="col-6">

                  <div class="table-responsive">
                        <label style="width:50%">کل مبلغ پرداخت شده :</label>
                        <label>{{$sum_payments}} تومان</label>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print"  style="
              bottom: 0.75%;
              position: fixed;">
                <div class="col-12">
                    <button target="_blank" class="btn btn-default" onclick="window.print()"><i class="fa fa-print"></i> پرینت </button>
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
