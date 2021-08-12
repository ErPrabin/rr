@extends('frontend.master')
@section('content')
    @include('frontend.partials.header')

    @include('frontend.partials.breadcrumb',['title1' => 'Cart',])
    <!-- Shopping Cart-->
    <section class="section section-xl bg-default">
        <div class="container">
            <!-- shopping-cart-->
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
                    <tr>
                    <td><a class="table-cart-figure" href="single-product.html"><img src="images/product-mini-4-146x132.png" alt="" width="146" height="132"/></a><a class="table-cart-link" href="single-product.html">Forest Berry</a></td>
                    <td>$18.00</td>
                    <td>
                        <div class="table-cart-stepper">
                        <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000">
                        </div>
                    </td>
                    <td>$18</td>
                    </tr>
                    <tr>
                    <td><a class="table-cart-figure" href="single-product.html"><img src="images/product-mini-5-146x132.png" alt="" width="146" height="132"/></a><a class="table-cart-link" href="single-product.html">Tomatoes</a></td>
                    <td>$16.00</td>
                    <td>
                        <div class="table-cart-stepper">
                        <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000">
                        </div>
                    </td>
                    <td>$16</td>
                    </tr>
                </tbody>
                </table>
            </div>
            <div class="group-xl group-justify justify-content-center justify-content-md-between">
                <div>
                <form class="rd-form rd-mailform rd-form-inline rd-form-coupon">
                    <div class="form-wrap">
                    <input class="form-input form-input-inverse" id="coupon-code" type="text" name="text">
                    <label class="form-label" for="coupon-code">Coupon code</label>
                    </div>
                    <div class="form-button">
                    <button class="button button-lg button-secondary button-zakaria" type="submit">Apply</button>
                    </div>
                </form>
                </div>
                <div>
                <div class="group-xl group-middle">
                    <div>
                    <div class="group-md group-middle">
                        <div class="heading-5 fw-medium text-gray-500">Total</div>
                        <div class="heading-3 fw-normal">$44</div>
                    </div>
                    </div><a class="button button-lg button-primary button-zakaria" href="{{ route('checkout') }}">Proceed to checkout</a>
                </div>
                </div>
            </div>
        </div>
    </section>

@endsection