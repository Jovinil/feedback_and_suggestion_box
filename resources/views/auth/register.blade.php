@extends('layouts.default')

@section('title', 'Register')

@section('content')
<div class="w-full max-w-md">
    <div class="card bg-base-100 shadow-xl">
        <div class="card-body space-y-4">
            <h2 class="card-title justify-center">Register</h2>

            <form method="POST" action="#">
                @csrf

                <div class="form-control mb-3">
                    <span class="label-text mb-1">Type</span>
                    <div class="flex gap-6">
                        <label class="label cursor-pointer gap-2">
                            <input type="radio" name="type" value="customer"
                                   class="radio radio-sm" checked />
                            <span class="label-text">Customer</span>
                        </label>
                        <label class="label cursor-pointer gap-2">
                            <input type="radio" name="type" value="admin"
                                   class="radio radio-sm" />
                            <span class="label-text">Admin</span>
                        </label>
                    </div>
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text">First name</span>
                    </label>
                    <input type="text" name="first_name"
                           class="input input-bordered w-full" />
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Middle name</span>
                    </label>
                    <input type="text" name="middle_name"
                           class="input input-bordered w-full" />
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Last name</span>
                    </label>
                    <input type="text" name="last_name"
                           class="input input-bordered w-full" />
                </div>

                <div class="form-control">
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
                    <button class="btn btn-primary w-full">REGISTER</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
