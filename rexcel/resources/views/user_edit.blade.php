@extends('layouts.master')
@section('title','Home')
@section('content')
<?php
//  dd($user_data);
?>
<div class="container">
 
    <center><h3>Author Edit Page</h3></center>
  <form method="post" action="/user/update" enctype="multipart/form-data">
   <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image" value="{{ $user_data['image'] }}" name="image">
      @error('image')
      <div class="alert alert-danger">{{ $message }}</div>
     @enderror
    </div>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" value="{{ $user_data['name'] }}" name="name">
      @error('name')
      <div class="alert alert-danger">{{ $message }}</div>
     @enderror
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" value="{{ $user_data['email'] }}" name="email">
      @error('email')
      <div class="alert alert-danger">{{ $message }}</div>
     @enderror
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="text" class="form-control" id="password" value="{{ $user_data['password'] }}" name="password">
      @error('password')
      <div class="alert alert-danger">{{ $message }}</div>
     @enderror
    </div>
    <div class="form-group">
    <p> Which are your Hobbies in following list?  </p>
    </div>
    <div class="checkbox" name="hobbies">
        <label><input type="checkbox" value="dance" name="hobbies"> Dance  </label>
        <label><input type="checkbox" value="yoga" name="hobbies"> Yoga </label>
        <label><input type="checkbox" value="cooking" name="hobbies"> Cooking </label>
        <label><input type="checkbox" value="blogging" name="hobbies"> Blogging </label>
     @error('hobbies')
      <div class="alert alert-danger">{{ $message }}</div>
     @enderror
    </div>
    <input type="hidden"   value="{{ $user_data['id'] }}" name="id"> 
    @csrf
    <input type="submit" value="submit" name="submit" class="btn btn-secondary btn-sm btn-block"/>
  </form>
  
</div>
@endsection