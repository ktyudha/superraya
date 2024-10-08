@extends('website.layout')

@section('title', 'Home')

@section('metadata')
    <meta name="title" content="Super Raya">
    <meta name="description" content="Halaman Utama Superraya">
@stop




@section('content')
    {{--  Hero  --}}
    <section id="home" class="mb-16">
        <div class="hero min-h-screen" style="background-image: url({{ asset('storage/' . @$slider->image) }})">
            <div class="bg-opacity-60 bg-blur"></div>
            <div class="hero-content text-neutral-content text-center">
                <div class="max-w-lg">
                    <img src="{{ asset(@$setting->firstWhere('key', 'logo')->value) }}" alt=""
                        class="lg:w-full w-4/5 mx-auto" />
                </div>
            </div>
            <div class="group absolute bottom-6 md:left-40 left-4 p-2 items-end justify-end">
                <p class="text-white mb-3 uppercase">EXPLORE ALL PRODUCTS</p>
                <a href="{{ route('product.index') }}"
                    class="btn btn-oval bg-transparent hover:bg-transparent hover:drop-shadow-2xl text-white text-lg">
                    <span class="font-primary font-normal ">Check Now</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <div class="md:block hidden group absolute bottom-20 md:right-[90px] rotate-90 right-6  items-end justify-end ">
                <div class="flex ">
                    <p class="text-white uppercase">SCROLL FOR MORE</p>
                    <hr class="my-auto w-8 ml-1 text-white">
                </div>

            </div>
        </div>
    </section>
    {{--  End Hero  --}}

    {{--  About Us  --}}
    <section id="about-us" class=" mb-32">
        <div class="lg:mx-40 mx-4">
            <div class="card-header">
                <h1 class="md:text-5xl text-3xl italic font-primary">About Us</h1>
            </div>
            <div class="my-6">
                <div class="md:flex flex-none lg:gap-20 gap-6">
                    <div class="lg:w-3/5 md:w-4/5 w-2/5 mb-6">
                        <img src="{{ asset(@$setting->firstWhere('key', 'logo')->value) }}" class="w-full" alt="Logo_hbs">
                    </div>
                    <div>
                        <div class="lg:text-xl text-sm mb-6">
                            {!! nl2br(@$about->description) !!}
                        </div>

                        {{--  <div>
                            Bengkel Super Raya adalah perusahaan perbengkelan dan perakitan mesin produksi yang dikelola
                            secara
                            dimanis untuk memberikan kontribusi nyata dalam pembangunan di Indonesia khususnya dalam
                            peningkatan
                            nilai ekonomis hasil bumi dan pertanian / perkebunan melalui alat-alat produksi yang tepat guna
                            dan
                            terjangkau.
                            <br>
                            <br>
                            Kami memiliki kepercayaan, hanya dengan kerja keras dan ketekunan yang mendalam, kami mampu
                            memberikan yang terbaik untuk konsumen pengguna produk kami.
                        </div>
                        <h1 class="font-bold lg:text-xl md:text-md text-sm">Alfatik Ibnu Maruf</h1>  --}}
                    </div>
                </div>
                <div>
                </div>
            </div>
        </div>
    </section>
    {{--  End About Us  --}}

    {{--  Product  --}}
    <section id="products" class="lg:mx-40 mx-4 md:mb-32 mb-16">
        <div class="flex justify-between mb-6">
            <h1 class="md:text-5xl text-3xl font-primary italic">Products</h1>
            <a href="{{ route('product.index') }}" class="hover:underline mt-auto text-end">SEE ALL</a>
        </div>

        <div class="grid md:grid-cols-3 grid-cols-2 md:gap-6 gap-3">
            @foreach ($products as $key => $product)
                <a href="{{ route('product.show', $product->slug) }}" class="card card-compact w-full rounded-none">
                    <img src="{{ asset('storage/' . @$product->image) }}" alt="{{ $product->title }}" />
                    <div class="my-3.5">
                        <h2 class="pl-0 text-left lg:text-3xl md:text-xl text-lg font-semibold">{{ $product->title }}</h2>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
    {{--  End Product  --}}

    {{--  Services  --}}
    <section id="services" class="md:mb-32 mb-16">
        <div
            class="hero md:min-h-[70vh] min-h-[80vh] md:bg-[url({{ asset('static/website/images/service/image-services.png') }})] bg-[url({{ asset('static/website/images/service/image-services-mobile.webp') }})]">
        </div>

        <div class="lg:mx-40 mx-4 mt-9 lg:flex">
            <div class="grid lg:grid-cols-1 grid-cols-2 my-auto lg:w-1/5 w-full md:mb-0 mb-6">
                <h1 class="md:text-5xl text-3xl font-primary italic lg:mb-2 md:mb-6">Services</h1>
                <a href="{{ route('service.index') }}" class="hover:underline my-auto lg:text-start text-end">SEE ALL</a>
            </div>

            <div class="lg:w-4/5 w-full">
                <div class="swiper mySwiper md:h-48 h-32">
                    <div class="swiper-wrapper">
                        @foreach ($services as $key => $service)
                            <div class="swiper-slide lg:h-50 md:h-38 h-32">
                                <a href="{{ route('service.show', $service->slug) }}" class="flex">
                                    <img src="{{ asset('storage/' . $service->image) }}"
                                        class="object-cover lg:h-48 lg:w-48 md:h-36 md:w-36 h-32 w-32" alt="Produk" />
                                    <div class="pl-2 text-left">
                                        <h2 class=" text-lg  font-semibold uppercase">{{ $service->title }}</h2>
                                        <p class="text-xs mb-auto text-gray-500">{{ $service->description_short }}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="hidden lg:block">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--  End Services  --}}



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
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            grabCursor: true,
            navigation: true,
            centeredSlides: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                    centeredSlides: false,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                    centeredSlides: false,
                    pagination: false,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                },
                1024: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                    centeredSlides: false,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                },
                1200: {
                    slidesPerView: 2,
                    spaceBetween: 50,
                    centeredSlides: false,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                },
                1680: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                    centeredSlides: false,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                },
            },

        });

        var swiper = new Swiper(".detailProduct", {
            slidesPerView: "auto",
            navigation: true,
            grabCursor: true,
            centeredSlides: true,
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>

@stop
