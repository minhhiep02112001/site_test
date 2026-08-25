<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Chính sách bảo mật thông tin khách hàng của The Best Wine. Tìm hiểu cách chúng tôi thu thập, sử dụng và bảo vệ thông tin cá nhân.">
    <title>Chính sách về giá - The Best Wine</title>

    <link rel="icon" type="image/png" href="/assets/uploads/favicon.png">

    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#8B1538',
                        secondary: '#D4AF37',
                        wineRed: '#8B0000'
                    },
                    borderRadius: {
                        button: '8px'
                    }
                }
            }
        }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" rel="stylesheet">

    @include('front_end.block.policy_styles')
</head>

<body class="font-inter">
    <!-- Header -->
    <header id="main-header" class="policy-header">
        <div class="policy-header-inner">
            <div class="policy-header-left">
                <a href="/" class="policy-back-button" aria-label="Quay lại trang chủ">
                    <i class="ri-arrow-left-line ri-lg"></i>
                </a>
                <h1 class="policy-header-title">Chính sách về giá</h1>
            </div>

            <a href="/" class="policy-logo" aria-label="The Best Wine - Trang chủ">
                <img src="/assets/uploads/logo_footer.png" alt="The Best Wine Logo">
            </a>

            <div class="policy-header-action">
                <a href="/" class="policy-home-button">
                    <i class="ri-home-4-line"></i>
                    <span>Về trang chủ</span>
                </a>
            </div>
        </div>
    </header>

    <main class="policy-page">
        <!-- Hero -->
        <section class="policy-hero">
            <div class="policy-hero-ring"></div>

            <div class="policy-container">
                <div class="policy-hero-content">
                    <div class="policy-breadcrumb">
                        <a href="/">Trang chủ</a>
                        <i class="ri-arrow-right-s-line"></i>
                        <span>Chính sách về giá</span>
                    </div>
                    <h1>Chính sách về giá</h1>

                    <div class="policy-update">
                        <i class="ri-time-line"></i>
                        <span>Cập nhật lần cuối: 24/08/2026</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Policy Content -->
        <section class="policy-content-section">
            <div class="policy-container">
                <div class="policy-layout">
                    <!-- Sidebar -->
                    <aside class="policy-sidebar">
                        <div class="policy-sidebar-inner">
                            <p class="policy-sidebar-title">Nội dung chính</p>

                            <nav class="policy-nav" aria-label="Mục lục chính sách về giá">
                                <a href="#muc-dich" class="active"><span>01</span>Mục đích</a>
                                <a href="#gia-ban-san-pham"><span>02</span>Giá bán sản phẩm</a>
                                <a href="#chi-phi-van-chuyen"><span>03</span>Chi phí vận chuyển</a>
                                <a href="#chi-phi-phat-sinh"><span>04</span>Chi phí phát sinh</a>
                                <a href="#thay-doi-gia"><span>05</span>Thay đổi giá</a>
                                <a href="#chi-phi-dich-vu"><span>06</span>Chi phí dịch vụ</a>
                                <a href="#lien-he"><span>07</span>Liên hệ</a>
                            </nav>
                        </div>
                    </aside>

                    <!-- Article -->
                    <section class="policy-article policy-content">
                        <section id="muc-dich" class="policy-block">
                            <div class="policy-section-heading">
                                <span class="policy-section-number">01</span>
                                <div>
                                    <h2>Mục đích</h2>
                                </div>
                            </div>

                            <p>
                                Website <strong><a href="{{ env('APP_URL', config('data.company.website')) }}" target="_blank"
                                        rel="noopener noreferrer">
                                        {{ config('data.company.website', '[.....]') }}
                                    </a></strong> cam kết công khai, minh bạch về giá bán hàng hóa
                                và các khoản chi phí liên quan nhằm giúp khách hàng dễ dàng lựa chọn và đưa ra quyết
                                định mua sắm.
                            </p>
                        </section>


                        <section id="gia-ban-san-pham" class="policy-block">
                            <div class="policy-section-heading">
                                <span class="policy-section-number">02</span>
                                <div>
                                    <h2>Giá bán sản phẩm</h2>
                                </div>
                            </div>

                            <p>
                                Toàn bộ giá bán được hiển thị trên website là giá của từng sản phẩm
                                tại thời điểm khách hàng đặt hàng.
                            </p>

                            <p>Tùy từng sản phẩm, website sẽ thể hiện rõ:</p>

                            <ul>
                                <li>Giá đã bao gồm thuế GTGT (VAT); hoặc</li>
                                <li>Giá chưa bao gồm VAT (nếu có ghi chú cụ thể).</li>
                            </ul>

                            <p>
                                Thông tin này được thể hiện trực tiếp tại trang sản phẩm hoặc trong hóa đơn bán hàng.
                            </p>
                        </section>


                        <section id="chi-phi-van-chuyen" class="policy-block">
                            <div class="policy-section-heading">
                                <span class="policy-section-number">03</span>
                                <div>
                                    <h2>Chi phí vận chuyển</h2>
                                </div>
                            </div>

                            <p>
                                Chi phí giao hàng không mặc định bao gồm trong giá bán sản phẩm,
                                trừ khi website có thông báo khác.
                            </p>

                            <p>Mức phí vận chuyển được tính dựa trên:</p>

                            <ul>
                                <li>Địa chỉ nhận hàng;</li>
                                <li>Trọng lượng hoặc kích thước đơn hàng;</li>
                                <li>Đơn vị vận chuyển;</li>
                                <li>Chương trình miễn phí vận chuyển (nếu có).</li>
                            </ul>

                            <p>
                                Chi phí sẽ được hiển thị trước khi khách hàng xác nhận thanh toán.
                            </p>
                        </section>


                        <section id="chi-phi-phat-sinh" class="policy-block">
                            <div class="policy-section-heading">
                                <span class="policy-section-number">04</span>
                                <div>
                                    <h2>Các chi phí phát sinh khác</h2>
                                </div>
                            </div>

                            <p>
                                Ngoài giá bán sản phẩm và phí vận chuyển, khách hàng có thể phát sinh
                                một số khoản phí khác (nếu có), bao gồm:
                            </p>

                            <ul>
                                <li>Phí giao hàng hỏa tốc;</li>
                                <li>Phí đóng gói đặc biệt;</li>
                                <li>Phí thu hộ (COD) theo quy định của đơn vị vận chuyển;</li>
                                <li>Các khoản thuế hoặc phí khác theo quy định của pháp luật (nếu có).</li>
                            </ul>

                            <p>
                                Mọi khoản phí đều được thông báo trước khi khách hàng xác nhận đơn hàng.
                            </p>
                        </section>


                        <section id="thay-doi-gia" class="policy-block">
                            <div class="policy-section-heading">
                                <span class="policy-section-number">05</span>
                                <div>
                                    <h2>Chính sách thay đổi giá</h2>
                                </div>
                            </div>

                            <p>Website có quyền điều chỉnh giá bán trong các trường hợp:</p>

                            <ul>
                                <li>Chương trình khuyến mại;</li>
                                <li>Thay đổi giá nhập;</li>
                                <li>Biến động thị trường;</li>
                                <li>Điều chỉnh theo chính sách kinh doanh.</li>
                            </ul>

                            <p>
                                Giá áp dụng là giá tại thời điểm khách hàng hoàn tất đặt hàng.
                            </p>

                            <p>
                                Các đơn hàng đã được xác nhận sẽ không bị thay đổi giá,
                                trừ khi hai bên có thỏa thuận khác.
                            </p>
                        </section>


                        <section id="chi-phi-dich-vu" class="policy-block">
                            <div class="policy-section-heading">
                                <span class="policy-section-number">06</span>
                                <div>
                                    <h2>Chi phí sử dụng dịch vụ</h2>
                                </div>
                            </div>

                            <p>
                                Website <strong><a href="{{ env('APP_URL', config('data.company.website')) }}" target="_blank"
                                        rel="noopener noreferrer">
                                        {{ config('data.company.website', '[.....]') }}
                                    </a></strong> là website bán
                                hàng của doanh nghiệp và
                                <strong>
                                    không thu phí mở tài khoản, duy trì tài khoản, phí xử lý đơn hàng
                                    hoặc bất kỳ khoản phí dịch vụ nào đối với khách hàng khi truy cập
                                    và mua sắm trên website
                                </strong>,
                                trừ khi có thông báo khác theo từng chương trình cụ thể.
                            </p>

                            <p>
                                Trong trường hợp website phát sinh việc thu phí đối với một số dịch vụ bổ sung,
                                toàn bộ mức phí, phương thức tính và thời điểm áp dụng sẽ được công khai
                                trên website trước khi thực hiện.
                            </p>
                        </section>


                        <section id="lien-he" class="policy-block">
                            <div class="policy-section-heading">
                                <span class="policy-section-number">07</span>
                                <div>
                                    <h2>Liên hệ</h2>
                                </div>
                            </div>

                            <p>
                                <strong>Website:</strong>
                                <a href="{{ env('APP_URL', 'https://' . config('data.company.website')) }}"
                                    target="_blank" rel="noopener noreferrer">
                                    {{ config('data.company.website', '[.....]') }}
                                </a>
                            </p>

                            <p>
                                <strong>Hotline:</strong>
                                <a
                                    href="tel:{{ config('data.company.hotline', '[.....]') }}">{{ config('data.company.hotline', '[.....]') }}</a>
                            </p>

                            <p>
                                <strong>Email:</strong>
                                <a
                                    href="mailto:{{ config('data.company.email', '[.....]') }}">{{ config('data.company.email', '[.....]') }}</a>
                            </p>
                        </section>

                    </section>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    @include('front_end.layout.footer')

    @include('front_end.block.share_social')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const header = document.getElementById('main-header');
            const navLinks = Array.from(document.querySelectorAll('.policy-nav a'));
            const sections = Array.from(document.querySelectorAll('.policy-block'));

            function updateHeader() {
                if (!header) return;
                header.classList.toggle('scrolled', window.scrollY > 10);
            }

            function updateActiveNav() {
                if (!navLinks.length || !sections.length) return;

                const scrollPosition = window.scrollY + 180;
                let activeId = sections[0].id;

                sections.forEach(function(section) {
                    if (section.offsetTop <= scrollPosition) {
                        activeId = section.id;
                    }
                });

                navLinks.forEach(function(link) {
                    link.classList.toggle('active', link.getAttribute('href') === '#' + activeId);
                });
            }

            updateHeader();
            updateActiveNav();

            window.addEventListener('scroll', function() {
                updateHeader();
                updateActiveNav();
            }, {
                passive: true
            });
        });
    </script>
    @include('front_end.block.age_verification_popup')
</body>

</html>
