<li class="{{Request::segment(1) == '' ? 'active ' : ''}}treeview">
    <a href="#">
        <i class="fa fa-fw fa-dashboard"></i>
        <span>@lang('menu.mi.dashboard')</span>
    </a>
</li>
<li class="{{Request::segment(1) == 'users' ? 'active ' : ''}}">
    <a href="#">
        <i class="fa fa-fw fa-users"></i>
        <span>@lang('menu.mi.users')</span>
    </a>
</li>