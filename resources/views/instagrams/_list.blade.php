<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">
            <i class="fa fa-users"></i>
            <strong>@lang('pages.timeline')</strong>
        </h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>

    <div class="box-body">
        <table id="timelineTable" class="table table-bordered table-hover">
            <thead>
            <tr>
                <th class="col-sm-1">
                    @lang('labels.thumb')
                </th>
                <th class="col-sm-1">
                    @lang('labels.likes')
                </th>
                <th class="col-sm-1">
                    @lang('labels.comments')
                </th>
                <th class="col-sm-2">
                    @lang('labels.actions')
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($timeline as $info)
                <tr>
                    <td>
                        <a href="{{ $info['link'] }}" target="_blank">
                            <img
                                    style="width: 75px; height: 75px"
                                    src="{{ $info['images']['thumbnail']['url'] }}" alt="">
                        </a>
                    </td>
                    <td>
                        {{ $info['likes']['count'] }}
                    </td>
                    <td>
                        {{ $info['comments']['count'] }}
                    </td>
                    <td>
                        <button
                                style="background-color: #cd486b"
                                type="submit"
                                class="btn btn-sm btn-primary">
                            <i class="fa fa-comment"></i>
                            @lang('buttons.comment')
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@section('css')
@endsection

@section('js')
@endsection