<link rel="icon" type="image/png" href="{{asset('images/logo.png')}}"/>
@include('partials.css')
@include('partials.topbar')
<div class="row" style="margin-top: 50px; margin-left: 10px; margin-bottom: 50px; margin-right: 10px">
    <div class="col-md-8">
        <div class="bilinfo">
            <form action="{{route('checkout.store')}}" method="post" id="payment-form" novalidate="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="single-input">
                            <input type="text" placeholder="First name" name="billing_firstName" class="form-control" id="firstName" value="" required="">
                            @if($errors->has('billing_firstName'))
                                <div class="alert alert-danger">
                                    {{$errors->first('billing_firstName')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-input">
                            <input type="text" placeholder="Last name"  name="billing_lastName" class="form-control" id="lastName" value="" required="">
                            @if($errors->has('billing_lastName'))
                                <div class="alert alert-danger">
                                    {{$errors->first('billing_lastName')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-input">
                            <input type="text" type="text" name="username" class="form-control" id="username" placeholder="Username" required="">
                            @if($errors->has('username'))
                                <div class="alert alert-danger">
                                    {{$errors->first('username')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-input">
                            <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com">
                            @if($errors->has('email'))
                                <div class="alert alert-danger">
                                    {{$errors->first('email')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-input">
                            <input type="text" name="billing_address1" class="form-control" id="address" placeholder="1234 Main St" required="">
                            @if($errors->has('billing_address1'))
                                <div class="alert alert-danger">
                                    {{$errors->first('billing_address1')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-input">
                            <input type="text" name="billing_address2" class="form-control" id="address2" placeholder="Apartment or suite">
                            @if($errors->has('billing_address2'))
                                <div class="alert alert-danger">
                                    {{$errors->first('billing_address2')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-input">
                            <select name="billing_country" class="custom-select d-block w-100" id="country" required="">
                                <option value="">Choose...</option>
                                <option>United States</option>
                            </select>
                            @if($errors->has('billing_country'))
                                <div class="alert alert-danger">
                                    {{$errors->first('billing_country')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-input">
                            <select name="billing_state" class="custom-select d-block w-100" id="state" required="">
                                <option value="">Choose...</option>
                                <option>California</option>

                            </select>
                            @if($errors->has('billing_state'))
                                <div class="alert alert-danger">
                                    {{$errors->first('billing_state')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-input">
                            <input type="text" name="billing_zip" class="form-control" id="zip" placeholder="Zip" required="">
                            @if($errors->has('billing_zip'))
                                <div class="alert alert-danger">
                                    {{$errors->first('billing_zip')}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                {{--<div class="row">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Paypal checkout</button>
                </div>--}}
            </form>
        </div>
    </div>
    <div class="col-md-4">
        <div class="order-details">
            @foreach($cart->getContents() as $id => $product)
            <h5 class="order-details__title">Your Order</h5>
            <div class="order-details__item">
                <div class="single-item">
                    <div class="single-item__thumb">
                        <img src="{{asset('uploads/'.$product['product']->thumbnail)}}" alt="ordered item">
                    </div>
                    <div class="single-item__content">
                        <a href="#">{{$product['product']->title}}</a>
                        <span class="price">{{$product['price']}}</span>
                    </div>
                </div>
            </div>
            <div class="order-details__count">
                <div class="order-details__count__single">
                    <h5>Per Piece</h5>
                    <span class="price">Rs {{$product['price']}}</span>
                </div>
                <div class="order-details__count__single">
                    <h5>Total Quantity</h5>
                    <span class="price">{{$cart->getTotalQty()}}</span>
                </div>
            </div>
            <div class="ordre-details__total">
                <h5>Order total</h5>
                <span class="price">Rs {{$cart->getTotalPrice()}}</span>
            </div>
                @endforeach
        </div>
    </div>
</div>

@include('partials.js')
@include('partials.footer')
