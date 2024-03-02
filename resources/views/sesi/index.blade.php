@extends('partial.log_master')

@section('log_content')
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Silahkan Login</h1>
    </div>
    <div class="user">
        <form action="/sesi/login" method="POST">
            @csrf
            <div class="form-group">
                <input type="email" value="{{ Session::get('email') }}" class="form-control" name="email"
                    placeholder="Enter Email Address...">
                @error('email')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
                @error('password')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <button name="submit" type="submit" class="btn btn-primary btn-user btn-block">Login </button>

        </form>
    </div>

    <hr>
    <div class="text-center">
        <a class="small" href="#">Lupa Password?</a>
    </div>
    <div class="text-center">
        <a class="small" href="#">Buat Akun!</a>
    </div>
@endsection
