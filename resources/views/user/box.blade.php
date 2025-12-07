@extends('layouts.app')

@section('title', 'User Box')

@section('navbar')
    <li><a href="{{ route('dashboard') }}" class="font-semibold border-b-2 border-primary">DASHBOARD</a></li>
@endsection

@section('content')
<div class="w-full max-w-3xl mx-auto px-4">
    <div class="card bg-base-100 shadow-xl">
        <div class="card-body">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center gap-3">
                    <div class="w-14 h-14 bg-base-200"></div>
                    <h2 class="font-semibold text-lg">NAME</h2>
                </div>

                <a href="{{ route('feedback.create') }}" class="btn btn-primary">ADD</a>
            </div>

            <div class="max-h-80 overflow-y-auto border border-base-300">
                @foreach(range(1,3) as $i)
                    <div class="p-3 border-b border-base-200">
                        <h3 class="font-semibold text-sm mb-1">Title {{ $i }}</h3>
                        <p class="text-xs mb-1">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                        <p class="text-[11px]">
                            <span class="font-semibold">Submitted by:</span> Fullname<br>
                            <span class="font-semibold">Type:</span> Feedback<br>
                            <span class="font-semibold">1 min ago</span>
                        </p>
                    </div>
                @endforeach
            </div>

            <div class="mt-3 flex justify-center text-sm gap-2">
                <a href="#" class="link link-hover">&lt;&lt; Prev</a>
                @foreach(range(1,10) as $p)
                    <a href="#" class="link link-hover">{{ $p }}</a>
                @endforeach
                <a href="#" class="link link-hover">Next &gt;&gt;</a>
            </div>
        </div>
    </div>
</div>
@endsection
