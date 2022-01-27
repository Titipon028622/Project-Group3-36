@extends('layouts.admin.admin')
@section('conten')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 @if (session('success'))
 <script>
     Swal.fire({
         position: 'center',
         icon: 'success',
         title: 'บันทึกข้อมูลเรียบร้อย',
         showConfirmButton: false,
         timer: 2500
     })
 </script>
 @endif

 @if (session('update'))
 <script>
             Swal.fire({
     position: 'center',
     icon: 'success',
     title: 'แก้ไขข้อมูลเรียบร้อยแล้ว',
     showConfirmButton: false,
     timer: 2000
   })
 </script>
       @endif
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Mali&display=swap');
    </style>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Dashboard</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead class="bg-purple">
                        <tr>
                            <th>Product_id</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $products)
                        <tr>
                            <td>{{$products->id_product}}</td>
                            <td>{{$products->name}}</td>
                            <td>{{Str::limit($products->description,30)}}</td>
                            <td>
                               <img src="{{asset('admin/img/'.$products->image)}}" alt="" style="width:100px">
                           </td>
                            <td>{{$products->type->typename}}</td>
                            <td>{{number_format($products->price)}} บาท</td>
                            <td>
                                <a href="{{url('/admin/product/edit/'.$products->id_product)}}" class="btn btn-success">Edit</a>
                                <a href="{{url('/admin/product/delete/'.$products->id_product)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach

                        </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>

@endsection
