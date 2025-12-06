@extends('/components/layouts.app')

@section('content')
<div class="flex flex-col gap-6">

    {{-- Header & Search --}}
    <div class="flex flex-col md:flex-row justify-between items-center gap-4">
        <h1 class="text-3xl font-bold text-base-content">Dashboard</h1>
    </div>

    {{-- Content Grid --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @for ($i = 0; $i < 8; $i++)
        {{-- {{ route('box.show', $i) }} --}}
        <a href="" class="card bg-base-100 shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer group">
            <figure class="px-4 pt-4">
                {{-- Placeholder Image Area --}}
                <div class="rounded-xl bg-base-300 w-full aspect-video flex items-center justify-center group-hover:bg-base-400 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-base-content/30">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                      </svg>
                </div>
            </figure>
            <div class="card-body p-4">
                <h2 class="card-title text-lg">Box Name {{ $i + 1 }}</h2>
                <p class="text-sm text-base-content/60">Created: Oct 26, 2023</p>
            </div>
        </a>
        @endfor
    </div>

    {{-- Pagination (DaisyUI Join component) --}}
    <div class="flex justify-center mt-8">
        <div class="join shadow-sm">
            <button class="join-item btn btn-sm">«</button>
            <button class="join-item btn btn-sm btn-active">1</button>
            <button class="join-item btn btn-sm">2</button>
            <button class="join-item btn btn-sm btn-disabled">...</button>
            <button class="join-item btn btn-sm">9</button>
            <button class="join-item btn btn-sm">10</button>
            <button class="join-item btn btn-sm">»</button>
        </div>
    </div>

</div>
@endsection
