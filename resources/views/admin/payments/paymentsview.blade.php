@extends('admin.master.masterpage')

@section('Content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>صورتحساب</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">خانه</a></li>
              <li class="breadcrumb-item active">صورتحساب</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5><i class="fa fa-info"></i> نکته :</h5>
              این صفحه مناسب برای پرینت طراحی شده است برای تست روی دکمه پرینت کلیک کنید
            </div>


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fa fa-globe"></i> مجله آموزشی راکت
                    <small class="float-left">Date: 1397/09/30</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  از
                  <address>
                    <strong>مجله آموزشی راکت</strong><br>
                    آدرس<br>
                    خیابان<br>
                    تلفن : (804) 123-5432<br>
                    ایمیل : info@roocket.ir
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  به
                  <address>
                    <strong>محمدحسن قلی</strong><br>
                    آدرس خریدار<br>
                    خیابان فلان<br>
                    تلفن : (555) 539-1037<br>
                    ایمیل : john.doe@example.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>سفارش #007612</b><br>
                  <br>
                  <b>کد سفارش :</b> 4F3S8J<br>
                  <b>تاریخ پرداخت :</b> 12 آبان 1397<br>
                  <b>اکانت :</b> 968-34567
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
                      <th>تعداد</th>
                      <th>محصول</th>
                      <th>سریال #</th>
                      <th>توضیحات</th>
                      <th>قیمت کل</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>ندای وظیفه</td>
                      <td>455-981-221</td>
                      <td>بازی شوتر شخص اول</td>
                      <td>150000 تومان</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>تلویزیون هوشمند سامسونگ</td>
                      <td>247-925-726</td>
                      <td>لوازم خانگی</td>
                      <td>2,000,000 تومان</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>لباسشویی</td>
                      <td>735-845-642</td>
                      <td>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </td>
                      <td>10,000 تومان</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>نجات سرباز رایان</td>
                      <td>422-568-642</td>
                      <td>لورم ایپسوم متن ساختگی</td>
                      <td>20,000 تومان</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">روش های پرداخت :</p>
                  <img src="../../dist/img/credit/visa.png" alt="Visa">
                  <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
                  <img src="../../dist/img/credit/american-express.png" alt="American Express">
                  <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

                  <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                    پرداخت از طریق کلیه کارت های بانکی عضو شتاب امکان پذیر می باشد.
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">مهلت پرداخت : 10 دی 1397</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">مبلغ کل :</th>
                        <td>1,300,000 تومان</td>
                      </tr>
                      <tr>
                        <th>مالیات (9.3%)</th>
                        <td>300,000 تومان</td>
                      </tr>
                      <tr>
                        <th>تخفیف :</th>
                        <td>20,000 تومان</td>
                      </tr>
                      <tr>
                        <th>مبلغ قابل پرداخت:</th>
                        <td>900,000 تومان</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> پرینت </a>
                  <button type="button" class="btn btn-success float-left"><i class="fa fa-credit-card"></i> پرداخت صورتحساب
                  </button>
                  <button type="button" class="btn btn-primary float-left ml-2" style="margin-right: 5px;">
                    <i class="fa fa-download"></i> تولید PDF
                  </button>
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
