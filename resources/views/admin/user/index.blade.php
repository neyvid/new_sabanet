@extends('layouts.admin.layout')
@section('content')
    <section class="content-header">
        <h1>
            {{$title}}
            {{--                <small>توضیحات</small>--}}
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
            <li class="active">صفحه</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">{{$title}}</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <form method="post" class="frm">
                            @csrf
                            <table id="example1" class="table table_list table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ردیف</th>
                                    <th>نام و نام خانوادگی</th>
                                    <th>ایمیل</th>
                                    <th>شماره موبایل</th>
                                    <th>وضعیت</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>


                                @foreach($allUsers as $user)
                                    <tr>
{{--                                        <td><input type="checkbox" class="checkbox " name="user{{$user->id}}"--}}
{{--                                                   value="{{$user->id}}"></td>--}}
                                        <td width="1%"><input type="checkbox" class="check checkbox" name="item[]" value="{{$user->id}}"></td>
                                        <td width="1%">{{$loop->iteration}}</td>
                                        <td>{{$user->name.' '.$user->lastname}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->mobile}}</td>
                                        <td class="user_status">
                                        <span onclick="change_status(event,this)"
                                              data-user={{$user->id}} style="cursor:pointer;"
                                              class="label change_status label-{{$user->status=='active'? 'success':'danger'}}">{{$user->status=='active'? 'تایید شده':'تایید نشده'}}</span>
                                        </td>

                                        <td>
                                            @if($user->hasRole(\App\Models\Roles\Roles::getRoleName(\App\Models\Roles\Roles::MANAGER)))
                                                --
                                            @else
                                                <a onclick="event_confirmation(event,this)" class="delete_item"
                                                   data-toggle="tooltip" data-placement="top" title="حذف کاربر"
                                                   href="{{route('admin.user.delete',[$user->id])}}">
                                                    <i class="fa fa-user-times" style="color: #a00404"></i>
                                                </a>

                                                <a data-toggle="tooltip" data-placement="top" title="ویرایش کاربر"
                                                   href="" class="edit_item">
                                                    <i class="fa fa-edit " style="color: #0000b0"></i>
                                                </a>
                                            @endif

                                        </td>

                                    </tr>
                                @endforeach

                                </tbody>

                                <tfoot>
                                <tr>
                                    <th>ردیف</th>
                                    <th>نام و نام خانوادگی</th>
                                    <th>ایمیل</th>
                                    <th>شماره موبایل</th>
                                    <th>وضعیت</th>
                                    <th>عملیات</th>
                                </tr>
                                </tfoot>
                            </table>
                            {{--                            <button type="submit" class="btn btn-primary">حذف</button>--}}
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
    </section>
    <!-- /.content -->

    <script>

        function event_confirmation(e, tag) {
            e.preventDefault();
            let hrefOftag = $(tag).attr('href');
            swal({
                title: "آیا از حذف کاربر مطمئن هستید؟",
                text: "با حذف کاربر امکان بازیابی کاربر حذف شده مقدور نمی باشد.",
                icon: "warning",
                buttons: {
                    cancel: "انصراف",
                    defeat: 'بله',
                },
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    $(location).attr('href', hrefOftag);
                }
            });

        }
    </script>

@endsection
