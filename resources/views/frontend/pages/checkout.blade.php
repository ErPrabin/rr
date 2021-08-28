@extends('frontend.master')
@section('content')
  @include('frontend.partials.header')

  @include('frontend.partials.breadcrumb',['title1' => 'Checkout',])
  
  <!-- Section checkout form-->
  <form method="post" action="{{ route('order.store') }}">
    @csrf
    <section class="section section-sm section-first bg-default text-md-start">
      <div class="group-xl group-middle">
        @include('frontend.partials.alert')
      </div>
      <div class="container">
        <div class="row row-50 justify-content-center">
          <div class="col-md-10 col-lg-6">
            <h3 class="fw-medium">Billing Address</h3>
            <div class="row row-30">
              <div class="col-12">
                <div class="form-wrap">
                  <input class="form-input" id="checkout-first-name-1" type="text" name="name" value="{{ auth()->user() ? auth()->user()->name : "" }}" data-constraints="@Required"/>
                  <label class="form-label" for="checkout-first-name-1">Name</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap">
                  <input class="form-input" id="checkout-address-1" type="text" name="address" data-constraints="@Required"/>
                  <label class="form-label" for="checkout-address-1">Address</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap">
                  <input class="form-input" id="checkout-city-1" type="text" name="city" data-constraints="@Required"/>
                  <label class="form-label" for="checkout-city-1">City/Town</label>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-wrap">
                  <input class="form-input" id="checkout-email-1" type="email" name="email" value="{{ auth()->user() ? auth()->user()->email : "" }}" data-constraints="@Email @Required"/>
                  <label class="form-label" for="checkout-email-1">E-Mail</label>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-wrap">
                  <input class="form-input" id="checkout-phone-1" type="text" name="phone" value="{{ auth()->user() ? auth()->user()->phone_number : "" }}" data-constraints="@Numeric"/>
                  <label class="form-label" for="checkout-phone-1">Phone</label>
                </div>
              </div>
            </div>
            <label class="checkbox-inline text-transform-capitalize">
              <input value="yes" name="different_address" type="checkbox"/>My Billing Address and Shipping Address are the same
            </label>
          </div>
          <div class="col-md-10 col-lg-6">
            <h3 class="fw-medium">Delivery Address</h3>
            <div class="row row-30">
              <div class="col-12">
                <div class="form-wrap">
                  <input class="form-input" id="checkout-first-name-2" type="text" name="shipping_name">
                  <label class="form-label" for="checkout-first-name-2">Name</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap">
                  <input class="form-input" id="checkout-address-2" type="text" name="shipping_address">
                  <label class="form-label" for="checkout-address-2">Address</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap">
                  <input class="form-input" id="checkout-city-2" type="text" name="shipping_city" data-constraints="@Required"/>
                  <label class="form-label" for="checkout-city-2">City/Town</label>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-wrap">
                  <input class="form-input" id="checkout-email-2" type="email" name="shipping_email">
                  <label class="form-label" for="checkout-email-2">E-Mail</label>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-wrap">
                  <input class="form-input" id="checkout-phone-2" type="text" name="shipping_phone">
                  <label class="form-label" for="checkout-phone-2">Phone</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
      <!-- Shopping Cart-->
    <section class="section section-sm bg-default text-md-start">
      <div class="container">
        <h3 class="fw-medium">Your shopping cart</h3>
        <div class="table-custom-responsive">
          <table class="table-custom table-cart">
            <thead>
              <tr>
                <th>Product name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
                @foreach(Cart::content() as $row)
                    <tr>
                      <td>
                          <a class="table-cart-figure" href="single-product.html"><img src="{{ asset('/images/item/'. $row->options->image ) }}" alt="" width="146" height="132"/></a><a class="table-cart-link" href="single-product.html">{{ $row->name }}</a>
                      </td>
                      <td>Rs. {{ $row->price }}</td>
                      <td>
                        {{ $row->qty }}
                      </td>
                      <td class="price"> Rs. {{ $row->price * $row->qty }}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <!-- Section Payment-->
    <section class="section section-sm section-last bg-default text-md-start">
      <div class="container">
        <div class="row row-50 justify-content-center">
          <div class="col-md-10 col-lg-6">
            <h3 class="fw-medium">Payment methods</h3>
            <div class="box-radio">
              <div class="radio-panel">
                <label class="radio-inline active">
                  <input name="payment_gateway" value="cod" type="radio" checked>Cash on Delivery
                </label>
                <div class="radio-panel-content">
                  <p>Make your payment after your order has been received.</p>
                </div>
              </div>
              <div class="radio-panel">
                <label class="radio-inline">
                  <input name="payment_gateway" value="card" type="radio">Card Payment
                </label>
                <div class="radio-panel-content">
                  <p>Pay via Stripe</p>
                  <div class="row row-6">
                    <div class="col-sm-6">
                      <div class="form-wrap">
                        <input class="form-input" type="text" name="expiry_month"/>
                        <label class="form-label" for="checkout-address-1">Card Number</label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-wrap">
                        <input class="form-input" type="text" name="expiry_month"/>
                        <label class="form-label" for="checkout-address-1">Expiry Month</label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-wrap">
                        <input class="form-input" type="text" name="expiry_date"/>
                        <label class="form-label" for="checkout-address-1">Expiry Year</label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-wrap">
                        <input class="form-input" id="checkout-city-1" type="text" name="cvc"/>
                        <label class="form-label" for="checkout-city-1">CVC</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-10 col-lg-6">
            <h3 class="fw-medium">Cart total</h3>
            <div class="table-custom-responsive">
              <table class="table-custom table-custom-primary table-checkout">
                <tbody>
                  <tr>
                    <td>Cart Subtotal</td>
                    <td>Rs. {{ $newTotal }}</td>
                  </tr>
                  <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                  </tr>
                  <tr>
                    <td>Total</td>
                    <td>Rs. {{ $newTotal }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="group-xl group-middle">
            <input type="submit" class="button button-lg button-primary button-zakaria" value="Place Order"/>
          </div>
        </div>
      </div>
    </section>
  </form>
@endsection