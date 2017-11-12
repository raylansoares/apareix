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
                <th class="col-sm-1">@lang('labels.image')</th>
                <th class="col-sm-2">@lang('labels.name')</th>
                <th class="col-sm-3">@lang('labels.email')</th>
                <th class="col-sm-2 text-center">@lang('labels.profile')</th>
                <th class="col-sm-3">@lang('labels.actions')</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                    <tr>
                        <td style="vertical-align: middle;">
                            <form name="form_status" id="formEnableDisable" action="{{ route('users.status', $ids = $user->id) }}" method="get">
                                <input type="checkbox" name="ids[]" id="{{ $user->id }}" class="minimal checkUser">
                            </form>
                        </td>
                        <td class="text-center">
                            <form name="form_update" id="formUpdate" method="post" action="{{route('users.update', $user->id)}}">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <a
                                    id="seeUser"
                                    title="See info about user"
                                    data-toggle="modal"
                                    data-target="#UserModal{{ $user->id }}">
                                    <img src="{{ $user->avatar }}" style="border-radius: 50%;" height="50px" width="50px" alt="{{$user->name}}" title="{{$user->name}}">
                                </a>
                                @include('users.modals.show')
                            </form>
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
                        <td class="text-center">
                            @if($user->status == 1)
                                <a href="{{ route('users.status', $user->id) }}"
                                   class="btn btn-sm btn-success"
                                   title="">
                                    <i class="fa fa-check"></i>
                                    @lang('buttons.enable')
                                </a>
                            @elseif($user->status == 0)
                                <a href="{{ route('users.status', $user->id) }}"
                                   class="btn btn-sm btn-default"
                                   title="">
                                    <i class="fa fa-ban"></i>
                                    @lang('buttons.disable')
                                </a>
                            @endif

                                <a href="{{ route('users.historic', $user->id) }}"
                                   class="btn btn-sm btn-primary"
                                   title="See historic">
                                    <i class="fa fa-bookmark"></i>
                                    @lang('buttons.view')
                                </a>
                        </td>
                    </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <td colspan="4">
                    {{ $users->links() }}
                </td>

                <td colspan="2" class="text-center">
                    <button name="form_status" form="formEnableDisable" type="button" id="enableAll" class="btn btn-default btn-block" title="" disabled>
                        <i class="fa fa-exchange"></i>
                        @lang('buttons.enable_disable_all')
                    </button>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
</div>

@section('css')
@endsection

@section('js')
@endsection