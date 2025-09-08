<div class="category-products">

    <div class="sort-cate clearfix margin-bottom-10 hidden-xs">
        <div class="sort-cate-left hidden-xs">
            <h3><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" width="12px" height="12px" viewBox="0 0 97.761 97.762"
                    style="enable-background:new 0 0 97.761 97.762;" xml:space="preserve">
                    <path d="M42.761,65.596H34.75V2c0-1.105-0.896-2-2-2H16.62c-1.104,0-2,0.895-2,2v63.596H6.609c-0.77,0-1.472,0.443-1.804,1.137
     c-0.333,0.695-0.237,1.519,0.246,2.117l18.076,26.955c0.38,0.473,0.953,0.746,1.558,0.746s1.178-0.273,1.558-0.746L44.319,68.85
     c0.482-0.6,0.578-1.422,0.246-2.117C44.233,66.039,43.531,65.596,42.761,65.596z"></path>
                    <path d="M93.04,95.098L79.71,57.324c-0.282-0.799-1.038-1.334-1.887-1.334h-3.86c-0.107,0-0.213,0.008-0.318,0.024
     c-0.104-0.018-0.21-0.024-0.318-0.024h-3.76c-0.849,0-1.604,0.535-1.887,1.336L54.403,95.1c-0.215,0.611-0.12,1.289,0.255,1.818
     s0.983,0.844,1.633,0.844h5.773c0.88,0,1.657-0.574,1.913-1.416l2.536-8.324h14.419l2.536,8.324
     c0.256,0.842,1.033,1.416,1.913,1.416h5.771c0.649,0,1.258-0.314,1.633-0.844C93.16,96.387,93.255,95.709,93.04,95.098z
     M68.905,80.066c2.398-7.77,4.021-13.166,4.82-16.041l4.928,16.041H68.905z"></path>
                    <path d="M87.297,34.053H69.479L88.407,6.848c0.233-0.336,0.358-0.734,0.358-1.143V2.289c0-1.104-0.896-2-2-2H60.694
     c-1.104,0-2,0.896-2,2v3.844c0,1.105,0.896,2,2,2h16.782L58.522,35.309c-0.233,0.336-0.358,0.734-0.358,1.146v3.441
     c0,1.105,0.896,2,2,2h27.135c1.104,0,2-0.895,2-2v-3.842C89.297,34.947,88.402,34.053,87.297,34.053z"></path>
                </svg>
                Xếp theo:</h3>
            <ul>
                <li class="btn-quick-sort alpha-asc">
                    <a href="javascript:;" onclick="sortby('alpha-asc')" title="Tên A-Z"><i></i>Tên A-Z</a>
                </li>
                <li class="btn-quick-sort alpha-desc">
                    <a href="javascript:;" onclick="sortby('alpha-desc')" title="Tên Z-A"><i></i>Tên Z-A</a>
                </li>
                <li class="btn-quick-sort position-desc">
                    <a href="javascript:;" onclick="sortby('created-desc')" title="Hàng mới"><i></i>Hàng mới</a>
                </li>
                <li class="btn-quick-sort price-asc">
                    <a href="javascript:;" onclick="sortby('price-asc')" title="Giá thấp đến cao"><i></i>Giá thấp đến
                        cao</a>
                </li>
                <li class="btn-quick-sort price-desc">
                    <a href="javascript:;" onclick="sortby('price-desc')" title="Giá cao xuống thấp"><i></i>Giá cao
                        xuống thấp</a>
                </li>
            </ul>
        </div>

    </div>



    @if (!empty($products) && $products->count() > 0)
        <section class="products-view products-view-grid list_hover_pro">
            <div class="row row-fix">
                @if (!empty($products))
                    @foreach ($products as $product)
                        <div class="col-6 col-md-4 col-xl-3 col-fix">
                            @include('front_end.block.item_product', [
                                'product' => $product,
                            ])
                        </div>
                    @endforeach
                @endif
            </div>
        </section>


        @if ($products->hasPages())
            <div class="section pagenav clearfix a-center">
                <nav class="collection-paginate clearfix relative nav_pagi w_100">
                    <ul class="pagination clearfix">
                        {{-- Previous Page Link --}}
                        @if ($products->onFirstPage())
                            <li class="page-item disabled"><a class="page-link" href="#">«</a></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $products->previousPageUrl() }}"
                                    rel="prev">«</a></li>
                        @endif

                        {{-- Pagination Elements --}}
                        @php
                            $start = max($products->currentPage() - 3, 1);
                            $end = min(max($products->currentPage() + 3, $start + 6), $products->lastPage());
                            $start = max(min($start, $end - 6), 1);
                        @endphp

                        @if ($start > 1)
                            <li class="page-item"><a class="page-link" href="{{ $products->url(1) }}">1</a></li>
                            @if ($start > 2)
                                <li class="page-item disabled"><span class="page-link">...</span></li>
                            @endif
                        @endif

                        @for ($i = $start; $i <= $end; $i++)
                            @if ($i == $products->currentPage())
                                <li class="active page-item disabled"><a class="page-link" href="javascript:;"
                                        style="pointer-events:none">{{ $i }}</a></li>
                            @else
                                <li class="page-item"><a class="page-link" onclick="doSearch({{ $i }})"
                                        href="javascript:;">{{ $i }}</a></li>
                            @endif
                        @endfor

                        @if ($end < $products->lastPage())
                            @if ($end < $products->lastPage() - 1)
                                <li class="page-item disabled"><span class="page-link">...</span></li>
                            @endif
                            <li class="page-item"><a class="page-link"
                                    href="{{ $products->url($products->lastPage()) }}">{{ $products->lastPage() }}</a>
                            </li>
                        @endif

                        {{-- Next Page Link --}}
                        @if ($products->hasMorePages())
                            <li class="page-item"><a class="page-link link-next-pre"
                                    onclick="doSearch({{ $products->currentPage() + 1 }})" href="javascript:;"
                                    title="{{ $products->currentPage() + 1 }}">»</a></li>
                        @else
                            <li class="page-item disabled"><a class="page-link" href="#">»</a></li>
                        @endif
                    </ul>
                </nav>
            </div>
        @endif
    @else
        <div class="alert alert-danger" role="alert">
            Không tồn tại sản phẩm nào !!!
        </div>
    @endif


    {{-- <div class="section pagenav clearfix a-center">
        <nav class="collection-paginate clearfix relative nav_pagi w_100">
            <ul class="pagination clearfix">

                <li class="page-item disabled"><a class="page-link" href="#">«</a></li>
                <li class="active page-item disabled"><a class="page-link" href="javascript:;"
                        style="pointer-events:none">1</a></li>
                <li class="page-item"><a class="page-link" onclick="doSearch(2)" href="javascript:;">2</a></li>
                <li class="page-item"><a class="page-link" onclick="doSearch(3)" href="javascript:;">3</a></li>
                <li class="page-item"><a class="page-link link-next-pre" onclick="doSearch(2)" href="javascript:;"
                        title="2">»</a></li>

            </ul>
        </nav>
    </div> --}}
</div>
