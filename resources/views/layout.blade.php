<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>htmx | @yield('title')</title>

        <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.colors.min.css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <script src="https://unpkg.com/htmx.org@2.0.4" integrity="sha384-HGfztofotfshcF7+8n44JQL2oJmowVChPTg48S+jvZoztPfvwD79OC/LTtG6dMp+" crossorigin="anonymous"></script>

        @stack('head')

        <style>
          .htmx-indicator{
              display:none;
          }
          .htmx-request .htmx-indicator{
              display:block;
          }
          .htmx-request.htmx-indicator{
              display:block;
          }
        </style>
    </head>
    <body>
        <main class="container">
            @yield('main')
        </main>
    </body>
</html>
