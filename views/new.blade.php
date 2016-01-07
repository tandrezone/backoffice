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
<div class="container">
  <h2>Novo User</h2>
 <form class="form-horizontal" role="form" method = "POST">
   <div class="form-group">
     <label class="control-label col-sm-2" for="email">Username:</label>
     <div class="col-sm-10">
       <input type="text" name="username" value="{{$user->getName()}}" class="form-control" id="username" placeholder="Enter username">
     </div>
   </div>
   <div class="form-group">
     <label class="control-label col-sm-2" for="email">Email:</label>
     <div class="col-sm-10">
       <input type="email" name="email" class="form-control" value="{{$user->getEmail()}}" id="email" placeholder="Enter email">
     </div>
   </div>
   <div class="form-group">
     <label class="control-label col-sm-2" for="pwd">Password:</label>
     <div class="col-sm-10">
       <input type="password" name="password" class="form-control" id="password" value="{{$user->getPass()}}" placeholder="Enter password">
     </div>
   </div>
   <div class="form-group">
     <label class="control-label col-sm-2" for="email">Level:</label>
     <div class="col-sm-10">
       <input type="text" name="level" class="form-control" id="level" value="{{$user->getLevel()}}" placeholder="Enter access level">
     </div>
   </div>

   <div class="form-group">
     <div class="col-sm-offset-2 col-sm-10">
       <button type="submit" class="btn btn-default">Submit</button>
     </div>
   </div>
 </form>
  @yield('danger')
  @yield('warning')
  @yield('success')
  @yield('info')
</div>
@stop
