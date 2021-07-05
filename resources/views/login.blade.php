@extends('layout')

@section('content')
    <form action="{{route('login_user')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="formGroupExampleInput" placeholder="Email">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Password">
        </div>
        <div>
            <button style="background-color:green; height: 35px;width: 100px;border:none;border-radius:5px; color: white">
                Log In
            </button>
        </div>

    </form>


@endsection
