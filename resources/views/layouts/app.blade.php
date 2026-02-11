<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="index, follow">

  <title>{{ $title ?? config('app.name', 'NEXT LEVEL CONSULTING') }}</title>

  <!-- SEO Meta Tags -->
  @stack('meta')

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet" />

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  @livewireStyles

  <style>
    [x-cloak] { display: none !important; }
  </style>
</head>

<body class="bg-white text-gray-900 font-sans antialiased">
  <!-- Navbar -->
  @include('layouts.partials.navbar')

  <!-- Main Content -->
  <main>
    {{ $slot }}
  </main>

  <!-- Footer -->
  @include('layouts.partials.footer')

  @livewireScripts
</body>

</html>
