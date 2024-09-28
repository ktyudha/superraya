{{--  Vite  --}}
@vite(['resources/css/app.css', 'resources/js/app.js'])



{{--  Custom  --}}
<link rel="stylesheet" href="{{ asset('static/admin/css/style.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">




@yield('styles')
