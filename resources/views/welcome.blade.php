@extends('layouts.master')

@section('title')
    Welcome!
@endsection

@section('content')
 @include('includes.messag-error')
    <div class="row">
        <div class="col-md-6">
            <h3>Daftar</h3>
            <form action="{{ route('signup') }}" method="post">
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email">Email</label>
                <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Nama</label>
                <input class="form-control" type="text" name="name" id="name" value="{{ Request::old('name') }}">
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
        <div class="col-md-6">
            <h3>Masuk</h3>
            <form action="{{ route('signin') }}" method="post">
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email">Email</label>
                <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
             <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
@endsection