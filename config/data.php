<?php
return [


    'email_receiver_1' => "chuminhhiep0394599501@gmail.com",
    'email_receiver_2' => "chuminhhiep0394599501@gmail.com",



    'limit_paginate_admin' => 10,
    'config_menu' => [
        'Header',
        'Header_sidebar',
        'Footer',
        'FooterSocial',
    ],
    'cms_setting' => [
        'icon' => '/assets/images/prabez-favicon.png',
        'logo' => ''
    ],
    'config_trending' => [
        ['key' => 'config_page_home', 'module' => 'page', 'text' => 'Quản lý bài viết Page trang chủ', 'query' => []],

    ],
    'banner_type' => [
        'home' => 'Trang chủ',
        'home_brand_1' => 'Banner icon bài viết trang chủ',
        'home_brand' => 'Banner thương hiệu trang chủ',
    ],
    'setting_menu' => [
        0 => 'Menu Header',
        1 => 'Menu Footer',
    ],
    'config_drags' => [
        'config_post_home' => "Quản lý bài viết trang chủ (banner)",
        'config_product_home' => "Quản lý sản phẩm trang chủ (banner)",
        'config_category_home' => "Quản lý danh mục trang chủ (category)"
    ],
    'currency' => "VNĐ",
    'status' => [
        0 => ['title' => 'Chờ duyệt', 'class' => "badge badge-warning"],
        1 => ['title' => 'Đã xuất bản', 'class' => "badge badge-success"],
        2 => ['title' => 'Mới cào', 'class' => "badge badge-primary"],
        3 => ['title' => 'Chờ cào', 'class' => "badge badge-secondary"],
        4 => ['title' => 'Bị từ chối', 'class' => "badge badge-danger"],
    ],

];
