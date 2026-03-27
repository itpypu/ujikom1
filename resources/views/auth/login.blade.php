@extends('layouts.app')

@section('content')
    <h1>Login</h1>
    <form action="{{ route('login.submit') }}" method="POST">
        @csrf
        <div>
            <label>Email</label><br>
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email') <div class="error">{{ $message }}</div> @enderror
        </div>
        <div>
            <label>Password</label><br>
            <input type="password" name="password">
            @error('password') <div class="error">{{ $message }}</div> @enderror
        </div>
        <button type="submit">Login</button>
    </form>
@endsection
