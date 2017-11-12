@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@endsection

@section('content')
    @if(Session::get('message'))
        @include('layouts.messages')
    @endif

    <div class="row">
        <div class="col-sm-12">
            <ul class="timeline">
            @foreach($historic as $item)
                <!-- timeline time label -->
                <li class="time-label">
                    <span class="bg-red">
                        {{ $item->created_at }}
                    </span>
                </li>
                <!-- /.timeline-label -->

                <!-- timeline item -->
                <li>
                    <!-- timeline icon -->
                    <i class="fa fa-envelope bg-blue"></i>
                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> {{ $item->created_at }}</span>

                        <h3 class="timeline-header"><a href="#">Support Team</a>:</h3>

                        <div class="timeline-body">
                            {{ $item->description }}
                        </div>
                    </div>
                </li>
                <!-- END timeline item -->
            @endforeach
            </ul>
        </div>

    </div>

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('js')
@endsection