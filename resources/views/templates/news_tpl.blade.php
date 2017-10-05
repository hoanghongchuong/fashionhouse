@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<section class="bcsection">
    <div class="container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('')}}" title="">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="{{url('tin-tuc')}}" title="">Tin tức</a></li>
        </ul>
    </div>
</section>

<section class="news">
    <div class="container">
        <h2 class="text-center newpro-tit">Tin tức nổi bật</h2>
        <div class="row">
            <div class="col-sm-12 news-wrap">
                <div class="row">
                    <div class="col-sm-12 col-md-6 news-wrap-l">
                        <a href="{{url('tin-tuc/'.$tintuc[0]->alias.'.html')}}" title="{{$tintuc[0]->name}}"><img src="{{asset('upload/news/'.$tintuc[0]->photo)}}" alt="{{$tintuc[0]->name}}" title=""></a>
                    </div>
                    <div class="col-sm-12 col-md-6 news-wrap-r">
                        <div class="news-wrap-r-content">
                            <h3 class="news-wrap-r-content-tit"><a href="{{url('tin-tuc/'.$tintuc[0]->alias.'.html')}}" title="{{$tintuc[0]->name}}">{{$tintuc[0]->name}}</a></h3>
                            <p class="news-wrap-r-content-time">{{date('d/m/Y',strtotime($tintuc[0]->created_at))}}</p>
                            <p>{{$tintuc[0]->mota}}</p>
                            <a href="{{url('tin-tuc/'.$tintuc[0]->alias.'.html')}}" title="{{$tintuc[0]->name}}" class="btn news-btn">Xem ngay</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 news-wrap">
                <div class="row">
                    <div class="col-sm-12 col-md-6 news-wrap-l">
                        <a href="{{url('tin-tuc/'.$tintuc[1]->alias.'.html')}}" title="{{$tintuc[1]->name}}"><img src="{{asset('upload/news/'.$tintuc[1]->photo)}}" alt="{{$tintuc[1]->name}}" title="{{$tintuc[1]->name}}"></a>
                    </div>
                    <div class="col-sm-12 col-md-6 news-wrap-r">
                        <div class="news-wrap-r-content">
                            <h3 class="news-wrap-r-content-tit"><a href="{{url('tin-tuc/'.$tintuc[1]->alias.'.html')}}" title="{{$tintuc[1]->name}}">{{$tintuc[1]->name}}</a></h3>
                            <p class="news-wrap-r-content-time">{{date('d/m/Y',strtotime($tintuc[0]->created_at))}}</p>
                            <p>{{$tintuc[0]->mota}}</p>
                            <a href="{{url('tin-tuc/'.$tintuc[1]->alias.'.html')}}" title="{{$tintuc[1]->name}}" class="btn news-btn">Xem ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="news-sec">
    <div class="container">
        <div class="row wrap ml-auto mr-auto">
            @for($i = 2; $i< count($tintuc); $i++)
            <div class="col-md-6 col-lg-4 news-item">
                <div>
                    <a href="{{url('tin-tuc/'.$tintuc[$i]->alias.'.html')}}" title=""><img src="{{asset('upload/news/'.$tintuc[$i]->photo)}}" alt="" title=""></a>
                </div>
                
                <h3><a href="{{url('tin-tuc/'.$tintuc[$i]->alias.'.html')}}" title="">{{$tintuc[$i]->name}}</a></h3>
                <h4 class="news-wrap-r-content-time">{{date('d/m/Y',strtotime($tintuc[$i]->created_at))}}</h4>
                <p>{{$tintuc[$i]->mota}}</p>
                <a href="{{url('tin-tuc/'.$tintuc[$i]->alias.'.html')}}" title="" class="btn news-btn">Xem ngay</a>
            </div>
            @endfor    
            

        </div>
        <div class="paginations">
            {!! $tintuc->links() !!}
        </div>
        <!-- <ul class="text-center pagi">
            <li><a href="#" title="">Preview</a></li>
            <li><a href="#" title="">1</a></li>
            <li><a href="#" title="">2</a></li>
            <li><a href="#" title="">3</a></li>
            <li><a href="#" title="">Next</a></li>
        </ul> -->
    </div>
</section>
@endsection
