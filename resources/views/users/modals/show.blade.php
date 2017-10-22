<div class="modal fade" id="UserModal{{$user->id}}"
     tabindex="-1" role="dialog"
     aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"
                        data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"
                    id="favoritesModalLabel">{{$user->name}}</h4>
            </div>


                <div class="modal-body">
                    <div class="col-md-10 col-sm-offset-2">

                        <div class="form-group row">
                            <label for="name" class="col-sm-2">@lang('labels.name')</label>
                            <div class="col-sm-8">
                                <input type="text" value="{{ $user->name }}" class="form-control" id="name" name="name" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-2">@lang('labels.email')</label>
                            <div class="col-sm-8">
                                <input type="text" value="{{ $user->email }}" class="form-control" id="email" name="email" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role_id" class="col-sm-2">@lang('labels.profile')</label>

                            <div class="col-sm-8">
                                <select class="select22 form-control" id="role_id" name="role_id" required>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>
                </div>

            <div class="modal-footer">
                <button type="button"
                        class="btn btn-default"
                        data-dismiss="modal" style="float: left">Close</button>

                <input name="form_update" form="formUpdate" type="submit"
                        class="btn btn-info"
                        style="float: right"
                        value="@lang('buttons.edit')">
            </div>
        </div>
    </div>
</div>