@extends('admin.layout')

@section('title', 'Edit Service ')

@section('styles')
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
@endsection

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
                <li class="hover:text-primary">
                    <a class="font-medium" href="{{ route('admin.services.index') }}">Services /</a>
                </li>
                <li class="font-medium">Edit /</li>
                <li>
                    <a class="font-medium text-primary"
                        href="{{ route('admin.services.edit', $model->id) }}">{{ $model->title }}</a>
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
            <form class="form-horizontal" action="{{ route('admin.services.update', $model->id) }}" method="post"
                enctype="multipart/form-data" id="form-posts">
                {{ method_field('put') }}
                {{ csrf_field() }}
                <div class="p-6.5">
                    <div class="mb-4.5">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Title
                        </label>
                        <input type="hidden" name="type" value="service">
                        <input type="text" placeholder="Title of the service" name="title"
                            value="{{ old('title') ?? @$model->title }}"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                    </div>

                    <div class="mb-6">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Short Description
                        </label>
                        <textarea rows="2" placeholder="Short Description of the service" name="description_short"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">{!! old('description_short') ?? @$model->description_short !!}</textarea>
                    </div>

                    {{--  <div class="mb-6">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Description
                        </label>
                        <textarea rows="6" placeholder="Description of the service" name="description"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">{!! old('description') ?? @$model->description !!}</textarea>
                    </div>  --}}

                    <div class="mb-6 form-group">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Description
                            <small class="text-red-500 font-bold">*</small>
                        </label>

                        <div id="description" style="min-height: 60px;">{!! old('description') ?? @$model->description !!}</div>
                        <textarea name="description" class="hidden"></textarea>
                    </div>

                    <div class="mb-6 form-group">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Image
                        </label>
                        <input
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            aria-describedby="file_input_help" id="file input" type="file" name="image"
                            onchange="document.querySelector('.form-group img').src = window.URL.createObjectURL(this.files[0])"
                            accept="image/*">
                        <p class="mt-1 mb-3 block text-xs font-medium text-red-500 italic" id="file_input_help">
                            PNG, JPG, JPEG (MAX. 2MB).</p>
                        <img src="{{ asset('storage/' . @$model->image ?? 'static/admin/images/default.png') }}"
                            class="rounded max-w-xs" alt="photo">
                    </div>

                    <hr class="mb-6">

                    <button type="button" onclick="showImageDialog()"
                        class="flex justify-center rounded bg-primary p-3 mb-4 font-medium text-gray hover:bg-opacity-90">
                        <i class="fa-regular fa-image text-lg"></i>
                        <span class="my-auto ml-3"> Add Image Product</span>
                    </button>

                    <div id="added-product">
                        @foreach ($model->images as $keyLayout => $value)
                            <div id="layout-product-{{ $keyLayout }}">
                                <input type="hidden" name="layout-{{ @$value->id }}" value="{{ $value->id }}">
                                <button type="button" onclick="removeLayout(this,{{ $keyLayout }})"
                                    class="justify-center rounded bg-red-600 mt-3 py-1 px-3 font-medium text-gray hover:bg-opacity-90">
                                    <i class="fa-solid fa-trash text-lg"></i>
                                    <span class="my-auto ml-1"> Delete Layout</span>
                                </button>

                                <div class="my-6 grid lg:grid-cols-3 md:grid-cols-3 grid-cols-1 gap-3">
                                    @foreach (@$value->additional_value as $keyImage => $image)
                                        <input type="hidden" name="isimage-{{ @$value->id }}-{{ @$keyImage }}"
                                            value="{{ $value->id }}">
                                        <div class="product-images">
                                            <input
                                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                                                aria-describedby="file_input_help" id="file input" type="file"
                                                name="image-{{ @$value->id }}-{{ @$keyImage }}"
                                                onchange="document.querySelector('.product-images img#layout-{{ $keyLayout }}-photo-{{ $keyImage }}').src = window.URL.createObjectURL(this.files[0])"
                                                accept="image/*">
                                            <p class="mt-1 mb-3 block text-xs font-medium text-red-500 italic"
                                                id="file_input_help">
                                                PNG, JPG, JPEG (MAX. 2MB).</p>
                                            <img src="{{ asset('storage/' . $image ?? 'static/admin/images/default.png') }}"
                                                class="rounded object-cover h-48 w-48" alt="photo"
                                                id="layout-{{ $keyLayout }}-photo-{{ $keyImage }}">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div id="layout-image-modal" class="modal z-999">
                        <a href="#" rel="modal:close" id="close-modal"></a>
                        <div class="grid grid-cols-3">
                            <button onclick="imageLayout(1)">
                                <h3>Layout 1</h3>
                            </button>
                            <button onclick="imageLayout(2)">
                                <h3>Layout 2</h3>
                            </button>
                            <button onclick="imageLayout(3)">
                                <h3>Layout 3</h3>
                            </button>
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

    <script>
        function showImageDialog() {
            $("#layout-image-modal").modal({
                fadeDuration: 300,
                backdrop: false, // Menghilangkan efek pada latar belakang
                keyboard: false
            });
        }

        function closeImageDialog() {
            $("#close-modal").trigger('click');
        }

        //  showImageDialog();
    </script>

    <script type="text/javascript">
        let indexLayout = {{ $countLayout }};
        let indexImage = 1;


        function imageLayout(count) {
            closeImageDialog();
            var html = ` <div id="layout-product-${indexLayout}">
                                <input type="hidden" name="data[type][]" value="${count}">
                                <button type="button" onclick="removeLayout(this,${indexLayout})"
                                    class="justify-center rounded bg-red-600 py-1 px-3 font-medium text-gray hover:bg-opacity-90">
                                    <i class="fa-solid fa-trash text-lg"></i>
                                    <span class="my-auto ml-1"> Delete Layout</span>
                                </button>
                                <div class="my-6 grid lg:grid-cols-4 md:grid-cols-3 grid-cols-1 gap-3">
                            `;

            while (indexImage <= count) {
                html += imageDetail(indexLayout);
            }
            html += `</div></div>`;

            $('#added-product').append(html);
            indexImage = 1;
            indexLayout++;
        }

        function removeLayout(that, id) {
            $(that).parents(`#layout-product-${id}`).remove();
        }

        function imageDetail(indexLayout) {


            var html = ` <div class="product-images mb-3">
                                <input
                                    class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                                    aria-describedby="file_input_help" id="file input" type="file" name="data[images][]"
                                    onchange="document.querySelector('.product-images img#layout-${indexLayout}-photo-${indexImage}').src = window.URL.createObjectURL(this.files[0])"
                                    accept="image/*">
                                <p class="mt-1 mb-3 block text-xs font-medium text-red-500 italic" id="file_input_help">
                                    PNG, JPG, JPEG (MAX. 2MB).</p>
                                <img src="{{ asset('static/admin/images/default.png') }}" class="rounded object-cover h-48 w-48"
                                    alt="photo" id="layout-${indexLayout}-photo-${indexImage}">

                                {{--  <button type="button" onclick="imageRemove(this)"
                                    class="justify-center rounded bg-red-600 mt-3 py-1 px-3 font-medium text-gray hover:bg-opacity-90">
                                    <i class="fa-solid fa-trash text-lg"></i>
                                    <span class="my-auto ml-1"> Delete</span>
                                </button>  --}}
                            </div>`;
            indexImage++;
            return html;
        }
    </script>
@endsection
