<aside :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
    class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden bg-black duration-300 ease-linear dark:bg-boxdark lg:static lg:translate-x-0"
    @click.outside="sidebarToggle = false">

    <div class="flex items-center justify-between gap-2 px-6 py-5.5 lg:py-6.5">
        <a href="{{ route('admin.index') }}" class="mx-auto text-center">
            {{--  <img src="{{ asset('static/admin/images/logo/logo.svg') }}" alt="Logo" />  --}}
            <h1 class="text-3xl font-bold text-white ">SUPERRAYA™</h1>

        </a>

        <button class="block lg:hidden" @click.stop="sidebarToggle = !sidebarToggle">
            <svg class="fill-current" width="20" height="18" viewBox="0 0 20 18" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z"
                    fill="" />
            </svg>
        </button>
    </div>

    <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear">
        <nav class="mt-5 px-4 py-4 lg:mt-9 lg:px-6" x-data="{ selected: $persist('Dashboard') }">
            <div>
                <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">MENU</h3>

                <ul class="mb-6 flex flex-col gap-1.5">
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                            href="{{ route('admin.index') }}"
                            @click="selected = (selected === 'Dashboard' ? '':'Dashboard')"
                            :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Dashboard') && (page === 'Dashboard') }">
                            <i class="fa-solid fa-house"></i>
                            Dashboard
                        </a>
                    </li>
                    @if (auth()->user()->hasAnyPermission(['settings']) or auth()->user()->hasRole('superadmin'))
                        <li>
                            <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                                href="#" @click.prevent="selected = (selected === 'Settings' ? '':'Settings')"
                                :class="{
                                    'bg-graydark dark:bg-meta-4': (selected === 'Settings')
                                }">
                                <i class="fa-solid fa-gear"></i>
                                Settings

                                <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                                    :class="{ 'rotate-180': (selected === 'Settings') }" width="20" height="20"
                                    viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                                        fill="" />
                                </svg>
                            </a>

                            <div class="translate transform overflow-hidden"
                                :class="(selected === 'Settings') ? 'block' : 'hidden'">
                                <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                                    <li>
                                        <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium  duration-300 ease-in-out hover:text-white {{ $subMenuActive === 'basic-info' ? '!text-white' : 'text-bodydark2' }}"
                                            href="{{ route('admin.settings.basic-info.edit') }}">Basic Info
                                        </a>
                                    </li>
                                    <li>
                                        <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium  duration-300 ease-in-out hover:text-white {{ $subMenuActive === 'about' ? '!text-white' : 'text-bodydark2' }}"
                                            href="{{ route('admin.settings.about.edit') }}">About
                                        </a>
                                    </li>
                                    <li>
                                        <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white {{ $subMenuActive === 'social-media' ? '!text-white' : 'text-bodydark2' }}"
                                            href="{{ route('admin.social.index') }}">Social
                                        </a>
                                    </li>
                                    <li>
                                        <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white {{ $subMenuActive === 'logo' ? '!text-white' : 'text-bodydark2' }}"
                                            href="{{ route('admin.settings.logo.edit') }}">Logo
                                        </a>
                                    </li>
                                    <li>
                                        <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white {{ $subMenuActive === 'sliders' ? '!text-white' : 'text-bodydark2' }}"
                                            href="{{ route('admin.sliders.index') }}">Sliders
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @endif
                    @if (auth()->user()->hasAnyPermission(['product posts read', 'product categories read']) or auth()->user()->hasRole('superadmin'))
                        <li>
                            <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                                href="#" @click.prevent="selected = (selected === 'Product' ? '':'Product')"
                                :class="{
                                    'bg-graydark dark:bg-meta-4': (selected === 'Product')
                                }">
                                <i class="fa-solid fa-compass-drafting"></i>
                                Products

                                <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                                    :class="{ 'rotate-180': (selected === 'Product') }" width="20" height="20"
                                    viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                                        fill="" />
                                </svg>
                            </a>

                            <div class="translate transform overflow-hidden"
                                :class="(selected === 'Product') ? 'block' : 'hidden'">
                                <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                                    <li>
                                        <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium  duration-300 ease-in-out hover:text-white {{ $subMenuActive === 'product-categories' ? '!text-white' : 'text-bodydark2' }}"
                                            href="{{ route('admin.product.categories.index') }}">Category
                                        </a>
                                    </li>
                                    <li>
                                        <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white {{ $subMenuActive === 'product-posts' ? '!text-white' : 'text-bodydark2' }}"
                                            href="{{ route('admin.product.posts.index') }}">Product
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @endif
                    @if (auth()->user()->hasAnyPermission(['services read']) or auth()->user()->hasRole('superadmin'))
                        <li>
                            <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                                href="#" @click.prevent="selected = (selected === 'Service' ? '':'Service')"
                                :class="{
                                    'bg-graydark dark:bg-meta-4': (selected === 'Service')
                                }">
                                <i class="fa-solid fa-handshake"></i>
                                Services
                                <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                                    :class="{ 'rotate-180': (selected === 'Service') }" width="20" height="20"
                                    viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                                        fill="" />
                                </svg>
                            </a>

                            <div class="translate transform overflow-hidden"
                                :class="(selected === 'Service') ? 'block' : 'hidden'">
                                <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                                    @can('services read')
                                        <li>
                                            <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white {{ $subMenuActive === 'services-banner' ? '!text-white' : 'text-bodydark2' }}"
                                                href="{{ route('admin.services-banner.edit') }}">Banner
                                            </a>
                                        </li>
                                    @endcan
                                    @can('services read')
                                        <li>
                                            <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white {{ $subMenuActive === 'services' ? '!text-white' : 'text-bodydark2' }}"
                                                href="{{ route('admin.services.index') }}">Service
                                            </a>
                                        </li>
                                    @endcan
                                </ul>
                            </div>
                        </li>
                    @endif

                    {{--  <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                            href="calendar.html" @click="selected = (selected === 'Calendar' ? '':'Calendar')"
                            :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Calendar') && (page === 'calendar') }">
                            <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.7499 2.9812H14.2874V2.36245C14.2874 2.02495 14.0062 1.71558 13.6405 1.71558C13.2749 1.71558 12.9937 1.99683 12.9937 2.36245V2.9812H4.97803V2.36245C4.97803 2.02495 4.69678 1.71558 4.33115 1.71558C3.96553 1.71558 3.68428 1.99683 3.68428 2.36245V2.9812H2.2499C1.29365 2.9812 0.478027 3.7687 0.478027 4.75308V14.5406C0.478027 15.4968 1.26553 16.3125 2.2499 16.3125H15.7499C16.7062 16.3125 17.5218 15.525 17.5218 14.5406V4.72495C17.5218 3.7687 16.7062 2.9812 15.7499 2.9812ZM1.77178 8.21245H4.1624V10.9968H1.77178V8.21245ZM5.42803 8.21245H8.38115V10.9968H5.42803V8.21245ZM8.38115 12.2625V15.0187H5.42803V12.2625H8.38115ZM9.64678 12.2625H12.5999V15.0187H9.64678V12.2625ZM9.64678 10.9968V8.21245H12.5999V10.9968H9.64678ZM13.8374 8.21245H16.228V10.9968H13.8374V8.21245ZM2.2499 4.24683H3.7124V4.83745C3.7124 5.17495 3.99365 5.48433 4.35928 5.48433C4.7249 5.48433 5.00615 5.20308 5.00615 4.83745V4.24683H13.0499V4.83745C13.0499 5.17495 13.3312 5.48433 13.6968 5.48433C14.0624 5.48433 14.3437 5.20308 14.3437 4.83745V4.24683H15.7499C16.0312 4.24683 16.2562 4.47183 16.2562 4.75308V6.94683H1.77178V4.75308C1.77178 4.47183 1.96865 4.24683 2.2499 4.24683ZM1.77178 14.5125V12.2343H4.1624V14.9906H2.2499C1.96865 15.0187 1.77178 14.7937 1.77178 14.5125ZM15.7499 15.0187H13.8374V12.2625H16.228V14.5406C16.2562 14.7937 16.0312 15.0187 15.7499 15.0187Z"
                                    fill="" />
                            </svg>

                            Calendar
                        </a>
                    </li>  --}}
                </ul>

                <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">MANAGEMENT</h3>
                <ul>
                    <li>
                        <a href="{{ route('admin.inboxes.index') }}"
                            class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                            href="calendar.html" @click="selected = (selected === 'Inboxes' ? '':'Inboxes')"
                            :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Inboxes') }">
                            <i class="fa-solid fa-inbox"></i>
                            Inboxes
                        </a>
                    </li>
                </ul>
            </div>
        </nav>


        <div
            class="fixed bottom-0 mb-0 w-full  rounded-sm border border-strokedark bg-boxdark px-4 py-6 text-center shadow-default">
            <h3 class="mb-1 font-semibold text-white">Inbework Media</h3>
            <p class="mb-4 text-xs text-bodydark2">© 2024</p>
            <a href="https://wa.me/6285848250548/" target="_blank" rel="nofollow"
                class="flex items-center justify-center rounded-md bg-primary p-2 text-white hover:bg-opacity-95">
                <i class="fa-solid fa-headset mr-3"></i> Helpdesk
            </a>
        </div>
    </div>
</aside>
