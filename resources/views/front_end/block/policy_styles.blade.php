{{-- CSS dùng chung cho toàn bộ trang chính sách frontend. --}}
<style>
        :root {
            --primary: #8B1538;
            --primary-dark: #5d0e25;
            --wine-dark: #45101f;
            --secondary: #D4AF37;
            --text: #5f5f5f;
            --muted: #8d8d8d;
            --border: #ebe5e6;
            --background: #faf9f7;
            --white: #ffffff;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: var(--background);
            color: #333;
        }

        .font-playfair {
            font-family: 'Playfair Display', serif;
        }

        .font-inter {
            font-family: 'Inter', sans-serif;
        }

        /* ==========================
           HEADER
        ========================== */
        .policy-header {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 50;
            width: 100%;
            background: rgba(255, 255, 255, 0.96);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(139, 21, 56, 0.1);
            transition: box-shadow 0.25s ease;
        }

        .policy-header.scrolled {
            box-shadow: 0 5px 30px rgba(57, 17, 31, 0.08);
        }

        .policy-header-inner {
            max-width: 1280px;
            height: 100px;
            padding: 0 24px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            align-items: center;
            gap: 20px;
        }

        .policy-header-left {
            display: flex;
            align-items: center;
            gap: 15px;
            min-width: 0;
        }

        .policy-back-button {
            width: 42px;
            height: 42px;
            flex: 0 0 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            background: rgba(139, 21, 56, 0.08);
            border-radius: 50%;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .policy-back-button:hover {
            color: #fff;
            background: var(--primary);
        }

        .policy-header-title {
            margin: 0;
            color: #2e2427;
            font-family: 'Playfair Display', serif;
            font-size: 20px;
            font-weight: 700;
            white-space: nowrap;
        }

        .policy-logo {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .policy-logo img {
            display: block;
            width: auto;
            height: 88px;
            object-fit: contain;
        }

        .policy-header-action {
            display: flex;
            justify-content: flex-end;
        }

        .policy-home-button {
            min-width: 175px;
            padding: 14px 22px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            color: #fff;
            background: linear-gradient(135deg, #8B0000 0%, #6e001a 100%);
            border-radius: 10px;
            box-shadow: 0 8px 22px rgba(139, 0, 0, 0.18);
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            text-transform: uppercase;
            transition: all 0.25s ease;
        }

        .policy-home-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 28px rgba(139, 0, 0, 0.24);
        }

        /* ==========================
           GENERAL
        ========================== */
        .policy-page {
            min-height: 100vh;
            padding-top: 100px;
            background: var(--background);
        }

        .policy-container {
            width: min(1180px, calc(100% - 40px));
            margin: 0 auto;
        }

        /* ==========================
           HERO
        ========================== */
        .policy-hero {
            position: relative;
            overflow: hidden;
            padding: 82px 0 76px;
            background: linear-gradient(135deg, #ffffff 0%, #fdf8f8 52%, #faf4e8 100%);
            border-bottom: 1px solid rgba(139, 21, 56, 0.08);
        }

        .policy-hero::before {
            content: '';
            position: absolute;
            top: -180px;
            left: -160px;
            width: 420px;
            height: 420px;
            border-radius: 50%;
            background: rgba(139, 21, 56, 0.05);
        }

        .policy-hero::after {
            content: '';
            position: absolute;
            right: -120px;
            bottom: -180px;
            width: 440px;
            height: 440px;
            border-radius: 50%;
            background: rgba(212, 175, 55, 0.08);
        }

        .policy-hero-ring {
            position: absolute;
            top: 68px;
            right: 11%;
            width: 180px;
            height: 180px;
            border: 1px solid rgba(139, 21, 56, 0.09);
            border-radius: 50%;
            pointer-events: none;
        }

        .policy-hero-content {
            position: relative;
            z-index: 2;
            max-width: 850px;
        }

        .policy-breadcrumb {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 9px;
            margin-bottom: 30px;
            color: var(--muted);
            font-size: 13px;
        }

        .policy-breadcrumb a {
            color: var(--primary);
            text-decoration: none;
        }

        .policy-breadcrumb a:hover {
            color: var(--secondary);
        }

        .policy-label {
            display: inline-block;
            margin-bottom: 14px;
            color: var(--primary);
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 4px;
        }

        .policy-hero h1 {
            margin: 0 0 20px;
            color: var(--wine-dark);
            font-family: 'Playfair Display', serif;
            font-size: clamp(40px, 5vw, 64px);
            font-weight: 600;
            line-height: 1.12;
        }

        .policy-hero-description {
            max-width: 760px;
            margin: 0;
            color: #646464;
            font-size: 17px;
            line-height: 1.8;
        }

        .policy-update {
            margin-top: 26px;
            display: flex;
            align-items: center;
            gap: 8px;
            color: #969696;
            font-size: 13px;
        }

        .policy-update i {
            color: var(--primary);
            font-size: 17px;
        }

        /* ==========================
           CONTENT LAYOUT
        ========================== */
        .policy-content-section {
            padding: 72px 0 100px;
        }

        .policy-layout {
            display: grid;
            grid-template-columns: 270px minmax(0, 1fr);
            gap: 68px;
            align-items: start;
        }

        /* SIDEBAR */
        .policy-sidebar-inner {
            position: sticky;
            top: 126px;
        }

        .policy-sidebar-title {
            margin: 0 0 15px;
            color: #9a9a9a;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .policy-nav {
            overflow: hidden;
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 14px;
            box-shadow: 0 8px 40px rgba(70, 20, 35, 0.045);
        }

        .policy-nav a {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 16px 18px;
            color: #555;
            border-bottom: 1px solid #f2eeee;
            font-size: 14px;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .policy-nav a:last-child {
            border-bottom: 0;
        }

        .policy-nav a span {
            color: #b8b8b8;
            font-size: 11px;
            font-weight: 600;
        }

        .policy-nav a:hover,
        .policy-nav a.active {
            padding-left: 23px;
            color: var(--primary);
            background: rgba(139, 21, 56, 0.045);
        }

        .policy-nav a.active span {
            color: var(--secondary);
        }

        /* ARTICLE */
        .policy-block {
            scroll-margin-top: 130px;
            padding-bottom: 56px;
            margin-bottom: 56px;
            border-bottom: 1px solid #e8e3e3;
        }

        .policy-block:last-child {
            padding-bottom: 0;
            margin-bottom: 0;
            border-bottom: 0;
        }

        .policy-section-heading {
            display: flex;
            align-items: flex-start;
            gap: 19px;
            margin-bottom: 27px;
        }

        .policy-section-number {
            width: 46px;
            height: 46px;
            flex: 0 0 46px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            background: rgba(139, 21, 56, 0.07);
            border: 1px solid rgba(139, 21, 56, 0.1);
            border-radius: 50%;
            font-family: 'Playfair Display', serif;
            font-size: 16px;
        }

        .policy-section-overline {
            margin: 1px 0 3px;
            color: var(--secondary);
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 3px;
        }

        .policy-section-heading h2 {
            margin: 0;
            color: var(--wine-dark);
            font-family: 'Playfair Display', serif;
            font-size: 29px;
            font-weight: 600;
            line-height: 1.3;
        }

        .policy-block>p {
            margin: 0 0 18px;
            color: var(--text);
            font-size: 16px;
            line-height: 1.9;
        }

        /* NOTE */
        .policy-note {
            display: flex;
            gap: 18px;
            margin-top: 29px;
            padding: 24px;
            background: linear-gradient(135deg, rgba(139, 21, 56, 0.045), rgba(212, 175, 55, 0.065));
            border: 1px solid rgba(139, 21, 56, 0.08);
            border-left: 3px solid var(--primary);
            border-radius: 12px;
        }

        .policy-note-icon {
            width: 42px;
            height: 42px;
            flex: 0 0 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            background: var(--primary);
            border-radius: 50%;
        }

        .policy-note-icon i {
            font-size: 21px;
        }

        .policy-note strong {
            display: block;
            margin-bottom: 6px;
            color: var(--wine-dark);
            font-size: 15px;
        }

        .policy-note p {
            margin: 0;
            color: #666;
            font-size: 14px;
            line-height: 1.7;
        }

        /* INFORMATION LIST */
        .policy-list {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 14px;
            padding: 0;
            margin: 27px 0 0;
            list-style: none;
        }

        .policy-list li {
            display: flex;
            align-items: flex-start;
            gap: 13px;
            padding: 20px;
            background: #fff;
            border: 1px solid #eee9e9;
            border-radius: 12px;
            transition: all 0.25s ease;
        }

        .policy-list li:hover {
            transform: translateY(-2px);
            border-color: rgba(139, 21, 56, 0.18);
            box-shadow: 0 9px 30px rgba(80, 20, 40, 0.055);
        }

        .policy-list-icon {
            width: 25px;
            height: 25px;
            flex: 0 0 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            background: var(--primary);
            border-radius: 50%;
            font-size: 14px;
        }

        .policy-list strong {
            color: var(--wine-dark);
            font-size: 14px;
        }

        .policy-list p {
            margin: 4px 0 0;
            color: #777;
            font-size: 13px;
            line-height: 1.6;
        }

        /* PURPOSE CARDS */
        .policy-purpose-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
            margin-top: 28px;
        }

        .policy-purpose-card {
            padding: 25px;
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 13px;
            transition: all 0.25s ease;
        }

        .policy-purpose-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 35px rgba(80, 20, 40, 0.07);
        }

        .policy-purpose-card>i {
            display: block;
            margin-bottom: 17px;
            color: var(--primary);
            font-size: 29px;
        }

        .policy-purpose-card h3 {
            margin: 0 0 8px;
            color: var(--wine-dark);
            font-family: 'Playfair Display', serif;
            font-size: 18px;
            font-weight: 600;
        }

        .policy-purpose-card p {
            margin: 0;
            color: #777;
            font-size: 13px;
            line-height: 1.7;
        }

        /* SIMPLE LIST */
        .policy-simple-list {
            padding: 0;
            margin: 24px 0 0;
            list-style: none;
            counter-reset: policy-list;
        }

        .policy-simple-list li {
            position: relative;
            padding: 15px 18px 15px 50px;
            margin-bottom: 9px;
            color: #5e5e5e;
            background: #fff;
            border: 1px solid #eee;
            border-radius: 9px;
            font-size: 14px;
            line-height: 1.65;
            counter-increment: policy-list;
        }
/*
        .policy-simple-list li::before {
            content: counter(policy-list);
            position: absolute;
            top: 14px;
            left: 17px;
            width: 23px;
            height: 23px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            background: rgba(139, 21, 56, 0.08);
            border-radius: 50%;
            font-size: 11px;
            font-weight: 600;
        } */

        /* CONTACT */
        .policy-contact {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 12px;
            margin-top: 29px;
        }

        .policy-contact-item {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 17px;
            background: #fff;
            border: 1px solid #eee;
            border-radius: 11px;
        }

        .policy-contact-icon {
            width: 38px;
            height: 38px;
            flex: 0 0 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            background: rgba(139, 21, 56, 0.07);
            border-radius: 50%;
        }

        .policy-contact small {
            display: block;
            margin-bottom: 3px;
            color: #999;
            font-size: 10px;
        }

        .policy-contact strong,
        .policy-contact a {
            display: block;
            color: var(--wine-dark);
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
        }

        .policy-contact a:hover {
            color: var(--primary);
        }

        /* ARTICLE DASH LIST */
        .policy-article .policy-block>ul:not(.policy-list):not(.policy-simple-list) {
            display: grid;
            gap: 9px;
            margin: 20px 0 26px;
            padding: 0 0 0 12px;
            list-style: none;
        }

        .policy-article .policy-block>ul:not(.policy-list):not(.policy-simple-list)>li {
            position: relative;
            margin: 0;
            padding: 12px 18px 12px 40px;
            color: #5f5f5f;
            background: linear-gradient(135deg, #fff 0%, #fdfafa 100%);
            border: 1px solid #eee7e9;
            border-left: 3px solid rgba(139, 21, 56, 0.22);
            border-radius: 9px;
            font-size: 15px;
            line-height: 1.75;
            transition: border-color .2s ease, box-shadow .2s ease, transform .2s ease;
        }

        .policy-article .policy-block>ul:not(.policy-list):not(.policy-simple-list)>li::before {
            content: '—';
            position: absolute;
            top: 11px;
            left: 15px;
            color: var(--secondary);
            font-size: 17px;
            font-weight: 700;
            line-height: 1.75;
        }

        .policy-article .policy-block>ul:not(.policy-list):not(.policy-simple-list)>li:hover {
            border-color: rgba(139, 21, 56, 0.2);
            box-shadow: 0 7px 24px rgba(70, 20, 35, 0.06);
            transform: translateX(2px);
        }

        .policy-article .policy-block>ul:not(.policy-list):not(.policy-simple-list)>li>:first-child {
            margin-top: 0;
        }

        .policy-article .policy-block>ul:not(.policy-list):not(.policy-simple-list)>li>:last-child {
            margin-bottom: 0;
        }
        /* ==========================
           RESPONSIVE
        ========================== */
        @media (max-width: 991px) {
            .policy-header-title {
                display: none;
            }

            .policy-layout {
                grid-template-columns: 1fr;
                gap: 32px;
            }

            .policy-sidebar {
                display: none;
            }

            .policy-contact {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 640px) {
            .policy-header-inner {
                height: 82px;
                padding: 0 15px;
                grid-template-columns: 42px 1fr auto;
                gap: 10px;
            }

            .policy-page {
                padding-top: 82px;
            }

            .policy-logo img {
                height: 70px;
            }

            .policy-home-button {
                min-width: 0;
                padding: 11px 13px;
                font-size: 0;
            }

            .policy-home-button i {
                font-size: 19px;
            }

            .policy-container {
                width: calc(100% - 30px);
            }

            .policy-hero {
                padding: 52px 0 50px;
            }

            .policy-hero-ring {
                display: none;
            }

            .policy-breadcrumb {
                margin-bottom: 24px;
                font-size: 12px;
            }

            .policy-label {
                font-size: 10px;
                letter-spacing: 3px;
            }

            .policy-hero h1 {
                margin-bottom: 15px;
                font-size: 36px;
            }

            .policy-hero-description {
                font-size: 15px;
                line-height: 1.75;
            }

            .policy-content-section {
                padding: 44px 0 70px;
            }

            .policy-block {
                padding-bottom: 40px;
                margin-bottom: 40px;
            }

            .policy-section-heading {
                gap: 13px;
                margin-bottom: 21px;
            }

            .policy-section-number {
                width: 39px;
                height: 39px;
                flex-basis: 39px;
                font-size: 13px;
            }

            .policy-section-heading h2 {
                font-size: 23px;
            }

            .policy-block>p {
                font-size: 14px;
                line-height: 1.8;
            }

            .policy-list,
            .policy-purpose-grid {
                grid-template-columns: 1fr;
            }

            .policy-note {
                padding: 18px;
            }
        }
    </style>
