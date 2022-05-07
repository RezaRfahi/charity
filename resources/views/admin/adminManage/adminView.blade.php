@extends('admin.master.masterpage');

@section('Content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">مدیران سایت</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table dir="ltr" id="membertable" class="table table-sm">
                <tbody>
                @foreach ($admins as $adminData)
                <tr>
                  <td><img src="{{$adminData->profile_photo_url}}" class="direct-chat-img" alt=""></td>
                  <td>{{$adminData->name}}</td>
                  <td>{{$adminData->email}}</td>
                  <td><form action="/deleteuser/{{$adminData->id}}" method="post">
                  <button class="btn btn-light" type="submit">حذف کاربر</button>
                  </form></td>
                </tr>
                @endforeach
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
