@extends('website.layout')

@section('title', 'Products')

@section('metadata')
    <meta name="title" content="Products">
    {{--  <meta name="description" content="Bengkel Super Raya Teknik">  --}}
@stop


@section('content')


    <div class="lg:flex min-h-screen mb-16">
        <div class="md:mt-20 mt-20 lg:ml-40 mx-4 lg:w-1/5">
            @include('website.product.partials.sidebar')
        </div>

        <div class="lg:mt-32 mt-10 lg:mr-40 mx-4 lg:w-4/5">
            <div class="grid lg:grid-cols-3 grid-cols-2 lg:gap-x-24 md:gap-x-14 gap-x-3">
                @foreach ($products as $key => $product)
                    <a href="{{ route('product.show', $product['slug']) }}" class="card card-compact w-full rounded-none">
                        <img src="{{ asset('storage/' . $product['image']) }}" alt="Produk" />
                        <div class="my-3.5">
                            <h2 class="pl-0 text-sm font-normal text-center">{{ $product['title'] }}</h2>
                            <p class="pl-0 text-[10px] font-bold text-center mx-auto uppercase">
                                {{ $product['category']->name }}
                            </p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>


    @include('website.product.partials.bottom-sheet')

@stop
