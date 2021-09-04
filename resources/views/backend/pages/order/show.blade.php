@extends('backend.layout.layout')
@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h2> <b> Order Details</b> </h2>
                    <b>Order ID: </b>{{ $order->id }}
                    <br>
                    <b>Order Date: </b>{{ $order->orderDate }}

                </div>
                <div class="col-md-6">
                    <h2><b> User Information</b></h2>
                    <b>Name: </b>{{ $order->user->name }}
                    <br>
                    <b>Email: </b>{{ $order->user->email }}
                    <br>
                    <b>Phone Number: </b>{{ $order->user->phone_number }}
                    <br>
                    <b>Address: </b>{{ $order->address }}
                    <br>
                    <b>City: </b>{{ $order->city }}
                    <br>
                </div>
                <div class="col-md-6">
                    <h2><b> Shipping Address</b></h2>
                    <b>Name: </b>{{ $order->shipping_name }}
                    <br>
                    <b>Email: </b>{{ $order->shipping_email }}
                    <br>
                    <b>Phone Number: </b>{{ $order->shipping_phone }}
                    <br>
                    <b>Address: </b>{{ $order->shipping_address }}
                    <br>
                    <b>City: </b>{{ $order->shipping_city }}
                    <br>
                </div>
                <div class="col-md-6">
                    <h2><b> Items Information</b></h2>
                     <b>Total Price: <h2 style="color: green"> $ {{$order->total  }}</h2> </b>
                     <br>
                     <b>Status:<a href="{{ route('admin.changestatus',$order->id) }}" class="badge {{ $order->status=='pending'?'badge-danger':"badge-primary" }} ">{{ $order->status }}</a></b>
                </div>
            </div>
            <div class="detail-table" style="padding-top: 50px">
                <table class="table table-bordered" id="data-table" style="margin-top:50px">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->itemorders as $item)
                            <tr>
                                <td>{{ $item->item->name }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>$ {{ $item->item->price }}</td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>



        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
