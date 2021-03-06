@extends('main')
@section('title', 'Login')
@section('extcss')
  <link href="/public/css/style.css" rel='stylesheet'>
@stop
@section('extjs')
  <script>
  $( document ).ready(function() {
    $('table  tbody  tr td').click(function() {
      //var id = $(this).find("td").eq(0).text();
      //location.href="/bo/users/"+id;
      var id = $(this).parent().attr("id");
      if($(this).hasClass("removeUser")){
        var r = confirm("Deseja eliminar o user com o id "+id);
        if (r == true) {
          $.post( "/bo/users/remove", { "id": id })
            .done(function( data ) {
              location.href="/bo/users";
          });
        }
      } else{
        location.href="/bo/users/"+id;
      }
    });
  });

  </script>
@stop
@include('danger')
@include('warning')
@include('success')
@include('info')
@section('content')
<div class="container">
  <h2>Users table</h2>
  <p>This table lists the users in the system</p>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Token</th>
        <th>Level</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
        <tr  id="{{$user->getId()}}">

          <td>{{$user->getId()}}</td>
          <td>{{$user->getName()}}</td>
          <td>{{$user->getEmail()}}</td>
          <td>{{$user->getToken()}}</td>
          <td>{{$user->getLevel()}}</td>
          <td style="text-align:center;color:red;" class="removeUser" ><span class="glyphicon glyphicon-remove" aria-hidden="true" ></span></td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <p class="pull-right"><a class="btn btn-primary btn-lg" href="/bo/users/new" role="button">Add user</a></p>
  @if ($id != '')
    <p class="pull-left"><a class="btn btn-primary btn-lg" href="/bo/users" role="button">Go back</a></p>
  @endif
  @yield('danger')
  @yield('warning')
  @yield('success')
  @yield('info')
</div>
@stop
