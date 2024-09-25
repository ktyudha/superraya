@extends('website.layout')

@section('title', 'SUPERRAYA™')

@section('metadata')
    <meta name="title" content="Super Raya">
    <meta name="description" content="Halaman Utama Superraya">
@stop

@section('styles')
    <style>

    </style>
@stop


@section('content')
    {{--  Hero  --}}
    <section id="home" class="mb-16">
        <div class="hero min-h-screen" style="background-image: url({{ asset('static/website/images/bg-hero.png') }})">
            <div class="bg-opacity-60"></div>
            <div class="hero-content text-neutral-content text-center">
                <div class="max-w-md">
                    <img src="{{ asset('static/website/images/logo_hbs.png') }}" alt=""
                        class="lg:w-full w-4/5 mx-auto" />
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
                        <img src="{{ asset('static/website/images/logo_hbs.png') }}" class="w-full" alt="Logo_hbs">
                    </div>
                    <div>
                        <div class="lg:text-xl text-sm mb-6">
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
                        <h1 class="font-bold lg:text-xl md:text-md text-sm">Alfatik Ibnu Maruf</h1>
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
            <a href="" class="hover:underline mt-auto text-end">SEE ALL</a>
        </div>

        <div class="grid md:grid-cols-3 grid-cols-2 md:gap-6 gap-3">
            <div class="card card-compact w-full rounded-none">
                <img src="{{ asset('static/website/images/product/produk-1.png') }}" alt="Produk" />
                <div class="my-3.5">
                    <h2 class="pl-0 text-left lg:text-3xl md:text-xl text-lg font-semibold">Celebrating 3.4.7 Quarter of a
                        Century</h2>
                </div>
            </div>
            <div class="card card-compact w-full rounded-none">
                <img src="{{ asset('static/website/images/product/produk-1.png') }}" alt="Produk" />
                <div class="my-3.5">
                    <h2 class="pl-0 text-left lg:text-3xl md:text-xl text-lg font-semibold">Celebrating 3.4.7 Quarter of a
                        Century</h2>
                </div>
            </div>
            <div class="card card-compact w-full rounded-none">
                <img src="{{ asset('static/website/images/product/produk-1.png') }}" alt="Produk" />
                <div class="my-3.5">
                    <h2 class="pl-0 text-left lg:text-3xl md:text-xl text-lg font-semibold">Celebrating 3.4.7 Quarter of a
                        Century</h2>
                </div>
            </div>
            <div class="card card-compact w-full rounded-none">
                <img src="{{ asset('static/website/images/product/produk-1.png') }}" alt="Produk" />
                <div class="my-3.5">
                    <h2 class="pl-0 text-left lg:text-3xl md:text-xl text-lg font-semibold">Celebrating 3.4.7 Quarter of a
                        Century</h2>
                </div>
            </div>
            <div class="card card-compact w-full rounded-none">
                <img src="{{ asset('static/website/images/product/produk-1.png') }}" alt="Produk" />
                <div class="my-3.5">
                    <h2 class="pl-0 text-left lg:text-3xl md:text-xl text-lg font-semibold">Celebrating 3.4.7 Quarter of a
                        Century</h2>
                </div>
            </div>
            <div class="card card-compact w-full rounded-none">
                <img src="{{ asset('static/website/images/product/produk-1.png') }}" alt="Produk" />
                <div class="my-3.5">
                    <h2 class="pl-0 text-left lg:text-3xl md:text-xl text-lg font-semibold">Celebrating 3.4.7 Quarter of a
                        Century</h2>
                </div>
            </div>

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
                <a href="" class="hover:underline my-auto lg:text-start text-end">SEE ALL</a>
            </div>

            <div class="lg:w-4/5 w-full">
                <swiper-container id="service-carousel" class="mySwiper md:h-48 h-32">
                    <swiper-slide class="lg:h-50 md:h-38 h-32">
                        <div class="flex">
                            <img src="{{ asset('static/website/images/product/produk-1.png') }}"
                                class="object-cover lg:h-48 lg:w-48 md:h-36 md:w-36 h-32 w-32" alt="Produk" />
                            <div class="pl-2 text-left">
                                <h2 class="lg:text-lg text-lg  font-semibold">HALLO! WHICH
                                    PABLO ARE YOU
                                    TODAY?</h2>
                                <p class="text-xs mb-auto text-gray-500">PT. PELABUHAN INDONESIA</p>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide class="lg:h-50 md:h-38 h-32">
                        <div class="flex">
                            <img src="{{ asset('static/website/images/product/produk-1.png') }}"
                                class="object-cover lg:h-48 lg:w-48 md:h-36 md:w-36 h-32 w-32" alt="Produk" />
                            <div class="pl-2 text-left">
                                <h2 class="lg:text-lg text-lg  font-semibold">HALLO! WHICH
                                    PABLO ARE YOU
                                    TODAY?</h2>
                                <p class="text-xs mb-auto text-gray-500">PT. PELABUHAN INDONESIA</p>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide class="lg:h-50 md:h-38 h-32">
                        <div class="flex">
                            <img src="{{ asset('static/website/images/product/produk-1.png') }}"
                                class="object-cover lg:h-48 lg:w-48 md:h-36 md:w-36 h-32 w-32" alt="Produk" />
                            <div class="pl-2 text-left">
                                <h2 class="lg:text-lg text-lg  font-semibold">HALLO! WHICH
                                    PABLO ARE YOU
                                    TODAY?</h2>
                                <p class="text-xs mb-auto text-gray-500">PT. PELABUHAN INDONESIA</p>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide class="lg:h-50 md:h-38 h-32">
                        <div class="flex">
                            <img src="{{ asset('static/website/images/product/produk-1.png') }}"
                                class="object-cover lg:h-48 lg:w-48 md:h-36 md:w-36 h-32 w-32" alt="Produk" />
                            <div class="pl-2 text-left">
                                <h2 class=" text-lg  font-semibold">HALLO! WHICH
                                    PABLO ARE YOU
                                    TODAY?</h2>
                                <p class="text-xs mb-auto text-gray-500">PT. PELABUHAN INDONESIA</p>
                            </div>
                        </div>
                    </swiper-slide>
                </swiper-container>
            </div>
        </div>
    </section>
    {{--  End Services  --}}



@stop

@section('scripts')
    <script>
        const swiperEl = document.querySelector('swiper-container')
        const params = {
            slidesPerView: 1,
            loop: true,
            injectStyles: [
                `
          .swiper-button-next,
          .swiper-button-prev {
            background-color: white;
            padding: 8px 16px;
            border-radius: 100%;
            border: 2px solid black;
            color: red;
          }
          .swiper-pagination-bullet{
            width: 40px;
            height: 40px;
            background-color: red;
          }
      `,
            ],
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 1,
                },
                1200: {
                    slidesPerView: 2,
                },
                1680: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                1920: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
            },
        }
        Object.assign(swiperEl, params);
        swiperEl.initialize();
    </script>
@stop
