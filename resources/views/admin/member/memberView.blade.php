@extends('admin.master.masterpage')

@section('Content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">اعضای سایت</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table dir="ltr" id="membertable" class="table table-sm">
              <tbody>
              <tr>
                <td><img src="{{asset('img/avatar3.png')}}" class="direct-chat-img" alt=""></td>
                <td>reza
                </td>
                <td>reza@gmail.com</td>
                <td><form action="#" method="post">
                <button class="btn btn-light" type="submit">حذف کاربر</button>
                </form></td>
              </tr>
            </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>  <!-- /.content -->
@endsection
