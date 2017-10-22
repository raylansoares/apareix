<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">
            <i class="fa fa-gift"></i>
            <strong>@lang('pages.profiles')</strong></h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse">
                <i class="fa fa-minus"></i>
            </button>
        </div>
    </div>

    <div class="box-body">
        <table id="adminsTable" class="table table-bordered table-hover">
            <thead>
            <tr>
                <th class="col-sm-12">
                    @lang('labels.name')
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($roles as $role)
                <tr>
                    <td style="text-align: center">
                        <a
                           id="seeProfile"
                           title="See info about profile"
                           data-toggle="modal"
                           data-target="#RoleModal{{$role->id}}">
                            {{ $role->name }}
                        </a>
                    </td>
                </tr>

                <div class="row">
                    @include('profiles.modals.show')
                </div>
            @endforeach
            </tbody>
        </table>
    </div>
</div>