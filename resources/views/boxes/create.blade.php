@extends('layouts.app')

@section('title', 'Create Box')

@section('navbar')
    <li><a href="{{ route('dashboard') }}">DASHBOARD</a></li>
    <li><a href="{{ route('boxes.create') }}" class="font-semibold border-b-2 border-primary">CREATE BOX</a></li>
@endsection

@section('content')
<div class="w-full max-w-xl mx-auto px-4">
    <div class="card bg-base-100 shadow-xl border border-base-300 rounded-3xl">
        <div class="card-body">
            <h2 class="card-title justify-center mb-4">CREATE BOX</h2>

            <form method="POST" action="#" enctype="multipart/form-data" class="space-y-4">
                @csrf

                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Name</span>
                    </label>
                    <input type="text" name="name" class="input input-bordered w-full" />
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Image</span>
                    </label>

                    <div class="flex gap-2">
                        <input type="file" name="image" class="file-input file-input-bordered file-input-sm w-full" />
                    </div>
                </div>

                <div class="form-control pt-4">
                    <button class="btn btn-primary mx-auto px-10">CREATE</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
