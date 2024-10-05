@extends('website.layout')

@section('title', 'SUPERRAYA™')

@section('metadata')
    <meta name="title" content="Super Raya">
    <meta name="description" content="Halaman Utama Superraya">
@stop


@section('content')

    <div class="w-full mt-20">
        {!! @$setting->firstWhere('key', 'gmaps')->value !!}

        {{--  <iframe class="w-full h-1/2"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.461650015716!2d112.54941697568583!3d-7.52451899248848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7875ebc516172b%3A0xba30d6d6d15f63d5!2sBengkel%20Super%20Raya!5e0!3m2!1sid!2sid!4v1727423558357!5m2!1sid!2sid"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  --}}
    </div>

    {{--  Form  --}}
    <div class="lg:mt-20 mt-6 lg:mx-40 mx-4 mb-16">
        <div class="grid lg:grid-cols-2 grid-cols-1">
            <div class="mb-6">
                <h1 class="md:text-5xl text-3xl font-primary italic lg:mb-2 md:mb-6 mb-6">Contact</h1>
                <p class="mb-3">{{ @$setting->firstWhere('key', 'address')->value }}</p>
                <p>{{ @$setting->firstWhere('key', 'email')->value }}</p>
                <p>{{ @$setting->firstWhere('key', 'whatsapp')->value }}</p>
            </div>

            <form role="form" method="post" action="{{ route('contact.store') }}" class="w-full mx-auto">
                {{ csrf_field() }}
                <p class="mb-4">Having trouble or any feedback?<br> Send us a message:</p>

                @if (Session::has('status'))
                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                        role="alert">
                        <span class="font-medium">Success alert!</span> {{ session('message') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                        role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
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

                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="name_first" id="name_first" value="{{ old('name_first') }}"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-slate-900 border-slate-900 peer"
                            placeholder=" " />
                        <label for="name_first"
                            class="peer-focus:font-medium absolute text-sm text-slate-900  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-slate-900  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First
                            name</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="name_last" id="name_last" value="{{ old('name_last') }}"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-slate-900 border-slate-900 peer"
                            placeholder=" " />
                        <label for="name_last"
                            class="peer-focus:font-medium absolute text-sm text-slate-900  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-slate-900  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last
                            name</label>
                    </div>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-slate-900 border-slate-900 peer"
                        placeholder=" " />
                    <label for="email"
                        class="peer-focus:font-medium absolute text-sm text-slate-900  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-slate-900  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
                    </label>
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <label for="subject" class="sr-only">Topic</label>
                    <select id="subject" name="subject"
                        class="bblock py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-slate-900 border-slate-900 peer">
                        <option value="" selected>Topic</option>
                        <option value="General Inquires">General Inquires</option>
                        <option value="My Order">My Order</option>
                        <option value="Request for Collaboration">Request for Collaboration</option>
                    </select>
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="message" id="message"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-slate-900 border-slate-900 peer"
                        placeholder=" " value="{{ old('message') }}" />
                    <label for="message"
                        class="peer-focus:font-medium absolute text-sm text-slate-900  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-slate-900  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Message</label>
                </div>
                <button type="submit" class="w-full bg-slate-900 py-4 text-white">Send Message</button>
            </form>
        </div>
    </div>
    {{--  End Form  --}}

@stop
