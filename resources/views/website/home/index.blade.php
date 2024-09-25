@extends('website.layout')

@section('title', 'SUPERRAYA™')

@section('metadata')
    <meta name="title" content="Super Raya">
    <meta name="description" content="Halaman Utama Superraya">
@stop

@section('styles')
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
@stop

@section('content')
    {{--  <div class="hero bg-base-200 min-h-screen"
        style="background-image: url({{ asset('static/website/images/bg-hero.png') }})">
        <div class="hero-content text-center">
            <div class="max-w-md">
                <h1 class="text-5xl font-bold">Hello there</h1>
                <p class="py-6">
                    Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                    quasi. In deleniti eaque aut repudiandae et a id nisi.
                </p>
                <button class="btn btn-primary">Get Started</button>
            </div>
        </div>
    </div>  --}}

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

    <section id="about-us" class=" mb-32">
        <div class="md:mx-40 mx-4">
            <div class="card-header">
                <h1 class="md:text-5xl text-3xl font-bold italic">About Us</h1>
            </div>
            <div class="my-6">
                <div class="md:flex flex-none gap-20">
                    <div class="md:w-3/5 w-2/5 mb-6">
                        <img src="{{ asset('static/website/images/logo_hbs.png') }}" class="w-full" alt="Logo_hbs">
                    </div>
                    <div>
                        <div class="md:text-xl text-sm mb-6">
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
                        <h1 class="font-bold md:text-md text-sm">Alfatik Ibnu Maruf</h1>
                    </div>
                </div>
                <div>
                </div>
            </div>
        </div>
    </section>

    <section id="products" class="md:mx-40 mx-4 mb-32">
        <div class="flex justify-between mb-6">
            <h1 class="md:text-5xl text-3xl font-bold italic">Products</h1>
            <a href="" class="hover:underline mt-auto text-end">SEE ALL</a>
        </div>

        <div class="grid md:grid-cols-3 grid-cols-1 gap-6">
            <div class="card card-compact w-full rounded-none">
                <img src="{{ asset('static/website/images/product/produk-1.png') }}" alt="Produk" />
                <div class="my-3.5">
                    <h2 class="pl-0 text-left text-3xl font-semibold">Celebrating 3.4.7 Quarter of a Century</h2>
                </div>
            </div>
            <div class="card card-compact w-full rounded-none">
                <img src="{{ asset('static/website/images/product/produk-1.png') }}" alt="Produk" />
                <div class="my-3.5">
                    <h2 class="pl-0 text-left text-3xl font-semibold">Celebrating 3.4.7 Quarter of a Century</h2>
                </div>
            </div>
            <div class="card card-compact w-full rounded-none">
                <img src="{{ asset('static/website/images/product/produk-1.png') }}" alt="Produk" />
                <div class="my-3.5">
                    <h2 class="pl-0 text-left text-3xl font-semibold">Celebrating 3.4.7 Quarter of a Century</h2>
                </div>
            </div>
            <div class="card card-compact w-full rounded-none">
                <img src="{{ asset('static/website/images/product/produk-1.png') }}" alt="Produk" />
                <div class="my-3.5">
                    <h2 class="pl-0 text-left text-3xl font-semibold">Celebrating 3.4.7 Quarter of a Century</h2>
                </div>
            </div>
            <div class="card card-compact w-full rounded-none">
                <img src="{{ asset('static/website/images/product/produk-1.png') }}" alt="Produk" />
                <div class="my-3.5">
                    <h2 class="pl-0 text-left text-3xl font-semibold">Celebrating 3.4.7 Quarter of a Century</h2>
                </div>
            </div>
            <div class="card card-compact w-full rounded-none">
                <img src="{{ asset('static/website/images/product/produk-1.png') }}" alt="Produk" />
                <div class="my-3.5">
                    <h2 class="pl-0 text-left text-3xl font-semibold">Celebrating 3.4.7 Quarter of a Century</h2>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="mb-32">
        <div
            class="hero md:min-h-[70vh] min-h-[80vh] md:bg-[url({{ asset('static/website/images/service/image-services.png') }})] bg-[url({{ asset('static/website/images/service/image-services-mobile.webp') }})]">
        </div>

        <div class="md:mx-40 mx-4 mt-9 md:flex">
            <div class="grid md:grid-cols-1 grid-cols-2 my-auto md:w-1/6 w-full md:mb-0 mb-6">
                <h1 class="md:text-5xl text-3xl font-bold italic md:mb-2">Services</h1>
                <a href="" class="hover:underline mt-auto md:text-start text-end">SEE ALL</a>
            </div>

            <div class="md:w-5/6 w-full">
                <swiper-container class="mySwiper h-48" pagination-clickable="true" navigation="true">
                    <swiper-slide class="h-50">
                        <div class="flex">
                            <img src="{{ asset('static/website/images/product/produk-1.png') }}"
                                class="object-cover h-48 w-48" alt="Produk" />
                            <h2 class="pl-2 text-left text-xl font-semibold">HALLO! WHICH
                                PABLO ARE YOU
                                TODAY?</h2>
                        </div>
                    </swiper-slide>
                    <swiper-slide class="h-50">
                        <div class="flex">
                            <img src="{{ asset('static/website/images/product/produk-1.png') }}"
                                class="object-cover h-48 w-48" alt="Produk" />
                            <h2 class="pl-2 text-left text-xl font-semibold">HALLO! WHICH
                                PABLO ARE YOU
                                TODAY?</h2>
                        </div>
                    </swiper-slide>
                    <swiper-slide class="h-50">
                        <div class="flex">
                            <img src="{{ asset('static/website/images/product/produk-1.png') }}"
                                class="object-cover h-48 w-48" alt="Produk" />
                            <h2 class="pl-2 text-left text-xl font-semibold">HALLO! WHICH
                                PABLO ARE YOU
                                TODAY?</h2>
                        </div>
                    </swiper-slide>
                    <swiper-slide class="h-50">
                        <div class="flex">
                            <img src="{{ asset('static/website/images/product/produk-1.png') }}"
                                class="object-cover h-48 w-48" alt="Produk" />
                            <h2 class="pl-2 text-left text-xl font-semibold">HALLO! WHICH
                                PABLO ARE YOU
                                TODAY?</h2>
                        </div>
                    </swiper-slide>
                </swiper-container>
                {{--  <div class="w-full rounded-none">
                    <div class="grid grid-cols-2 gap-2">
                        <img src="{{ asset('static/website/images/product/produk-1.png') }}" class="object-cover h-48 w-48"
                            alt="Produk" />
                        <h2 class="pl-0 text-left text-2xl font-semibold">HALLO! WHICH
                            PABLO ARE YOU
                            TODAY?</h2>
                    </div>
                </div>
                <div class="w-full rounded-none">
                    <div class="grid grid-cols-2 gap-2">
                        <img src="{{ asset('static/website/images/product/produk-1.png') }}" class="object-cover h-48 w-48"
                            alt="Produk" />
                        <h2 class="pl-0 text-left text-2xl font-semibold">HALLO! WHICH
                            PABLO ARE YOU
                            TODAY?</h2>
                    </div>
                </div>
                <div class="w-full rounded-none">
                    <div class="grid grid-cols-2 gap-2">
                        <img src="{{ asset('static/website/images/product/produk-1.png') }}" class="object-cover h-48 w-48"
                            alt="Produk" />
                        <h2 class="pl-0 text-left text-2xl font-semibold">HALLO! WHICH
                            PABLO ARE YOU
                            TODAY?</h2>
                    </div>
                </div>  --}}
            </div>
        </div>
    </section>



@stop

@section('scripts')
    <script>
        const swiperEl = document.querySelector('swiper-container')
        Object.assign(swiperEl, {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });
        swiperEl.initialize();
    </script>
@stop
