<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">
            <i class="fa fa-users"></i>
            <strong>@lang('pages.users')</strong>
        </h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>

    <div class="box-body">
        <table id="usersTable" class="table table-bordered table-hover">
            <thead>
            <tr>
                <th class="col-sm-1">#</th>
                <th class="col-sm-1">Image</th>
                <th class="col-sm-3">@lang('labels.name')</th>
                <th class="col-sm-3">@lang('labels.email')</th>
                <th class="col-sm-1 text-center">@lang('labels.permissions')</th>
                <th class="col-sm-3 text-center">@lang('labels.actions')</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr >
                    <td style="vertical-align: middle;">
                        <input type="checkbox" id="{{ $user->id }}" class="minimal checkUser">
                    </td>
                    <td class="text-center">
                        <img src="{{ $user->avatar }}" style="border-radius: 50%;" height="50px" width="50px" alt="{{$user->name}}" title="{{$user->name}}">
                    </td>
                    <td style="vertical-align: middle;">
                        <label>
                            {{ $user->name }}
                        </label>
                    </td>
                    <td style="vertical-align: middle;">
                        {{ $user->email }}
                    </td>
                    <td style="vertical-align: middle;" class="text-center">

                    </td>
                    <td class="text-center">
                        <a href="{{ route('users.show', $user->id) }}" type="button" class="btn btn-sm btn-primary">
                            <i class="fa fa-eye"></i>
                            @lang('buttons.show')
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>