@extends('frontend.master')
@section('content')
    @include('frontend.partials.header')

    @include('frontend.partials.breadcrumb',['title1' => 'Menu',])

    <section class="section section-xl bg-default">
        <div class="container">
            <div class="row row-50 justify-content-center">
                <div class="col-md-10 col-lg-6">
                    <h3 class="fw-medium">Order Details</h3>
                    <div class="table-custom-responsive">
                        <table class="table-custom table-cart">
                            <tbody>
                                <tr>
                                    <td>Order ID:</td>
                                    <td> {{ $order->id }}</td>
                                </tr>
                                <tr>
                                    <td>Order Email:</td>
                                    <td> {{ $order->email }}</td>
                                </tr>
                                <tr>
                                    <td>Order Billing Name:</td>
                                    <td> {{ $order->name }}</td>
                                </tr>
                                <tr>
                                    <td>Payment:</td>
                                    <td> {{ $order->payment_gateway }}</td>
                                </tr>
                            </tbody>
                        </table>

                        @foreach ($order->items as $item )
                        <table class="table-custom table-cart">
                            <tbody>
                                <tr>
                                    <td> Name: </td>
                                    <td> {{ $item->name }} </td>
                                </tr>
                                <tr>
                                    <td> Quantity: </td>
                                    <td> {{ $item->pivot->quantity }} </td>
                                </tr>
                            </tbody>
                        </table>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection