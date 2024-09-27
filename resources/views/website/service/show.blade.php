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
            <div class="group absolute breadcrumb text-base lg:mb-12 text-white top-20 left-40 lg:block hidden">
                <ul class="flex gap-2">
                    <li class="hover:underline"><a href="{{ route('landing.index') }}">Home</a></li>
                    <span>/</span>
                    <li class="hover:underline"><a href="{{ route('service.index') }}">Service</a></li>
                    <span>/</span>
                    <li><a>Mesin Press Kardus</a></li>
                </ul>
            </div>
        </div>
    </section>
    {{--  End Hero  --}}


    {{--  Product  --}}
    <section id="products" class="lg:mx-40 mx-4 md:mb-32 mb-16">
        <div class="md:mb-16 mb-8">
            <h1 class="md:text-4xl text-3xl font-bold">HALLO! WHICH PABLO ARE YOU TODAY?</h1>
            <div class="flex gap-5 mt-2">
                <p class="uppercase text-[#B6B2B2] text-xs font-semibold">NOV 26, 2022</p>
                <p class="uppercase text-[#B6B2B2] text-xs font-semibold">PENGELASAN</p>
            </div>
        </div>

        <div class="body text-justify">
            <h2 class="font-bold md:text-3xl text-lg md:mb-12 mb-6">The project, titled "WHICH PABLO ARE YOU TODAY?",
                features a
                unique collection of shoes, beanies, baseball caps, socks, and
                graphic tees that brings together the identities of both Boy Pablo
                and Compass® through their styles.</h2>
            <p class="md:text-md text-sm">The collaboration kicked off with Boy Pablos first album, Wachito Rico, which
                contains 13
                new songs, each
                with a
                corresponding music video. Wachito Rico is a Chilean phrase meaning handsome boy. While listening in
                chronological
                order, the album tells a story: a Wachito Rico falling in love for the first time and experiencing its
                tumults. To get a full
                timeline of this love story, the entire album needs to be listened to in order, yet each song contributes
                its side to love. Its
                commendable how vulnerable Muñoz allows himself to be in what is his first album, reflecting not only his
                Latin heritage
                but also his struggles with anxiety produced from being propelled into fame at the age of 19, when he first
                went on tour.</p>

            <div class="image md:mt-16 mt-8">
                <div class="grid grid-cols-3 lg:gap-9 lg:mb-9 gap-4 mb-4 ">
                    <img src="{{ asset('static/website/images/service/service-1.png') }}" class="w-full" alt="">
                    <img src="{{ asset('static/website/images/service/service-2.png') }}" class="w-full" alt="">
                    <img src="{{ asset('static/website/images/service/service-3.png') }}" class="w-full" alt="">
                </div>

                <div class="grid grid-cols-2 lg:mb-9 gap-4 mb-4">
                    <img src="{{ asset('static/website/images/service/service-4.png') }}" class="w-full" alt="">
                    <img src="{{ asset('static/website/images/service/service-5.png') }}" class="w-full" alt="">
                </div>
            </div>
        </div>
    </section>
    {{--  End Service  --}}

    {{--  You Might Also Light  --}}
    <section class="you-also-might md:mt-20 mt-20 lg:mx-40 mx-4 mb-16">
        <h1 class="text-2xl md:text-3xl font-normal md:mt-10 mb-2 font-primary italic">You might also like</h1>
        <div class="swiper mySwiper h-[260px] lg:h-[400px]">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('static/website/images/product/img-produk.png') }}" class="w-full" alt="Produk" />
                    <div class="my-3.5">
                        <h2 class="pl-0 text-sm font-normal text-center">Mesin Press Kardus / Kertas</h2>
                        <p class="pl-0 text-[10px] font-bold text-center mx-auto uppercase">Industri</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('static/website/images/product/img-produk.png') }}" class="w-full" alt="Produk" />
                    <div class="my-3.5">
                        <h2 class="pl-0 text-sm font-normal text-center">Mesin Press Kardus / Kertas</h2>
                        <p class="pl-0 text-[10px] font-bold text-center mx-auto uppercase">Industri</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('static/website/images/product/img-produk.png') }}" class="w-full" alt="Produk" />
                    <div class="my-3.5">
                        <h2 class="pl-0 text-sm font-normal text-center">Mesin Press Kardus / Kertas</h2>
                        <p class="pl-0 text-[10px] font-bold text-center mx-auto uppercase">Industri</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('static/website/images/product/img-produk.png') }}" class="w-full" alt="Produk" />
                    <div class="my-3.5">
                        <h2 class="pl-0 text-sm font-normal text-center">Mesin Press Kardus / Kertas</h2>
                        <p class="pl-0 text-[10px] font-bold text-center mx-auto uppercase">Industri</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('static/website/images/product/img-produk.png') }}" class="w-full" alt="Produk" />
                    <div class="my-3.5">
                        <h2 class="pl-0 text-sm font-normal text-center">Mesin Press Kardus / Kertas</h2>
                        <p class="pl-0 text-[10px] font-bold text-center mx-auto uppercase">Industri</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('static/website/images/product/img-produk.png') }}" class="w-full" alt="Produk" />
                    <div class="my-3.5">
                        <h2 class="pl-0 text-sm font-normal text-center">Mesin Press Kardus / Kertas</h2>
                        <p class="pl-0 text-[10px] font-bold text-center mx-auto uppercase">Industri</p>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="swiper-pagination block lg:hidden"></div>
        </div>
    </section>
    {{--  End You Might Also Light  --}}



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
            slidesPerView: 2,
            spaceBetween: 20,
            grabCursor: true,
            navigation: true,
            centeredSlides: true,
            pagination: {
                el: ".swiper-pagination",
                type: "progressbar",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                    centeredSlides: false,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                    centeredSlides: false,
                    pagination: false,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                    centeredSlides: false,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 50,
                    centeredSlides: false,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                },
                2000: {
                    slidesPerView: 6,
                    spaceBetween: 50,
                    centeredSlides: false,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                },
            },

        });
    </script>
@stop
