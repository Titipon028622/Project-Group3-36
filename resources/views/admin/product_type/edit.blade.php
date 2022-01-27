@extends('layouts.admin.admin')
 @section('conten')

 <div class="container-fluid">
    <div class="row pt-4 pl-4 pr-4">
      <!-- left column -->
      <div class="col-md-12">
 <div class="card card-success ">
    <div class="card-header">
      <h3 class="card-title">แก้ไข</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
        <form action="{{url('admin/product_type/Update/'.$category->id_type)}}" method="POST">
            @csrf
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="text" value="{{$category->typename}}" name="typename">
                            @error('typename')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
        </form>
        </div>
    </div>
</div>

 @endsection
