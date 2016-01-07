@extends('main')
@section('title', 'Login')
@section('extcss')
  <link href="/public/css/style.css" rel='stylesheet'>
@stop
@section('extjs')
@stop
@include('danger')
@include('warning')
@include('success')
@include('info')
@section('content')
<div class="list-group">
  <a href="/bo/users" class="list-group-item active">
    <h4 class="list-group-item-heading">Users</h4>
    <p class="list-group-item-text">Controlo dos users</p>
  </a>
</div>

  @yield('danger')
  @yield('warning')
  @yield('success')
  @yield('info')
</div>
@stop
