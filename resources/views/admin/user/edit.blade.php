@extends('layouts.admin.admin')
 @section('conten')
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
        <form action="{{url('/admin/user/update/'.$users->id)}}" method="POST">
            @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="text" value="{{$users->name}}" name="name">
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" value="{{$users->email}}" name="email">
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="phone" class="form-control" id="phone" value="{{$users->phone}}" name="phone">
                            @error('phone')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
        </form>
        </div>
    </div>
</div>

 @endsection
