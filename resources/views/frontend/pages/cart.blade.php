@extends('frontend.master')
@section('content')
    @include('frontend.partials.header')

    @include('frontend.partials.breadcrumb',['title1' => 'Cart',])
    <!-- Shopping Cart-->
    <section class="section section-xl bg-default">
        <div class="container">
            <!-- shopping-cart-->
            <div class="table-custom-responsive">
                @if (count(Cart::content()) == 0)
                    <p>
                        No item in cart
                    </p>
                @else
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
                            @foreach (Cart::content() as $index=>$row)
                                <tr data-id="{{ $loop->iteration }}">
                                    <td>
                                        <a class="table-cart-figure" href="single-product.html"><img
                                                src="{{ asset('/images/item/' . $row->options->image) }}" alt=""
                                                width="146" height="132" /></a><a class="table-cart-link"
                                            href="single-product.html">{{ $row->name }}</a>
                                    </td>
                                    <td>$ {{ $row->price }}</td>
                                    <td>
                                        <div class="">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <button onclick="decrement(this)" id="{{ $loop->iteration }}">-</button>
                                                </div>
                                                <div class="col-md-6">
                                                    <input class="form-input quantity update-cart" type="number" data-zeros="true" id="item_qty{{ $loop->iteration }}"
                                                        value="{{ $row->qty }}" min="1" max="1000" disabled="disabled">
                                                        <input type="hidden" id="rowId{{ $loop->iteration }}" value="{{ $row->rowId }}">
                                                </div>
                                                <div class="col-md-3">
                                                    <button onclick="increment(this)" id="{{ $loop->iteration }}">+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="price"> $ {{ $row->price * $row->qty }}</td>
                                    <td>
                                        <form action="{{ route('cart.destroy', $row->rowId) }}" method="POST">
                                            {{ method_field('DELETE') }}
                                            @csrf
                                            <button type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
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
                            {{-- <div class="group-md group-middle">
                            <div class="heading-5 fw-medium text-gray-500">SubTotal</div>
                            <div class="heading-3 fw-normal">$44</div>
                        </div> --}}
                            <div class="group-md group-middle">
                                <div class="heading-5 fw-medium text-gray-500">Total</div>
                                <div class="heading-3 fw-normal">$. {{ $newTotal }}</div>
                            </div>
                        </div>
                        <a class="button button-lg button-primary button-zakaria"
                            href="{{ route('checkout.index') }}">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function increment(elem) {
            let id=elem.id;
            let qty=document.getElementById('item_qty' + id).value;
            let new_quantity=parseInt(qty)+1
            document.getElementById('item_qty' + id).value=new_quantity;
            let rowId=document.getElementById('rowId'+id).value;
            save_to_db(rowId, new_quantity);

        }
        function decrement(elem) {
            let id=elem.id;
            let qty=document.getElementById('item_qty' + id).value;
            let rowId=document.getElementById('rowId'+id).value;
            if(qty>1){
                let new_quantity=parseInt(qty)-1;
                document.getElementById('item_qty' + id).value=new_quantity;
                save_to_db(rowId, new_quantity);
            }
        }  
        function save_to_db(rowId, new_quantity) {
            $.ajax({
                url : '/cart/'+rowId,
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',  
                    qty: new_quantity
                },
            success: function (response) {
                window.location.reload();
            }
            });
        }      
    </script>

@endsection
