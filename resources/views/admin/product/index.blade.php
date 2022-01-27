@extends('layouts.admin.admin')
 @section('conten')


 <div class="container pt-3">
    <div class="col-12">

        <div class="card card-primary">
            <div class="card-header bg-purple">
                <h3 class="card-title">Products</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('createP')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="name" class="form-control" name="name" id="name" placeholder="Enter Product Name">
                        <div class="row mt-3">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="description" class="form-control" name="description" id="description" placeholder="Enter Description">
                        <div class="row mt-3">
                            @error('description')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="price" class="form-control" name="price" id="price" placeholder="Enter Price">
                        <div class="row mt-3">
                            @error('price')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>




                      <div class="form-group">
                        <label for="category">Category</label>
                        <select name="type" class="form-control">
                            @foreach($categories as $category)
                            <option value="{{ $category->id_type }}">{{ $category->typename }}</option>
                            @endforeach
                        </select>
                        <div class="row mt-3">
                            @error('category')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group">
                    <label>Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                    </div>


                    <div class="row mt-3">
                            @error('image')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                </div>
                    <div class="card-footer">
                        <button type="submit" class="btn bg-purple">Submit</button>
                    </div>
            </form>
        </div>
    </div>
</div>






































 {{-- <div class="container">
     <div class="row pt-4">
        <h2> <p>Products</p></h2>
         <table class="table">
             <thead class="thead-dark">
                 <tr>
                     <th scope="col">ID</th>
                     <th scope="col">Name</th>
                     <th scope="col">Image</th>
                     <th scope="col">Product type</th>
                     <th scope="col">Price</th>
                     <th scope="col">Action</th>
                 </tr>
             </thead>
             <tbody>
                @foreach ($Products as $pro)
                 <tr>
                     <th scope="row">{{$pro->id_product}}</th>
                     <td>{{$pro->name}}</td>
                     <td>{{$pro->image}}</td>
                     <td>{{$pro->id_product}}</td>
                     <td>{{$pro->id_product}}</td>
                     <td>
                         <a href="" class="btn btn-success">Edit</a>
                         <a href="" class="btn btn-danger">Delete</a>
                     </td>
                 </tr>

             </tbody>
         </table>
     </div>
 </div> --}}

 @endsection



