<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}"/>
    @include('partials.css')
    <title>Our Marbles</title>
</head>
<body>
@include('partials.topbar')
<div class="slider__container slider--one bg__cat--3">
    <div class="slide__container slider__activation__wrap owl-carousel owl-loaded owl-drag">
        <!-- Start Single Slide -->

        <!-- End Single Slide -->
        <!-- Start Single Slide -->

        <!-- End Single Slide -->
        <div class="owl-stage-outer">
            <div class="owl-stage" style="transform: translate3d(-3038px, 0px, 0px); transition: all 0s ease 0s; width: 9116px;">
                <div class="owl-item animated owl-animated-in fadeIn cloned" style="width: 1519.2px;"><div class="single__slide animation__style01 slider__fixed--height">

                    </div>
                </div>
                <div class="owl-item animated owl-animated-in fadeIn cloned" style="width: 1519.2px;">
                    <div class="single__slide animation__style01 slider__fixed--height">
                                            </div>
                </div>
                <div class="owl-item animated owl-animated-in fadeIn active" style="width: 1519.2px;">
                    <div class="single__slide animation__style01 slider__fixed--height">
                        <div class="container">
                            <div class="row align-items__center">
                                <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                    <div class="slide">
                                        <div class="slider__inner">
                                            <h2>collection 2019</h2>
                                            <h1> Beautiful Designs</h1>
                                            <div class="cr__btn" >
                                                <a href="{{route('cart.all')}}" style="background-color: #c2a476;">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                    <div class="slide__thumb">
                                        <img src="{{asset('assetss/images/slider/fornt-img/1.jpg')}}" alt="slider images">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div></div><div class="owl-item animated owl-animated-in fadeIn" style="width: 1519.2px;"><div class="single__slide animation__style01 slider__fixed--height">

                    </div></div><div class="owl-item animated owl-animated-in fadeIn cloned" style="width: 1519.2px;"><div class="single__slide animation__style01 slider__fixed--height">

                    </div></div><div class="owl-item animated owl-animated-in fadeIn cloned" style="width: 1519.2px;"><div class="single__slide animation__style01 slider__fixed--height">
                    </div></div></div></div>

    </div>
