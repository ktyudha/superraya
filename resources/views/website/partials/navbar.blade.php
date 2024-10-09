<nav id="navbar" class="navbar fixed top-0 left-0 right-0 z-10 lg:px-40 bg-white text-slate-900">
    <div class="flex-1 md:ml-0 ml-2">
        <a href="{{ route('landing.index') }}"
            class="text-3xl font-bold bg-transparent focus:border-0 focus:outline-none focus:underline">SUPERRAYA</a>
        <ul class="ml-16 gap-16 lg:flex hidden text-lg">
            <li><a href="{{ route('product.index') }}"
                    class="bg-transparent focus:border-0 focus:outline-none focus:underline">Product</a></li>
            <li><a href="{{ route('service.index') }}"
                    class="bg-transparent focus:border-0 focus:outline-none focus:underline">Service</a></li>
            <li><a href="{{ route('contact.index') }}"
                    class="bg-transparent focus:border-0 focus:outline-none focus:underline">Contact</a></li>
        </ul>

    </div>
    <div class="flex-none md:mr-0 mr-2">
        {{--  @include('website.partials.theme-toggle')  --}}
        <div class="btn btn-ghost hover:bg-transparent">
            <button onclick="my_modal_2.showModal()"
                class="bg-transparent focus:border-0 focus:outline-none focus:underline">
                <i class="fa-solid fa-magnifying-glass text-xl"></i>
            </button>

        </div>

        <div class="drawer">
            <input id="my-drawer" type="checkbox" class="drawer-toggle hi" />
            <div class="drawer-content lg:hidden">
                <label for="my-drawer">
                    <i class="fa-solid fa-bars text-2xl"></i>
                </label>
            </div>
            <div class="drawer-side">
                <ul
                    class="menu [&_li>*]:rounded-none bg-white z-[999] h-screen text-base-content w-full gap-6 text-4xl font-bold">
                    <label for="my-drawer" aria-label="close sidebar" class="mt-2 mr-2 ml-auto">
                        <i class="fa-solid fa-x text-2xl"></i></label>
                    <!-- Sidebar content here -->
                    <li><a href="{{ route('product.index') }}">Products</a>
                    </li>
                    <li><a href="{{ route('service.index') }}">Services</a></li>
                    <li><a href="{{ route('contact.index') }}">Contact</a></li>
                    <div class="mt-auto px-4 flex justify-between">
                        <h1 class="my-auto font-normal text-sm uppercase text-gray-500">CONNECT WITH US</h1>
                        <div>
                            <a href="" target="_blank" class="text-slate-900 mx-1">
                                <i class="fa-brands fa-youtube text-3xl"></i>
                            </a>
                            <a href="" target="_blank" class="text-slate-900 mx-1">
                                <i class="fa-brands fa-tiktok text-3xl"></i>
                            </a>

                            <a href="" target="_blank" class="text-slate-900 mx-1">
                                <i class="fa-brands fa-instagram text-3xl"></i>
                            </a>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</nav>

<dialog id="my_modal_2" class="modal">
    <div class="modal-box rounded-none">
        <div class="bg-white border-2 border-gray-200 hover:border-slate-900 py-1 px-6">
            <form action="" class="my-auto flex gap-4">
                <button type="submit" class="my-auto">
                    <i class="fa-solid fa-magnifying-glass text-md"></i>
                </button>

                <input type="text" name="key" id="key" value="{{ old('key') }}"
                    class="block px-0 w-full  text-gray-900 bg-transparent border-0 appearance-none focus:outline-none focus:ring-0 placeholder:text-md text-md"
                    placeholder="Search our product here" />
            </form>
        </div>
    </div>
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>
