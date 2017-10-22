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
                <th class="col-sm-3 text-center">@lang('labels.profile')</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr >
                    <td style="vertical-align: middle;">
                        <input type="checkbox" id="{{ $user->id }}" class="minimal checkUser">
                    </td>
                    <td class="text-center">
                        <a href="{{ route('users.show', $user->id) }}">
                            <img src="{{ $user->avatar }}" style="border-radius: 50%;" height="50px" width="50px" alt="{{$user->name}}" title="{{$user->name}}">
                        </a>
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
                        @if(is_null($user->roles->first->name))
                            @lang('validation.no_profile')
                        @else
                            {{ $user->roles->first()->name }}
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4">
                        {{ $users->links() }}
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/all.css">
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
    <script src="{{ asset('js/users.js') }}"></script>
@endsection