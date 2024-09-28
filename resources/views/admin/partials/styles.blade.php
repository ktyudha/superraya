{{--  Vite  --}}
@vite(['resources/css/app.css', 'resources/js/app.js', asset('static/admin/js/index.js')])



{{--  Custom  --}}
<link rel="stylesheet" href="{{ asset('static/admin/css/style.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jvectormap@latest/lib/css/jsvectormap.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

{{--  FontAwesome  --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

@yield('styles')
