<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">
            <i class="fa fa-gift"></i>
            <strong>@lang('pages.profiles.create')</strong></h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse">
                <i class="fa fa-minus"></i>
            </button>
        </div>
    </div>

    <div class="box-body">
        <form method="post" action="{{route('profiles.store')}}">
            {{ csrf_field() }}

            <div class="col-sm-12">
                <div class="form-group">
                    <input placeholder="@lang('labels.name')" type="text" class="form-control" id="name" name="name" required>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <input placeholder="@lang('labels.description')" type="text" class="form-control" id="description" name="description" required>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label for="permission_id">@lang('labels.permissions')</label>
                    <select class="select2 form-control" id="permission_id" name="permission_id[]" multiple required>
                        <option value=""></option>
                        @foreach($permissions as $permission)
                            <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="col-sm-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-success">
                        <i class="fa fa-save"></i> @lang('buttons.create_profile')
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
@endsection

@section('js')
    <script src="{{ asset('js/select2.multi-checkboxes.js') }}"></script>
    <script src="{{ asset('js/profiles.js') }}"></script>
    @endsection