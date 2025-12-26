<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rượu vang nhập khẩu nguyên chai</title>
    <link rel="icon" type="image/png" href="./assets/uploads/logo.png">
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>

    <meta name="csrf_token" value="{{ csrf_token() }}">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#8C1C2C',
                        secondary: '#D4AF37'
                    },
                    borderRadius: {
                        'none': '0px',
                        'sm': '4px',
                        DEFAULT: '8px',
                        'md': '12px',
                        'lg': '16px',
                        'xl': '20px',
                        '2xl': '24px',
                        '3xl': '32px',
                        'full': '9999px',
                        'button': '8px'
                    },
                    fontFamily: {
                        'roboto-slab': ['Roboto Slab', 'serif'],
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Pacifico&family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" rel="stylesheet">
    <style>
        :where([class^="ri-"])::before {
            content: "\f3c2";
        }

        .font-playfair {
            font-family: 'Playfair Display', serif;
        }

        .font-inter {
            font-family: 'Inter', sans-serif;
        }

        #main-header {
            background: white;
            border-bottom: 1px solid rgba(139, 21, 56, 0.1);
        }

        @keyframes ping {

            75%,
            100% {
                transform: scale(2);
                opacity: 0;
            }
        }

        .animate-ping {
            animation: ping 1.5s cubic-bezier(0, 0, 0.2, 1) infinite;
        }

        #main-header.scrolled {
            background: white;
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(139, 21, 56, 0.1);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }

        .parallax-bg {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .gradient-overlay {
            background: linear-gradient(135deg, rgba(139, 21, 56, 0.8) 0%, rgba(212, 175, 55, 0.6) 100%);
        }

        .wine-gradient {
            background: linear-gradient(135deg, #8C1C2C 0%, #D4AF37 100%);
        }

        .glass-effect {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.1);
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .fade-in-section {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease-out;
        }

        .fade-in-section.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        .toast {
            position: fixed;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%) translateY(100%);
            background: rgba(139, 21, 56, 0.95);
            color: white;
            padding: 1.5rem 3rem;
            border-radius: 9999px;
            z-index: 50;
            opacity: 0;
            transition: all 0.3s ease;
            font-size: 1.1rem;
            font-weight: 500;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .toast.show {
            transform: translateX(-50%) translateY(0);
            opacity: 1;
        }

        .banner-sale {
            min-height: 100px;
        }

        @media (min-width: 640px) {
            #banner-title {
                font-size: 1.875rem;
                padding: 2rem;
                letter-spacing: 1.5px;
            }
        }

        @media (min-width: 768px) {
            #banner-title {
                font-size: 2.25rem;
                letter-spacing: 2px;
            }

            .banner-sale {
                min-height: 250px
            }
        }

        @media (min-width: 1024px) {
            .banner-sale {
                min-height: 570px
            }

            #banner-title {
                font-size: 3rem;
                padding: 2.5rem;
                letter-spacing: 2.5px;
            }
        }
    </style>
</head>

