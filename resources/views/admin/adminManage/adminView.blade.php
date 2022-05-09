@extends('admin.master.masterpage');

@section('Content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
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
                  <td><a href="{{route('adminmodify',$adminData->id)}}" class="btn btn-light">تغییر دسترسی</a></td>
                  <td>
                  @if (auth()->user()->id!=$adminData->id)
                  <form action="/deleteuser/{{$adminData->id}}" method="post">
                <button class="btn btn-danger" type="submit">حذف مدیر</button>
                </form>
                @endif
            </td>
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
    <!-- /.content -->
  </div>  <!-- /.content -->

@endsection
