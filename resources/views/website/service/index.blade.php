@extends('website.layout')

@section('title', 'SUPERRAYA™')

@section('metadata')
    <meta name="title" content="Super Raya">
    <meta name="description" content="Halaman Utama Superraya">
@stop


@section('content')
    {{--  Hero  --}}
    <section id="home" class="lg:mb-24 mb-16">
        <div class="hero min-h-screen"
            style=" background-image: linear-gradient(to top, rgba(0, 0, 0, 1), transparent), url({{ asset('static/website/images/product/produk-1.png') }})">
            <div class="group absolute bottom-6 md:left-40 left-4 p-2 items-end justify-end">
                <a href="{{ route('service.show', 1) }}"
                    class="btn btn-oval bg-transparent hover:bg-transparent hover:drop-shadow-2xl text-white text-lg">
                    <span class="font-primary font-normal ">Discover</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            {{--  <div class="md:block hidden group absolute bottom-8 md:left-40 left-4  items-end justify-end ">
                <p class="text-white uppercase">EXPLORE ALL SERVICES</p>
            </div>  --}}
        </div>
    </section>
    {{--  End Hero  --}}


    {{--  Service  --}}
    <section class="lg:mx-40 mx-4 md:mb-32 mb-16">
        <h1 class="md:text-5xl text-3xl font-primary italic mb-9">Discover our remarkable services</h1>

        <div class="grid md:grid-cols-3 grid-cols-2 md:gap-6 gap-3">
            <a href="{{ route('service.show', 1) }}" class="card card-compact w-full rounded-none">
                <img src="{{ asset('static/website/images/product/produk-1.png') }}" alt="Produk" />
                <div class="my-3.5">
                    <h2 class="pl-0 text-left lg:text-3xl md:text-xl text-lg font-semibold mb-2.5">Celebrating 3.4.7 Quarter
                        of a
                        Century</h2>
                    <p class="text-md mb-auto">COMPASS® is thrilled to announce a special limited- edition
                        collaboration with ADGI (Asosiasi Desain Grafis Indonesia)</p>
                </div>
            </a>
            <a href="{{ route('service.show', 2) }}" class="card card-compact w-full rounded-none">
                <img src="{{ asset('static/website/images/product/produk-1.png') }}" alt="Produk" />
                <div class="my-3.5">
                    <h2 class="pl-0 text-left lg:text-3xl md:text-xl text-lg font-semibold mb-2.5">Celebrating 3.4.7 Quarter
                        of a
                        Century</h2>
                    <p class="text-md mb-auto">COMPASS® is thrilled to announce a special limited- edition
                        collaboration with ADGI (Asosiasi Desain Grafis Indonesia)</p>
                </div>
            </a>
            <a href="{{ route('service.show', 3) }}" class="card card-compact w-full rounded-none">
                <img src="{{ asset('static/website/images/product/produk-1.png') }}" alt="Produk" />
                <div class="my-3.5">
                    <h2 class="pl-0 text-left lg:text-3xl md:text-xl text-lg font-semibold mb-2.5">Celebrating 3.4.7 Quarter
                        of a
                        Century</h2>
                    <p class="text-md mb-auto">COMPASS® is thrilled to announce a special limited- edition
                        collaboration with ADGI (Asosiasi Desain Grafis Indonesia)</p>
                </div>
            </a>
            <a href="{{ route('service.show', 3) }}" class="card card-compact w-full rounded-none">
                <img src="{{ asset('static/website/images/product/produk-1.png') }}" alt="Produk" />
                <div class="my-3.5">
                    <h2 class="pl-0 text-left lg:text-3xl md:text-xl text-lg font-semibold mb-2.5">Celebrating 3.4.7 Quarter
                        of a
                        Century</h2>
                    <p class="text-md mb-auto">COMPASS® is thrilled to announce a special limited- edition
                        collaboration with ADGI (Asosiasi Desain Grafis Indonesia)</p>
                </div>
            </a>
        </div>
    </section>
    {{--  End Product  --}}



@stop

@section('scripts')
    <script type="text/javascript">
        const navbar = document.getElementById("navbar");
        navbar.classList.add("text-white");
        navbar.classList.remove("bg-white");

        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {

            if (window.scrollY > 20) {
                navbar.classList.add("bg-white");
                navbar.classList.add("text-slate-900");
                navbar.classList.remove("text-white");
                navbar.classList.remove("bg-transparent");
            } else {
                navbar.classList.remove("bg-white");
                navbar.classList.remove("text-slate-900");
                navbar.classList.add("bg-transparent");
                navbar.classList.add("text-white");
            }
        }
    </script>
@stop
