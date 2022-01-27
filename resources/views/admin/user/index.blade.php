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

 <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Users</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead class="bg-purple">
                        <tr>
                     <th scope="col">ID</th>
                     <th scope="col">Name</th>
                     <th scope="col" style="padding-right: 50px">E-Mail</th>
                     <th scope="col">Phone</th>
                     <th scope="col">Action</th>
                 </tr>
             </thead>
             <tbody>
                 @foreach ($users as $user)
                 <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>
                        <a href="{{url('/admin/user/edit/'.$user->id)}}" class="btn btn-success">Edit</a>
                        <a href="{{url('/admin/user/delete/'.$user->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                 @endforeach


             </tbody>
         </table>
     </div>
 </div>
 </div>
 </div>

 @endsection



