<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Suggestion Box')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Vite / Mix --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-base-200 min-h-screen">
    <div class="min-h-screen flex flex-col">

        {{-- Top Navbar (used on “inside” pages) --}}
        @hasSection('navbar')
            <div class="navbar p-3 bg-base-100 shadow">
                <div class="justify-left">
                    <a href="{{ route('dashboard') }}"
                       class="text-xl flex items-center gap-2">
                        <span>Suggestion Box</span>
                    </a>
                </div>

                <div class="flex justify-right">
                    <ul class="menu menu-horizontal px-1">
                        @yield('navbar')
                    </ul>
                    <form method="POST" action="#">
                        @csrf
                        <button class="btn btn-ghost btn-circle ml-2" type="button">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        @endif

        <main class="flex-1">
            @yield('content')
        </main>

        <footer class="py-4 h-10 text-center text-xs text-base-content/60">
            &copy; {{ date('Y') }} Suggestion Box
        </footer>
    </div>
</body>
</html>
