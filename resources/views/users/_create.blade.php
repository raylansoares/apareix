<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">
            <i class="fa fa-users"></i>
            <strong>@lang('pages.users.create')</strong>
        </h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <form method="post" action="{{route('users.store')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type='file' id="primaryImage" name="primaryImage" accept="image/*" class="hidden" />

            <div class="col-sm-12">
                <div class="form-group">
                    <a href="#" onclick="openFile();">
                        <img id="image" style="width: 75px; height: 75px; border-radius: 50%;" src="/images/users/placeholder-user.png" class="img-responsive center-block">
                    </a>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <input type="text" placeholder="@lang('labels.name')" class="form-control" id="name" name="name" required>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <input type="text" placeholder="@lang('labels.email')" class="form-control" id="email" name="email" required>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <input type="password" placeholder="@lang('labels.password')" class="form-control" id="password" name="password" required>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label for="permission_id">@lang('labels.profile')</label>
                    <select class="select2 form-control" id="role_id" name="role_id" required>
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-success">
                        <i class="fa fa-save"></i>
                        @lang('buttons.create_user')
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>