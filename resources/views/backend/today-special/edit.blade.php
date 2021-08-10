@extends('backend.layout.layout')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route($page . '.update', $data->id) }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name </label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $data->name }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Price </label>
                                    <input type="text" class="form-control" id="price" name="price"
                                        value="{{ $data->price }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Delivery Time </label>
                                    <input type="text" class="form-control" id="delivery_time" name="delivery_time"
                                        value="{{ $data->delivery_time }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="name">Description </label>
                                    <textarea class="form-control" id="editor" name="description">{!! $data->description !!}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Image </label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sort">Sort </label>
                                    <input type="text" class="form-control" id="sort" name="sort"
                                        value="{{ $data->sort }}" required>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Submit</button>
                                {{-- <a href="{{ route('admin.'.$page.'.index') }}" class="btn btn-danger pull-right">Cancel</a> --}}
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->


                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
