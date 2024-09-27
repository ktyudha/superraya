<nav id="navbar" class="navbar fixed top-0 left-0 right-0 z-10 lg:px-40 bg-white text-slate-900">
    <div class="flex-1 md:ml-0 ml-2">
        <a class=" text-3xl font-bold" href="{{ route('landing.index') }}">SUPERRAYA</a>
        <ul class="ml-16 gap-16 lg:flex hidden text-lg">
            <li><a href="{{ route('product.index') }}">Product</a></li>
            <li><a href="{{ route('service.index') }}">Service</a></li>
            <li><a>Contact</a></li>
        </ul>

    </div>
    <div class="flex-none md:mr-0 mr-2">
        {{--  @include('website.partials.theme-toggle')  --}}
        <div class="btn btn-ghost hover:bg-transparent">
            <i class="fa-solid fa-magnifying-glass text-xl"></i>
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
                    <li><a>Contact</a></li>
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
