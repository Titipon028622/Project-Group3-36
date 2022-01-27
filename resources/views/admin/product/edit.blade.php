@extends('layouts.admin.admin')
 @section('conten')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 @if (session('update'))
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
 <div class="container pt-3">
    <div class="col-12">

        <div class="card card-primary,font-family: 'Mali';">
            <div class="card-header bg-purple">
                <h3 class="card-title">Products</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{url('/admin/product/update/'.$editproduct->id_product)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="name" class="form-control" name="name" id="name" value="{{$editproduct->name}}">
                        <div class="row mt-3">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="description" class="form-control" name="description" id="description" value="{{$editproduct->description}}">
                        <div class="row mt-3">
                            @error('description')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="price" class="form-control" name="price" id="price" value="{{$editproduct->price}}">
                        <div class="row mt-3">
                            @error('price')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>




                      <!-- <div class="form-group">
                        <label for="category">Category</label>
                        <select name="type" id="type" class="form-control">
                            @foreach($editproduc as $type)
                            <option value="{{ $type->id_type }}">{{ $type->typename }}</option>
                            @endforeach
                        </select>
                        <div class="row mt-3">
                            @error('type')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div> -->

                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="type" id="type" class="form-control">
                            <option selected="selected" value="{{$editproduct->id_type}}">{{$editproduct->type->typename}}</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id_type }}">{{ $category->typename }}</option>
                            @endforeach
                        </select>
                        <div class="row mt-3">
                            @error('type')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                    <label for="text">Image</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="image" id="image">
                      <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                    <div class="mt-4">
                        <img id="showImage" src="{{asset('admin/img/'.$editproduct->image)}}" width="150px" alt="">

                    </div>
                    <div class="row mt-3">
                            @error('image')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                </div>
                    <div class="card-footer">
                        <button type="submit" class="btn bg-purple">Update</button>
                    </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>





































 @endsection



