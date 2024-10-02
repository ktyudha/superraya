@extends('admin.layout')

@section('title', 'Basic Info')


@section('breadcrumb')
    <li class="breadcrumb-item">Setting</li>
    <li class="breadcrumb-item">Basic Info</li>
@endsection

@section('content')
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Basic Info
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li class="hover:text-primary">
                    <a class="font-medium" href="{{ route('admin.index') }}">Dashboard /</a>
                </li>
                <li class="hover:text-primary">
                    <a class="font-medium" href="{{ route('admin.settings.basic-info.edit') }}">Settings /</a>
                </li>
                <li class="font-medium text-primary">Basic Info</li>
            </ol>
        </nav>
    </div>

    @if (Session::has('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <span class="font-medium">Success alert!</span> {{ session('success') }}
        </div>
    @endif

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
            <form class="form-horizontal" method="post" enctype="multipart/form-data" id="form-posts">
                {{ method_field('put') }}
                {{ csrf_field() }}
                <div class="p-6.5">
                    <div class="grid grid-cols-2 gap-6.5">

                        <div class="form-control">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Name
                            </label>
                            <input type="text" placeholder="Name" name="name" id="name"
                                value="{{ old('name') ?: @$setting->name }}"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                        </div>

                        <div class="form-control">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Email
                            </label>
                            <input type="email" placeholder="Email" name="email" id="email"
                                value="{{ old('email') ?: @$setting->email }}"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                        </div>

                        <div class="form-control">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Phone
                            </label>
                            <input type="text" placeholder="Phone" name="phone" id="phone"
                                value="{{ old('phone') ?: @$setting->phone }}"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                        </div>

                        <div class="form-control">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Whatsapp
                            </label>
                            <input type="text" placeholder="Whatsapp" name="whatsapp" id="whatsapp"
                                value="{{ old('whatsapp') ?: @$setting->whatsapp }}"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                        </div>

                        <div class="form-control">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Youtube
                            </label>
                            <input type="text" placeholder="https://www.youtube.com/embed/e54j2VSUjsI" name="youtube"
                                id="youtube" value="{{ old('youtube') ?: @$setting->youtube }}"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                        </div>

                        <div class="form-control">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Google Analytics
                            </label>
                            <input type="text" placeholder="U-12345678" name="analytics" id="analytics"
                                value="{{ old('analytics') ?: @$setting->analytics }}"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                        </div>

                        <div class="form-control">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Address
                            </label>
                            <textarea rows="3" placeholder="Address" name="address" id="address"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">{{ old('address') ?: @$setting->address }}</textarea>
                        </div>

                        <div class="form-control">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Google Maps
                            </label>
                            <textarea rows="3" placeholder="<iframe src=https://www.google.com/maps/> </iframe>" name="gmaps" id="gmaps"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">{{ old('gmaps') ?: @$setting->gmaps }}</textarea>
                        </div>

                    </div>


                    <button
                        class="flex w-full mt-6.5 justify-center rounded bg-primary p-3 font-medium text-gray hover:bg-opacity-90">
                        Update
                    </button>
                </div>



            </form>
        </div>
    </div>


@endsection
