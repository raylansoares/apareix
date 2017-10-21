<li class="{{Request::segment(1) == '' ? 'active ' : ''}}treeview">
    <a href="#">
        <i class="fa fa-fw fa-dashboard"></i>
        <span>@lang('menus.mi.dashboard')</span>
    </a>
</li>
<li class="{{Request::segment(1) == 'users' ? 'active ' : ''}}">
    <a href="{{ route('users.index') }}">
        <i class="fa fa-fw fa-users"></i>
        <span>@lang('menus.mi.users')</span>
    </a>
</li>