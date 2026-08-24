<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Chính sách bảo mật thông tin khách hàng của The Best Wine. Tìm hiểu cách chúng tôi thu thập, sử dụng và bảo vệ thông tin cá nhân.">
    <title>Chính sách thanh toán - The Best Wine</title>

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
                <h1 class="policy-header-title">Chính sách thanh toán</h1>
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
                        <span>Chính sách thanh toán</span>
                    </div>
                    <h1>Chính sách thanh toán</h1>

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
                            <nav class="policy-nav" aria-label="Mục lục chính sách thanh toán">
                                <a href="#thanh-toan-truc-tuyen" class="active"><span>01</span>Thanh toán trực tuyến</a>
                            </nav>
                        </div>
                    </aside>


                    <!-- Article -->
                    <article class="policy-article policy-content">
                        <section id="thanh-toan-truc-tuyen" class="policy-block">
                            <div class="policy-section-heading">
                                <span class="policy-section-number">01</span>
                                <div><h2>Chính sách thanh toán trực tuyến</h2></div>
                            </div>

                        <p>
                            Hiện tại website chỉ áp dụng hình thức thanh toán trực tuyến, không áp dụng thanh toán tiền
                            mặt.

                        </p>

                        <p>
                            Quý khách có thể thanh toán trực tuyến theo các bước sau:
                        </p>

                        <p>
                            Nộp tiền mặt tại ngân hàng hoặc chuyển khoản đến tài khoản của [.....]. Trong đó ghi đầy đủ
                            các thông tin như: Tên khách hàng, số tiền, nội dung chuyển khoản

                        </p>
                        <p>Thông báo cho [.....] ngay sau khi quý khách đã thực hiện chuyển tiền/chuyển khoản.</p>
                        <p>Ngay sau khi nhận được thông báo xác nhận từ phía ngân hàng. Chúng tôi sẽ tiến hành thông báo
                            lại cho quý khách đồng thời xuất sản phẩm để giao cho quý khách trong thời gian theo quy
                            định.</p>
                        <p>Thông tin chi tiết chuyển tiền cụ thể như sau:
                        </p>
                        <ul>
                            <li>Tên tài khoản: [.....]
                            </li>
                            <li>Số tài khoản: [.....]
                            </li>
                        </ul>
                        </section>
                    </article>
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
