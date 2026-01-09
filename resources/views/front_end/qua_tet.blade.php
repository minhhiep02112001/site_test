<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rượu vang nhập khẩu nguyên chai</title>
    <link rel="icon" type="image/png" href="./assets/uploads/favicon.png">
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
            min-height: 175px;
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
            <div class="flex items-center justify-between h-[80px]">
                <div class="flex items-center">

                    <img src="./assets/uploads/logo.png" alt="The Best Wine Logo" class="h-[80px] w-auto p-1">

                </div>
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="#product"
                        class="text-primary font-playfair text-xl hover:text-primary/80 transition-colors font-medium uppercase">Hộp
                        quà tết</a>
                    <a href="#order"
                        class="text-primary font-playfair text-xl hover:text-primary/80 transition-colors font-medium uppercase">Đặt
                        hàng</a>
                    <a href="#contact"
                        class="text-primary font-playfair text-xl hover:text-primary/80 transition-colors font-medium uppercase">Liên
                        hệ</a>
                </nav>
                <button class="md:hidden w-8 h-8 flex items-center justify-center text-primary">
                    <i class="ri-menu-line ri-lg"></i>
                </button>
            </div>
            <nav class="nav-mobile hidden flex-col space-y-4 bg-white py-4 absolute top-full left-0 w-full md:hidden">
                <a href="#product"
                    class="text-primary font-playfair hover:text-primary/80 transition-colors font-medium text-center uppercase">Hộp
                    quà tết</a>
                <a href="#order"
                    class="text-primary font-playfair hover:text-primary/80 transition-colors font-medium text-center uppercase">Đặt
                    hàng</a>
                <a href="#contact"
                    class="text-primary font-playfair hover:text-primary/80 transition-colors font-medium text-center uppercase">Liên
                    hệ</a>
            </nav>
        </div>
    </header>
    <!-- Wine Education Banner -->
    <section
        class="py-12 mt-[80px] h-[220px] md:h-[750px] lg:h-[950px] flex items-center
         bg-[url('./images/banner_qua_tet.jpg')]
         md:bg-[url('./images/banner_qua_tet_desk.jpg')]
         bg-cover bg-center">
    </section>
    <!-- Produ
     ct Introduction -->
    <section class="py-10 relative overflow-hidden">
        <div class="absolute inset-0 bg-[#FDF7F9] transform -skew-y-6 origin-top-left"></div>
        <div class="absolute inset-0 opacity-30"
            style="background: radial-gradient(circle at 70% 30%, #8B1538 0%, transparent 50%)"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative" id="product">
            <div class="grid lg:grid-cols-2 gap-2 items-center">
                <div class="relative">
                    <div class="product-carousel overflow-hidden">
                        <div class="flex transition-transform duration-300">
                            <div class="w-full flex-shrink-0 pb-4">
                                <div
                                    class="product-slides relative h-[250px] sm:h-[400px] rounded-2xl overflow-hidden shadow-2xl bg-white mb-3">
                                    <!-- box để center -->
                                    <div class="product-slide">
                                        <div class="absolute inset-0 flex items-center justify-center">
                                            <img src="/assets/qua_tet/hop-qua-tet-sum-vay.jpg" alt=""
                                                class="absolute w-full h-full object-cover object-center" />
                                        </div>
                                    </div>
                                    <div class="product-slide">
                                        <div class="absolute inset-0 flex items-center justify-center">
                                            <img src="/assets/qua_tet/hop-qua-sum-vay-2.jpg" alt=""
                                                class="absolute w-full h-full object-cover object-center" />
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h3 class="font-playfair text-2xl font-bold  text-center text-[#0001ff]">
                                        Hộp Quà Tết Sum Vầy
                                    </h3>
                                    <p class="text-xl font-semibold text-primary text-center mb-4">599.000 VNĐ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="product-carousel overflow-hidden">
                        <div class="flex transition-transform duration-300">
                            <div class=" w-full flex-shrink-0 pb-4">
                                <div
                                    class="product-slides relative h-[250px] sm:h-[400px] rounded-2xl overflow-hidden shadow-2xl bg-white mb-3">
                                    <!-- box để center -->
                                    <div class="product-slide">
                                        <div class="absolute inset-0 flex items-center justify-center">
                                            <img src="/assets/qua_tet/hop-qua-tet-sac-xuan.jpg" alt=""
                                                class="absolute w-full h-full object-cover object-center" />
                                        </div>
                                    </div>
                                    <div class="product-slide">
                                        <div class="absolute inset-0 flex items-center justify-center">
                                            <img src="/assets/qua_tet/hop-qua-sac-xuan-2.jpg" alt=""
                                                class="absolute w-full h-full object-cover object-center" />
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h3 class="font-playfair text-2xl font-bold  text-center text-[#0001ff] ">
                                        Hộp Quà Tết Sắc Xuân
                                    </h3>
                                    <p class="text-xl font-semibold text-primary text-center mb-4">799.000 VNĐ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="product-carousel overflow-hidden">
                        <div class=" flex transition-transform duration-300">
                            <div class=" w-full flex-shrink-0 pb-4">
                                <div
                                    class="product-slides relative h-[250px] sm:h-[400px] rounded-2xl overflow-hidden shadow-2xl bg-white mb-3">
                                    <!-- box để center -->
                                    <div class="product-slide">
                                        <div class="absolute inset-0 flex items-center justify-center">
                                            <img src="/assets/qua_tet/hop-qua-nhu-y-1.jpg" alt=""
                                                class="absolute w-full h-full object-cover object-center" />
                                        </div>
                                    </div>
                                    <div class="product-slide">
                                        <div class="absolute inset-0 flex items-center justify-center">
                                            <img src="/assets/qua_tet/hop-qua-nhu-y-2.jpg" alt=""
                                                class="absolute w-full h-full object-cover object-center" />
                                        </div>
                                    </div>

                                </div>

                                <div>
                                    <h3 class="font-playfair text-2xl font-bold  text-center text-[#0001ff]">
                                        Hộp Quà Tết Như Ý
                                    </h3>
                                    <p class="text-xl font-semibold text-primary text-center mb-4">850.000 VNĐ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="product-carousel overflow-hidden">
                        <div class=" flex transition-transform duration-300">
                            <div class=" w-full flex-shrink-0 pb-4">
                                <div
                                    class="product-slides relative h-[250px] sm:h-[400px] rounded-2xl overflow-hidden shadow-2xl bg-white mb-3">
                                    <!-- box để center -->
                                    <div class="product-slide">
                                        <div class="absolute inset-0 flex items-center justify-center">
                                            <img src="/assets/qua_tet/hop-qua-tet-cat-tuong.jpg" alt=""
                                                class="absolute w-full h-full object-cover object-center" />
                                        </div>
                                    </div>
                                    <div class="product-slide">
                                        <div class="absolute inset-0 flex items-center justify-center">
                                            <img src="/assets/qua_tet/hop-qua-cat-tuong-2.jpg" alt=""
                                                class="absolute w-full h-full object-cover object-center" />
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h3 class="font-playfair text-2xl font-bold  text-center text-[#0001ff]">
                                        Hộp Quà Tết Cát Tường
                                    </h3>
                                    <p class="text-xl font-semibold text-primary text-center mb-4">1.350.000 VNĐ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="relative">
                    <div class="product-carousel overflow-hidden">
                        <div class=" flex transition-transform duration-300">
                            <div class=" w-full flex-shrink-0 pb-4">
                                <div
                                    class="product-slides relative h-[250px] sm:h-[400px] rounded-2xl overflow-hidden shadow-2xl bg-white mb-3">
                                    <!-- box để center -->
                                    <div class="product-slide">
                                        <div class="absolute inset-0 flex items-center justify-center">
                                            <img src="/assets/qua_tet/hop-qua-ruou-vang-paradise.jpg" alt=""
                                                class="absolute w-full h-full object-cover object-center" />
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="font-playfair text-2xl font-bold  text-center text-[#0001ff]">
                                        Hộp Quà Rượu Vang Paradise
                                    </h3>
                                    <p class="text-xl font-semibold text-primary text-center mb-4">550.000 VNĐ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="relative">
                    <div class="product-carousel overflow-hidden">
                        <div class=" flex transition-transform duration-300">
                            <div class=" w-full flex-shrink-0 pb-4">
                                <div
                                    class="product-slides relative h-[250px] sm:h-[400px] rounded-2xl overflow-hidden shadow-2xl bg-white mb-3">
                                    <!-- box để center -->
                                    <div class="product-slide">
                                        <div class="absolute inset-0 flex items-center justify-center">
                                            <img src="/assets/qua_tet/hop-qua-ruou-vang-elettra.jpg" alt=""
                                                class="absolute w-full h-full object-cover object-center" />
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="font-playfair text-2xl font-bold  text-center text-[#0001ff]">
                                        Hộp Quà Rượu Vang Elettra
                                    </h3>
                                    <p class="text-xl font-semibold text-primary text-center mb-4">880.000 VNĐ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="relative">
                    <div class="product-carousel overflow-hidden">
                        <div class=" flex transition-transform duration-300">
                            <div class=" w-full flex-shrink-0 pb-4">
                                <div
                                    class="product-slides relative h-[250px] sm:h-[400px] rounded-2xl overflow-hidden shadow-2xl bg-white mb-3">
                                    <!-- box để center -->
                                    <div class="product-slide">
                                        <div class="absolute inset-0 flex items-center justify-center">
                                            <img src="/assets/qua_tet/hop-qua-ruou-vang-guillemin.jpg" alt=""
                                                class="absolute w-full h-full object-cover object-center" />
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h3 class="font-playfair text-2xl font-bold  text-center text-[#0001ff]">
                                        Hộp Quà Rượu Vang Guillemin
                                    </h3>
                                    <p class="text-xl font-semibold text-primary text-center mb-4">1.650.000 VNĐ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="relative">
                    <div class="product-carousel overflow-hidden">
                        <div class=" flex transition-transform duration-300">
                            <div class=" w-full flex-shrink-0 pb-4">
                                <div
                                    class="product-slides relative h-[250px] sm:h-[400px] rounded-2xl overflow-hidden shadow-2xl bg-white mb-3">
                                    <!-- box để center -->
                                    <div class="product-slide">
                                        <div class="absolute inset-0 flex items-center justify-center">
                                            <img src="/assets/qua_tet/hop-qua-ruou-vang-don-panfilo.jpg"
                                                alt=""
                                                class="absolute w-full h-full object-cover object-center" />
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="font-playfair text-2xl font-bold  text-center text-[#0001ff]">
                                        Hộp Quà Rượu Vang Don Panfilo
                                    </h3>
                                    <p class="text-xl font-semibold text-primary text-center mb-4">1.850.000 VNĐ</p>
                                </div>
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
                ĐẶT HÀNG NGAY HÔM NAY
            </h2>
            <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
                Để Nhận Ưu Đãi Cho Đơn Hàng Đầu Tiên và Miễn Phí giao hàng <br>tại Hà Nội và TP. Hồ Chí Minh
            </p>
            <div class="bg-white rounded-xl p-8 text-center max-w-3xl mx-auto mb-8">
                <h4 class="text-3xl font-bold text-[#B91C1C] mb-8">THÔNG TIN ĐẶT HÀNG</h4>
                <div class="space-y-8" id="order">
                    <form action="{{ route('booking') }}" method="post" data-redirect="{{ route('page') }}"
                        class="bg-gradient-to-b from-red-50 to-red-100 p-6 rounded-xl mt-8 text-left relative overflow-hidden">
                        @csrf
                        <input type="hidden" name="form_type" value="form_4">
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
                                <label class="block text-sm font-medium text-red-800 mb-1">Số Lượng Hộp Quà <span
                                        class="text-danger">*</span></label>
                                <input type="number" name="count_combo" required min="1"
                                    class="w-full px-4 py-2 rounded-md border-red-200 focus:ring-2 focus:ring-red-600 focus:border-transparent bg-white/80"
                                    placeholder="">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-red-800 mb-1">Ghi chú tên hộp quà</label>
                                <textarea name="note"
                                    class="w-full px-4 py-2 rounded-md border-red-200 focus:ring-2 focus:ring-green-600 focus:border-transparent bg-white/80"
                                    rows="3" placeholder=""></textarea>
                            </div>
                            <button type="submit"
                                class="w-full bg-[#990e06]  text-white px-6 py-3 rounded-md font-semibold">
                                MUA NGAY
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

    {{-- <section class="py-10 relative overflow-hidden "
        style="background-image: url('./assets/images/banner_sale_1.jpg') ; background-size:cover;"
        style="min-height: 570px;">
        <div class=" banner-sale"></div>
    </section> --}}

    {{-- <section class="my-10 relative overflow-hidden ">
        <div class=" banner-sale"
            style="background-image: url('./assets/images/banner_combo.jpg'); background-size:cover;"
            style="min-height: 570px;">
        </div>
        <div class="max-w-6xl mx-auto mt-10">
            <a href="/khuyen-mai" target="_blank"
                class="block w-full md:w-auto bg-[#0E5E22] text-white px-8 py-4 rounded-full font-semibold text-center shadow-md">
                Bấm vào đây để nhận Ưu đãi Combo tặng tủ bảo quản rượu vang
            </a>
        </div>
    </section> --}}

    <section id="reasons" class="py-5 relative overflow-hidden">
        <div class="absolute inset-0 bg-[#FFF5F5] transform -skew-y-3 origin-bottom-right"></div>
        <div class="absolute inset-0 opacity-25"
            style="background: radial-gradient(circle at 50% 50%, #8B1538 0%, transparent 70%), radial-gradient(circle at 80% 20%, #D4AF37 0%, transparent 50%)">
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center mb-5">
                <h2 class="font-playfair text-2xl lg:text-3xl font-bold text-gray-900 mb-6">
                    Lý do khách hàng <span class="text-primary">chọn chúng tôi</span>
                </h2>
            </div>
            <div class="grid md:grid-cols-3 gap-4">
                <div class="bg-gray-50 p-4 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center justify-center mb-4">
                        <i class="ri-checkbox-circle-line text-primary text-4xl"></i>
                    </div>
                    <p class="text-gray-700 text-center font-medium">
                        Sản phẩm được tuyển chọn kỹ lưỡng qua 5 vòng, được bảo quản kho lạnh theo tiêu chuẩn quốc tế.
                    </p>
                </div>
                <div class="bg-gray-50 p-4 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center justify-center mb-4">
                        <i class="ri-money-dollar-circle-line text-primary text-4xl"></i>
                    </div>
                    <p class="text-gray-700 text-center font-medium">
                        Giá bán luôn tốt nhất.
                    </p>
                </div>
                <div class="bg-gray-50 p-4 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center justify-center mb-4">
                        <i class="ri-global-line text-primary text-4xl"></i>
                    </div>
                    <p class="text-gray-700 text-center font-medium">
                        Hàng nhập khẩu nguyên chai có giấy tờ nhập khẩu, xuất xứ rõ ràng, có hóa đơn đỏ VAT.
                    </p>
                </div>
                <div class="bg-gray-50 p-4 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center justify-center mb-4">
                        <i class="ri-loop-left-line text-primary text-4xl"></i>
                    </div>
                    <p class="text-gray-700 text-center font-medium">
                        Cam kết đổi trả hàng, hoàn tiền 100% nếu khách hàng không hài lòng.
                    </p>
                </div>
                <div class="bg-gray-50 p-4 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center justify-center mb-4">
                        <i class="ri-truck-line text-primary text-4xl"></i>
                    </div>
                    <p class="text-gray-700 text-center font-medium">
                        Thời gian giao hàng nhanh nhất, chỉ 1 giờ trong nội thành Hà Nội và TP HCM.
                    </p>
                </div>
                <div class="bg-gray-50 p-4 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center justify-center mb-4">
                        <i class="ri-headphone-line text-primary text-4xl"></i>
                    </div>
                    <p class="text-gray-700 text-center font-medium">
                        Đội ngũ chuyên gia 15 năm kinh nghiệm sẵn sàng tư vấn 24/7 để mang đến khách hàng sự lựa chọn
                        tốt nhất.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Warnning -->
    <section class="py-10 relative overflow-hidden">
        <div class="absolute inset-0 bg-[#FFF5F5] transform -skew-y-3 origin-bottom-right"></div>
        <div class="absolute inset-0 opacity-25"
            style="background: radial-gradient(circle at 50% 50%, #8B1538 0%, transparent 70%), radial-gradient(circle at 80% 20%, #D4AF37 0%, transparent 50%)">
        </div>
        <div class="  mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center mb-12">
                <h2 class="font-playfair text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                    Văn Hoá Tặng Quà Doanh Nghiệp
                </h2>
            </div>
            <div class="bg-white rounded-xl p-8 shadow-lg max-w-[76rem] mx-auto">
                <p class="text-xl text-gray-700 leading-relaxed ">
                    “Trong môi trường kinh doanh ngày nay, việc tặng quà không chỉ đơn thuần là một hành động trao tặng
                    vật chất mà còn là cơ hội để thể hiện sự quan tâm, trân trọng và xây dựng mối quan hệ bền chặt với
                    đối tác, khách hàng và nhân viên. Một trong những món quà được ưa chuộng và dễ tạo ấn tượng mạnh mẽ
                    chính là những hộp quà tặng sang trọng, kết hợp giữa trà, bánh, các loại hạt và rượu vang.
                </p>

                <h6 class="text-xl mt-4 "><b>Lời khuyên khi chọn hộp quà tặng doanh nghiệp:</b></h6>
                <p class="text-xl mt-4 text-gray-700 leading-relaxed ">
                    * Chọn lựa đúng sản phẩm: Đảm bảo rằng các món quà trong hộp quà là những sản phẩm cao cấp, có chất
                    lượng tốt. Tránh chọn các món quà rẻ tiền, thiếu sự tỉ mỉ. <br>
                    * Cá nhân hóa món quà: Mỗi hộp quà có thể được cá nhân hóa với thông điệp chúc mừng, cảm ơn riêng
                    biệt cho từng đối tác, khách hàng.<br>
                    * Đảm bảo tính thẩm mỹ: Hộp quà nên được thiết kế sang trọng, hài hòa và đẹp mắt. Việc đóng gói cẩn
                    thận cũng sẽ làm tăng giá trị của món quà.
                </p>
                <p class="text-xl text-gray-700 leading-relaxed  mt-4">
                    Văn hoá tặng quà là một cách tuyệt vời để tạo dựng, củng cố mối quan hệ và quảng bá thương hiệu. Với
                    sự kết hợp hoàn hảo của trà, bánh, hạt và rượu vang, những món quà trên chắc chắn sẽ mang lại những
                    ấn tượng khó quên cho người nhận.”
                </p>
            </div>
        </div>
    </section>


    <!-- Features Section -->
    <section id="features" class="py-5 relative overflow-hidden">
        <div class="absolute inset-0 bg-white"></div>
        <div class="absolute inset-0"
            style="background: linear-gradient(135deg, rgba(139, 21, 56, 0.05) 0%, transparent 50%), linear-gradient(45deg, rgba(212, 175, 55, 0.05) 0%, transparent 50%)">
        </div>
        <div class="absolute top-0 right-0 w-1/2 h-1/2 opacity-20"
            style="background: radial-gradient(circle at 70% 30%, #D4AF37 0%, transparent 70%)"></div>
        <div class="absolute bottom-0 left-0 w-1/2 h-1/2 opacity-20"
            style="background: radial-gradient(circle at 30% 70%, #8B1538 0%, transparent 70%)"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Đối tác của chúng tôi</h2>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center group hover:transform hover:scale-105 transition-all duration-300">
                    <img src="./assets/qua_tet/kh_1.jpg" alt="Vươn tới tầm cao"
                        class="w-full lg:h-[16rem] md:h-auto sm:h-auto object-cover rounded-xl shadow-lg mb-6">

                </div>
                <div class="text-center group hover:transform hover:scale-105 transition-all duration-300">
                    <img src="./assets/qua_tet/kh_2.jpg" alt="MB Bank"
                        class="w-full lg:h-[16rem] md:h-auto sm:h-auto object-cover rounded-xl shadow-lg mb-6">

                </div>
                <div class="text-center group hover:transform hover:scale-105 transition-all duration-300">
                    <img src="./assets/qua_tet/kh_3.jpg" alt="Viettel"
                        class="w-full lg:h-[16rem] md:h-auto sm:h-auto object-cover rounded-xl shadow-lg mb-6">

                </div>
                <div class="text-center group hover:transform hover:scale-105 transition-all duration-300">
                    <img src="./assets/qua_tet/kh_4.jpg" alt="Petrovietnam"
                        class="w-full lg:h-[16rem] md:h-auto sm:h-auto object-cover rounded-xl shadow-lg mb-6">

                </div>
                <div class="text-center group hover:transform hover:scale-105 transition-all duration-300">
                    <img src="./assets/qua_tet/kh_5.jpg" alt="Cảng Sài Gòn"
                        class="w-full lg:h-[16rem] md:h-auto sm:h-auto object-cover rounded-xl shadow-lg mb-6">

                </div>
                <div class="text-center group hover:transform hover:scale-105 transition-all duration-300">
                    <img src="./assets/qua_tet/kh_6.jpg" alt="VCB Bank"
                        class="w-full lg:h-[16rem] md:h-auto sm:h-auto object-cover rounded-xl shadow-lg mb-6">

                </div>
                <div class="text-center group hover:transform hover:scale-105 transition-all duration-300">
                    <img src="./assets/qua_tet/kh_7.jpg" alt="Vietjet Air"
                        class="w-full lg:h-[16rem] md:h-auto sm:h-auto object-cover rounded-xl shadow-lg mb-6">

                </div>
                <div class="text-center group hover:transform hover:scale-105 transition-all duration-300">
                    <img src="./assets/qua_tet/kh_8.jpg" alt="VNPT"
                        class="w-full lg:h-[16rem] md:h-auto sm:h-auto object-cover rounded-xl shadow-lg mb-6">

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
                            <p class="text-red-600">Hotline: <a href="tel:090.348.1086"
                                    class="hover:text-red-700">090.348.1086</a></p>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-red-900 mb-2">VĂN PHÒNG TP.HCM</h3>
                            <p class="text-red-600">Địa chỉ: 23 Hoa Lan, P2, Phú Nhuận, TP HCM</p>
                            <p class="text-red-600">Hotline: <a href="tel:0988393000"
                                    class="hover:text-red-700">0988.393.000</a></p>
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
        <div id="cta-full" class="flex md:flex-col sm:flex-row bg-[#990F07] rounded-xl overflow-hidden shadow-xl"
            style="justify-content: center;">
            <div class="hidden justify-end p-1 md:flex ">
                <button id="cta-close" class="text-white hover:text-gray-300">
                    <i class="ri-close-line text-lg"></i>
                </button>
            </div>
            <a href="tel:0903481086"
                class="flex flex-col items-center justify-center py-2 px-4 text-white hover:bg-[#800D05] transition-colors border-t border-red-900/30">
                <i class="ri-phone-line text-2xl mb-1"></i>
                <span class="text-sm font-bold whitespace-nowrap">Hotline HN</span>
            </a>
            <a href="tel:0988393000"
                class="flex flex-col items-center justify-center py-2 px-4 text-white hover:bg-[#800D05] transition-colors border-t border-red-900/30">
                <i class="ri-phone-line text-2xl mb-1"></i>
                <span class="text-sm font-bold whitespace-nowrap">Hotline SG</span>
            </a>
            <a href="https://zalo.me/0903481086"
                class="flex flex-col items-center justify-center py-2 px-4 text-white hover:bg-[#800D05] transition-colors border-t border-red-900/30">
                <i class="ri-chat-1-line text-2xl mb-1"></i>
                <span class="text-sm font-bold">Zalo</span>
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


    <style>
        .product-slides {
            position: relative;
        }

        .product-slide {
            position: absolute;
            inset: 0;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .product-slide.active {
            opacity: 1;
            z-index: 1;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", () => {

            document.querySelectorAll(".product-slides").forEach(slider => {

                const slides = slider.querySelectorAll(".product-slide");
                if (slides.length == 0) return;

                let index = 0;
                slides[index].classList.add("active");
                if (slides.length == 1) return;
                let timer;

                function randomTime() {
                    return Math.floor(Math.random() * (10000 - 5000 + 1)) + 5000;
                }

                function runSlide() {
                    timer = setTimeout(() => {
                        slides[index].classList.remove("active");
                        index = (index + 1) % slides.length;
                        slides[index].classList.add("active");
                        runSlide();
                    }, randomTime());
                }

                runSlide();

                // 👉 CLICK ĐỂ NEXT SLIDE
                slider.addEventListener("click", () => {
                    clearTimeout(timer);
                    slides[index].classList.remove("active");
                    index = (index + 1) % slides.length;
                    slides[index].classList.add("active");
                    runSlide();
                });

            });

        });
    </script>

</body>

</html>
