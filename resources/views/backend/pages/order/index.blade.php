@extends('backend.layout.layout')
@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="addbtn">
                <a href="{{ route('admin.'.$page . '.create') }}" class="btn btn-primary">Add More</a>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered" id="data-table">
                                <thead>
                                    <tr>
                                        <th>Order Id</th>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Total Price</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                        <tr>
                                            <td>{{ $d->id }}</td>
                                            <td>{{ $d->name }}</td>
                                            <td>
                                                @foreach ($d->itemorders as  $item)
                                                    {{ $item->quantity }}
                                                    <br>
                                                    
                                                @endforeach
                                            </td>
                                            <td>{!! $d->total !!}</td>
                                            <td>{{ $d->status }}</td>
                                           
                                            <td>
                                                @include('backend.include.action-btn')
                                              
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
