@extends('layouts.app')

@section('title', 'User Feedback Form')

@section('navbar')
    <li><a href="{{ route('dashboard') }}" class="font-semibold border-b-2 border-primary">DASHBOARD</a></li>
@endsection

@section('content')
<div class="w-full max-w-md mx-auto px-4">
    <div class="card bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title justify-center mb-2">USER FEEDBACK FORM</h2>

            <form method="POST" action="#" class="space-y-4">
                @csrf

                <div class="form-control">
                    <span class="label-text mb-1">Type</span>
                    <div class="flex gap-6">
                        <label class="label cursor-pointer gap-2">
                            <input type="radio" name="type" value="suggestion"
                                   class="radio radio-sm" checked />
                            <span class="label-text">Suggestion</span>
                        </label>
                        <label class="label cursor-pointer gap-2">
                            <input type="radio" name="type" value="feedback"
                                   class="radio radio-sm" />
                            <span class="label-text">Feedback</span>
                        </label>
                    </div>
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Title</span>
                    </label>
                    <input type="text" name="title" class="input input-bordered w-full" />
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Name</span>
                    </label>
                    <input type="text" name="name" class="input input-bordered w-full" />
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Description</span>
                    </label>
                    <textarea name="description"
                              class="textarea textarea-bordered w-full h-32"></textarea>
                </div>

                <div class="form-control pt-2">
                    <button class="btn btn-primary w-full">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
