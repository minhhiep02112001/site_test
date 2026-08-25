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
                         <p class="text-red-600">Hotline: <a href="tel:0903481086"
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
                                 width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                 referrerpolicy="no-referrer-when-downgrade"></iframe>
                         </div>
                     </div>
                     <div>
                         <h3 class="text-xl font-bold text-red-900 mb-4">Văn Phòng TP HCM</h3>
                         <div class="bg-gray-50 rounded-lg overflow-hidden aspect-[4/3]">
                             <iframe
                                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1899815783077!2d106.68876817584616!3d10.796756758816784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528cef41a3e99%3A0x6d9f736ab46da8bc!2zMjMgSG9hIExhbiwgUGjGsOG7nW5nIDcsIFBow7ogTmh14bqtbiwgSOG7kyBDaMOtIE1pbmggNzI1NTA3LCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1756202313395!5m2!1svi!2s"
                                 width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                 referrerpolicy="no-referrer-when-downgrade"></iframe>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8 mb-16">
             <section class="h-full overflow-hidden rounded-2xl border border-red-100 bg-gradient-to-br from-white to-red-50/50 shadow-sm">
                 <div class="flex items-center gap-3 border-b border-red-100 px-6 py-5">
                     <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-red-900 text-white"><i class="ri-building-4-line ri-lg"></i></span>
                     <div>
                         <p class="text-xs font-semibold uppercase tracking-[0.18em] text-red-500">Thông tin pháp lý</p>
                         <h2 class="mt-1 text-xl font-bold text-red-950">{{ config('data.company.name') }}</h2>
                     </div>
                 </div>
                 <dl class="divide-y divide-red-100 px-6">
                     <div class="grid grid-cols-1 gap-1 py-4 sm:grid-cols-[190px_1fr] sm:gap-4"><dt class="font-semibold text-red-900">Công ty</dt><dd class="text-gray-700">{{ config('data.company.name') }}</dd></div>
                     <div class="grid grid-cols-1 gap-1 py-4 sm:grid-cols-[190px_1fr] sm:gap-4"><dt class="font-semibold text-red-900">Mã số thuế</dt><dd class="italic text-gray-500">{{ config('data.company.mst') }}</dd></div>
                     <div class="grid grid-cols-1 gap-1 py-4 sm:grid-cols-[190px_1fr] sm:gap-4"><dt class="font-semibold text-red-900">Ngày cấp</dt><dd class="italic text-gray-500">{{ config('data.company.date') }}</dd></div>
                     <div class="grid grid-cols-1 gap-1 py-4 sm:grid-cols-[190px_1fr] sm:gap-4"><dt class="font-semibold text-red-900">Nơi cấp</dt><dd class="italic text-gray-500">{{ config('data.company.issued_by') }}</dd></div>
                     <div class="grid grid-cols-1 gap-1 py-4 sm:grid-cols-[190px_1fr] sm:gap-4"><dt class="font-semibold text-red-900">Giấy phép bán lẻ rượu</dt><dd class="italic text-gray-500">{{ config('data.company.retail_alcohol_license_number') }}</dd></div>
                     <div class="grid grid-cols-1 gap-1 py-4 sm:grid-cols-[190px_1fr] sm:gap-4"><dt class="font-semibold text-red-900">Ngày cấp giấy phép</dt><dd class="italic text-gray-500">{{ config('data.company.retail_alcohol_license_date') }}</dd></div>
                     <div class="grid grid-cols-1 gap-1 py-4 sm:grid-cols-[190px_1fr] sm:gap-4"><dt class="font-semibold text-red-900">Nơi cấp giấy phép</dt><dd class="italic text-gray-500">{{ config('data.company.retail_alcohol_license_issued_by') }}</dd></div>
                 </dl>
             </section>

             <section class="h-full overflow-hidden rounded-2xl border border-red-100 bg-gradient-to-br from-white to-amber-50/40 shadow-sm">
                 <div class="flex items-center gap-3 border-b border-red-100 px-6 py-5">
                     <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-amber-500 text-white"><i class="ri-file-list-3-line ri-lg"></i></span>
                     <div>
                         <p class="text-xs font-semibold uppercase tracking-[0.18em] text-amber-600">Thông tin khách hàng</p>
                         <h2 class="mt-1 text-xl font-bold text-red-950">CHÍNH SÁCH &amp; ĐIỀU KHOẢN</h2>
                     </div>
                 </div>
                 <nav class="divide-y divide-red-100 px-3 py-2" aria-label="Chính sách và điều khoản">
                     <a href="/chinh-sach-bao-mat" class="group flex items-center justify-between gap-4 rounded-xl px-3 py-3.5 text-gray-700 transition hover:bg-red-50 hover:text-red-900"><span>Chính sách bảo mật thông tin</span><i class="ri-arrow-right-s-line text-xl text-red-300 transition group-hover:translate-x-1 group-hover:text-red-700"></i></a>
                     <a href="/chinh-sach-van-chuyen-va-doi-tra-hang" class="group flex items-center justify-between gap-4 rounded-xl px-3 py-3.5 text-gray-700 transition hover:bg-red-50 hover:text-red-900"><span>Chính sách vận chuyển, kiểm tra hàng và đổi trả hàng</span><i class="ri-arrow-right-s-line text-xl text-red-300 transition group-hover:translate-x-1 group-hover:text-red-700"></i></a>
                     <a href="/chinh-sach-thanh-toan" class="group flex items-center justify-between gap-4 rounded-xl px-3 py-3.5 text-gray-700 transition hover:bg-red-50 hover:text-red-900"><span>Chính sách thanh toán</span><i class="ri-arrow-right-s-line text-xl text-red-300 transition group-hover:translate-x-1 group-hover:text-red-700"></i></a>
                     <a href="/chinh-sach-ve-gia" class="group flex items-center justify-between gap-4 rounded-xl px-3 py-3.5 text-gray-700 transition hover:bg-red-50 hover:text-red-900"><span>Chính sách về giá</span><i class="ri-arrow-right-s-line text-xl text-red-300 transition group-hover:translate-x-1 group-hover:text-red-700"></i></a>
                     <a href="/phuong-thuc-tiep-can-va-khieu-nai" class="group flex items-center justify-between gap-4 rounded-xl px-3 py-3.5 text-gray-700 transition hover:bg-red-50 hover:text-red-900"><span>Phương thức tiếp nhận và giải quyết khiếu nại</span><i class="ri-arrow-right-s-line text-xl text-red-300 transition group-hover:translate-x-1 group-hover:text-red-700"></i></a>
                     <a href="/dieu-kien-han-che-trong-viec-cung-cap-hang-hoa" class="group flex items-center justify-between gap-4 rounded-xl px-3 py-3.5 text-gray-700 transition hover:bg-red-50 hover:text-red-900"><span>Điều kiện hạn chế trong việc cung cấp hàng hóa</span><i class="ri-arrow-right-s-line text-xl text-red-300 transition group-hover:translate-x-1 group-hover:text-red-700"></i></a>
                 </nav>
             </section>
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
