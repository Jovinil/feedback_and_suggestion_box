<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Suggestion Box')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-base-200 min-h-screen">
    <div class="min-h-screen flex flex-col">

        <div class="navbar p-3 bg-base-100 border-b-1">
            <div class="flex-1 justify-left">
                <a href="{{ route('dashboard') }}"
                    class="text-xl flex items-center gap-2">
                    <span>Suggestion Box</span>
                </a>
            </div>

            <div class="flex-none">
                <div class="flex items-center">
                    <a href="{{ route('boxes.create') }}" class="link no-underline font-semibold border-primary">Create Box</a>
                    <form method="POST" action="#">
                        @csrf
                        <button class="btn btn-ghost" type="button">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <main class="flex-1">
            @yield('content')
        </main>

        <footer class="py-4 h-10 text-center text-xs text-base-content/60">
            &copy; {{ date('Y') }} Suggestion Box
        </footer>
    </div>
</body>
</html>
