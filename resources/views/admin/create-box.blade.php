@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center py-12">
    <div class="card w-full max-w-md bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title text-2xl font-bold justify-center mb-6 uppercase tracking-wide">Create Box</h2>

            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- Name Input --}}
                <div class="form-control w-full mb-4">
                    <label class="label">
                        <span class="label-text font-semibold">Box Name</span>
                    </label>
                    <input type="text" placeholder="E.g., Project Alpha" class="input input-bordered w-full" />
                </div>

                {{-- Image Input (Using DaisyUI file input instead of wireframe's text+button hack) --}}
                <div class="form-control w-full mb-8">
                    <label class="label">
                        <span class="label-text font-semibold">Box Image</span>
                    </label>
                    <input type="file" class="file-input file-input-bordered file-input-primary w-full" />
                    <label class="label">
                        <span class="label-text-alt">Alt: Select Image</span>
                    </label>
                </div>

                <div class="card-actions justify-center">
                    <button type="submit" class="btn btn-primary btn-wide rounded-full font-bold">CREATE</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
