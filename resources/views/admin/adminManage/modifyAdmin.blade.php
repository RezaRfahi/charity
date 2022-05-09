@extends('admin.master.masterpage')

@section('Content')

<!-- Content Wrapper. Contains page content -->
<div style="" class="content-wrapper">
    <!-- Main content -->
    <div  class="row">
        <div class="col-12">
            <div class="card mb-3" style="max-width: 98%;margin-right: 2%">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="{{$user->profile_photo_url}}"
                    style="width: 20%;height:35%"
                    class="img-circle elevation-2" alt="">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">{{$user->name}}</h5>
                      <p class="card-text">{{$user->email}}</p><br>
                      <p class="card-text">دسترسی های ادمین:</p>
                      <form action="{{route('admin-insert',$user->id)}}" method="POST">
                          @csrf
                          @method('post')
                        @foreach ($permissions as $permission)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="{{$permission->name}}" type="checkbox"
                            @foreach ($user->permissions as $per)
                            @if ($per->id==$permission->id)
                            checked
                            @endif
                            @endforeach
                            >
                            <label class="form-check-label" for="inlineCheckbox1"> &nbsp;
                                @switch($permission->name)
                                    @case('adminManage')
                                        مدیریت ادمین ها
                                        @break
                                        @case('memberManage')
                                        مدیریت کاربر ها
                                        @break
                                        @case('informationManage')
                                        مدیریت اطلاعات
                                        @break
                                @endswitch
                            </label>

                        </div>

                        @endforeach
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit" class="btn btn-primary">ذخیره</button>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
