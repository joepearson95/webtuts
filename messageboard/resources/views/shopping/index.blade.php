@extends('master')
@section('title', 'Homepage')

@section('hero')
<section id="hero">
    <div class="hero-container">
        <ol class="carousel-indicators" id="hero-carousel-indicators"><a href="#scroll-down"><i class="icofont-arrow-down"></i></a></ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <div class="carousel-content">
                        <h2 class="animate__animated animate__fadeInDown">Your <span>Basket</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
    <section id="scroll-down" class="scroll-down">
        <div class="container">
            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                  <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill">3</span>
                  </h4>
                  <ul class="list-group mb-3">
                    @if(session()->has('sessionBasket'))
                        @if(Session::get('sessionBasket'))
                            @foreach(Session::get('sessionBasket') as $basketItem) 
                                @foreach($basketItem as $item)
                                    <li class="list-group-item d-flex justify-content-between lh-condensed" id="{{ $item[0] }}">
                                      <div>
                                        <h6 class="my-0">{{ $item[1] }}</h6>
                                      </div>
                                      <span class="text-muted">{{ $item[2] }}</span>
                                    </li>
                                @endforeach
                            @endforeach
                        @else
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Login</h6>
                                </div>
                                <span class="text-muted">£0.00</span>
                            </li>
                        @endif
                    @endif
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (GBP)</span>
                        <strong id="total_amount"></strong>
                    </li>
                  </ul>
                </div>
                <div class="col-md-8 order-md-1">
                  <h4 class="mb-3">Complete Order</h4>
                  <form class="needs-validation" novalidate>
                    <div class="mb-3">
                      <label for="email">Email <span class="text-muted">(Optional)</span></label>
                      <input type="email" class="form-control" id="email" placeholder="you@example.com">
                      <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                      </div>
                    </div>

                    <div class="mb-3">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                      <div class="invalid-feedback">
                        Please enter your shipping address.
                      </div>
                    </div>

                    <hr class="mb-4">

                    <h4 class="mb-3">Payment</h4>

                    <div class="d-block my-3">
                      <!-- coming soon 
                      <div class="custom-control custom-radio">
                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                        <label class="custom-control-label" for="credit">Credit card</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="debit">Debit card</label>
                      </div>-->
                      <div class="custom-control custom-radio">
                        <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="paypal">PayPal</label>
                      </div>
                    </div>
                    <!-- coming soon
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label for="cc-name">Name on card</label>
                        <input type="text" class="form-control" id="cc-name" placeholder="" required>
                        <small class="text-muted">Full name as displayed on card</small>
                        <div class="invalid-feedback">
                          Name on card is required
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="cc-number">Credit card number</label>
                        <input type="text" class="form-control" id="cc-number" placeholder="" required>
                        <div class="invalid-feedback">
                          Credit card number is required
                        </div>
                      </div>
                    </div>
                      <div class="col-md-3 mb-3">
                        <label for="cc-expiration">Expiration</label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                        <div class="invalid-feedback">
                          Expiration date required
                        </div>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="cc-cvv">CVV</label>
                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                        <div class="invalid-feedback">
                          Security code required
                        </div>
                      </div>
                    </div>-->
                    <div class="row">
                    <hr class="mb-4">
                    <button class="btn btn-success btn-lg btn-block" type="submit">Continue to checkout</button>
                  </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('custom_js')
    <script type="text/javascript">
        $(document).ready(function (){
            var totalArray = [];
            var total = 0;
            $(".list-group-item .text-muted").each(function(i,v) {
                item = v.innerText;
                totalArray.push(parseFloat(item.substring(1)));
            });
            for(var i = 0, len = totalArray.length;i < len; i++) {
                total += totalArray[i];
            }
            $("#total_amount").text("£" + total.toFixed(2));
        });
    </script>
@endsection