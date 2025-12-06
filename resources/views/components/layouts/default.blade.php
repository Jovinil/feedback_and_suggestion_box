<!doctype html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />

  <title>Feedback and Suggesstion Box</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-slate-50 text-slate-800">
  <div class="min-h-screen flex items-center justify-center">
    {{ $slot ?? $content ?? '' }}
  </div>
</body>
</html>
