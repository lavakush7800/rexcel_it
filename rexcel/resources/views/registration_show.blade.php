@extends('layouts.master')
@section('title','egistration_show')
@section('content')
<?php
  // dd($data);
?>
<div class="container">
 <center> <h2>User Table</h2></center>   
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>IMAGES</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>PASSWORD</th>
        <th>HOBBIES</th>
        <th>UPDATE</th>
        <th>DELETE</th>
      </tr>
    </thead>
    <tbody>
    @foreach($data as $data)
      <tr>
        <td>{{ $data['id'] }}</td>
        <td><img src='<?php echo "/storage/".str_replace('public/','',$data['image']); ?>' width="80" /></td>
        <td>{{ $data['name'] }}</td>
        <td>{{ $data['email'] }}</td>
        <td>{{ $data['password'] }}</td>
        <td>{{ $data['hobbies'] }}</td>
        <td>
        <form  action="user/edit/{{ $data['id'] }}">
        @csrf
        <button class="btn btn-primary btn-sm">Edit</button>
        </form>
        </td>
        <td>
        <a href="user/delete/{{ $data['id'] }}">
        <button class="btn btn-primary btn-sm ">Delete</button>
        </a>
        </td>
      </tr>
    @endforeach
    </tbody>
    <td></td>
    <td>
        <a href="/registration">
        <button class="btn btn-primary btn-md ">Add User</button>
        </a>
        </td>
  </table>
</div>
@endsection