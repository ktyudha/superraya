<html lang="{{ Lang::locale() }}">

<head>
    @include('website.partials.metadata')
    @include('website.partials.styles')
</head>

<body>
    {{--  @include('website.partials.topbar')  --}}


    @include('website.partials.content')
    {{--  @include('website.partials.footer')
    @include('website.partials.floating-button')
    @include('website.partials.cta')  --}}
    @include('website.partials.scripts')
</body>

</html>
