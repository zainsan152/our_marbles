<!doctype html>
<html lang="en">
    <head>
        <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}"/>
        {{--<link rel="stylesheet" href="{{asset('assets/css1.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css2.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css3.css')}}">--}}
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
        <style type="text/css">
        .box{
        width:600px;
        margin:0 auto;
        border:1px solid #ccc;
        }
        .has-error
        {
        border-color:#cc0000;
        background-color:#ffff99;
        }
        </style>
        <title>Our Marbles</title>
        @include('partials.css')
    </head>
    <body>
        @include('partials.topbar')
        {{--<section class="content contact-us">
            <h5>Contact us</h5>
            <p><i class="iconfont iconemail"></i><a  href="#"> info@ourmarbles.com</a> (Customer support)</p>
            <p><i class="iconfont iconemail"></i><a href="#"> +923047625271</a> (Cooperation inquiry)</p>
            <div class="logos">
                <a class="face"  href="#"><i class="iconfont icon_Facebook"></i></a>
                <div class="line"></div>
                <a class="twitter"  href="#"><i class="iconfont icon_Twitter"></i></a>
                <div class="line"></div>
                <a class="linked"  href="#"><i class="iconfont icon_LinkedIn"></i></a>
            </div>
        </section>--}}
        <br />
        <div class="container box">
            <br>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
            <form method="post" action="{{url('contact/send')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Your Name</label>
                    <input type="text" name="name" class="form-control" value="" />
                </div>
                <div class="form-group">
                    <label>Your Email</label>
                    <input type="text" name="email" class="form-control" value="" />
                </div>
                <div class="form-group">
                    <label>Your Message</label>
                    <textarea name="message" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="send" class="btn btn-info" value="Send" style="background-color: #c2a476;
                    border-color: #8a6d3b;"/>
                </div>
            </form>
        </div>
        <br>
        @include('partials.footer')
        @include('partials.js')
    </body>
</html>