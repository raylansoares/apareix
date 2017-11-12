@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@endsection

@section('content')
    @if(Session::get('message'))
        @include('layouts.messages')
    @endif

    <div class="row">

        <div class="col-sm-4">
            @include('instagrams._create')
            <br>
        </div>

        {{--VICTOR - 12/11 - Verifica se a variável timeline já está setada--}}
        @if(isset($entries))

            <div class="col-sm-8">
                @include('instagrams._list')
            </div>

            @else

            <div class="col-sm-8">
                <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-info"></i> Alert</h4>
                        @lang('validation.no_account')
                </div>
            </div>

        @endif

    </div>

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/instagram.css') }}">
@endsection

@section('js')
@endsection