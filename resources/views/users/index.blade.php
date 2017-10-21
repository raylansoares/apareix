@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@endsection

@section('content')
    @if(Session::get('message'))
        @include('layouts.messages')
    @endif

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">
                <i class="fa fa-users"></i>
                <strong>@lang('pages.users')</strong>
            </h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <table id="usersTable" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th class="col-sm-1">#</th>
                    <th class="col-sm-3">@lang('labels.name')</th>
                    <th class="col-sm-3">@lang('labels.email')</th>
                    <th class="col-sm-2 text-center">@lang('labels.status')</th>
                    <th class="col-sm-3 text-center">@lang('labels.actions')</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>
                            <input type="checkbox" id="{{ $user->id }}" class="minimal checkUser">
                        </td>
                        <td>
                            <label>
                                {{ $user->name }}
                            </label>
                        </td>
                        <td>{{ $user->email }}</td>
                        <td class="text-center">

                        </td>
                        <td class="text-center">
                            <a href="{{ route('users.show', $user->id) }}" type="button" class="btn btn-sm btn-primary">
                                <i class="fa fa-eye"></i>
                                @lang('buttons.show')
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/v/bs/dt-1.10.13/datatables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/all.css">
@endsection

@section('js')
    <script src="//cdn.datatables.net/v/bs/dt-1.10.13/datatables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>

    <script>
        $(function () {
            $('#usersTable').DataTable();
        });

        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass   : 'iradio_minimal-blue'
        });
    </script>
@endsection