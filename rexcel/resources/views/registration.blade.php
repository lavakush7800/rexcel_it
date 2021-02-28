@extends('layouts.master')
@section('title','Registration')
@section('content')
<div class="container-fluid">
 
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
    <div class="card bg-light text-dark">
    <div class="container">
    <h2 style="text-align:center">Registration here</h2>


  <form method="post" action="/save" enctype="multipart/form-data">

  <div class="form-group">
      <label for="image">User Picture:</label>
      <input type="file" class="form-control" id="image" placeholder="jpeg, jpg" name="image">
      @error('image')
      <div class="alert alert-danger">{{ $message }}</div>
     @enderror
    </div>
  <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Xyz....." name="name">
      @error('name')
      <div class="alert alert-danger">{{ $message }}</div>
     @enderror
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder=" " name="email">
      @error('email')
      <div class="alert alert-danger">{{ $message }}</div>
     @enderror
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="" name="password">
      @error('password')
      <div class="alert alert-danger">{{ $message }}</div>
     @enderror
    </div>

  
    <div class="form-group">
     <label><strong>Which are your Hobbies in following list?  :</strong></label><br>
     <label><input type="checkbox" value="Dance" name="hobbies"> Dance  </label>
    <label><input type="checkbox" value="Yoga" name="hobbies"> Yoga </label>
    <label><input type="checkbox" value="Cooking" name="hobbies"> Cooking </label>
    <label><input type="checkbox" value="Blogging" name="hobbies"> Blogging </label>
    @error('hobbies')
      <div class="alert alert-danger">{{ $message }}</div>
     @enderror
     </div>  

    @csrf
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
  </div>
    </div>
    <div class="col-sm-3" > </div>
  </div>
</div>

@endsection

 