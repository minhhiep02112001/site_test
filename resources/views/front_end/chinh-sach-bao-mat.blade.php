<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Chính sách bảo mật thông tin khách hàng của The Best Wine. Tìm hiểu cách chúng tôi thu thập, sử dụng và bảo vệ thông tin cá nhân.">
    <title>Chính sách bảo mật - The Best Wine</title>

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
                <h1 class="policy-header-title">Chính sách bảo mật</h1>
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
                        <span>Chính sách bảo mật</span>
                    </div>
                    <h1>Chính sách bảo mật</h1>

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

                            <nav class="policy-nav" aria-label="Mục lục chính sách bảo mật">
                                <a href="#gioi-thieu" class="active"><span>01</span>Mục đích</a>
                                <a href="#thu-thap"><span>02</span>Phạm vi</a>
                                <a href="#muc-dich"><span>03</span>Thời gian lưu trữ</a>
                                <a href="#bao-mat"><span>04</span>Tiếp cận</a>
                                <a href="#chia-se"><span>05</span>Quản lý thông tin</a>
                                <a href="#quyen"><span>06</span> Phương thức và công cụ </a>
                            </nav>
                        </div>
                    </aside>

                    <!-- Article -->
                    <article class="policy-article">
                        <section id="gioi-thieu" class="policy-block">
                            <div class="policy-section-heading">
                                <span class="policy-section-number">01</span>
                                <div>
                                    <h2>Mục đích thu thập thông tin cá nhân</h2>
                                </div>
                            </div>

                            <ul class="policy-simple-list">
                                <li> Hỗ trợ khách hàng: mua hàng, thanh toán, giao hàng.</li>
                                <li>Cung cấp thông tin sản phẩm, các dịch vụ và hỗ trợ theo yêu cầu của khách hàng.</li>
                                <li>Gửi thông báo các chương trình, sản phẩm mới nhất của chúng tôi. </li>
                                <li>Giải quyết vấn đề phát sinh khi mua hàng.</li>
                            </ul>
                        </section>

                        <section id="thu-thap" class="policy-block">
                            <div class="policy-section-heading">
                                <span class="policy-section-number">02</span>
                                <div>
                                    <h2>Phạm vi thu thập thông tin</h2>
                                </div>
                            </div>

                            <p>
                                Chúng tôi thu thập thông tin cá nhân của khách hàng khi tiến hàng đặt hàng trên website
                                bao gồm: Họ tên; Địa chỉ email; Số điện thoại; Địa chỉ.
                            </p>
                        </section>

                        <section id="muc-dich" class="policy-block">
                            <div class="policy-section-heading">
                                <span class="policy-section-number">03</span>
                                <div>
                                    <h2>Thời gian lưu trữ thông tin</h2>
                                </div>
                            </div>

                            <p>
                                Dữ liệu cá nhân của khách hàng sẽ được lưu trữ cho đến khi có yêu cầu hủy bỏ hoặc tự
                                khách hàng đăng nhập và thực hiện hủy bỏ. Còn lại trong mọi trường hợp thông tin cá nhân
                                khách hàng sẽ được bảo mật trên máy chủ của Vangcaocap.vn
                            </p>
                        </section>

                        <section id="bao-mat" class="policy-block">
                            <div class="policy-section-heading">
                                <span class="policy-section-number">04</span>
                                <div>
                                    <h2>Những người hoặc tổ chức có thể được tiếp cận với thông tin đó</h2>
                                </div>
                            </div>

                            <p>
                                Đối với các bên vận chuyển, sẽ cung cấp các thông tin để phục vụ cho việc giao nhận hàng
                                hóa như Tên, địa chỉ và số điện thoại.
                            </p>

                            <p>
                                Đối với nhân viên công ty sẽ có các bộ phận chuyên trách để phục vụ việc chăm sóc khách
                                hàng trong quá trình sử dụng sản phẩm.
                            </p>
                            <p>
                                Các chương trình có tính liên kết, đồng thực hiện, thuê ngoài cho các mục đích được nêu
                                tại Mục 1 và luôn áp dụng các yêu cầu bảo mật thông tin cá nhân.

                            </p>
                            <p>
                                Yêu cầu pháp lý: Chúng tôi có thể tiết lộ các thông tin cá nhân nếu điều đó do luật pháp
                                yêu cầu và việc tiết lộ như vậy là cần thiết một cách hợp lý để tuân thủ các quy trình
                                pháp lý.
                            </p>

                            <div class="policy-note">
                                <div class="policy-note-icon">
                                    <i class="ri-lock-2-line"></i>
                                </div>
                                <div>
                                    <strong>Chuyển giao kinh doanh (nếu có): </strong>
                                    <p>
                                        Trong trường hợp sáp nhập, hợp nhất toàn bộ hoặc một phần với công ty khác,
                                        người mua sẽ có quyền truy cập thông tin được chúng tôi lưu trữ, duy trì trong
                                        đó bao gồm cả thông tin cá nhân.
                                    </p>
                                </div>
                            </div>
                        </section>

                        <section id="chia-se" class="policy-block">
                            <div class="policy-section-heading">
                                <span class="policy-section-number">05</span>
                                <div>
                                    <h2>Địa chỉ của đơn vị thu thập và quản lý thông tin</h2>
                                </div>
                            </div>

                            <p>
                                Tên doanh nghiệp: <dd class="text-gray-700">{{ config('data.company.name') }}</dd>
                            </p>

                            <p>
                                Thành lập và hoạt động theo Giấy chứng nhận đăng ký thuế số <dd class="text-gray-700">{{ config('data.company.mst') }}</dd> do Sở tài chính
                                Thành phố Hà Nội cấp ngày {{ config('data.company.date') }}
                            </p>
                        </section>

                        <section id="quyen" class="policy-block">
                            <div class="policy-section-heading">
                                <span class="policy-section-number">06</span>
                                <div>
                                    <h2>Phương thức và công cụ để người dùng tiếp cận và chỉnh sửa dữ liệu:</h2>
                                </div>
                            </div>

                            <p>
                                Nếu quý khách có bất cứ về yêu cầu nào về việc tiếp cận và chỉnh sửa thông tin cá nhân
                                đã cung cấp, quý khách có thể:
                            </p>
                            <ul  class="policy-simple-list">
                                <li>Gọi điện trực tiếp về số điện thoại: {{ config('data.company.phone', '[.....]') }}</li>
                                <li>Gửi mail: {{ config('data.company.email', '[.....]') }}</li>
                            </ul>

                            <h3>*Cơ chế tiếp nhận và giải quyết khiếu nại của người tiêu dùng liên quan đến việc thông
                                tin cá nhân bị sử dụng sai mục đích hoặc phạm vi đã thông báo:</h3>

                            <p>Tại vangcaocap.vn, việc bảo vệ thông tin cá nhân của bạn là rất quan trọng, bạn được đảm
                                bảo rằng thông tin cung cấp cho chúng tôi sẽ được mật Vangcaocap.vn cam kết không chia
                                sẻ, bán hoặc cho thuê thông tin cá nhân của bạn cho bất kỳ người nào khác Vangcaocap.vn
                                cam kết chỉ sử dụng các thông tin của bạn vào các trường hợp sau:
                            </p>

                            <ul class="policy-simple-list">
                                <li>Nâng cao chất lượng dịch vụ dành cho khách hàng
                                </li>
                                <li>Giải quyết các tranh chấp, khiếu nại trong vòng 3 ngày sau khi nhận được thông tin.
                                </li>
                                <li>Khi cơ quan pháp luật có yêu cầu.
                                </li>
                                <li>Vangcaocap.vn hiểu rằng quyền lợi của bạn trong việc bảo vệ thông tin cá nhân cũng
                                    chính là trách nhiệm của chúng tôi nên trong bất kỳ trường hợp có thắc mắc, góp ý
                                    nào liên quan đến chính sách bảo mật của Vangcaocap.vn, và liên quan đến việc thông
                                    tin cá nhân bị sử dụng sai mục đích hoặc phạm vi đã thông báo vui lòng liên hệ qua
                                    số hotline {{ config('data.company.hotline', '[.....]') }} hoặc email: {{ config('data.company.email', '[.....]') }} để xử lý và làm việc trực tiếp với khách
                                    hàng.
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
