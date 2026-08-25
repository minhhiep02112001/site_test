<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Chính sách bảo mật thông tin khách hàng của The Best Wine. Tìm hiểu cách chúng tôi thu thập, sử dụng và bảo vệ thông tin cá nhân.">
    <title>Tiếp nhận và giải quyết khiếu nại - The Best Wine</title>

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
                <h1 class="policy-header-title">Tiếp nhận &amp; khiếu nại</h1>
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
                        <span>Phương thức tiếp nhận và giải quyết phản ánh, yêu cầu, khiếu nại</span>
                    </div>
                    <h1>Phương thức tiếp nhận và giải quyết phản ánh, yêu cầu, khiếu nại</h1>

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

                            <nav class="policy-nav" aria-label="Mục lục tiếp nhận và giải quyết khiếu nại">
                                <a href="#muc-dich" class="active"><span>01</span>Mục đích</a>
                                <a href="#phuong-thuc-tiep-nhan"><span>02</span>Phương thức tiếp nhận</a>
                                <a href="#trinh-tu-xu-ly"><span>03</span>Trình tự xử lý</a>
                                <a href="#thoi-gian-phan-hoi"><span>04</span>Thời gian phản hồi</a>
                                <a href="#bien-phap-ho-tro"><span>05</span>Biện pháp hỗ trợ</a>
                                <a href="#quyen-nghia-vu"><span>06</span>Quyền và nghĩa vụ</a>
                                <a href="#thong-tin-lien-he"><span>07</span>Thông tin liên hệ</a>
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
                                Website <strong>[Tên website]</strong> luôn đặt quyền lợi của khách hàng lên hàng đầu.
                                Chúng tôi xây dựng cơ chế tiếp nhận và giải quyết phản ánh, yêu cầu, khiếu nại nhằm đảm
                                bảo
                                mọi ý kiến của khách hàng được tiếp nhận đầy đủ, xử lý minh bạch và phản hồi trong thời
                                gian
                                hợp lý theo quy định của pháp luật.
                            </p>

                            <p>
                                Chính sách này áp dụng đối với mọi khách hàng phát sinh giao dịch mua hàng hoặc sử dụng
                                dịch vụ trên website <strong>{{ config('data.company.website', '[.....]') }}</strong>.
                            </p>
                        </section>


                        <section id="phuong-thuc-tiep-nhan" class="policy-block">
                            <div class="policy-section-heading">
                                <span class="policy-section-number">02</span>
                                <div>
                                    <h2>Phương thức tiếp nhận phản ánh, yêu cầu, khiếu nại</h2>
                                </div>
                            </div>

                            <p>
                                Khách hàng có thể gửi phản ánh, yêu cầu hoặc khiếu nại thông qua một trong các phương
                                thức sau:
                            </p>

                            <ul>
                                <li>
                                    <strong>Website:</strong>
                                    <a href="{{ env('APP_URL', config('data.company.website')) }}" target="_blank"
                                        rel="noopener noreferrer">
                                        {{ config('data.company.website', '[.....]') }}
                                    </a>
                                </li>

                                <li>
                                    <strong>Hotline:</strong>
                                    <a
                                        href="tel:{{ config('data.company.hotline', '[.....]') }}">{{ config('data.company.hotline', '[.....]') }}</a>
                                </li>

                                <li>
                                    <strong>Email:</strong>
                                    <a
                                        href="mailto:{{ config('data.company.email', '[.....]') }}">{{ config('data.company.email', '[.....]') }}</a>
                                </li>

                                <li>
                                    <strong>Biểu mẫu liên hệ trực tuyến trên website:</strong>
                                    Trang "Liên hệ" hoặc "Hỗ trợ khách hàng".
                                </li>
                            </ul>

                            <p>
                                <strong>Địa chỉ tiếp nhận (nếu có):</strong>
                            </p>

                            <p>
                                {{ config('data.company.name', '[.....]') }}<br>
                                {!! config('data.company.address', '[.....]') !!}
                            </p>

                            <p>Khách hàng vui lòng cung cấp đầy đủ các thông tin sau:</p>

                            <ul>
                                <li>Họ và tên;</li>
                                <li>Số điện thoại;</li>
                                <li>Email;</li>
                                <li>Mã đơn hàng (nếu có);</li>
                                <li>Nội dung phản ánh, yêu cầu hoặc khiếu nại;</li>
                                <li>Hình ảnh, video hoặc tài liệu liên quan (nếu có).</li>
                            </ul>
                        </section>


                        <section id="trinh-tu-xu-ly" class="policy-block">
                            <div class="policy-section-heading">
                                <span class="policy-section-number">03</span>
                                <div>
                                    <h2>Trình tự tiếp nhận và xử lý</h2>
                                </div>
                            </div>

                            <h3>Bước 1. Tiếp nhận thông tin</h3>

                            <p>
                                Ngay sau khi nhận được phản ánh hoặc khiếu nại từ khách hàng, bộ phận Chăm sóc khách
                                hàng
                                sẽ ghi nhận thông tin và kiểm tra tính đầy đủ của hồ sơ.
                            </p>

                            <p>
                                Trường hợp thông tin chưa đầy đủ, khách hàng sẽ được yêu cầu bổ sung để phục vụ quá
                                trình xử lý.
                            </p>


                            <h3>Bước 2. Xác minh</h3>

                            <p>Website tiến hành:</p>

                            <ul>
                                <li>Kiểm tra thông tin đơn hàng;</li>
                                <li>Đối chiếu dữ liệu giao dịch;</li>
                                <li>Kiểm tra tình trạng vận chuyển;</li>
                                <li>Làm việc với đơn vị vận chuyển hoặc các bộ phận liên quan (nếu cần).</li>
                            </ul>


                            <h3>Bước 3. Phản hồi ban đầu</h3>

                            <p>
                                Sau khi tiếp nhận đầy đủ thông tin, chúng tôi sẽ gửi phản hồi xác nhận đã tiếp nhận yêu
                                cầu
                                và thông báo phương án xử lý dự kiến.
                            </p>


                            <h3>Bước 4. Giải quyết</h3>

                            <p>Tùy từng trường hợp, website sẽ thực hiện:</p>

                            <ul>
                                <li>Giải thích thông tin;</li>
                                <li>Hỗ trợ đổi trả;</li>
                                <li>Hoàn tiền (nếu đủ điều kiện);</li>
                                <li>Giao bù hàng;</li>
                                <li>Điều chỉnh thông tin đơn hàng;</li>
                                <li>Hoặc các phương án phù hợp khác theo chính sách của website.</li>
                            </ul>


                            <h3>Bước 5. Kết thúc</h3>

                            <p>
                                Khi vụ việc được giải quyết, website sẽ thông báo kết quả cho khách hàng thông qua điện
                                thoại,
                                email hoặc phương thức liên hệ đã đăng ký.
                            </p>
                        </section>


                        <section id="thoi-gian-phan-hoi" class="policy-block">
                            <div class="policy-section-heading">
                                <span class="policy-section-number">04</span>
                                <div>
                                    <h2>Thời gian phản hồi</h2>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Loại yêu cầu</th>
                                            <th>Thời gian phản hồi ban đầu</th>
                                            <th>Thời gian xử lý dự kiến</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Tư vấn sản phẩm</td>
                                            <td>Trong vòng 24 giờ làm việc</td>
                                            <td>Trong ngày</td>
                                        </tr>

                                        <tr>
                                            <td>Xác nhận đơn hàng</td>
                                            <td>Trong vòng 24 giờ</td>
                                            <td>01 ngày làm việc</td>
                                        </tr>

                                        <tr>
                                            <td>Phản ánh chất lượng sản phẩm</td>
                                            <td>Trong vòng 24 giờ</td>
                                            <td>03–07 ngày làm việc</td>
                                        </tr>

                                        <tr>
                                            <td>Khiếu nại giao hàng</td>
                                            <td>Trong vòng 24 giờ</td>
                                            <td>03–05 ngày làm việc</td>
                                        </tr>

                                        <tr>
                                            <td>Yêu cầu đổi trả</td>
                                            <td>Trong vòng 24 giờ</td>
                                            <td>03–07 ngày làm việc</td>
                                        </tr>

                                        <tr>
                                            <td>Hoàn tiền</td>
                                            <td>Trong vòng 24 giờ</td>
                                            <td>05–10 ngày làm việc (tùy phương thức thanh toán)</td>
                                        </tr>

                                        <tr>
                                            <td>Khiếu nại khác</td>
                                            <td>Trong vòng 24 giờ</td>
                                            <td>
                                                Không quá 15 ngày làm việc
                                                (trừ trường hợp bất khả kháng)
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <p>
                                Trong các trường hợp cần thêm thời gian xác minh, chúng tôi sẽ chủ động thông báo cho
                                khách hàng.
                            </p>
                        </section>


                        <section id="bien-phap-ho-tro" class="policy-block">
                            <div class="policy-section-heading">
                                <span class="policy-section-number">05</span>
                                <div>
                                    <h2>Các biện pháp hỗ trợ giải quyết</h2>
                                </div>
                            </div>

                            <p>
                                Để đảm bảo việc giải quyết nhanh chóng và chính xác, website áp dụng các biện pháp sau:
                            </p>

                            <ul>
                                <li>Lưu trữ lịch sử giao dịch và đơn hàng;</li>
                                <li>Quản lý trạng thái xử lý trên hệ thống;</li>
                                <li>Kiểm tra dữ liệu thanh toán;</li>
                                <li>Đối chiếu thông tin với đơn vị vận chuyển;</li>
                                <li>Tiếp nhận hình ảnh, video, chứng từ từ khách hàng;</li>
                                <li>Hỗ trợ qua điện thoại, email và biểu mẫu trực tuyến;</li>
                                <li>Phối hợp giữa các bộ phận liên quan để xử lý nhanh nhất.</li>
                            </ul>
                        </section>


                        <section id="quyen-nghia-vu" class="policy-block">
                            <div class="policy-section-heading">
                                <span class="policy-section-number">06</span>
                                <div>
                                    <h2>Quyền và nghĩa vụ của khách hàng</h2>
                                </div>
                            </div>

                            <p>Khách hàng có trách nhiệm:</p>

                            <ul>
                                <li>Cung cấp thông tin trung thực;</li>
                                <li>Hợp tác trong quá trình xác minh;</li>
                                <li>Không lợi dụng chính sách để trục lợi.</li>
                            </ul>

                            <p>Website có quyền từ chối giải quyết đối với các trường hợp:</p>

                            <ul>
                                <li>Thông tin không chính xác;</li>
                                <li>Không có căn cứ xác minh;</li>
                                <li>Có dấu hiệu gian lận hoặc vi phạm pháp luật.</li>
                            </ul>
                        </section>


                        <section id="thong-tin-lien-he" class="policy-block">
                            <div class="policy-section-heading">
                                <span class="policy-section-number">07</span>
                                <div>
                                    <h2>Thông tin liên hệ</h2>
                                </div>
                            </div>

                            <p>
                                <strong>Website:</strong>
                                {{ config('data.company.website', '[.....]') }}
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