</div>
<section class="htc__category__area ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">New Arrivals</h2>
                    <p>These are all very Beautiful and Attractive Designs</p>
                </div>
            </div>
        </div>
        <div class="htc__product__container">
            <div class="row">
                <div class="product__list clearfix mt--30" style="position: relative; height: 0px;">

                    <!-- Start Single Category -->
                    @foreach($products as $product)
                    <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                        <div class="category">
                            <div class="ht__cat__thumb">
                                    <img src="{{asset('uploads/'.$product->thumbnail)}}" style="height: 300px; width: 300px;" alt="product images">
                            </div>
                            <div class="fr__product__inner">
                                <h4>{{$product -> title}}</h4>
                                <ul class="fr__pro__prize">
                                    <li>Rs {{$product->price}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Single Category -->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftr__product__area ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">Best Seller</h2>
                    <p>But I must explain to you how all this mistaken idea</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product__wrap clearfix">
                <!-- Start Single Category -->
                <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                    <div class="category">
                        <div class="ht__cat__thumb">
                            <img src="{{asset('assetss/images/product/a.jpg')}}" alt="product images">
                        </div>
                        <div class="fr__product__inner">
                            <h4>Marseilees Chablis Ceramic Tile
                                </h4>
                            <ul class="fr__pro__prize">
                                <li class="old__prize"> Rs30</li>
                                <li>Rs 25</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Category -->
                <!-- Start Single Category -->
                <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                    <div class="category">
                        <div class="ht__cat__thumb">

                                <img src="{{asset('assetss/images/product/s.jpg')}}" alt="product images">

                        </div>
                        <div class="fr__product__inner">
                            <h4>Magic Gel Onyx MArbles</h4>
                            <ul class="fr__pro__prize">
                                <li class="old__prize"> Rs30</li>
                                <li>Rs 25</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Category -->
                <!-- Start Single Category -->
                <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                    <div class="category">
                        <div class="ht__cat__thumb">
                                <img src="{{asset('assetss/images/product/d.jpg')}}" alt="product images">
                        </div>
                        <div class="fr__product__inner">
                            <h4>Bronx</h4>
                            <ul class="fr__pro__prize">
                                <li class="old__prize"> Rs30</li>
                                <li>Rs 25</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Category -->
                <!-- Start Single Category -->
                <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                    <div class="category">
                        <div class="ht__cat__thumb">
                                <img src="{{asset('assetss/images/product/f.jpg')}}" alt="product images">
                        </div>
                        <div class="fr__product__inner">
                            <h4>Polished Marble Tiles </h4>
                            <ul class="fr__pro__prize">
                                <li class="old__prize"> Rs30</li>
                                <li>Rs 25</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Category -->
            </div>
        </div>
    </div>
</section>
<section class="htc__testimonial__area bg__cat--4">
    <div class="container">
        <div class="row">
            <div class="ht__testimonial__activation clearfix slick-initialized slick-slider"><button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: inline-block;">Previous</button>
                <!-- Start Single Testimonial -->
                <div aria-live="polite" class="slick-list draggable" style="padding: 0px 10px;"><div class="slick-track" style="opacity: 1; width: 4850px; transform: translate3d(-970px, 0px, 0px);" role="listbox"><div class="col-lg-6 col-md-6 single__tes slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1" style="width: 485px;">
                            <div class="testimonial">
                                <div class="testimonial__thumb">
                                    <img src="{{asset('assetss/images/test/client/DSC_8377.JPG')}}" alt="testimonial images"
                                    style="height: 89px; width: 89px;">
                                </div>
                                <div class="testimonial__details">
                                    <h4>Zain Ul Abideen</h4>
                                    <p>I’m up to something. Stay focused. The weather is amazing, walk with me through the pathway of more success. </p>
                                </div>
                            </div>
                        </div><div class="col-lg-6 col-md-6 single__tes slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide02" style="width: 485px;">
                            <div class="testimonial">
                                <div class="testimonial__thumb">
                                    <img src="{{asset('assetss/images/test/client/DSC_8377.JPG')}}" alt="testimonial images"
                                         style="height: 89px; width: 89px;">
                                </div>
                                <div class="testimonial__details">
                                    <h4><a href="#" tabindex="-1">Zain Ul Abideen</a></h4>
                                    <p>I’m up to something. Stay focused. The weather is amazing, walk with me through the pathway of more success. </p>
                                </div>
                            </div>
                        </div><div class="col-lg-6 col-md-6 single__tes slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" tabindex="-1" style="width: 485px;">
                            <div class="testimonial">
                                <div class="testimonial__thumb">
                                    <img src="{{asset('assetss/images/test/client/DSC_8377.JPG')}}" alt="testimonial images"
                                         style="height: 89px; width: 89px;">
                                </div>
                                <div class="testimonial__details">
                                    <h4>Fahad Sattar</h4>
                                    <p>I’m up to something. Stay focused. The weather is amazing, walk with me through the pathway of more success. </p>
                                </div>
                            </div>
                        </div><div class="col-lg-6 col-md-6 single__tes slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" tabindex="-1" style="width: 485px;">
                            <div class="testimonial">
                                <div class="testimonial__thumb">
                                    <img src="{{asset('assetss/images/test/client/DSC_8377.JPG')}}" alt="testimonial images"
                                         style="height: 89px; width: 89px;">
                                </div>
                                <div class="testimonial__details">
                                    <h4><a href="#" tabindex="-1">Zain Ul Abideen</a></h4>
                                    <p>I’m up to something. Stay focused. The weather is amazing, walk with me through the pathway of more success. </p>
                                </div>
                            </div>
                        </div></div></div>
                <!-- End Single Testimonial -->
                <!-- Start Single Testimonial -->

                <!-- End Single Testimonial -->
                <!-- Start Single Testimonial -->

                <!-- End Single Testimonial -->
                <!-- Start Single Testimonial -->

                <!-- End Single Testimonial -->
                <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: inline-block;">Next</button></div>
        </div>
    </div>
</section>
@include('partials.footer')

@include('partials.js')
</body>
</html>
