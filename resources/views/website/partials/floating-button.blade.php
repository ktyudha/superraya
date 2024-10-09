<div class="group fixed bottom-5 right-5 p-2 z-[999] flex items-end justify-end w-24 h-24 lg:block hidden">
    <a href="{{ whatsApp(@$setting->firstWhere('key', 'whatsapp')->value ?? '08588250548') }}" target="_blank"
        class="text-white shadow-xl flex items-center justify-center px-4 py-3 rounded-full bg-green-800 absolute">
        <i class="fa-brands fa-whatsapp text-4xl"></i>
    </a>
</div>

<div class="group fixed rotate-[-90deg] bottom-24 right-0  z-[999] flex items-end justify-end w-24 h-24 block lg:hidden">
    <a href="{{ whatsApp(@$setting->firstWhere('key', 'whatsapp')->value ?? '08588250548') }}" target="_blank"
        class="text-white shadow-xl flex items-center justify-center px-4 py-1  bg-green-800 absolute">
        WhatsApp
    </a>
</div>
