@extends('admin.layout')

@section('title', 'Service')

@section('content')

    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Services
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li class="hover:text-primary">
                    <a class="font-medium" href="{{ route('admin.index') }}">Dashboard /</a>
                </li>
                <li class="font-medium text-primary ">Services</li>
            </ol>
        </nav>
    </div>

    <div class="flex">
        <a href="{{ route('admin.services.create') }}"
            class="justify-center rounded  bg-primary py-2 px-6 font-medium text-gray hover:bg-opacity-90 mb-4.5">
            <i class="fa-solid fa-plus"></i> Add Services
        </a>
    </div>

    <div
        class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">

        @if (Session::has('status'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <span class="font-medium">Success alert!</span> {{ session('message') }}
            </div>
        @endif

        <div class="max-w-full overflow-x-auto">
            <table class="w-full table-auto">
                <thead>
                    <tr class="bg-gray-2 text-left dark:bg-meta-4">
                        <th class="min-w-[220px] px-4 py-4 font-medium text-black dark:text-white xl:pl-11">
                            Image
                        </th>
                        <th class="min-w-[220px] px-4 py-4 font-medium text-black dark:text-white xl:pl-11">
                            Title
                        </th>
                        <th class="min-w-[150px] px-4 py-4 font-medium text-black dark:text-white">
                            Short Description
                        </th>
                        <th class="min-w-[120px] px-4 py-4 font-medium text-black dark:text-white">
                            Created Date
                        </th>
                        <th class="px-4 py-4 font-medium text-black dark:text-white">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($models as $key => $model)
                        <tr>
                            <td class="border-b border-[#eee] px-4 py-5 pl-9 dark:border-strokedark xl:pl-11">
                                <div class="h-12.5 w-15 rounded-md">
                                    <img src="{{ asset('storage/' . $model->image) }}" alt="Product">
                                </div>
                            </td>
                            <td class="border-b border-[#eee] px-4 py-5 pl-9 dark:border-strokedark xl:pl-11">
                                <h5 class="font-medium text-black dark:text-white uppercase">{{ $model['title'] }}</h5>
                            </td>
                            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                {{--  <p class="text-black dark:text-white">Jan 13,2023</p>  --}}
                                {!! $model['description_short'] !!}
                            </td>
                            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                <p class="text-black dark:text-white">
                                    {{ optional($model['created_at'])->format('j M Y H:i') }}</p>
                                {{--  <p
                                    class="inline-flex rounded-full bg-success bg-opacity-10 px-3 py-1 text-sm font-medium text-success">
                                    Paid
                                </p>  --}}
                            </td>
                            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                <div class="flex items-center space-x-6">
                                    {{--  <button class="hover:text-primary">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>  --}}
                                    <a href="{{ route('admin.services.edit', $model->id) }}" class="hover:text-primary">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.services.destroy', $model->id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button class="hover:text-primary">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @if ($models->isEmpty())
                        <tr>
                            <td colspan="5" class="text-center p-10 text-lg"><i
                                    class="fa-solid fa-ban text-3xl"></i><br><b>Table
                                    is
                                    Empty</b>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>

        </div>
    </div>
    <div class="my-6">
        {{ $models->links('vendor.pagination.inbework') }}
    </div>
@stop
