@extends('layout')

@section('content')

    <form method="POST" class="row g-3" action="{{route('register_user')}}">
        @csrf

        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4" name="email">
            <div>{{$errors->first('email')}}</div>
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword4" name="password">
            <div>{{$errors->first('password')}}</div>
        </div>
        <div class="row" style="margin-top: 20px">
            <div class="col">
                <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="first_name">
                <div>{{$errors->first('first_name')}}</div>
             </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="last_name">
                <div>{{$errors->first('last_name')}}</div>
            </div>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>
@endsection
