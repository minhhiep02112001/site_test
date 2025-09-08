@php
    $menus_footer = getMenuParent(0, 1);
@endphp
<!-- Footer -->
<footer class="bg-white text-red-800 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="flex flex-col md:flex-row items-start gap-8 mb-16">
            <div class="w-full md:w-1/3">
                <img style="max-height: 60px;" src="{!! getImageThumb($config_website?->logo_footer ?? '') !!}" id="logo"
                        class="h-24 mb-6" alt="{{ $config_website?->website }}">
 
                <div class="space-y-4">
                    <div>
                        <h3 class="text-xl font-bold text-red-900 mb-2">CHI NHÁNH HÀ NỘI</h3>
                        <p class="text-red-600">Địa chỉ: {{ $config_website?->address }}</p>
                        <p class="text-red-600">Hotline: <a href="tel:{{ $config_website?->phone }}"
                                class="hover:text-red-700">{{ $config_website?->phone }}</a></p>
                    </div>
                   
                    <div class="flex space-x-4 mt-6">
                        <a href="#" class="text-red-800 hover:text-red-600 transition-colors">
                            <i class="ri-facebook-fill ri-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex-1 w-full">
                <h2 class="text-2xl font-bold text-red-900 mb-8">BẢN ĐỒ</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-xl font-bold text-red-900 mb-4">Chi nhánh Hà Nội</h3>
                        <div class="bg-gray-50 rounded-lg overflow-hidden aspect-[4/3]">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7448.9085414087895!2d105.801156!3d21.014502!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab005f399e4d%3A0x76cb4c55e88d43b3!2sThe%20Best%20Wine!5e0!3m2!1svi!2s!4v1756420834643!5m2!1svi!2s"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="border-t border-red-200 pt-8">
            <div class="flex flex-col md:flex-row items-center gap-6">
                <img src="./assets/logo/logo-vuong.png" alt="The Best Wine Logo"
                    class="w-40 h-40 object-contain shadow-md">
                <div class="text-red-800 text-lg leading-relaxed">
                    <p class="mb-4">{!! $config_website?->content_footer ?? '' !!}</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="cta-container" class="fixed bottom-4 right-4 z-50">
    <div id="cta-full" class="flex flex-col bg-[#990F07] rounded-xl overflow-hidden shadow-xl">
        <div class="flex justify-end p-1">
            <button id="cta-close" class="text-white hover:text-gray-300">
                <i class="ri-close-line text-lg"></i>
            </button>
        </div>
        <a href="tel:0988393000"
            class="flex flex-col items-center justify-center py-2 px-4 text-white hover:bg-[#800D05] transition-colors border-t border-red-900/30">
            <i class="ri-phone-line text-2xl mb-1"></i>
            <span class="text-sm font-bold">Hotline HN</span>
        </a>
        <a href="tel:0904641325"
            class="flex flex-col items-center justify-center py-2 px-4 text-white hover:bg-[#800D05] transition-colors border-t border-red-900/30">
            <i class="ri-phone-line text-2xl mb-1"></i>
            <span class="text-sm font-bold">Hotline SG</span>
        </a>
        <a href="https://zalo.me/0988393000"
            class="flex flex-col items-center justify-center py-2 px-4 text-white hover:bg-[#800D05] transition-colors border-t border-red-900/30">
            <i class="ri-chat-1-line text-2xl mb-1"></i>
            <span class="text-sm font-bold">Zalo</span>
        </a>
        <a href="https://m.me/yourmessenger"
            class="flex flex-col items-center justify-center py-2 px-4 text-white hover:bg-[#800D05] transition-colors border-t border-red-900/30">
            <i class="ri-messenger-line text-2xl mb-1"></i>
            <span class="text-sm font-bold">Messenger</span>
        </a>
    </div>
    <button id="cta-toggle"
        class="hidden bg-[#990F07] text-white p-2 rounded-full shadow-md hover:bg-[#800D05] transition-colors">
        <i class="ri-chat-smile-3-line text-xl"></i>
    </button>
</div>
