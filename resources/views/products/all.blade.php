<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Our Marbles</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}"/>
        <!-- Place favicon.ico in the root directory -->
        @include('partials.css')
    </head>
    <body>
        <!-- Body main wrapper start -->
        <div class="wrapper">
            <!-- Start Header Style -->
            <header id="htc__header" class="htc__header__area header--one">
                <!-- Start Mainmenu Area -->
                @include('partials.topbar')
                <!-- End Mainmenu Area -->
            </header>
            <!-- End Header Area -->
            <div class="body__overlay"></div>
            <!-- Start Offset Wrapper -->
            <div class="offset__wrapper">
                <!-- Start Search Popap -->
                <div class="search__area">
                    <div class="container" >
                        <div class="row" >
                            <div class="col-md-12" >
                                <div class="search__inner">
                                    <form action="#" method="get">
                                        <input placeholder="Search here... " type="text">
                                        <button type="submit"></button>
                                    </form>
                                    <div class="search__close__btn">
                                        <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Search Popap -->
                <!-- Start Cart Panel -->
                <!-- End Cart Panel -->
            </div>
            <!-- End Offset Wrapper -->
            <!-- Start Bradcaump area -->
            <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url('{{asset('assetss/images/bg/1.jpg')}}')  no-repeat scroll center center / cover ;">
                <div class="ht__bradcaump__wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="bradcaump__inner">
                                    <nav class="bradcaump-inner">
                                        <a class="breadcrumb-item" href="#">Home</a>
                                        <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                        <span class="breadcrumb-item active">Products</span>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Bradcaump area -->
            <!-- Start Product Grid -->
            <section class="htc__product__grid bg__white ptb--100">
                <div class="container">
                    @include('partials.message')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="htc__product__rightidebar">
                                <!-- Start Product View -->
                                <div class="row">
                                    <div class="shop__grid__view__wrap">
                                        <div role="tabpanel" id="grid-view" class="single-grid-view tab-pane fade in active clearfix">
                                            <!-- Start Single Product -->
                                            @foreach($products as $product)
                                            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                                <div class="category">
                                                    <div class="ht__cat__thumb">
                                                        <a href="product-details.html">
                                                            <img class="card-img-top img-thumbnail" src="{{asset('uploads/'.$product->thumbnail)}}" alt="product images"
                                                            style="height: 400px; width: 600px;">
                                                        </a>
                                                    </div>
                                                    <div class="fr__hover__info">
                                                        <ul class="product__action">
                                                            <li><a href="{{route('products.addToCart' , $product)}}"><i class="icon-handbag icons"></i></a></li>
                                                            <li><a href="{{route('products.single' , $product)}}"><i class="icon-shuffle icons"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="fr__product__inner">
                                                        <h4><a href="product-details.html">{{$product -> title}}</a></h4>
                                                        <ul class="fr__pro__prize">
                                                            <li>Rs {{$product->price}}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            <!-- End Single Product -->
                                        </div>
                                    </div>
                                    <!-- End Product View -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Product Grid -->
            <!-- Start Footer Area -->
            <footer id="htc__footer">
                <!-- Start Copyright Area -->
                @include('partials.footer')
                <!-- End Copyright Area -->
            </footer>
            <!-- End Footer Style -->
        </div>
        <!-- Body main wrapper end -->
        <!-- Placed js at the end of the document so the pages load faster -->
        <!-- jquery latest version -->
        @include('partials.js')
    </body>
</html>