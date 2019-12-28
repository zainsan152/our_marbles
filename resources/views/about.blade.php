<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}"/>
        <link rel="stylesheet" href="{{asset('assets/css1.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css2.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css3.css')}}">
        @include('partials.css')
        <title>Our Marbles</title>
    </head>
    <body>
        @include('partials.topbar')
        <section class="content contact-us">
            <h5>About us</h5>
            <p><i class="iconfont iconemail"></i><a  href="#"> info@ourmarbles.com</a> (Customer support)</p>
            <p><i class="iconfont iconemail"></i><a href="#"> +923047625271</a> (Cooperation inquiry)</p>
            <div class="logos">
                <a class="face"  href="#"><i class="iconfont icon_Facebook"></i></a>
                <div class="line"></div>
                <a class="twitter"  href="#"><i class="iconfont icon_Twitter"></i></a>
                <div class="line"></div>
                <a class="linked"  href="#"><i class="iconfont icon_LinkedIn"></i></a>
            </div>
        </section>
        @include('partials.letter')
        @include('partials.footer')
        @include('partials.js')
    </body>
</html>