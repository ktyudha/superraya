<div class="fixed bottom-0 bg-slate-900 w-full lg:hidden grid grid-cols-2">
    <div class="bg-slate-900 flex-row gap-3 p-4 text-white mx-auto">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle hi" />
        <div class="drawer-content lg:hidden">
            <label for="my-drawer-2">
                <i class="fa-solid fa-sort text-xl"></i>
                <span class="btm-nav-label uppercase text-sm">SORT</span>
            </label>
        </div>

        <div class="drawer-side">
            <ul
                class="menu [&_li>*]:rounded-none bg-white z-50 h-screen text-base-content w-full gap-6 text-4xl font-bold">
                <div class="flex ml-2 mt-16">
                    <h3 class="mt-2 mr-auto font-normal text-2xl uppercase">SORT</h3>
                    <label for="my-drawer-2" aria-label="close sidebar" class="mt-2 mr-2 ml-auto">
                        <i class="fa-solid fa-x text-2xl"></i></label>
                </div>
                <div class="text-sm">
                    <h2 class="uppercase text-sm font-bold ml-2">Sort By</h2>
                    <ul class="menu [&_li>*]:p-0 font-normal">
                        <li class="hover:underline"><a href="">Latest Arrival</a></li>
                        <li class="hover:underline"><a href="">Popular</a></li>
                    </ul>
                </div>
            </ul>
        </div>
    </div>
    <div class="bg-slate-900 flex-row gap-3 p-4 mx-auto text-white">
        <input id="my-drawer-3" type="checkbox" class="drawer-toggle hi" />
        <div class="drawer-content lg:hidden">
            <label for="my-drawer-3">
                <i class="fa-solid fa-filter text-xl"></i>
                <span class="btm-nav-label uppercase text-xs">FILTER</span>
            </label>
        </div>

        <div class="drawer-side">
            <ul
                class="menu [&_li>*]:rounded-none bg-white z-50 h-screen text-base-content w-full gap-6 text-4xl font-bold">
                <div class="flex ml-2 mt-16">
                    <h3 class="mt-2 mr-auto font-normal text-2xl uppercase">Filter</h3>
                    <label for="my-drawer-3" aria-label="close sidebar" class="mt-2 mr-2 ml-auto">
                        <i class="fa-solid fa-x text-2xl"></i></label>
                </div>
                <div class="text-sm">
                    <h2 class="uppercase text-sm font-bold ml-2">Categories</h2>
                    <ul class="menu [&_li>*]:p-0 font-normal">
                        <li class="hover:underline"><a href="">Industri</a></li>
                        <li class="hover:underline"><a href="">Pertanian</a></li>
                        <li class="hover:underline"><a href="">Peternakan</a></li>
                        <li class="hover:underline"><a href="">Pangan</a></li>
                    </ul>
                </div>

                <div class="text-sm">
                    <h2 class="uppercase text-sm font-bold ml-2">Best Seller</h2>
                    <ul class="menu [&_li>*]:p-0 font-normal">
                        <li class="hover:underline"><a href="">Mesin Press Kardus</a></li>
                        <li class="hover:underline"><a href="">Mesin Penggoreng Singkong</a></li>
                        <li class="hover:underline"><a href="">Mesin Penimpil Jagung</a></li>
                    </ul>
                </div>
                {{--  <div class="mt-auto px-4 flex justify-between">

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
                </div>  --}}
            </ul>
        </div>
    </div>
</div>
