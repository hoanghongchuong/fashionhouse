@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$cateProducts = Cache::get('cateProducts');
?>
<section class="slider">
    <div class="container-flush">
        <div class="owl-carousel owl-theme carousel_top">
            @foreach($slider as $slide)
            <div class="item">
                <a href="#" title=""><img src="{{asset('upload/hinhanh/'.$slide->photo)}}" alt="" title=""></a>
                <a href="{{$slide->link}}" class="top-btn">View Now</a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="banner">
    <div class="container">
        <div class="row wrap banner-row">
            <?php $banners = DB::table('banner_content')->where('position',1)->get(); ?>
            <div class="col-md-6 banner-item"><!-- col-sm-12  -->
                <a href="pro.html" title=""><img src="{{asset('upload/banner/'.$banners[0]->image)}}" alt="" title=""></a>
            </div>
            <div class="col-md-6 banner-item"><!-- col-sm-12  -->
                <a href="pro.html" title=""><img src="{{asset('upload/banner/'.$banners[1]->image)}}" alt="" title=""></a>
            </div>
            @foreach($cate_pro as $cate)
            <div class="col-md-4 banner-item"><!-- col-sm-12  -->
                <div class="banner-wrap">
                    <a href="{{url('san-pham/'.$cate->alias)}}" title=""><img src="{{asset('upload/product/'.$cate->photo)}}" alt="" title=""></a>
                    <div class="banner-intro">
                        <div>
                            <h2 class="text-uppercase banner-intro-tit">{{$cate->name}}</h2>
                             <?php $products = DB::table('products')->where('cate_id',$cate->id)->get() ?>
                            <h3 class="banner-intro-quan">{{ count($products) }} sản phẩm</h3>
                        </div>
                        <a href="{{url('san-pham/'.$cate->alias)}}" title="" class="banner-btn">Xem ngay</a>
                    </div>
                </div>  
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="new-product">
    <div class="container">
        <h2 class="text-center newpro-tit">Sản phẩm mới</h2>
        <div class="row wrap">
            @foreach($news_product as $newProduct)
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="newpro-wrap">
                    <a href="{{url('san-pham/'.$newProduct->alias.'.html')}}" class="newpro-over" title=""><img src="{{asset('upload/product/'.$newProduct->photo)}}" alt="" title=""></a>
                </div>
                <div class="newpro-intro">
                    <h3 class="text-center newpro-intro-name"><a href="{{url('san-pham/'.$newProduct->alias.'.html')}}" title="">{{$newProduct->name}}</a></h3>
                    <h4 class="text-center newpro-intro-price">$<span>{{number_format($newProduct->price)}}</span></h4>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="news">
    <div class="container">
        <h2 class="text-center newpro-tit">Tin tức nổi bật</h2>
        <div class="row">
            @foreach($hot_news as $hotNews)
            <div class="col-sm-12 news-wrap">
                <div class="row">
                    <div class="col-sm-12 col-md-6 news-wrap-l">
                        <a href="{{url('tin-tuc/'.$hotNews->alias.'.html')}}" title=""><img src="{{asset('upload/news/'.$hotNews->photo)}}" alt="" title=""></a>
                    </div>
                    <div class="col-sm-12 col-md-6 news-wrap-r">
                        <div class="news-wrap-r-content">
                            <h3 class="news-wrap-r-content-tit"><a href="{{url('tin-tuc/'.$hotNews->alias.'.html')}}" title="{{$hotNews->name}}">{{$hotNews->name}}</a></h3>
                            <p class="news-wrap-r-content-time">{{date('d/m/Y',strtotime($hotNews->created_at))}}</p>
                            <p{{$hotNews->mota}}</p>
                            <a href="{{url('tin-tuc/'.$hotNews->alias.'.html')}}" title="" class="btn news-btn">Xem ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <p class="text-center"><a href="{{url('tin-tuc')}}" title="" class="btn news-bbtn">Xem tất cả</a></p>
    </div>
</section>

<section>
    <div class="container">
        <a href="#" title=""><img src="{{asset('upload/banner/'.$banners[2]->image)}}" alt="" title=""></a>
    </div>
</section>

<section class="partner">
    <div class="container">
        <ul class="text-center partner-wrap">
            @foreach($partners as $partner)
            <li><a href="{{$partner->link}}" title=""><img src="{{asset('upload/hinhanh/'.$partner->photo)}}" alt="" title=""></a></li>
            @endforeach
            <!-- <li><a href="#" title=""><img src="images/p_13.jpg" alt="" title=""></a></li>
            <li><a href="#" title=""><img src="images/p_14.jpg" alt="" title=""></a></li> -->
        </ul>
    </div>
</section>
@endsection
