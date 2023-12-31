@extends('master')
@section("content")

<div class="container custom-login">
    <form class="form-horizontal" action='register' method="POST">
        @csrf
    <fieldset>
        <div id="legend">
        <legend class="">Register</legend>
        </div>
        <div class="control-group">
        <!-- Username -->
        <label class="control-label"  for="username">Username</label>
        <div class="controls">
            <input type="text" id="username" name="name" placeholder="" class="input-xlarge">
            <p class="help-block">Username can contain any letters or numbers, without spaces</p>
        </div>
        </div>
    
        <div class="control-group">
        <!-- E-mail -->
        <label class="control-label" for="email">E-mail</label>
        <div class="controls">
            <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
            <p class="help-block">Please provide your E-mail</p>
        </div>
        </div>
    
        <div class="control-group">
        <!-- Password-->
        <label class="control-label" for="password">Password</label>
        <div class="controls">
            <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
            <p class="help-block">Password should be at least 4 characters</p>
        </div>
        </div>
        <div class="control-group">
        <!-- Button -->
        <div class="controls">
            <button class="btn btn-success">Register</button>
        </div>
        </div>
    </fieldset>
    </form>
</div>
@endsection
