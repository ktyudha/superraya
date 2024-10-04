<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.partials.metadata')
    @include('admin.partials.styles')
</head>

<body class=" font-satoshi text-base font-normal text-body" x-data="{ page: 'ecommerce', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="darkMode ? 'dark text-bodydark bg-boxdark-2' : 'bg-whiten'">

    @include('admin.partials.preloader')

    <div class="flex h-screen overflow-hidden">
        @include('admin.partials.sidebar')
        <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
            @include('admin.partials.navbar')
            <main>
                <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    @include('admin.partials.scripts')
</body>

</html>
