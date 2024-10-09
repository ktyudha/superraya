@extends('admin.layout')

@section('title', 'Service Banner')

@section('content')
    <div class="flex flex-col gap-9">

        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <form class="form-horizontal" method="post" enctype="multipart/form-data" id="form-posts">
                {{ method_field('put') }}
                {{ csrf_field() }}
                <div class="p-6.5">
                    <div class="grid md:grid-cols-2 gap-6.5">
                        <div class="mb-6 form-group">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Image Desktop
                            </label>
                            <input
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                                aria-describedby="file_input_help" id="file input" type="file" name="image_lg"
                                onchange="document.querySelector('.form-group img#lg').src = window.URL.createObjectURL(this.files[0])"
                                accept="image/*">
                            <p class="mt-1 mb-3 block text-xs font-medium text-red-500 italic" id="file_input_help">
                                PNG, JPG, JPEG (MAX. 2MB).</p>

                            <img src="{{ asset(@$banner_lg ?? 'static/admin/images/default.png') }}"
                                class="rounded max-w-xs" alt="photo" id="lg">
                        </div>
                        <div class="mb-6 form-group">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Image Mobile
                            </label>
                            <input
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                                aria-describedby="file_input_help" id="file input" type="file" name="image_sm"
                                onchange="document.querySelector('.form-group img#sm').src = window.URL.createObjectURL(this.files[0])"
                                accept="image/*">
                            <p class="mt-1 mb-3 block text-xs font-medium text-red-500 italic" id="file_input_help">
                                PNG, JPG, JPEG (MAX. 2MB).</p>

                            <img src="{{ asset(@$banner_sm ?? 'static/admin/images/default.png') }}"
                                class="rounded max-w-xs" alt="photo" id="sm">
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
@stop
