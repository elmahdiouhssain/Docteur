@extends('layouts.dash')
@section('content')

<div class="container">
<center>
<h2>Réglage du système</h2>
<br>@include('flash-message')<br>
</center>
<form id="form-change-password" role="form" method="POST" action="{{ url('/area/changePassword') }}" novalidate class="form-horizontal">
  <div class="form-group">             
    <label for="current-password" class="col-sm-4 control-label">Ancien Mot de pass : </label>
    <div class="col-sm-8">
      <div class="form-group">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
        <input type="password" class="form-control" id="current-password" name="current-password" placeholder="Password" required="">
      </div>
    </div>
    <label for="password" class="col-sm-4 control-label">Nouveau mot de pass : </label>
    <div class="col-sm-8">
      <div class="form-group">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="">
      </div>
    </div>
    <label for="password_confirmation" class="col-sm-4 control-label">Re-enter mot de pass : </label>
    <div class="col-sm-8">
      <div class="form-group">
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Re-enter Password" required="">
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-6">
      <button type="submit" class="btn btn-danger">Submit</button>
    </div>
  </div>
</form>
</div>
@endsection