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
        <div class="col-sm-12">
            @if(!is_null($profiles))

                @foreach($profiles as $profile)

                    <div class="row">
                        <a href="http://instagram.com/{{ $profile->username }}"
                           target="_blank">

                            <img id="image"
                                 style="width: 75px; height: 75px; border-radius: 50%;"
                                 src="{{ $profile->profile_picture }}"
                                 class="img-responsive center-block">

                        </a>
                    </div>

                @endforeach

            @endif

                <br>

            <div class="form-group">
                <a href="{{ route('instagram.connect') }}">
                    <button type="button"
                            style="background-color: #8a3ab9;"
                            class="btn btn-block btn-success">
                        <i class="fa fa-instagram"></i> @lang('buttons.connect_instagram')
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>

@section('css')
@endsection

@section('js')
    <script src="{{ asset('js/instagram.js') }}"></script>
@endsection