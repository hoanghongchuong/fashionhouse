@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');

?>
<section class="bcsection">
    <div class="container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('')}}" title="">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="{{url('lien-he')}}" title="">Liên hệ</a></li>
        </ul>
    </div>
</section>

<section class="pdetail">
    <div class="container">
        <h2 class="about-tit"><a href="about.html" title="">Liên hệ</a></h2>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <form class="form-group contact-frm" method="post" action="{{route('postContact')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="text" name="txtName" required="required" placeholder="Full name">
                    <input type="text" name="adress" required="required" placeholder="Address">
                    <input type="tel" name="phone" required="required" placeholder="Phone number">
                    <input type="email" name="email" required="required" placeholder="Email connecting">
                    <textarea placeholder="Messages" name="content" class=""></textarea>
                    <p class="contact-require">(*) Require form</p>
                    <p class="contact-frm-p"><button type="submit" class="btn contact-frm-btn">Gửi ngay</button></p>
                </form>
            </div>
            <div class="col-xs-12 col-sm-6">
                <ul class="ft-add contact-frm-add">
                    <li>{{$setting->address}}</li>
                    <li>ĐT: <a href="tel:{{$setting->phone}}">{{$setting->phone}}</a></li>
                    <li>Email: <a href="{{$setting->email}}">{{$setting->email}}</a></li>
                    <li>Website: <a href="{{$setting->website}}">{{$setting->website}}</a></li>
                </ul>
                <div class="map_container">
                    {!! $setting->iframemap !!}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
