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

        <div class="col-sm-8">
            @include('instagrams._list')
        </div>
    </div>

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/instagram.css') }}">
@endsection

@section('js')
@endsection