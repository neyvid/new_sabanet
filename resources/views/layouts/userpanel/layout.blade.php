@section('right_sidebar')
    @can(\App\Models\Permissions\Permissions::getPermissionName(\App\Models\Permissions\Permissions::USERACCESS))
        @include('layouts.userpanel.normal_user_sidebarmenu')
    @endcan
@endsection
@include('layouts.admin.header')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    @yield('content')

</div>
<!-- /.content-wrapper -->

@include('layouts.admin.footer')

