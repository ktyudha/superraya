{{--  Daisy Ui  --}}
<script src="https://cdn.tailwindcss.com"></script>

{{--  Jquery  --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>

{{--  Swiper  --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>




<script src="{{ asset('static/website/js/script.js') }}"></script>


{{--  Google Tag  --}}
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EZ1D2DVDJM"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', '{{ @$setting->firstWhere('key', 'analytics')->value }}');
    {{--  gtag('config', 'G-EZ1D2DVDJM');  --}}
</script>


@yield('scripts')
