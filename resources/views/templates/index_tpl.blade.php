@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$cateProducts = Cache::get('cateProducts');
?>
<section class="slider">
    <div class="container-flush">
        <div class="owl-carousel owl-theme carousel_top">
            <div class="item">
                <a href="#" title=""><img src="images/1-1.jpg" alt="" title=""></a>
                <a href="#" class="top-btn">View Now</a>
            </div>
            <div class="item">
                <a href="#" title=""><img src="images/1-1.jpg" alt="" title=""></a>
                <a href="#" class="top-btn">View Now</a>
            </div>
            <div class="item">
                <a href="#" title=""><img src="images/1-1.jpg" alt="" title=""></a>
                <a href="#" class="top-btn">View Now</a>
            </div>
        </div>
    </div>
</section>

<section class="banner">
    <div class="container">
        <div class="row wrap banner-row">
            <div class="col-md-6 banner-item"><!-- col-sm-12  -->
                <a href="pro.html" title=""><img src="images/1-6.jpg" alt="" title=""></a>
            </div>
            <div class="col-md-6 banner-item"><!-- col-sm-12  -->
                <a href="pro.html" title=""><img src="images/1-7.jpg" alt="" title=""></a>
            </div>

            <div class="col-md-4 banner-item"><!-- col-sm-12  -->
                <div class="banner-wrap">
                    <a href="pro.html" title=""><img src="images/1-13.jpg" alt="" title=""></a>
                    <div class="banner-intro">
                        <div>
                            <h2 class="text-uppercase banner-intro-tit">Đồ thu đông</h2>
                            <h3 class="banner-intro-quan">117 sản phẩm</h3>
                        </div>
                        
                        <a href="pro.html" title="" class="banner-btn">Xem ngay</a>
                    </div>
                </div>
                
            </div>
            <div class="col-md-4 banner-item"><!-- col-sm-12  -->
                <div class="banner-wrap">
                    <a href="pro.html" title=""><img src="images/1-14.jpg" alt="" title=""></a>
                    <div class="banner-intro">
                        <div>
                            <h2 class="text-uppercase banner-intro-tit">Đầm dạ hội</h2>
                            <h3 class="banner-intro-quan">117 sản phẩm</h3>
                        </div>
                        
                        <a href="pro.html" title="" class="banner-btn">Xem ngay</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 banner-item"><!-- col-sm-12  -->
                <div class="banner-wrap">
                    <a href="pro.html" title=""><img src="images/1-15.jpg" alt="" title=""></a>
                    <div class="banner-intro">
                        <div>
                            <h2 class="text-uppercase banner-intro-tit">Thu hè 2017 mới</h2>
                            <h3 class="banner-intro-quan">117 sản phẩm</h3>
                        </div>
                        
                        <a href="pro.html" title="" class="banner-btn">Xem ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="new-product">
    <div class="container">
        <h2 class="text-center newpro-tit">Sản phẩm mới</h2>
        <div class="row wrap">
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="newpro-wrap">
                    <a href="pro-detail.html" class="newpro-over" title=""><img src="images/1-5.jpg" alt="" title=""></a>
                </div>
                <div class="newpro-intro">
                    <h3 class="text-center newpro-intro-name"><a href="pro-detail.html" title="">Bella Lace Ribbon Tie Dress</a></h3>
                    <h4 class="text-center newpro-intro-price">$<span>108.00</span></h4>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="newpro-wrap">
                    <a href="pro-detail.html" class="newpro-over" title=""><img src="images/1-4.jpg" alt="" title=""></a>
                </div>
                <div class="newpro-intro">
                    <h3 class="text-center newpro-intro-name"><a href="pro-detail.html" title="">Melissa Lace Ruffle Dress</a></h3>
                    <h4 class="text-center newpro-intro-price">$<span>118.00</span></h4>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="newpro-wrap">
                    <a href="pro-detail.html" class="newpro-over" title=""><img src="images/1-3.jpg" alt="" title=""></a>
                </div>
                <div class="newpro-intro">
                    <h3 class="text-center newpro-intro-name"><a href="pro-detail.html" title="">Bella Lace Ribbon Tie Dress</a></h3>
                    <h4 class="text-center newpro-intro-price">$<span>108.00</span></h4>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="newpro-wrap">
                    <a href="pro-detail.html" class="newpro-over" title=""><img src="images/1-2.jpg" alt="" title=""></a>
                </div>
                <div class="newpro-intro">
                    <h3 class="text-center newpro-intro-name"><a href="pro-detail.html" title="">Melissa Lace Ruffle Dress</a></h3>
                    <h4 class="text-center newpro-intro-price">$<span>118.00</span></h4>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="newpro-wrap">
                    <a href="pro-detail.html" class="newpro-over" title=""><img src="images/1-6_02.jpg" alt="" title=""></a>
                </div>
                <div class="newpro-intro">
                    <h3 class="text-center newpro-intro-name"><a href="pro-detail.html" title="">Bella Lace Ribbon Tie Dress</a></h3>
                    <h4 class="text-center newpro-intro-price">$<span>108.00</span></h4>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="newpro-wrap">
                    <a href="pro-detail.html" class="newpro-over" title=""><img src="images/1-8.jpg" alt="" title=""></a>
                </div>
                <div class="newpro-intro">
                    <h3 class="text-center newpro-intro-name"><a href="pro-detail.html" title="">Melissa Lace Ruffle Dress</a></h3>
                    <h4 class="text-center newpro-intro-price">$<span>118.00</span></h4>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="newpro-wrap">
                    <a href="pro-detail.html" class="newpro-over" title=""><img src="images/1-9.jpg" alt="" title=""></a>
                </div>
                <div class="newpro-intro">
                    <h3 class="text-center newpro-intro-name"><a href="pro-detail.html" title="">Bella Lace Ribbon Tie Dress</a></h3>
                    <h4 class="text-center newpro-intro-price">$<span>108.00</span></h4>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="newpro-wrap">
                    <a href="pro-detail.html" class="newpro-over" title=""><img src="images/1-10.jpg" alt="" title=""></a>
                </div>
                <div class="newpro-intro">
                    <h3 class="text-center newpro-intro-name"><a href="pro-detail.html" title="">Melissa Lace Ruffle Dress</a></h3>
                    <h4 class="text-center newpro-intro-price">$<span>118.00</span></h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="news">
    <div class="container">
        <h2 class="text-center newpro-tit">Tin tức nổi bật</h2>
        <div class="row">
            <div class="col-sm-12 news-wrap">
                <div class="row">
                    <div class="col-sm-12 col-md-6 news-wrap-l">
                        <a href="news-detail.html" title=""><img src="images/1-11.jpg" alt="" title=""></a>
                    </div>
                    <div class="col-sm-12 col-md-6 news-wrap-r">
                        <div class="news-wrap-r-content">
                            <h3 class="news-wrap-r-content-tit"><a href="news-detail.html" title="">Những mẫu áo thời trang luôn được giới trẻ yêu thích nhất hiện nay.</a></h3>
                            <p class="news-wrap-r-content-time">24/04/2016</p>
                            <p>Áo sơ mi caro Hàn Quốc làm điên đảo giới trẻ trong những mùa thời trang gần đây tiếp tục sức nóng trong năm 2015 với những sắc mù mới.</p>
                            <a href="news-detail.html" title="" class="btn news-btn">Xem ngay</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 news-wrap">
                <div class="row">
                    <div class="col-sm-12 col-md-6 news-wrap-l">
                        <a href="news-detail.html" title=""><img src="images/1-12_02.jpg" alt="" title=""></a>
                    </div>
                    <div class="col-sm-12 col-md-6 news-wrap-r">
                        <div class="news-wrap-r-content">
                            <h3 class="news-wrap-r-content-tit"><a href="news-detail.html" title="">FH - Cùng các bạn gái Sài Thành xuống phố những ngày hè nắng nóng.</a></h3>
                            <p class="news-wrap-r-content-time">24/04/2016</p>
                            <p>Áo sơ mi caro Hàn Quốc làm điên đảo giới trẻ trong những mùa thời trang gần đây tiếp tục sức nóng trong năm 2015 với những sắc mù mới.</p>
                            <a href="news-detail.html" title="" class="btn news-btn">Xem ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-center"><a href="news.html" title="" class="btn news-bbtn">Xem tất cả</a></p>
    </div>
