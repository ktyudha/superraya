<footer class="footer gap-y-1.5 bg-[#F6F5F5] text-slate-900 text-neutral-content items-center  lg:px-40 p-4">
    <div class="grid-flow-col items-center my-auto md:mx-0 mx-auto">
        <span class="font-bold uppercase text-xl my-auto">SUPERRAYA</span>
        <span class="font-normal"> © {{ @$year }} - All right reserved</span>
    </div>
    <nav class="grid-flow-col gap-4 md:place-self-center md:justify-self-end md:mx-0 mx-auto">
        @foreach (@$socialMedia as $social)
            <a href="{{ @$social->url }}" target="_blank" class="text-slate-900 mx-3.5">
                <i class="fa-brands fa-{{ @$social->type }} text-2xl"></i>
            </a>
        @endforeach
    </nav>
</footer>
