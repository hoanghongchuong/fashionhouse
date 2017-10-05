@extends('index')
@section('content')
<section class="bcsection">
    <div class="container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('')}}" title="">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="{{url('tin-tuc')}}" title="">Tin tức</a></li>
            <li class="breadcrumb-item"><a href="#" title="{{$news_detail->name}}">{{$news_detail->name}}</a></li>
        </ul>
    </div>
</section>
<section class="pdetail">
    <div class="container">
        <h2 class="about-tit"><a href="about.html" title="">{{$news_detail->name}}</a></h2>
        <h3 class="ndetail-sumary">{{$news_detail->mota}}</h3>
        <div class="row pdetail-content">
            <div class="content-news col-md-9">
                {!! $news_detail->content !!}
            </div>
            <div class="col-sm-12 col-md-3 text-center ndetail-intro">
                <h2 class="text-uppercase news-articles"><u>Bài viết mới</u></h2>
                <ul class="text-left news-article">
                    @foreach($tintuc_moinhat_detail as $news)
                    <li><a href="{{url('tin-tuc/'.$news->alias.'.html')}}" title="{{$news->name}}">{{$news->name}}</a></li>
                    @endforeach
                </ul>
                <?php $banners = DB::table('banner_content')->where('position',4)->get(); ?>
                @foreach($banners as $banner)
                <a href="{{$banner->link}}" target="_blank" title=""><img src="{{asset('upload/banner/'.$banner->image)}}" alt="" title=""></a>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="npre">
    <div class="container">
        <h2 class="about-tit"><a href="about.html" title="">Tin liên quan</a></h2>
        <div class="row">
            @foreach($baiviet_khac as $item)
            <div class="col-md-6 col-lg-4 news-item">
                <div>
                    <a href="{{asset('tin-tuc/'.$item->alias.'.html')}}" title=""><img src="{{asset('upload/news/'.$item->photo)}}" alt="" title=""></a>
                </div>
                <h3><a href="{{asset('tin-tuc/'.$item->alias.'.html')}}" title="">{{$item->name}}</a></h3>
                <h4 class="news-wrap-r-content-time">{{date('d/m/Y', strtotime($item->created_at))}}</h4>
                <p>{{$item->mota}}</p>
                <a href="{{asset('tin-tuc/'.$item->alias.'.html')}}" title="" class="btn news-btn">Xem ngay</a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
