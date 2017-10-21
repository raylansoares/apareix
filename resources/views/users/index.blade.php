@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@endsection

@section('content')
    @if(Session::get('message'))
        @include('layouts.messages')
    @endif

    <div class="col-sm-3">
        @include('users._create')
    </div>

    <div class="col-sm-9">
        @include('users._list')
    </div>

@endsection

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/v/bs/dt-1.10.13/datatables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/all.css">
@endsection

@section('js')
    <script src="//cdn.datatables.net/v/bs/dt-1.10.13/datatables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
    <script src="{{ asset('js/users.js') }}"></script>
@endsection