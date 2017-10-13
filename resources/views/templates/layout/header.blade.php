<?php
    $setting = Cache::get('setting');
?>
<header class="top">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between flex-md-row flex-column top-wrap">
            <span class="top-greet">Fashion House kính chào quý khách!</span>
            <div class="ml-md-auto ml-0 d-flex align-items-center justify-content-between">
                <span class="top-tel"><i class="fa fa-phone"></i> <span class="d-none d-sm-inline-block">Hotline:</span> <a href="tel:{{$setting->hotline}}">{{$setting->hotline}}</a></span>
                <ul class="d-flex align-items-center top-social">
                    <li><a href="{{$setting->facebook}}" title=""><img src="{{asset('public/images/f_01.png')}}"></a></li>
                    <li><a href="#" title=""><img src="{{asset('public/images/f_03.png')}}"></a></li>
                    <li><a href="#" title=""><img src="{{asset('public/images/f_05.png')}}"></a></li>
                    <li><a href="{{$setting->twitter}}" title=""><img src="{{asset('public/images/f_07.png')}}"></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<nav class="menu-wrap">
    <div class="container">
        <div class="d-flex align-items-center justify-content-md-around menu-con-wrap">
            <div class="menubtn d-md-none menubtn--spin d-flex align-items-center justify-content-md-center justify-content-between">
                <div class="menubtn-box d-md-none">
                    <div class="menubtn-inner"></div>
                </div>
                <a href="{{url('')}}" title="" class="d-md-none d-block "><img src="{{asset('upload/hinhanh/'.$setting->photo)}}" alt="" title="" class="logo">
            </div>
            <ul class="text-uppercase d-flex align-items-md-center justify-content-md-around flex-md-row flex-column justify-content-start align-items-start menu">
                <li class="d-md-block d-none"><a href="{{url('')}}" title=""><img src="{{asset('upload/hinhanh/'.$setting->photo)}}" alt="" title=""></a></li>
                <li><a href="{{url('')}}" title="">Trang chủ</a></li>
                <li><a href="{{url('gioi-thieu')}}" title="">Giới thiệu</a></li>
                <li><a href="{{url('san-pham')}}" title="">Sản phẩm</a></li>
                <li><a href="{{url('tin-tuc')}}" title="">Tin tức</a></li>
                <li><a href="{{url('lien-he')}}" title="">Liên hệ</a></li>
            </ul>
        </div>
    </div>
</nav>