@extends('website.layout')

@section('title', 'SUPERRAYA™')

@section('metadata')
    <meta name="title" content="Bengkel Super Raya Teknik">
    <meta name="description" content="Bengkel Super Raya Teknik">
@stop


@section('content')


    <div class="lg:flex min-h-screen mb-16">
        <div class="md:mt-32 mt-20 lg:ml-40 mx-4 lg:w-1/5">
            @include('website.product.partials.sidebar')
        </div>

        <div class="lg:mt-32 mt-10 lg:mr-40 mx-4 lg:w-4/5">
            <div class="grid lg:grid-cols-3 grid-cols-2 lg:gap-x-24 md:gap-x-14 gap-x-3">
                <div class="card card-compact w-full rounded-none">
                    <img src="{{ asset('static/website/images/product/img-produk.png') }}" alt="Produk" />
                    <div class="my-3.5">
                        <h2 class="pl-0 text-sm font-normal text-center">Mesin Press Kardus / Kertas</h2>
                        <p class="pl-0 text-[10px] font-bold text-center mx-auto uppercase">Industri</p>
                    </div>
                </div>
                <div class="card card-compact w-full rounded-none">
                    <img src="{{ asset('static/website/images/product/img-produk.png') }}" alt="Produk" />
                    <div class="my-3.5">
                        <h2 class="pl-0 text-sm font-normal text-center">Mesin Press Kardus / Kertas</h2>
                        <p class="pl-0 text-[10px] font-bold text-center mx-auto uppercase">Industri</p>
                    </div>
                </div>
                <div class="card card-compact w-full rounded-none">
                    <img src="{{ asset('static/website/images/product/img-produk.png') }}" alt="Produk" />
                    <div class="my-3.5">
                        <h2 class="pl-0 text-sm font-normal text-center">Mesin Press Kardus / Kertas</h2>
                        <p class="pl-0 text-[10px] font-bold text-center mx-auto uppercase">Industri</p>
                    </div>
                </div>
                <div class="card card-compact w-full rounded-none">
                    <img src="{{ asset('static/website/images/product/img-produk.png') }}" alt="Produk" />
                    <div class="my-3.5">
                        <h2 class="pl-0 text-sm font-normal text-center">Mesin Press Kardus / Kertas</h2>
                        <p class="pl-0 text-[10px] font-bold text-center mx-auto uppercase">Industri</p>
                    </div>
                </div>
                <div class="card card-compact w-full rounded-none">
                    <img src="{{ asset('static/website/images/product/img-produk.png') }}" alt="Produk" />
                    <div class="my-3.5">
                        <h2 class="pl-0 text-sm font-normal text-center">Mesin Press Kardus / Kertas</h2>
                        <p class="pl-0 text-[10px] font-bold text-center mx-auto uppercase">Industri</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('website.product.partials.bottom-sheet')

@stop
