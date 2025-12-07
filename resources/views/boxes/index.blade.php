@extends('layouts.app')

@section('title', 'Dashboard')

@section('navbar')
    <li><a href="{{ route('dashboard') }}" class="font-semibold border-b-2 border-primary">DASHBOARD</a></li>
    <li><a href="{{ route('boxes.create') }}">CREATE BOX</a></li>
@endsection

@section('content')
<div class="w-full px-0">
    {{-- card fills the viewport below the navbar (navbar ≈ 4rem height) --}}
    <div class="card bg-base-100 shadow-xl rounded-none min-h-[calc(100vh-4rem)]">
        <div class="card-body flex flex-col">

            {{-- main scrollable area takes all remaining height --}}
            <div class="flex-1">
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 h-full overflow-y-auto border border-base-300 p-4">
                    @foreach(range(1,12) as $i)
                        <div class="card card-compact bg-base-100 border border-base-300">
                            <figure class="bg-base-200 h-24"></figure>
                            <div class="card-body p-3">
                                <h3 class="font-semibold text-sm">Name {{ $i }}</h3>
                                <p class="text-xs text-base-content/70">Date Created: 2024-12-06</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- footer / pagination stays at the bottom --}}
            <div class="mt-4 flex justify-center text-sm gap-2">
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
