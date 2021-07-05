@extends('layout')


@section('content')


    @if($Auth)
        <div style="display: flex; justify-content: center; margin: 10px;">
            <form method="POST" action="{{route('log_out')}}">
                @csrf
                <button style="border: none;">Log out</button>
            </form>
            <a href="/add"><button style="margin-left: 10px;border: none" >Add car</button></a>
        </div>
    @else
        <div>
            <a href="/login"> <button>Log in</button></a>
            <a href="/register"> <button>Register</button></a>
        </div>

    @endif
@endsection
