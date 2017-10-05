@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
 <section class="bcsection">
    <div class="container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('')}}" title="">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="{{url('gioi-thieu')}}" title="">Giới thiệu</a></li>
        </ul>
    </div>
</section>

<section class="about">
    <div class="container">
        <div class="col-md-12">
            {!!$about->content!!}
        </div>
        <div class="comment-facebook">
            <div class="fb-comments" data-href="{{url('gioi-thieu')}}" data-numposts="2"></div>
        </div>
    </div>
</section>
@endsection
