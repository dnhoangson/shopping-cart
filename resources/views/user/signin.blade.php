@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md">
        <h1>Sign In</h1>
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <p>
                {{ $error }}
            </p>
            @endforeach
        </div>
        @endif

        <form action="{{ route('user.signin') }}" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary btn-outline-success">Submit</button>
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection