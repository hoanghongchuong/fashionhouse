<?php
    $setting = Cache::get('setting');
    $chinhanh = Cache::get('chinhanh');
?>
<footer class="ft">
    <div class="container">
        <div class="ft-wrap">
            <p class="text-center"><a href="{{url('')}}" title=""><img src="{{asset('upload/hinhanh/'.$setting->photo)}}" alt="" title=""></a></p>
            <p class="text-center ft-promise">Chúng tôi luôn mang đến sự hài lòng cho khách hàng</p>
            <!-- <div class="row justify-content-around">
                <div class="col-sm-12 col-md-3">
                    <div class="ft-content">
                        <h2 class="text-center">Sản phẩm Hè 2017</h2>
                        <p class="text-center">Những sản phẩm bán chạy và HOT nhất mùa hè 2017</p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="ft-content">
                        <h2 class="text-center">Bộ sưu tập thu đông 2017</h2>
                        <p class="text-center">Những sản phẩm bán chạy và HOT nhất mùa hè 2017</p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="ft-content">
                        <h2 class="text-center">Xuân yêu thương - hè vui vẻ</h2>
                        <p class="text-center">Những sản phẩm bán chạy và HOT nhất mùa hè 2017</p>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- <div class="row ft-menu">
            <div class="col-md-6 col-lg-3">
                <p class="text-center">Quy chế sàn giao dịch</p>
                <p class="text-center">Tài Khoản Giao Dịch</p>
            </div>
            <div class="col-md-6 col-lg-3">
                <p class="text-center">Quy chế sàn giao dịch</p>
                <p class="text-center">Tài Khoản Giao Dịch</p>
            </div>
            <div class="col-md-6 col-lg-3">
                <p class="text-center">Quy chế sàn giao dịch</p>
                <p class="text-center">Tài Khoản Giao Dịch</p>
            </div>
            <div class="col-md-6 col-lg-3">
                <p class="text-center">Quy chế sàn giao dịch</p>
                <p class="text-center">Tài Khoản Giao Dịch</p>
            </div>
        </div> -->
    </div>
    <div class="ft-last">
        <ul class="d-flex align-items-center justify-content-center ft-social">
            <li><a href="{{$setting->facebook}}" title=""><img src="{{asset('public/images/i_01.png')}}" title="" alt=""></a></li>
            <li><a href="#" title=""><img src="{{asset('public/images/i_05.png')}}" title="" alt=""></a></li>
            <li><a href="#" title=""><img src="{{asset('public/images/i_03.png')}}" title="" alt=""></a></li>
            <li><a href="#" title=""><img src="{{asset('public/images/i_07.png')}}" title="" alt=""></a></li>
        </ul>
        <p class="text-center ft-last-p">© <a href="www.gco.vn" title="#">GCO GROUP</a> 2017. All rights reserved - Design by GCO.Funny</p>
    </div>
</footer>

<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=124844007858325";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>