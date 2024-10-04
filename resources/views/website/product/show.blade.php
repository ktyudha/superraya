@extends('website.layout')

@section('title', 'SUPERRAYA™')

@section('metadata')
    <meta name="title" content="Bengkel Super Raya Teknik">
    <meta name="description" content="Bengkel Super Raya Teknik">
@stop

@section('styles')

    {{--  <style>
        .col-middle {
            overflow-y: scroll;
            scrollbar-width: none;
        }

        .col-middle::-webkit-scrollbar {
            display: none;
        }

        .col-middle {
            scroll-behavior: smooth;
        }
    </style>  --}}
@endsection


@section('content')
    <div class="min-h-screen mb-16">
        <div class="md:mt-20 mt-20 lg:mx-40 mx-4">
            <div class="breadcrumb text-base lg:mb-12 lg:block hidden">
                <ul class="flex gap-2">
                    <li class="hover:underline"><a href="{{ route('landing.index') }}">Home</a></li>
                    <span>/</span>
                    <li class="hover:underline"><a href="{{ route('product.index') }}">Product</a></li>
                    <span>/</span>
                    <li><a>{{ @$model['title'] }}</a></li>
                </ul>
            </div>
            <div class="grid lg:grid-cols-12 grid-cols-1 lg:gap-6 test">

                <div class="lg:col-span-6 lg:mx-5 order-1 md:order-2 mb-16">
                    <div class="lg:hidden">
                        <div class="swiper detailProduct md:h-full">
                            <div class="swiper-wrapper">
                                @foreach ($model->images as $key => $value)
                                    <div class="swiper-slide">
                                        <img src="{{ asset('storage/' . $value->image) }}" class="w-full" alt="Produk" />
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-middle min-h-screen hidden lg:block">
                        @foreach ($model->images as $key => $value)
                            <div class="image ratio r-1-1 ">
                                <div class="outer-content">
                                    <div class="inner-content"><img src="{{ asset('storage/' . $value->image) }}"
                                            class="img-fluid" alt="Shoes"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="lg:col-span-3 sidebar order-2 lg:order-1 mb-12">
                    <div class="title">
                        <h1 class="md:text-2xl text-lg uppercase font-bold lg:mb-8 mb-3">{{ @$model['title'] }}</h1>
                        <div class="md:text-sm text-xs">{!! @$model['description'] !!}</div>
                    </div>
                </div>
                <div class="lg:col-span-3 dataset order-2 mb-16">
                    <h1 class="md:text-2xl text-lg uppercase font-bold lg:mb-8 mb-3">DATASHEET</h1>
                    <div class="overflow-x-auto">
                        <table class="table table-xs">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Job</th>
                                    <th>company</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Cy Ganderton</td>
                                    <td>Quality Control Specialist</td>
                                    <td>Littel, Schaden and Vandervort</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Hart Hagerty</td>
                                    <td>Desktop Support Technician</td>
                                    <td>Zemlak, Daniel and Leannon</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Brice Swyre</td>
                                    <td>Tax Accountant</td>
                                    <td>Carroll Group</td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td>Marjy Ferencz</td>
                                    <td>Office Assistant I</td>
                                    <td>Rowe-Schoen</td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td>Yancy Tear</td>
                                    <td>Community Outreach Specialist</td>
                                    <td>Wyman-Ledner</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <h1 class="text-2xl md:text-3xl font-normal md:mt-10 mb-2 font-primary italic">You might also like</h1>
            <div class="swiper mySwiper h-[260px] lg:h-[350px]">
                <div class="swiper-wrapper">
                    @foreach (@$products as $key => $product)
                        <div class="swiper-slide">
                            <a href="{{ route('product.show', $product->slug) }}">
                                <img src="{{ asset('storage/' . $product->image) }}" class="w-full"
                                    alt="{{ $product->title }}" />
                                <div class="my-3.5">
                                    <h2 class="pl-0 text-sm font-normal text-center">{{ $product->title }}</h2>
                                    <p class="pl-0 text-[10px] font-bold text-center mx-auto uppercase">
                                        {{ $product->category->name }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="hidden lg:block">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="swiper-pagination block lg:hidden"></div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
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
@endsection
