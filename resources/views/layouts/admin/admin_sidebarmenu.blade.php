<!-- Sidebar Menu -->
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">مدیریت</li>
    <!-- Optionally, you can add icons to the links -->
    {{--    <li class="active"><a href="#"><i class="fa fa-link"></i> <span>لینک</span></a></li>--}}
    {{--    <li><a href="#"><i class="fa fa-link"></i> <span>لینک ۲</span></a></li>--}}
    <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>مدیریت کاربران</span>
            <span class="pull-left-container">
                <i class="fa fa-angle-right pull-left"></i>
              </span>
        </a>

        <ul class="treeview-menu">
            <li><a href="{{route('admin.user.all.list')}}">لیست کاربران</a></li>
            <li><a href="#">افزودن کاربرجدید</a></li>
        </ul>
    </li>
</ul>
<!-- /.sidebar-menu -->
