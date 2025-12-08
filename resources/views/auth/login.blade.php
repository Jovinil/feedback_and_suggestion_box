@extends('layouts.default')

@section('title', 'Login')

@section('content')
<div class="w-full max-w-md">
    <div class="card shadow-xl">
        <div class="card-body space-y-4">
            <h2 class="card-title justify-center">Login</h2>

            <form method="POST" action="#">
                @csrf

                <div class="form-control mb-3">
                    <label class="label">
                        <span class="label-text">Username</span>
                    </label>
                    <input type="text" name="username"
                           class="input input-bordered w-full" />
                </div>

                <div class="form-control mb-4">
                    <label class="label">
                        <span class="label-text">Password</span>
                    </label>
                    <input type="password" name="password"
                           class="input input-bordered w-full" />
                </div>

                <div class="form-control">
                    <button class="btn btn-primary w-full">LOGIN</button>
                </div>
            </form>

            <p class="text-center text-sm mt-3">
                Don’t have an account?
                <a href="{{ route('register') }}" class="link link-primary">Register</a>
            </p>
        </div>
    </div>
</div>
@endsection
