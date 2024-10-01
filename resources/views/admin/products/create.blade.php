@extends('admin.layout')

@section('title', 'Create Products')


@section('styles')
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
@endsection

@section('content')


    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Products
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li class="hover:text-primary">
                    <a class="font-medium" href="{{ route('admin.index') }}">Dashboard /</a>
                </li>
                <li class="hover:text-primary">
                    <a class="font-medium" href="{{ route('admin.product.posts.index') }}">Products /</a>
                </li>
                <li class="font-medium text-primary">Create</li>
            </ol>
        </nav>
    </div>

    @if ($errors->any())
        <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
            role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Danger</span>
            <div>
                <span class="font-medium">Ensure that these requirements are met:</span>
                <ul class="mt-1.5 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <div class="flex flex-col gap-9">
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <form class="form-horizontal" id="form-posts" action="{{ route('admin.product.posts.store') }}" method="post"
                enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="p-6.5">
                    <div class="mb-4.5">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Title
                            <small class="text-red-500 font-bold">*</small>
                        </label>
                        <input type="hidden" name="type" value="service">
                        <input type="text" placeholder="Title of the service" name="title" value="{{ old('title') }}"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                    </div>

                    <div class="mb-6 form-group">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Description
                            <small class="text-red-500 font-bold">*</small>
                        </label>

                        <div id="description" style="min-height: 60px;">{!! old('description') !!}</div>
                        <textarea name="description" class="hidden"></textarea>
                    </div>

                    <div class="mb-6">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Category
                            <small class="text-red-500 font-bold">*</small>
                        </label>
                        <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-white dark:bg-form-input">
                            <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent py-3 pl-5 pr-12 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input"
                                :class="isOptionSelected && 'text-black dark:text-white'" @change="isOptionSelected = true"
                                name="product_category_id">

                                <option class="text-body" value="" selected>Select Product Categories</option>
                                @foreach ($categories as $key => $category)
                                    <option value="{{ $category['id'] }}" class="text-body">{{ $category['name'] }}</option>
                                @endforeach
                                {{--  <option value="" class="text-body">Option 3</option>  --}}
                            </select>
                            <span class="absolute right-4 top-1/2 z-10 -translate-y-1/2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.8">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                                            fill="#637381"></path>
                                    </g>
                                </svg>
                            </span>
                        </div>
                    </div>

                    <div class="mb-6 form-group">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Image
                            <small class="text-red-500 font-bold">*</small>
                        </label>
                        <input
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            aria-describedby="file_input_help" id="file input" type="file" name="image"
                            onchange="document.querySelector('.form-group img').src = window.URL.createObjectURL(this.files[0])"
                            accept="image/*">
                        <p class="mt-1 mb-3 block text-xs font-medium text-red-500 italic" id="file_input_help">
                            PNG, JPG, JPEG (MAX. 2MB).</p>
                        <img src="{{ asset('static/admin/images/default.png') }}" class="rounded max-w-xs" alt="photo">
                    </div>

                    <button type="submit"
                        class="flex w-full justify-center rounded bg-primary p-3 font-medium text-gray hover:bg-opacity-90">
                        Create
                    </button>
                </div>
            </form>
        </div>
    </div>
@stop

@section('scripts')
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script>
        let editor = new Quill('#description', {
            theme: 'snow'
        })

        const formAbout = document.querySelector('form#form-posts')
        const textAreaDescription = document.querySelector('textarea[name=description]')

        formAbout.addEventListener('submit', (e) => {
            textAreaDescription.value = editor.root.innerHTML
        })
    </script>
@endsection