</section>

<section>
    <div class="container">
        <a href="#" title=""><img src="images/1-12.jpg" alt="" title=""></a>
    </div>
</section>

<section class="partner">
    <div class="container">
        <ul class="text-center partner-wrap">
            <li><a href="#" title=""><img src="images/p_03.jpg" alt="" title=""></a></li>
            <li><a href="#" title=""><img src="images/p_04.jpg" alt="" title=""></a></li>
            <li><a href="#" title=""><img src="images/p_05.jpg" alt="" title=""></a></li>
            <li><a href="#" title=""><img src="images/p_06.jpg" alt="" title=""></a></li>
            <li><a href="#" title=""><img src="images/p_07.jpg" alt="" title=""></a></li>
            <li><a href="#" title=""><img src="images/p_08.jpg" alt="" title=""></a></li>
            <li><a href="#" title=""><img src="images/p_15.jpg" alt="" title=""></a></li>
            <li><a href="#" title=""><img src="images/p_10.png" alt="" title=""></a></li>
            <li><a href="#" title=""><img src="images/p_11.jpg" alt="" title=""></a></li>
            <li><a href="#" title=""><img src="images/p_12.jpg" alt="" title=""></a></li>
            <!-- <li><a href="#" title=""><img src="images/p_13.jpg" alt="" title=""></a></li>
            <li><a href="#" title=""><img src="images/p_14.jpg" alt="" title=""></a></li> -->
        </ul>
    </div>
</section>
@endsection
