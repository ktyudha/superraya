<nav id="navbar" class="navbar fixed top-0 left-0 right-0 z-50 lg:px-40 text-white">
    <div class="flex-1 md:ml-0 ml-2">
        <a class=" text-xl ">SUPERRAYA</a>
        <ul class="menu menu-horizontal ml-16 gap-16 md:contents hidden">
            <li><a>Product</a></li>
            <li><a>Service</a></li>
            <li><a>Contact</a></li>
        </ul>

    </div>
    <div class="flex-none md:mr-0 mr-2">
        @include('website.partials.theme-toggle')
        <div class="btn btn-ghost hover:bg-transparent">
            <i class="fa-solid fa-magnifying-glass text-xl"></i>
        </div>

        <div class="drawer">
            <input id="my-drawer" type="checkbox" class="drawer-toggle hi" />
            <div class="drawer-content md:hidden z-50">
                <!-- Page content here -->
                <label for="my-drawer">
                    <i class="fa-solid fa-bars"></i>
                </label>
            </div>
            <div class="drawer-side">
                {{--  <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"> <i
                        class="fa-solid fa-x"></i></label>  --}}
                <ul class="menu bg-white z-50 text-base-content h-screen w-full p-4">
                    <!-- Sidebar content here -->
                    <li><a>Sidebar Item 1</a></li>
                    <li><a>Sidebar Item 2</a></li>
                </ul>
            </div>
        </div>

    </div>
</nav>
