@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@endsection

@section('content')
    @if(Session::get('message'))
        @include('layouts.messages')
    @endif

    <div class="row">
        <div class="col-sm-3">
            @include('users._create')
            <br>
            @include('profiles._create')
            <br>
            @include('profiles._list')
        </div>

        <div class="col-sm-9">
            @include('users._list')
        </div>
    </div>

@endsection