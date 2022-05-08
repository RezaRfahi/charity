

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ShamsiPour') }}
        </h2>
    </x-slot>

<!-- Font Awesome -->
<link rel="stylesheet" href={{asset('font-awesome/css/font-awesome.min.css') }}>
<!-- Theme style -->
<link rel="stylesheet" href={{asset('css/adminlte.min.css') }}>
<!-- bootstrap rtl -->
<link rel="stylesheet" href={{asset('css/bootstrap-rtl.min.css')}}>
<!-- template rtl version -->
<link rel="stylesheet" href={{asset('css/custom-style.css')}}>
<!-- Content Wrapper. Contains page content -->

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
                    <strong>{{$user->name}}</strong><br>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    <strong>{{$user->email}}</strong><br>
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
                      <th>سریال #</th>
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
                  <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> پرینت </a>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
    <!-- /.content -->

</x-app-layout>
