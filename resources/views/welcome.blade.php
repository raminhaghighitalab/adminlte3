@extends('adminlte::page')



@section('content_header')
    <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger float-right">logout
            <span><i class="fas fa-fw fa-sign-out-alt"></i></span>
        </button>
    </form>
    <div class="row ">
        <h1>Dashboard</h1>
    </div>
@stop

@section('content')

    <!-- Content Header (Page header) -->
    @include('main')
    <!-- /.content-header -->

    <!-- Main content -->

    <!-- /.content -->

@stop

@section('sidebar')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
