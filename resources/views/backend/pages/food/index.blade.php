@extends('backend.layout.layout')
@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="addbtn">
                <a href="{{ route($page . '.create') }}" class="btn btn-primary">Add More</a>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered" id="data-table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                        <th>Description</th>
                                        <th>Delivery Time</th>
                                        <th>Image</th>
                                        <th>Sort</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                        <tr>
                                            <td>{{ $d->name }}</td>
                                            <td>{{ $d->price }}</td>
                                            <td>{{ $d->category->name }}</td>
                                            <td>{!! $d->description !!}</td>
                                            <td>{{ $d->delivery_time }}</td>
                                            <td>
                                                <img src="{{ asset('images/' . $page . '/' . $d->image) }}" alt="null"
                                                    width="100px">
                                            </td>
                                            <td>
                                                {{ $d->sort }}
                                            </td>
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
