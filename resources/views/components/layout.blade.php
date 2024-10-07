<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel 11 Tutorial</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100 antialiased dark:bg-slate-900">
  <x-navbar />

  <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
    {{ $slot }}
  </div>
</body>

</html>
