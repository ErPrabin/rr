@extends('frontend.master')
@section('content')
    @include('frontend.partials.header')

    @include('frontend.partials.breadcrumb',['title1' => 'Checkout',])
    
    <!-- Section checkout form-->
    <section class="section section-sm section-first bg-default text-md-start">
        <div class="container">
          <div class="row row-50 justify-content-center">
            <div class="col-md-10 col-lg-6">
              <h3 class="fw-medium">Billing Address</h3>
              <form class="rd-form rd-mailform form-checkout">
                <div class="row row-30">
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="checkout-first-name-1" type="text" name="first_name" data-constraints="@Required"/>
                      <label class="form-label" for="checkout-first-name-1">First Name</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="checkout-last-name-1" type="text" name="last_name" data-constraints="@Required"/>
                      <label class="form-label" for="checkout-last-name-1">Last Name</label>
                    </div>
                  </div>
                  {{-- <div class="col-12">
                    <div class="form-wrap">
                      <input class="form-input" id="checkout-company-1" type="text" name="name" data-constraints="@Required"/>
                      <label class="form-label" for="checkout-company-1">Company</label>
                    </div>
                  </div> --}}
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
                      <input class="form-input" id="checkout-email-1" type="email" name="email" data-constraints="@Email @Required"/>
                      <label class="form-label" for="checkout-email-1">E-Mail</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="checkout-phone-1" type="text" name="phone" data-constraints="@Numeric"/>
                      <label class="form-label" for="checkout-phone-1">Phone</label>
                    </div>
                  </div>
                </div>
                <label class="checkbox-inline text-transform-capitalize">
                  <input name="input-checkbox-1" value="checkbox-1" type="checkbox"/>My Billing Address and Shipping Address are the same
                </label>
              </form>
            </div>
            <div class="col-md-10 col-lg-6">
              <h3 class="fw-medium">Delivery Address</h3>
              <form class="rd-form rd-mailform form-checkout">
                <div class="row row-30">
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="checkout-first-name-2" type="text" name="billing_first_name" data-constraints="@Required"/>
                      <label class="form-label" for="checkout-first-name-2">First Name</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="checkout-last-name-2" type="text" name="billing_last_name" data-constraints="@Required"/>
                      <label class="form-label" for="checkout-last-name-2">Last Name</label>
                    </div>
                  </div>
                  {{-- <div class="col-12">
                    <div class="form-wrap">
                      <input class="form-input" id="checkout-company-2" type="text" name="name" data-constraints="@Required"/>
                      <label class="form-label" for="checkout-company-2">Company</label>
                    </div>
                  </div> --}}
                  <div class="col-12">
                    <div class="form-wrap">
                      <input class="form-input" id="checkout-address-2" type="text" name="billing_address" data-constraints="@Required"/>
                      <label class="form-label" for="checkout-address-2">Address</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <input class="form-input" id="checkout-city-2" type="text" name="billing_city" data-constraints="@Required"/>
                      <label class="form-label" for="checkout-city-2">City/Town</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="checkout-email-2" type="email" name="billing_email" data-constraints="@Email @Required"/>
                      <label class="form-label" for="checkout-email-2">E-Mail</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="checkout-phone-2" type="text" name="billing_phone" data-constraints="@Numeric"/>
                      <label class="form-label" for="checkout-phone-2">Phone</label>
                    </div>
                  </div>
                </div>
              </form>
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
                  <th>Action</th>
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
                              <div class="table-cart-stepper">
                              <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000">
                              </div>
                          </td>
                          <td class="price"> Rs. {{ $row->price * $row->qty }}</td>
                          <td>
                              
                              <form action="{{route('cart.destroy',$row->rowId)}}" method="POST">
                                  {{method_field('DELETE')}}
                                  @csrf
                                  <button type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>                                
                              </form>                                    
                          </td>
                      </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </section>
      <!-- Section Payment-->
      <form class="section section-sm section-last bg-default text-md-start" method="post" action="{{ route('checkout.store') }}">
        <div class="container">
          <div class="row row-50 justify-content-center">
            <div class="col-md-10 col-lg-6">
              <h3 class="fw-medium">Payment methods</h3>
              <div class="box-radio">
                <div class="radio-panel">
                  <label class="radio-inline active">
                    <input name="input-group-radio" value="checkbox-1" type="radio" checked>Cash on Delivery
                  </label>
                  <div class="radio-panel-content">
                    <p>Make your payment after your order has been received.</p>
                  </div>
                </div>
                <div class="radio-panel">
                  <label class="radio-inline">
                    <input name="input-group-radio" value="checkbox-1" type="radio">Esewa
                  </label>
                  <div class="radio-panel-content">
                    <p>Pay via Esewa</p>
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
              <a class="button button-lg button-primary button-zakaria" href="{{ route('checkout.index') }}">Place Order</a>
            </div>
          </div>
        </div>
      </form>

@endsection