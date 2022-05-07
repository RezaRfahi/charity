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
              @foreach ($users as $user)
              <tr>
                <td><img src="{{$user->profile_photo_url}}" class="direct-chat-img" alt=""></td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                @if ($user->id!=$admin->id)

                <form action="/deleteuser/{{$user->id}}" method="post">
                <button class="btn btn-light" type="submit">حذف کاربر</button>
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
  </section>
  <!-- /.content -->
</div>  <!-- /.content -->
@endsection
