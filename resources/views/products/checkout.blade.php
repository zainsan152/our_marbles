<link rel="icon" type="image/png" href="{{asset('images/logo.png')}}"/>
<title>Our Marbles</title>
@include('partials.css')
@include('partials.topbar')
<div class="row" style="margin-top: 50px; margin-left: 10px; margin-bottom: 50px; margin-right: 10px">
    <div class="col-md-8">
        <div class="bilinfo">
            <form class="needs-validation" action="{{route('checkout.store')}}" method="post" id="payment-form" novalidate="">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" name="billing_firstName" class="form-control" id="firstName" placeholder="" value="" required="">
                        @if($errors->has('billing_firstName'))
                            <div class="alert alert-danger">
                                {{$errors->first('billing_firstName')}}
                            </div>
                        @endif
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" name="billing_lastName" class="form-control" id="lastName" placeholder="" value="" required="">
                        @if($errors->has('billing_lastName'))
                            <div class="alert alert-danger">
                                {{$errors->first('billing_lastName')}}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="mb-3">
                    <label for="username">Username</label>
                    <div class="input-group">
                        <input type="text" name="username" class="form-control" id="username" placeholder="Username" required="">
                        @if($errors->has('username'))
                            <div class="alert alert-danger">
                                {{$errors->first('username')}}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">Email <span class="text-muted">(Optional)</span></label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com">
                    @if($errors->has('email'))
                        <div class="alert alert-danger">
                            {{$errors->first('email')}}
                        </div>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" name="billing_address1" class="form-control" id="address" placeholder="1234 Main St" required="">
                    @if($errors->has('billing_address1'))
                        <div class="alert alert-danger">
                            {{$errors->first('billing_address1')}}
                        </div>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                    <input type="text" name="billing_address2" class="form-control" id="address2" placeholder="Apartment or suite">
                    @if($errors->has('billing_address2'))
                        <div class="alert alert-danger">
                            {{$errors->first('billing_address2')}}
                        </div>
                    @endif
                </div>

                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">Country</label>
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
                    <div class="col-md-4 mb-3">
                        <label for="state">State</label>
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
                    <div class="col-md-3 mb-3">
                        <label for="zip">Zip</label>
                        <input type="text" name="billing_zip" class="form-control" id="zip" placeholder="" required="">
                        @if($errors->has('billing_zip'))
                            <div class="alert alert-danger">
                                {{$errors->first('billing_zip')}}
                            </div>
                        @endif
                    </div>
                </div>

                <hr class="mb-4">
                <div class="form-group">
                    <label for="card-element">
                        Credit or debit card
                    </label>
                    <div id="card-element">
                        <!-- A Stripe Element will be inserted here. -->
                    </div>

                    <!-- Used to display form errors. -->
                    <div id="card-errors" role="alert"></div>
                </div>

                <!-- <div id="paypal-button"></div>
                <script src="https://www.paypalobjects.com/api/checkout.js"></script>
                <script>
                  paypal.Button.render({
                    env: 'sandbox', // Or 'production'
                    // Set up the payment:
                    // 1. Add a payment callback
                    payment: function(data, actions) {
                      // 2. Make a request to your server
                      return actions.request.post('/api/create-payment/')
                        .then(function(res) {
                          // 3. Return res.id from the response
                          return res.id;
                        });
                    },
                    // Execute the payment:
                    // 1. Add an onAuthorize callback
                    onAuthorize: function(data, actions) {
                      // 2. Make a request to your server
                      return actions.request.post('/api/execute-payment/', {
                        paymentID: data.paymentID,
                        payerID:   data.payerID
                      })
                        .then(function(res) {
                          // 3. Show the buyer a confirmation message.
                        });
                    }
                  }, '#paypal-button');
                </script> -->
<!-- <script>
             paypal.Button.render({
               // Configure environment
               env: 'sandbox',
               client: {
                 sandbox: 'AZOGW6L_PICHnUN46xu8asEUgZo0uWcdlO-MwsZdyfLZZNz3AMja4mGB1Wsh0fmfP7xLA_Iqlvrbqx5s',
                 production: 'demo_production_client_id'
               },
               // Customize button (optional)
               locale: 'en_US',
               style: {
                 size: 'large',
                 color: 'gold',
                 shape: 'pill',
               },

               // Enable Pay Now checkout flow (optional)
               commit: true,

               // Set up a payment
               payment: function(data, actions) {
                 return actions.payment.create({
                   transactions: [{
                     amount: {
                       total: '0.01',
                       currency: 'USD'
                     }
                   }]
                 });
               },
               // Execute the payment
               onAuthorize: function(data, actions) {
                 return actions.payment.execute().then(function() {
                   // Show a confirmation message to the buyer
                   window.alert('Thank you for your purchase!');
                 });
               }
             }, '#paypal-button');

           </script>
                 -->           <!-- <script src="https://js.stripe.com/v3/"></script>
                <div class="form-row">
                    <label for="card-element">
                        Credit or debit card
                    </label>
                    <div id="card-element">
                        A Stripe Element will be inserted here.
                    </div>

                    Used to display form errors.
                    <div id="card-errors" role="alert"></div>
                </div> -->
                <hr class="mb-4">
                <div id="paypal-button"></div>
                <script src="https://www.paypalobjects.com/api/checkout.js"></script>
                <script>
                    paypal.Button.render({
                        // Configure environment
                        env: 'sandbox',
                        client: {
                            sandbox: 'AZOGW6L_PICHnUN46xu8asEUgZo0uWcdlO-MwsZdyfLZZNz3AMja4mGB1Wsh0fmfP7xLA_Iqlvrbqx5s',
                            production: 'demo_production_client_id'
                        },
                        // Customize button (optional)
                        locale: 'en_US',
                        style: {
                            size: 'large',
                            color: 'gold',
                            shape: 'pill',
                        },

                        // Enable Pay Now checkout flow (optional)
                        commit: true,

                        // Set up a payment
                        payment: function(data, actions) {
                            return actions.payment.create({
                                transactions: [{
                                    amount: {
                                        total: '0.01',
                                        currency: 'USD'
                                    }
                                }]
                            });
                        },
                        // Execute the payment
                        onAuthorize: function(data, actions) {
                            return actions.payment.execute().then(function() {
                                // Show a confirmation message to the buyer
                                window.alert('Thank you for your purchase!');
                            });
                        }
                    }, '#paypal-button');

                </script>



               {{-- <button class="btn btn-primary btn-lg btn-block" type="submit">Checkout</button>--}}
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

