{{-- Popup xác nhận độ tuổi dùng chung cho toàn bộ frontend. --}}
<div id="age-verification-popup" class="age-popup" role="dialog" aria-modal="true" aria-labelledby="age-popup-title" hidden>
    <div class="age-popup__backdrop"></div>
    <div class="age-popup__content">
        <h2 id="age-popup-title">WELCOME TO RƯỢU VANG CAO CẤP</h2>
        <p class="age-popup__notice">
            Các Sản Phẩm Của Rượu Vang Cao Cấp<br>
            Không Dành Cho Phụ Nữ Mang Thai<br>
            Và Người Dưới 18 Tuổi
        </p>

        <div class="age-popup__warnings" aria-label="Cảnh báo sử dụng rượu bia">
            <img src="{{ asset('assets/age-women.png') }}" alt="Không dùng cho phụ nữ mang thai" width="104" height="104">
            <img src="{{ asset('assets/age-wine.png') }}" alt="Đã uống rượu bia không lái xe" width="104" height="104">
            <img src="{{ asset('assets/age-18.png') }}" alt="Không dành cho người dưới 18 tuổi" width="104" height="104">
        </div>

        <p class="age-popup__warning">Nội dung này không phù hợp với độ tuổi của bạn!</p>
        <p class="age-popup__prompt">Vui Lòng Lựa Chọn</p>
        <div class="age-popup__actions">
            <button type="button" id="age-popup-accept" class="age-popup__button age-popup__button--accept">Đủ 18 tuổi</button>
            <button type="button" id="age-popup-reject" class="age-popup__button age-popup__button--reject">Dưới 18 tuổi</button>
        </div>
    </div>
</div>

<style>
    .age-popup[hidden]{display:none!important}
    .age-popup{position:fixed;inset:0;z-index:999999;display:grid;place-items:center;padding:16px;font-family:Arial,sans-serif}
    .age-popup__backdrop{position:absolute;inset:0;background:rgba(20,20,20,.48);backdrop-filter:blur(7px);-webkit-backdrop-filter:blur(7px)}
    .age-popup__content{position:relative;width:min(540px,100%);padding:46px 34px 58px;background:#fff;text-align:center;box-shadow:0 20px 60px rgba(0,0,0,.25)}
    .age-popup__content h2{margin:0 0 8px;color:#ed2929;font-size:clamp(23px,3vw,31px);font-weight:700;line-height:1.25;text-transform:uppercase}
    .age-popup__notice{margin:0;color:#3159ff;font-size:18px;line-height:1.5}
    .age-popup__warnings{display:flex;justify-content:center;align-items:center;gap:26px;margin:12px 0 8px}
    .age-popup__warnings img{display:block;width:104px;height:auto}
    .age-popup__warning{margin:3px 0 0;color:#ed2929;font-size:20px;font-weight:700}
    .age-popup__prompt{margin:3px 0 12px;color:#3159ff;font-size:20px}
    .age-popup__actions{display:flex;justify-content:center;gap:10px}
    .age-popup__button{min-width:162px;border-radius:5px;padding:11px 20px;font:inherit;font-size:22px;line-height:1.25;cursor:pointer;transition:filter .2s,transform .2s}
    .age-popup__button:hover{filter:brightness(.92);transform:translateY(-1px)}
    .age-popup__button:focus-visible{outline:3px solid #ffbd2e;outline-offset:3px}
    .age-popup__button--accept{border:2px solid #df3035;background:#fff;color:#df3035}
    .age-popup__button--reject{border:2px solid #df3035;background:#df3035;color:#fff}
    @media(max-width:520px){
        .age-popup__content{padding:32px 18px 36px}.age-popup__notice{font-size:16px}
        .age-popup__warnings{gap:8px}.age-popup__warnings img{width:82px}
        .age-popup__actions{flex-direction:column}.age-popup__button{width:100%;font-size:19px}
    }
</style>
<script>
    (function () {
        const key = 'ruou_vang_cao_cap_age_verified';
        const duration = 30 * 60 * 1000; // 30 phút

        const popup = document.getElementById('age-verification-popup');
        const accept = document.getElementById('age-popup-accept');
        const reject = document.getElementById('age-popup-reject');

        if (!popup || !accept || !reject) {
            return;
        }

        let verified = false;

        try {
            const storedValue = localStorage.getItem(key);

            if (storedValue) {
                const data = JSON.parse(storedValue);

                if (data.verified === true && Date.now() < data.expiresAt) {
                    verified = true;
                } else {
                    localStorage.removeItem(key);
                }
            }
        } catch (error) {
            localStorage.removeItem(key);
        }

        if (!verified) {
            popup.hidden = false;
            document.documentElement.style.overflow = 'hidden';

            setTimeout(function () {
                accept.focus();
            }, 0);
        }

        accept.addEventListener('click', function () {
            try {
                localStorage.setItem(
                    key,
                    JSON.stringify({
                        verified: true,
                        expiresAt: Date.now() + duration
                    })
                );
            } catch (error) {
                console.warn('Không thể lưu xác nhận độ tuổi:', error);
            }

            popup.hidden = true;
            document.documentElement.style.overflow = '';
        });

        reject.addEventListener('click', function () {
            window.location.replace('https://www.google.com/');
        });
    })();
</script>