<body class="font-inter">
    <!-- Header -->
    <header class="fixed w-full top-0 z-50 transition-all duration-300 bg-white shadow-sm" id="main-header">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="flex items-center justify-center h-[80px]">
                <div class="flex items-center">
                    <a href="/">
                        <img src="./assets/uploads/logo.png" alt="The Best Wine Logo" class="h-[80px] w-auto p-1">
                    </a>
                </div>
            </div>

        </div>
    </header>
    <!-- Wine Education Banner -->


    <section
        class="py-12  md:min-h-[850px] lg:min-h-[1000px]  md:h-[850px] lg:h-[1050px] xl:h-screen flex items-center "
        style="background-image: url('./assets/images/bg-event.jpg'); background-size: cover; background-position: center;">
        <div class="lg:w-[1200px] mx-auto px-0 md:px-2  sm:mt-12 md:pt-16 lg:mt-[-50px]">
            <div class="flex flex-col md:flex-row items-center gap-10 h-full ">
                <div class="w-full  ">
                    <img src="./assets/khuyen_mai/image_1.jpg" alt="Cách đọc nhãn chai rượu vang"
                        class="w-full rounded-2xl shadow-2xl object-cover h-[100%] ">
                </div>

            </div>
        </div>
    </section>
    <!-- Produ
     ct Introduction -->
    <section class="py-10 relative overflow-hidden">
        <div class="absolute inset-0 opacity-30"
            style="background: radial-gradient(circle at 70% 30%, #8B1538 0%, transparent 50%)"></div>
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <div class="relative">
                    <div class="product-carousel overflow-hidden">
                        <div class="product-slides flex transition-transform duration-300">
                            <div class="product-slide w-full flex-shrink-0 pb-4">
                                <img src="./assets/khuyen_mai/image_2.jpg" alt="Vang Đỏ Bordeaux"
                                    class="w-full  mx-auto object-top object-cover rounded-2xl shadow-2xl">

                                <h3 class="mt-3 text-center text-2xl font-bold text-gray-900 mb-4"> 06 Bộ Hợp Túc:
                                    1.080.000 VNĐ</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="product-carousel overflow-hidden">
                        <div class="product-slides flex transition-transform duration-300">
                            <div class="product-slide w-full flex-shrink-0 pb-4">
                                <img src="./assets/khuyen_mai/image_3.jpg" alt="Vang Đỏ Bordeaux"
                                    class="w-full mx-auto object-top object-cover rounded-2xl shadow-2xl">
                                <h3 class="mt-3 text-center text-2xl font-bold text-gray-900 mb-4"> 01 Bộ Ly Pha Lê: 650.000 VNĐ</h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="ve-chung-toi" class="py-10 relative overflow-hidden">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 relative">

            <div class="bg-white rounded-2xl shadow-xl p-2 mb-2 relative overflow-hidden">
                <div class="flex flex-col lg:flex-row items-center justify-between" id="product">
                    <div class="text-center lg:text-left mb-8 lg:mb-0">

                        <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mt-4">
                            <div class="text-center">
                                <img src="./assets/khuyen_mai/image_4.jpg" alt="Bộ ly Pha Lê Bohemia 06 chiếc"
                                    class="w-full h-auto rounded-lg ">
                            </div>
                            <h3 class="text-center text-2xl font-bold text-gray-900 mb-4"> 01 Tủ Bảo Quản: 6.500.000 VNĐ</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10 relative overflow-hidden">
        <div class="absolute inset-0 opacity-30"
            style="background: radial-gradient(circle at 70% 30%, #8B1538 0%, transparent 50%)"></div>
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <div class="relative">
                    <div class="product-carousel overflow-hidden">
                        <div class="product-slides flex transition-transform duration-300">
                            <div class="product-slide w-full flex-shrink-0 pb-4">
                                <img src="./assets/khuyen_mai/image_5.jpg" alt="Vang Đỏ Bordeaux"
                                    class="w-full  mx-auto object-top object-cover rounded-2xl shadow-2xl">
                                <h3 class="mt-3 text-center text-2xl font-bold text-gray-900 mb-4"> 01 Decanter: 550.000 VNĐ</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="product-carousel overflow-hidden">
                        <div class="product-slides flex transition-transform duration-300">
                            <div class="product-slide w-full flex-shrink-0 pb-4">
                                <img src="./assets/khuyen_mai/image_6.jpg" alt="Vang Đỏ Bordeaux"
                                    class="w-full mx-auto object-top object-cover rounded-2xl shadow-2xl">
                                <h3 class="mt-3 text-center text-2xl font-bold text-gray-900 mb-4"> Mở Chai: 199.000 VNĐ</h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-10 relative overflow-hidden"
        style="background-image: url('./assets/uploads/201b5a32936c69ad19ba28013da9b877.jpg')">
        <div class="absolute inset-0 wine-gradient opacity-90"></div>
        <div class="relative z-10 max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="font-playfair text-4xl lg:text-6xl font-bold text-white mb-6">
                Ưu Đãi Đặc Biệt
            </h2>
            <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
                Đặt hàng ngay hôm nay để nhận ưu đãi cho đơn hàng đầu tiên
                và miễn phí giao hàng toàn quốc
            </p>
            <div class="bg-white rounded-xl p-8 text-center max-w-3xl mx-auto mb-8">
                <h4 class="text-3xl font-bold text-[#B91C1C] mb-8">THÔNG TIN ĐẶT HÀNG</h4>
                <div class="space-y-8">
                    <form action="{{ route('booking') }}" method="post" data-redirect="{{ route('page') }}"
                        class="bg-gradient-to-b from-red-50 to-red-100 p-6 rounded-xl mt-8 text-left relative overflow-hidden">
                        @csrf
                        <input type="hidden" name="form_type" value="form_2">
                        <div class="absolute inset-0 opacity-10"
                            style="background-image: url('data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 1440 320\'%3E%3Cpath fill=\'%23800020\' fill-opacity=\'1\' d=\'M0,160L48,138.7C96,117,192,75,288,80C384,85,480,139,576,149.3C672,160,768,128,864,133.3C960,139,1056,181,1152,192C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z\'%3E%3C/path%3E%3C/svg%3E'); background-size: cover; background-repeat: repeat-y;">
                        </div>
                        <div class="absolute inset-0 opacity-5"
                            style="background: radial-gradient(circle at 50% 50%, #D4AF37 0%, transparent 70%), radial-gradient(circle at 80% 20%, #D4AF37 0%, transparent 50%);">
                        </div>
                        <h4 class="text-2xl font-bold text-red-900 mb-6 relative z-10">THÔNG TIN ĐẶT HÀNG</h4>
                        <div class="space-y-4 relative z-10">
                            <div>
                                <label class="block text-sm font-medium text-red-800 mb-1">Họ và Tên <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="name" required
                                    class="w-full px-4 py-2 rounded-md border-red-200 focus:ring-2 focus:ring-red-600 focus:border-transparent bg-white/80"
                                    placeholder="">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-red-800 mb-1">Số Điện Thoại <span
                                        class="text-danger">*</span></label>
                                <input type="tel" name="phone" required
                                    class="w-full px-4 py-2 rounded-md border-red-200 focus:ring-2 focus:ring-red-600 focus:border-transparent bg-white/80"
                                    placeholder="">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-red-800 mb-1">Địa Chỉ Nhận Hàng <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="address" required
                                    class="w-full px-4 py-2 rounded-md border-red-200 focus:ring-2 focus:ring-red-600 focus:border-transparent bg-white/80"
                                    placeholder="">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-red-800 mb-1">Số Lượng combo <span
                                        class="text-danger">*</span></label>
                                <input type="number" name="count_combo" required min="1"
                                    class="w-full px-4 py-2 rounded-md border-red-200 focus:ring-2 focus:ring-red-600 focus:border-transparent bg-white/80"
                                    placeholder="">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-red-800 mb-1">Ghi chú</label>
                                <textarea name="note"
                                    class="w-full px-4 py-2 rounded-md border-red-200 focus:ring-2 focus:ring-green-600 focus:border-transparent bg-white/80"
                                    rows="3" placeholder=""></textarea>
                            </div>
                            <button type="submit"
                                class="w-full bg-[#990e06]  text-white px-6 py-3 rounded-md font-semibold">
                                ĐĂNG KÝ NGAY
                            </button>
                        </div>
                    </form>
                    <div class="mt-4 space-y-2 text-center">
                        <a href="./uu-dai-dac-biet"
                            class="block bg-[#990e06] text-white px-6 py-2 rounded-md font-medium uppercase">
                            Không, TÔI MUỐN ƯU ĐÃI KHÁC
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white text-red-800 py-16" id="contact">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="flex flex-col md:flex-row items-start gap-8 mb-16">
                <div class="w-full md:w-1/3">
                    <img src="./assets/uploads/logo.png" alt="Rượu Nhập Logo" class="h-24 mb-6">
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-xl font-bold text-red-900 mb-2">VĂN PHÒNG HÀ NỘI</h3>
                            <p class="text-red-600">Địa chỉ: 115 Xuân Quỳnh, Trung Hòa, Cầu Giấy, Hà Nội</p>
                            <p class="text-red-600">Hotline: <a href="tel:0988393000"
                                    class="hover:text-red-700">0988.393.000</a></p>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-red-900 mb-2">VĂN PHÒNG TP.HCM</h3>
                            <p class="text-red-600">Địa chỉ: 23 Hoa Lan, P2, Phú Nhuận, TP HCM</p>
                            <p class="text-red-600">Hotline: <a href="tel:093623919"
                                    class="hover:text-red-700">090.464.1325</a></p>
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
                            <h3 class="text-xl font-bold text-red-900 mb-4">Văn Phòng Hà Nội</h3>
                            <div class="bg-gray-50 rounded-lg overflow-hidden aspect-[4/3]">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7448.9085414087895!2d105.801156!3d21.014502!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab005f399e4d%3A0x76cb4c55e88d43b3!2sThe%20Best%20Wine!5e0!3m2!1svi!2s!4v1756420834643!5m2!1svi!2s"
                                    width="100%" height="100%" style="border:0;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-red-900 mb-4">Văn Phòng TP HCM</h3>
                            <div class="bg-gray-50 rounded-lg overflow-hidden aspect-[4/3]">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1899815783077!2d106.68876817584616!3d10.796756758816784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528cef41a3e99%3A0x6d9f736ab46da8bc!2zMjMgSG9hIExhbiwgUGjGsOG7nW5nIDcsIFBow7ogTmh14bqtbiwgSOG7kyBDaMOtIE1pbmggNzI1NTA3LCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1756202313395!5m2!1svi!2s"
                                    width="100%" height="100%" style="border:0;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t border-red-200 pt-8">
                <div class="flex flex-col md:flex-row items-center gap-6">
                    <img src="./assets/uploads/logo_footer.png" alt="The Best Wine Logo" class=" object-contain ">
                    <div class="text-red-800 text-lg leading-relaxed">
                        <p class="mb-4">The Best Wine luôn là công ty tiên phong và dẫn đầu về truyền bá nghệ thuật
                            thưởng thức rượu vang và văn hóa giao tiếp trên bàn tiệc, và là thương hiệu, địa chỉ tin cậy
                            để khách hàng lựa chọn các sản phẩm rượu vang nhập khẩu chính hãng uy tín và chất lượng.</p>
                        <p>Với Sứ mệnh <span class="font-bold">"YOUR CHOICE IS THE BEST"</span>, chúng tôi luôn cam kết
                            sự
                            lựa chọn của khách hàng ở The Best Wine sẽ luôn là TỐT NHẤT.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div id="cta-container" class="fixed w-full md:w-[100px] bottom-0 md:bottom-4 right:0 md:right-4 z-50">
        <div id="cta-full" class="flex md:flex-col sm:flex-row bg-[#990F07] rounded-xl overflow-hidden shadow-xl">
            <div class="hidden justify-end p-1 md:flex ">
                <button id="cta-close" class="text-white hover:text-gray-300">
                    <i class="ri-close-line text-lg"></i>
                </button>
            </div>
            <a href="tel:0988393000"
                class="flex flex-col items-center justify-center py-2 px-4 text-white hover:bg-[#800D05] transition-colors border-t border-red-900/30">
                <i class="ri-phone-line text-2xl mb-1"></i>
                <span class="text-sm font-bold whitespace-nowrap">Hotline HN</span>
            </a>
            <a href="tel:0904641325"
                class="flex flex-col items-center justify-center py-2 px-4 text-white hover:bg-[#800D05] transition-colors border-t border-red-900/30">
                <i class="ri-phone-line text-2xl mb-1"></i>
                <span class="text-sm font-bold whitespace-nowrap">Hotline SG</span>
            </a>
            <a href="https://zalo.me/0904641325"
                class="flex flex-col items-center justify-center py-2 px-4 text-white hover:bg-[#800D05] transition-colors border-t border-red-900/30">
                <i class="ri-chat-1-line text-2xl mb-1"></i>
                <span class="text-sm font-bold">Zalo</span>
            </a>
            <a href="https://www.facebook.com/messages/t/100824539542485"
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

    <!-- Thêm CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>




    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fullCta = document.getElementById('cta-full');
            const toggleBtn = document.getElementById('cta-toggle');
            const closeBtn = document.getElementById('cta-close');

            closeBtn.addEventListener('click', function(e) {
                e.preventDefault();
                fullCta.classList.add('hidden');
                toggleBtn.classList.remove('hidden');
            });

            toggleBtn.addEventListener('click', function(e) {
                e.preventDefault();
                fullCta.classList.remove('hidden');
                toggleBtn.classList.add('hidden');
            });
        });
    </script>
    <div class="toast" id="toast">Cảm ơn bạn đã đăng ký Combo 1 của chúng tôi! Bạn được nhận thêm một combo 2
    </div>
    <script id="mobile-menu">
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.querySelector('button[class*="md:hidden"]');
            const nav = document.querySelector('.nav-mobile');
            const header = document.getElementById('main-header');
            if (menuButton && nav) {
                menuButton.addEventListener('click', function() {
                    nav.classList.toggle('hidden');
                    nav.classList.toggle('flex');
                    const icon = menuButton.querySelector('i');
                    icon.classList.toggle('ri-menu-line');
                    icon.classList.toggle('ri-close-line');
                    // Ensure header updates its style when menu is toggled
                    if (nav.classList.contains('flex')) {
                        header.classList.add('scrolled');
                    } else {
                        if (window.scrollY <= 50) {
                            header.classList.remove('scrolled');
                        }
                    }
                });
            }
        });
    </script>
    <script id="smooth-scroll">
        document.addEventListener('DOMContentLoaded', function() {
            const links = document.querySelectorAll('a[href^="#"], button.scroll-to-form');
            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href') || '#special-promotion';
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                        // Close mobile menu if open
                        const nav = document.querySelector('.nav-mobile');
                        const menuButton = document.querySelector('button[class*="md:hidden"]');
                        if (nav && !nav.classList.contains('hidden')) {
                            nav.classList.add('hidden');
                            nav.classList.remove('flex');
                            const icon = menuButton.querySelector('i');
                            icon.classList.remove('ri-close-line');
                            icon.classList.add('ri-menu-line');
                            const header = document.getElementById('main-header');
                            if (window.scrollY <= 50) {
                                header.classList.remove('scrolled');
                            }
                        }
                    }
                });
            });
        });
    </script>
    <script id="scroll-animations">
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('section');
            const header = document.getElementById('main-header');
            sections.forEach(section => {
                section.classList.add('fade-in-section');
            });
            let lastScrollTop = 0;

            function updateHeaderStyle() {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            }
            window.addEventListener('scroll', updateHeaderStyle);
            updateHeaderStyle();

            function checkScroll() {
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.offsetHeight;
                    const windowHeight = window.innerHeight;
                    if (scrollTop > sectionTop - windowHeight + sectionHeight / 4) {
                        section.classList.add('is-visible');
                    }
                });
                lastScrollTop = scrollTop;
            }
            window.addEventListener('scroll', checkScroll);
            checkScroll();
        });
    </script>
    <script id="form-handling">
        document.addEventListener('DOMContentLoaded', function() {
            const forms = document.querySelectorAll('form');
            const csrf_token = document.querySelector('meta[name="csrf_token"]')?.getAttribute('value');
            // const toast = document.getElementById('toast');
            forms.forEach(form => {
                form.addEventListener('submit', async function(e) {
                    e.preventDefault();
                    let status = false;
                    const redirect = form.getAttribute('data-redirect');

                    const submitButton = this.querySelector('button[type="submit"]');
                    const originalText = submitButton.textContent;
                    submitButton.textContent = 'Đang xử lý...';
                    submitButton.disabled = true;
                    const formData = new FormData(form);

                    try {
                        const response = await fetch(form.action, {
                            method: form.method,
                            headers: {
                                'X-CSRF-TOKEN': csrf_token
                            },
                            body: formData
                        });
                        if (response.ok) {
                            Swal.fire('Thành công!',
                                'Cảm ơn bạn đã đăng ký combo của chúng tôi', 'success')
                            form.reset();
                            const result = await response.json();
                            if (result.status == 'success') {
                                status = true;
                            }
                        } else {
                            Swal.fire('Lỗi!', 'Có lỗi xảy ra, vui lòng thử lại!', 'error')
                        }
                    } catch (error) {
                        Swal.fire('Lỗi!', 'Lỗi kết nối!', 'error')
                    }
                    setTimeout(() => {
                        submitButton.textContent = originalText;
                        submitButton.disabled = false;
                        if (status) window.location.href = redirect;
                    }, 3000);
                    return;
                });
            });
        });
    </script>
    <script id="product-carousel">
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.querySelector('.product-carousel');
            const slides = document.querySelector('.product-slides');
            const prevBtn = carousel.querySelector('.prev');
            const nextBtn = carousel.querySelector('.next');
            const dots = document.querySelectorAll('.carousel-dot');
            const infoSlides = document.querySelectorAll('.product-info-slide');
            let currentSlide = 0;
            const totalSlides = 1;

            function updateSlide(index) {
                slides.style.transform = `translateX(-${index * 100}%)`;
                dots.forEach((dot, i) => {
                    dot.classList.toggle('bg-primary', i === index);
                    dot.classList.toggle('bg-primary/30', i !== index);
                });
                infoSlides.forEach((slide, i) => {
                    slide.classList.toggle('hidden', i !== index);
                    slide.classList.toggle('active', i === index);
                });
                currentSlide = index;
            }


            updateSlide(0);
        });
    </script>
    <script>
        document.getElementById("scrollBtn").addEventListener("click", function() {
            const element = document.getElementById("ve-chung-toi");
            const headerOffset = 80; // chiều cao header
            const elementPosition = element.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

            window.scrollTo({
                top: offsetPosition,
                behavior: "smooth"
            });
        });
        document.getElementById("scrollBtnMB").addEventListener("click", function() {
            const element = document.getElementById("ve-chung-toi");
            const headerOffset = 80; // chiều cao header
            const elementPosition = element.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

            window.scrollTo({
                top: offsetPosition,
                behavior: "smooth"
            });
        });
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"version":"2024.11.0","token":"192c87cdce3a4ada85917427f34033cd","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
        crossorigin="anonymous"></script>
</body>

</html>
