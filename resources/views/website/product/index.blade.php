@extends('website.layout')

@section('title', 'SUPERRAYA™')

@section('metadata')
    <meta name="title" content="Bengkel Super Raya Teknik">
    <meta name="description" content="Bengkel Super Raya Teknik">
@stop


@section('content')
    <div class="md:mt-32 mt-20 lg:mx-40 mx-4">
        @include('website.product.partials.sidebar')
    </div>
    @include('website.product.partials.bottom-sheet')

@stop
