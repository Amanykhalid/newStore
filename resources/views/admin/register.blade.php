@extends('layouts.dashboard')

@section('title', 'Register')

@section('content')
<form action="{{ route('user.store') }}" method="post">
    @csrf

    <div class="form-group mb-3">
        <label for="">Name:</label>
        <input type="text" name="name" value="{{old('name') }}" class="form-control  @error('name')is-invalid @enderror">
        @error('name')
            <p class="invalid-feedback">{{$message}}</p> 
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="">Email:</label>
        <input type="email" name="email" value="{{old('email') }}" class="form-control  @error('email')is-invalid @enderror">
        @error('email')
            <p class="invalid-feedback">{{$message}}</p> 
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="">Password:</label>
        <input type="password" name="password" value="{{old('password')}}"  class="form-control  @error('password')is-invalid @enderror">
        @error('password')
            <p class="invalid-feedback">{{$message}}</p> 
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="">Gender:</label>
        <div >
            <label><input type="radio" name="gender" value="male" @if (old('gender')) checked @endif class="@error('gender')is-invalid @enderror" >
                Male</label>
            <label><input type="radio" name="gender" value="female" @if (old('gender')) checked @endif class=" @error('gender')is-invalid @enderror">
                Female</label>
            @error('gender')
            <p class="invalid-feedback">{{$message}}</p> 
            @enderror
        </div>
    </div>
    <div class="form-group mb-3">
        <label for="">Birthdath:</label>
        <input type="date" name="birthday" value="{{old('birthday') }}"  class="form-control  @error('birthday')is-invalid @enderror">
        @error('birthday')
            <p class="invalid-feedback">{{$message}}</p> 
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="">Phone:</label>
        <input type="nubmer" name="phone" value="{{old('phone') }}"  class="form-control  @error('phone')is-invalid @enderror">
        @error('phone')
            <p class="invalid-feedback">{{$message}}</p> 
        @enderror
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Register</button>
    </div>
</form>
@endsection