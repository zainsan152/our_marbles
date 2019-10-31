<!DOCTYPE html>
<html >
<head>
    <title>Our Marbles</title>
    <link href="{{asset('assetssss/css/bootstrap.min.css')}}" rel="stylesheet">

    @include('partials.css')
    <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}"/>
</head>
<body>
<div class="row" style="margin-left: 10px;">
    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
        <div class="logo">
            <a href="{{route('home')}}"><img src="{{asset('assetss/images/logo/logo.png')}}" alt="logo images"></a>
        </div>
    </div>
    <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
        <div class="header__right" style="margin-left: 1000px">
            <div class="header__account">
                <a href="{{route('login')}}"><i class="icon-user icons"></i></a>
            </div>
            <div class="htc__shopping__cart">
                <a  href="{{route('cart.all')}}"><i class="icon-handbag icons"></i></a>
            </div>
        </div>
    </div>
</div>
<br><br>
<div class="row">
    <div class="col-md-12">
        <h3 class="text-center display-3" >Online Predictor</h3>
    </div>
</div>

<br><br><br>
<div class="container">
    <form class="form-horizontal" method="POST" action="{{ route('calculate') }}">
        @csrf
        <div class="row text-center">
            <div class="col-md-3">
                <select class="form-control" name="operator" required>
                    <option value="" selected="">--Select Operator--</option>
                    <option value="plus"> + </option>
                    <option value="minus"> - </option>
                    <option value="multiply"> * </option>
                    <option value="divide"> / </option>
                </select>
            </div>
            <div class="col-md-3">
                <input class="form-control" type="number" name="first" placeholder="Enter first number here" required>
            </div>
            <div class="col-md-3">
                <input class="form-control" type="number" name="second" placeholder="Enter second number here" required>
            </div>
            <div class="col-md-3">
                <button class=" btn btn-warning" type="submit">Calculate</button>
            </div>
        </div>
    </form>
    <br><br><br>
    <div class="row text-center">
        <div class="col-md-2"></div>
        <div class="col-md-6">
            @if(session('info'))
                <div class="alert alert-info">
                    {{session('info')}}
                </div>
            @endif
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
<script src="{{asset('assetssss/js/jquery.js')}}"></script>
<script src="{{asset('assetssss/js/bootstrap.min.js')}}"></script>
@include('partials.footer')
@include('partials.js')
</body>
</html>
