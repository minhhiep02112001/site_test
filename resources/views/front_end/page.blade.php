<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ưu Đãi Đặc Biệt - Elletra Primitivo</title>
    <link rel="icon" type="image/png" href="./assets/logo/logo-thebestwine-ico.png">
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#8B1538',
                        secondary: '#D4AF37',
                        wineRed: '#8B0000',
                        waveBg: '#A61D4D'
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
                    }
                }
            }
        }
    </script>
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

        .wave-animation {
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(139, 0, 0, 0.05) 0%, rgba(139, 21, 56, 0.1) 100%);
            clip-path: path('M0,160 C320,100 480,300 800,160 L800,300 L0,300 Z');
            animation: wave 10s infinite linear;
            z-index: -1;
        }

        .wave-animation:nth-child(2) {
            opacity: 0.5;
            animation-duration: 15s;
            animation-direction: reverse;
        }

        .wave-animation:nth-child(3) {
            opacity: 0.3;
            animation-duration: 20s;
        }

        @keyframes wave {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-1600px);
            }
        }

        .countdown-timer {
            display: flex;
            justify-content: center;
            gap: 1rem;
            font-size: 1.5rem;
            font-weight: bold;
            color: #8B1538;
        }

        .countdown-unit {
            background: rgba(139, 21, 56, 0.1);
            padding: 1rem;
            border-radius: 8px;
            text-align: center;
        }


        .wine-badge {
            background: linear-gradient(135deg, #8B1538 0%, #A61D4D 100%);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 9999px;
            font-size: 3rem;
            font-weight: 500;
        }

        @media (max-width: 640px) {
            .wine-badge {
                font-size: 1.5rem;
            }
        }

        .toast {
            position: fixed;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%) translateY(100%);
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 1rem 2rem;
            border-radius: 9999px;
            z-index: 50;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .toast.show {
            transform: translateX(-50%) translateY(0);
            opacity: 1;
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

        .floating-cta {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            z-index: 50;
            transform: translateY(100px);
            opacity: 0;
            transition: all 0.3s ease;
        }

        .floating-cta.show {
            transform: translateY(0);
            opacity: 1;
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
    </style>
</head>

<body class="font-inter bg-white">
    <!-- Header -->
    <header class="fixed w-full top-0 z-50 bg-white/95  backdrop-blur-md border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-[100px]">
                <div class="flex items-center space-x-4">
                    <a href="./index.php" data-readdy="true"
                        class="w-10 h-10 flex items-center justify-center bg-primary/10 rounded-full hover:bg-primary/20 transition-colors">
                        <i class="ri-arrow-left-line text-primary ri-lg"></i>
                    </a>
                    <h1 class="hidden md:flex font-playfair text-xl font-bold text-gray-900">Ưu Đãi Đặc Biệt</h1>
                </div>

                <div class="flex items-center">
                    <img src="./assets/uploads/logo.png" alt="The Best Wine Logo" class="h-[100px] w-auto p-1">
                </div>
                <button type="button"
                    class="w-[120px] md:w-[200px] bg-gradient-to-r from-wineRed to-wineRed/80 hover:from-wineRed/90 hover:to-wineRed text-white  py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                    <a href="#registration-form" class="  text-white p-4 h-8 flex items-center justify-center ">
                        Đăng ký ngay
                    </a> </button>


            </div>
        </div>
    </header>
    <!-- Main Content -->
    <main class="pt-16">
        <!-- Hero Section with Offer -->
        <section class="py-12 relative overflow-hidden bg-gradient-to-br from-wineRed/5 to-secondary/5">
            <div class="wave-animation"></div>
            <div class="wave-animation"></div>
            <div class="wave-animation"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="italic text-2xl lg:text-4xl  text-wineRed mb-4">Cám ơn bạn đã đăng kí, để cảm ơn sự ủng hộ
                    tuyệt vời này của bạn, chúng tôi giành thêm 1 ưu đãi cuối cùng và duy nhất.</h2>
                <div class="wine-badge mb-6 inline-block">Ưu Đãi Duy Nhất - Hôm Nay Thôi!</div>
                <h1 class="font-playfair text-4xl lg:text-5xl font-bold text-wineRed mb-4">ƯU ĐÃI DUY NHẤT TRONG NGÀY
                    HÔM NAY KHI BẠN MUA 06 CHAI RƯỢU VANG ELLETRA PRIMITIVO</h1>
                <img src="./assets/uploads/photo_2025.jpg" alt="Banner gt chai rượu"
                    class="max-w-full rounded-lg h-auto mx-auto mb-8">
                <blockquote class="text-2xl italic text-gray-800 mb-6 max-w-4xl mx-auto">
                    “Elettra là biểu tượng của
                    nhà làm rượu vang Provinco miền Nam nước Ý. Rượu được làm từ những trái nho Primitivo của những
                    khu vườn cổ Pugila, nơi sở hữu những gốc nho già hơn 100 năm tuổi, được coi là di sản thế giới.
                    Rượu được ủ 12 tháng trong thùng gỗ sồi mới của Pháp nên có màu của Ruby hồng ngọc đậm đặc,
                    hương thơm của anh đào đen, violet, cam thảo, sô cô la, và cà phê..., cấu trúc rượu mềm mại với
                    tannin chát mịn, hậu vị sâu và hài hòa.”
                </blockquote>
            </div>
        </section>
        <!-- Combo Details -->
        <section class="py-16 relative overflow-hidden bg-gradient-to-br from-wineRed/10 to-secondary/10">
            <div class="wave-animation opacity-50"></div>
            <div class="wave-animation" style="animation-duration: 12s; opacity: 0.3;"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div
                    class="bg-[#990e06]  backdrop-blur-sm p-8 rounded-3xl shadow-xl border border-wineRed/20 transform hover:scale-105 transition-all duration-500">
                    <h3 class="font-playfair text-4xl font-extrabold text-[#fff] mb-8 text-center animate-pulse">Và đây
                        là 8 ưu đãi bạn nhận được khi mua Combo này:</h3>
                    <ol class="list-decimal list-inside space-y-6 text-gray-800 mb-10 text-lg grid gap-4">
                        <li
                            class="bg-gray-50 p-4 rounded-xl shadow-md hover:bg-wineRed/5 transition-colors duration-300">
                            Giảm 10%, giá chỉ còn 1.350.000/chai, tổng Thanh Toán chỉ là 8.100.000VNĐ</li>
                        <li style="margin-top:-5px!important;"
                            class="bg-gray-50 p-4  rounded-xl shadow-md hover:bg-wineRed/5 transition-colors duration-300">
                            Tặng kèm 06 bộ hộp túi Elettra</li>
                        <li style="margin-top:-5px!important;"
                            class="bg-gray-50 p-4 rounded-xl shadow-md hover:bg-wineRed/5 transition-colors duration-300">
                            Tặng kèm 06c rượu vang nhập khẩu Bronzeo</li>
                        <li style="margin-top:-5px!important;"
                            class="bg-gray-50 p-4 rounded-xl shadow-md hover:bg-wineRed/5 transition-colors duration-300">
                            Tặng kèm 01 bộ ly Pha Lê Bohemia 06 chiếc</li>
                        <li style="margin-top:-5px!important;"
                            class="bg-gray-50 p-4 rounded-xl shadow-md hover:bg-wineRed/5 transition-colors duration-300">
                            Tặng kèm 01 Decanter Pha Lê Bohemia</li>
                        <li style="margin-top:-5px!important;"
                            class="bg-gray-50 p-4 rounded-xl shadow-md hover:bg-wineRed/5 transition-colors duration-300">
                            Tặng kèm 01 mở chai cao cấp</li>
                        <li style="margin-top:-5px!important;"
                            class="bg-gray-50 p-4 rounded-xl shadow-md hover:bg-wineRed/5 transition-colors duration-300">
                            Tặng 1 buổi miễn phí thử rượu và tư vấn nghệ thuật thuởng thức rượu vang trên bàn tiệc với 6
                            loại rượu khác nhau, cùng chuyên gia rượu vang hơn 10 năm kinh nghiệm của The Best Wine.
                        </li>
                    </ol>
                    <div
                        class="bg-gradient-to-r from-wineRed/10  to-secondary/10 p-8 rounded-2xl text-center mb-10 shadow-lg transform hover:shadow-2xl transition-shadow duration-500">
                        <h3 class="font-bold text-3xl text-[#fff] mb-4 animate-bounce">Tổng giá trị quà tặng:
                            5.868.000VNĐ</h3>
                        <p class="text-xl  text-[#fff] mb-6">Như vậy, với Combo này bạn đã có tất cả các ưu đãi của
                            chúng tôi với chỉ một lần thanh toán 8.100.000VNĐ duy nhất.</p>
                        <button id="buy-now-btn"
                            class="bg-wineRed hover:bg-wineRed/80 text-white px-10 py-5 rounded-full font-semibold text-lg transition-all duration-300 transform hover:scale-110 animate-pulse">
                            MUA HÀNG NGAY
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Additional Info -->
        <section class="py-16 relative overflow-hidden bg-gradient-to-br from-secondary/5 to-wineRed/5">
            <div class="wave-animation opacity-30"></div>
            <div class="wave-animation" style="animation-duration: 14s; opacity: 0.2;"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-[#990e06] backdrop-blur-sm p-8 rounded-3xl shadow-xl border border-wineRed/10">
                    <h2 class="font-playfair text-4xl font-extrabold text-[#fff] mb-8 text-center animate-fade-in">Sản
                        phẩm này giành cho ai:</h2>
                    <ul class="list-disc list-inside space-y-5 text-gray-800 mb-10 text-lg grid gap-4">
                        <li
                            class="bg-gray-50 p-4 rounded-xl shadow-md hover:bg-wineRed/5 transition-colors duration-300">
                            Các Doanh nhân muốn có một sản phẩm đẳng cấp và nâng tầm giao tiếp trên bàn tiệc.</li>
                        <li style="margin-top:-5px!important;"
                            class="bg-gray-50 p-4 rounded-xl shadow-md hover:bg-wineRed/5 transition-colors duration-300">
                            Quý khách hàng hay phải tiếp khách mà cần uống rượu một cách văn minh, có lợi cho sức khỏe.
                        </li>
                    </ul>
                    <h2 class="font-playfair text-4xl font-extrabold text-[#fff] mb-4 text-center animate-fade-in">
                        Những lưu ý khi bạn mua hàng của The Best Wine:</h2>
                    <ul class="list-disc list-inside space-y-5 text-gray-800 mb-10 text-lg grid gap-4">
                        <li style="margin-top:-5px!important;"
                            class="bg-gray-50 p-4 mb-2 rounded-xl shadow-md hover:bg-wineRed/5 transition-colors duration-300">
                            Điều tuyệt vời là chúng tôi sẵn sàng đổi trả sản phẩm nếu quý khách không hài lòng khi sử
                            dụng.</li>
                        <li style="margin-top:-5px!important;"
                            class="bg-gray-50 p-4 rounded-xl shadow-md hover:bg-wineRed/5 transition-colors duration-300">
                            Tặng thêm 01 chai Elettra Primitivo khi bạn giới thiệu khách hàng hoặc mua thêm 1 Combo thứ
                            2.</li>
                    </ul>
                    <h2 class="font-playfair text-4xl font-extrabold text-[#fff] mb-8 text-center animate-fade-in">THỜI
                        HẠN ĐĂNG KÍ COMBO CỦA BẠN</h2>
                    <div id="countdown" class="countdown-timer mb-10 flex justify-center gap-6">
                        <div
                            class="countdown-unit bg-wineRed/10 p-6 rounded-2xl text-3xl font-bold text-[#fff] shadow-lg transform hover:scale-110 transition-all duration-300">
                            <span id="hours" class="text-[#fff]">00</span><span
                                class="block text-sm text-[#fff]">Giờ</span>
                        </div>
                        <div
                            class="countdown-unit bg-wineRed/10 p-6 rounded-2xl text-3xl font-bold text-[#fff] shadow-lg transform hover:scale-110 transition-all duration-300">
                            <span id="minutes" class="text-[#fff]">00</span><span
                                class="block text-sm text-[#fff]">Phút</span>
                        </div>
                        <div
                            class="countdown-unit bg-wineRed/10 p-6 rounded-2xl text-3xl font-bold text-[#fff] shadow-lg transform hover:scale-110 transition-all duration-300">
                            <span id="seconds" class="text-[#fff]">00</span><span
                                class="block text-sm text-[#fff]">Giây</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Registration Form -->
        <section id="registration-form"
            class="py-16 relative overflow-hidden bg-gradient-to-br from-wineRed/10 to-secondary/10">
            <div class="wave-animation opacity-50"></div>
            <div class="wave-animation" style="animation-duration: 12s; opacity: 0.3;"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2
                    class="font-playfair text-4xl font-extrabold text-wineRed mb-10 text-center animate-pulse uppercase">
                    Form
                    Đăng
                    Ký</h2>
                <form id="register-form"
                    class="bg-[#990e06]  text-[#fff] backdrop-blur-sm p-10 rounded-3xl shadow-2xl border border-wineRed/20 space-y-6 max-w-xl mx-auto transform hover:scale-102 transition-all duration-500">
                    <div class="relative">
                        <label
                            class="block text-base font-medium text-[#fff] mb-2 after:content-['*'] after:text-red-500 after:ml-1">Họ
                            và Tên</label>
                        <input type="text" name="name" required
                            class="w-full px-6 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-wineRed/30 focus:border-wineRed bg-gray-50 placeholder-gray-400 transition-all duration-300 hover:bg-white">
                    </div>
                    <div class="relative">
                        <label
                            class="block text-base font-medium text-[#fff] mb-2 after:content-['*'] after:text-red-500 after:ml-1">Số
                            Điện Thoại</label>
                        <input type="tel" name="phone" required
                            class="w-full px-6 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-wineRed/30 focus:border-wineRed bg-gray-50 placeholder-gray-400 transition-all duration-300 hover:bg-white">
                    </div>
                    <div class="relative">
                        <label
                            class="block text-base font-medium text-[#fff] mb-2 after:content-['*'] after:text-red-500 after:ml-1">Địa
                            chỉ nhận hàng</label>
                        <input type="text" name="email" required
                            class="w-full px-6 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-wineRed/30 focus:border-wineRed bg-gray-50 placeholder-gray-400 transition-all duration-300 hover:bg-white">
                    </div>
                    <div class="relative">
                        <label
                            class="block text-base font-medium text-[#fff] mb-2 after:content-['*'] after:text-red-500 after:ml-1">Số
                            lượng Combo</label>
                        <input type="number" name="quantity" min="1" required
                            class="w-full px-6 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-wineRed/30 focus:border-wineRed bg-gray-50 placeholder-gray-400 transition-all duration-300 hover:bg-white">
                    </div>
                    <div class="relative">
                        <label class="block text-base font-medium text-[#fff] mb-2">Ghi chú</label>
                        <textarea name="note" rows="5"
                            class="w-full px-6 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-wineRed/30 focus:border-wineRed bg-gray-50 placeholder-gray-400 transition-all duration-300 hover:bg-white resize-none"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-wineRed to-wineRed/80 hover:from-wineRed/90 hover:to-wineRed text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                        <span class="relative z-10 uppercase">Gửi Đăng Ký</span>
                        <span
                            class="absolute inset-0 bg-white/10 rounded-xl opacity-0 hover:opacity-20 transition-opacity duration-300"></span>
                    </button>
                </form>
            </div>
        </section>
        <div id="cta-container" class="fixed w-full md:w-[100px] bottom-0 md:bottom-4 right:0 md:right-4 z-50">
            <div id="cta-full"
                class="flex md:flex-col sm:flex-row bg-[#990F07] rounded-xl overflow-hidden shadow-xl">
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
        <style>
            @keyframes pulse {

                0%,
                100% {
                    transform: scale(1);
                }

                50% {
                    transform: scale(1.05);
                }
            }

            .animate-pulse {
                animation: pulse 2s infinite;
            }
        </style>

        <script>
            document.getElementById('register-form').addEventListener('submit', (e) => {
                e.preventDefault();
                const submitBtn = e.target.querySelector('button[type="submit"]');
                const originalText = submitBtn.querySelector('span').textContent;
                submitBtn.querySelector('span').textContent = 'Đang gửi...';
                submitBtn.disabled = true;
                submitBtn.classList.add('opacity-75');
                setTimeout(() => {
                    const toast = document.getElementById('toast');
                    toast.textContent = 'Đã gửi đăng ký thành công!';
                    toast.classList.add('show');
                    submitBtn.querySelector('span').textContent = originalText;
                    submitBtn.disabled = false;
                    submitBtn.classList.remove('opacity-75');
                    e.target.reset();
                    setTimeout(() => toast.classList.remove('show'), 3000);
                }, 1000);
            });
        </script>

    </main>
    <!-- Footer -->
    <footer class="bg-white text-red-800 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="flex flex-col md:flex-row items-start gap-8 mb-16">
                <div class="w-full md:w-1/3">
                    <img src="./assets/logo/logo-thebestwine-official.png" alt="Rượu Nhập Logo" class="h-24 mb-6">
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-xl font-bold text-red-900 mb-2">CHI NHÁNH HÀ NỘI</h3>
                            <p class="text-red-600">Địa chỉ: 115 Xuân Quỳnh, Trung Hòa, Cầu Giấy, Hà Nội</p>
                            <p class="text-red-600">Hotline: <a href="tel:0988393000"
                                    class="hover:text-red-700">0988.393.000</a></p>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-red-900 mb-2">CHI NHÁNH TP.HCM</h3>
                            <p class="text-red-600">Địa chỉ: 23 Hoa Lan, P2, Phú Nhuận, TP HCM</p>
                            <p class="text-red-600">Hotline: <a href="tel:093623919"
                                    class="hover:text-red-700">090.464.1325</a></p>
                        </div>
                        <div class="flex space-x-4 mt-6">
                            <a href="#" class="text-red-800 hover:text-red-600 transition-colors">
                                <i class="ri-facebook-fill ri-lg"></i>
                            </a>
                            <!-- <a href="#" class="text-red-800 hover:text-red-600 transition-colors">
                            <i class="ri-instagram-line ri-lg"></i>
                        </a>
                        <a href="#" class="text-red-800 hover:text-red-600 transition-colors">
                            <i class="ri-youtube-line ri-lg"></i>
                        </a>
                        <a href="#" class="text-red-800 hover:text-red-600 transition-colors">
                            <i class="ri-tiktok-line ri-lg"></i>
                        </a> -->
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
                                    width="100%" height="100%" style="border:0;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-red-900 mb-4">Chi nhánh TP HCM</h3>
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
                    <img src="./assets/logo/logo-vuong.png" alt="The Best Wine Logo"
                        class="w-40 h-40 object-contain shadow-md">
                    <div class="text-red-800 text-lg leading-relaxed">
                        <p class="mb-4">The Best Wine luôn là công ty tiên phong và dẫn đầu về truyền bá nghệ thuật
                            thưởng thức rượu vang và văn hóa giao tiếp trên bàn tiệc, và là thương hiệu, địa chỉ tin cậy
                            để khách hàng lựa chọn các sản phẩm rượu vang nhập khẩu chính hãng uy tín và chất lượng.</p>
                        <p>Với Sứ mệnh <span class="font-bold">"YOUR CHOICE IS BEST"</span>, chúng tôi luôn cam kết sự
                            lựa chọn của khách hàng ở The Best Wine sẽ luôn là TỐT NHẤT.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Toast Notification -->
    <div class="toast" id="toast">Đã gửi đăng ký thành công!</div>
    <script>
        // Countdown Timer - 24 hours repeating
        function startCountdown() {
            let endTime = localStorage.getItem('countdownEndTime');
            if (!endTime || new Date(endTime) < new Date()) {
                endTime = new Date(Date.now() + 24 * 60 * 60 * 1000).toISOString();
                localStorage.setItem('countdownEndTime', endTime);
            }
            const timer = setInterval(() => {
                const now = new Date();
                let distance = new Date(endTime) - now;
                if (distance < 0) {
                    // Reset endTime
                    endTime = new Date(Date.now() + 24 * 60 * 60 * 1000).toISOString();
                    localStorage.setItem('countdownEndTime', endTime);
                    // Recalculate distance
                    distance = new Date(endTime) - now;
                }
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);
                console.log(hours, minutes,seconds);
                
                document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
                document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
                document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
            }, 1000);
        }
        startCountdown();

        // Buy Now Button - Scroll to Form
        document.getElementById('buy-now-btn').addEventListener('click', () => {
            document.getElementById('registration-form').scrollIntoView({
                behavior: 'smooth'
            });
        });
    </script>

    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"version":"2024.11.0","token":"192c87cdce3a4ada85917427f34033cd","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
        crossorigin="anonymous"></script>
</body>

</html>
