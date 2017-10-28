<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">
            <i class="fa fa-gift"></i>
            <strong>@lang('pages.instagrams.connect')</strong></h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse">
                <i class="fa fa-minus"></i>
            </button>
        </div>
    </div>

    <div class="box-body">
        <form method="post" action="#">
            {{ csrf_field() }}

            <div class="col-sm-12">
                <div class="form-group">
                    <button type="submit"
                            style="background-color: #8a3ab9;"
                            class="btn btn-block btn-success">
                        <i class="fa fa-instagram"></i> @lang('buttons.connect_instagram')
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>

@section('css')
@endsection

@section('js')
    <script src="{{ asset('js/instagram.js') }}"></script>
@endsection