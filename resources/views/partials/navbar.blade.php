<div class="navbar bg-base-100 shadow">
    <div class="flex-1">
        <a href="{{ route('dashboard') }}"
           class="btn btn-ghost normal-case text-xl flex items-center gap-2">
            <div class="w-10 h-10 bg-base-300 rounded-md"></div>
            <span>Suggestion Box</span>
        </a>
    </div>

    <div class="flex-none">
        <ul class="menu menu-horizontal px-1">
            {{-- Items defined per-page --}}
            @yield('navbar')
        </ul>

        {{-- Close / logout button (dummy for now) --}}
        <button class="btn btn-ghost btn-circle ml-2" type="button">
            Logout
        </button>
    </div>
</div>
