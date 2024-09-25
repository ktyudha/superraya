{{--  Daisy Ui  --}}
<script src="https://cdn.tailwindcss.com"></script>

{{--  Jquery  --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>



<script src="{{ asset('static/website/js/script.js') }}"></script>

{{--  <script>
    setTimeout(() => {
        $(".preloader").css("display", "none");
    }, 5000);
</script>  --}}

@yield('scripts')
