<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'To Do App - Auth')</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    @yield('style')
  </head>
  <body class="d-flex flex-column h-100 justify-content-center align-items-center" style="min-height: 100vh;">

    <div class="w-100" style="max-width: 400px;">
      @yield('content')
    </div>

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  </body>
</html>
