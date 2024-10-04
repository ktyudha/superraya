@extends('admin.layout')

@section('title', 'Logo')


@section('breadcrumb')
    <li class="breadcrumb-item">Setting</li>
    <li class="breadcrumb-item">Logo</li>
    <li class="breadcrumb-item active">Edit</li>
@endsection



@section('content')

    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Logo
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li class="hover:text-primary">
                    <a class="font-medium" href="{{ route('admin.index') }}">Dashboard /</a>
                </li>
                <li class="font-medium text-primary ">Logo</li>
            </ol>
        </nav>
    </div>

    @if (Session::has('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <span class="font-medium">Success alert!</span> {{ session('success') }}
        </div>
    @endif

    <div class="flex flex-col gap-9">
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <form id="form-about" action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="p-6.5">
                    <div class="grid grid-cols-2 gap-6.5 mb-4.5">
                        <div class="form-group mb-4.5">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Logo
                            </label>
                            <input id="logo" type="file" name="logo"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                                aria-describedby="file_input_help"
                                onchange="document.querySelector('.form-group img#logo').src = window.URL.createObjectURL(this.files[0])"
                                accept="image/*">
                            <p class="mt-1 mb-3 block text-xs font-medium text-red-500 italic" id="file_input_help">
                                PNG, JPG, JPEG, SVG (MAX. 2MB).</p>
                            <img src="{{ asset(@$setting->logo ?? 'static/admin/images/default.png') }}"
                                class="rounded object-cover h-48 w-48" alt="logo" id="logo">
                        </div>
                        <div class="form-group mb-4.5">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Logo Grayscale
                            </label>
                            <input id="logo_gray" type="file" name="logo_gray"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                                aria-describedby="file_input_help"
                                onchange="document.querySelector('.form-group img#logo_gray').src = window.URL.createObjectURL(this.files[0])"
                                accept="image/*">
                            <p class="mt-1 mb-3 block text-xs font-medium text-red-500 italic" id="file_input_help">
                                PNG, JPG, JPEG, SVG (MAX. 2MB).</p>
                            <img src="{{ asset(@$setting->logo_gray ?? 'static/admin/images/default.png') }}"
                                class="rounded object-cover h-48 w-48" alt="logo_gray" id="logo_gray">
                        </div>
                        <div class="form-group mb-4.5">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Icon
                            </label>
                            <input id="icon" type="file" name="icon"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                                aria-describedby="file_input_help"
                                onchange="document.querySelector('.form-group img#icon').src = window.URL.createObjectURL(this.files[0])"
                                accept="image/*">
                            <p class="mt-1 mb-3 block text-xs font-medium text-red-500 italic" id="file_input_help">
                                PNG, JPG, JPEG, SVG (MAX. 2MB).</p>
                            <img src="{{ asset(@$setting->icon ?? 'static/admin/images/default.png') }}"
                                class="rounded object-cover h-48 w-48" alt="icon" id="icon">
                        </div>
                        <div class="form-group mb-4.5">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Gambar
                            </label>
                            <input id="ogimage" type="file" name="ogimage"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                                aria-describedby="file_input_help"
                                onchange="document.querySelector('.form-group img#ogimage').src = window.URL.createObjectURL(this.files[0])"
                                accept="image/*">
                            <p class="mt-1 mb-3 block text-xs font-medium text-red-500 italic" id="file_input_help">
                                PNG, JPG, JPEG, SVG (MAX. 2MB).</p>
                            <img src="{{ asset(@$setting->ogimage ?? 'static/admin/images/default.png') }}"
                                class="rounded object-cover h-48 w-48" alt="ogimage" id="ogimage">
                        </div>
                    </div>
                    <button type="submit"
                        class="flex w-full justify-center rounded bg-primary p-3 font-medium text-gray hover:bg-opacity-90">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{--  <div class="card">
        <div class="card-header">
            Edit Logo
        </div>
        <div class="card-body">

            <form id="form-about" action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="logo">Logo</label>
                    <div class="d-flex">
                        <img alt="logo" title="logo"
                            src="{{ asset(@$setting->logo) ?? asset('static/admin/img/default.png') }}">
                        <div class="custom-file ml-4">
                            <input id="logo" type="file" name="logo" class="custom-file-input"
                                onchange="document.querySelector('.form-group img').src = window.URL.createObjectURL(this.files[0])"
                                accept="image/*">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="logo_gray">Logo Grayscale</label>
                    <div class="d-flex">
                        <img id="logo_gray" alt="logo grayscale" title="logo grayscale"
                            src="{{ asset(@$setting->logo_gray) ?? asset('static/admin/img/default.png') }}">
                        <div class="custom-file ml-3">
                            <input id="logo_gray" type="file" name="logo_gray" class="custom-file-input"
                                onchange="document.querySelector('img#logo_gray').src = window.URL.createObjectURL(this.files[0])"
                                accept="image/*">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="icon">Icon</label>
                    <div class="d-flex">
                        <img id="icon" alt="icon" title="icon"
                            src="{{ asset(@$setting->icon) ?? asset('static/admin/img/default.png') }}">
                        <div class="custom-file ml-3">
                            <input id="icon" type="file" name="icon" class="custom-file-input"
                                onchange="document.querySelector('img#icon').src = window.URL.createObjectURL(this.files[0])"
                                accept="image/*">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ogimage">Gambar</label>
                    <div class="d-flex">
                        <img id="ogimage" alt="Gambar" title="Gambar"
                            src="{{ asset(@$setting->ogimage) ?? asset('static/admin/img/default.png') }}">
                        <div class="custom-file ml-3">
                            <input id="ogimage" type="file" name="ogimage" class="custom-file-input"
                                onchange="document.querySelector('img#ogimage').src = window.URL.createObjectURL(this.files[0])"
                                accept="image/*">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>

                <div class="text-right mt-3">
                    <button class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>  --}}
@endsection
