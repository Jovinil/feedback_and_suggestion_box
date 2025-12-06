<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback and Suggestion Box</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-base-200 min-h-screen flex flex-col">

    <nav class="bg-white border-b border-gray-300">
        <div class="container mx-auto px-4 h-16 flex items-center justify-between">
            <div class="flex items-center space-x-6">
                {{-- {{ route('dashboard') }} --}}
                <a href="" class="text-xl font-bold uppercase tracking-wide hover:text-primary">
                    Dashboard
                </a>

                <div class="h-6 w-px bg-gray-400"></div>

                {{-- {{ route('box.create') }} --}}
                <a href="" class="text-xl font-bold uppercase tracking-wide hover:text-primary">
                    Create Box
                </a>
            </div>

            <div>
                <div class="avatar placeholder cursor-pointer">
                    <div class="bg-neutral text-neutral-content rounded-full w-8">
                        <span class="text-xs">UI</span>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="container mx-auto py-8 px-4 flex-grow">
        @yield('content')
    </main>

</body>
</html>
