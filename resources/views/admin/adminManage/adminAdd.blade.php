@extends('admin.master.masterpage')

@section('Content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
            <table dir="ltr" id="membertable" class="table table-sm">
              <tbody>
              @foreach ($users as $user)
              @if ($user->id!=auth()->user()->id)
              <tr>
                <td><img src="{{$user->profile_photo_url}}" class="direct-chat-img" alt=""></td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>


                <a href="{{route('adminmodify',$user->id)}}" class="btn btn-light" type="submit">افزودن به مدیران</a>


            </td>
              </tr>
              @endif
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
