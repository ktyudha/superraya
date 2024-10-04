@extends('admin.layout')

@section('title', 'Edit Slider')


@section('content')

    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Sliders
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li class="hover:text-primary">
                    <a class="font-medium" href="{{ route('admin.index') }}">Dashboard /</a>
                </li>
                <li class="hover:text-primary">
                    <a class="font-medium" href="{{ route('admin.sliders.index') }}">Sliders /</a>
                </li>
                <li class="font-medium">Edit /</li>
                <li>
                    <a class="font-medium text-primary"
                        href="{{ route('admin.sliders.edit', $model->id) }}">{{ $model->name }}</a>
                </li>
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
                        <li class="capitalize">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <div class="flex flex-col gap-9">
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <form class="form-horizontal" action="{{ route('admin.sliders.update', $model->id) }}" method="post"
                enctype="multipart/form-data">
                {{ method_field('put') }}
                {{ csrf_field() }}

                <div class="p-6.5">
                    <div class="mb-4.5">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Name
                            <small class="text-red-500 font-bold">*</small>
                        </label>
                        <input type="text" placeholder="Name of the sliders" name="name"
                            value="{{ old('name') ?? $model['name'] }}"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                    </div>

                    <div class="form-control mb-3">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Description
                            <small class="text-red-500 font-bold">*</small>
                        </label>
                        <textarea rows="3" placeholder="Description of the sliders" name="description" id="description"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">{{ old('description') ?: @$model['description'] }}</textarea>
                    </div>

                    <div class="mb-8 form-group">
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
                        <img src="{{ asset(@$model['image'] ?? 'static/admin/images/default.png') }}"
                            class="rounded object-cover h-48 w-48" alt="photo" id="photo">
                    </div>

                    <button type="submit"
                        class="flex w-full justify-center rounded bg-primary p-3 font-medium text-gray hover:bg-opacity-90">
                        Update
                    </button>
                </div>

            </form>
        </div>
    </div>
@stop
