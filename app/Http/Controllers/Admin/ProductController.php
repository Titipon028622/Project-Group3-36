<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use App\Products_type;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware("VerifyIsCategory")->only(['index', 'create']);
    }

    public function index()
    {
        return view('admin.product.index')->with('categories', Products_type::all());
    }

    public function create(Request $request)
    {
        $validateData = $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'type' => 'required',
                'price' => 'required|numeric',
                'image' => 'mimes:jpeg,jpg,png,gif|file|max:12040',
            ],
            [
                'name.required' => 'กรุณาป้อนชื่อสินค้า',
                'description.required' => 'กรุณาป้อนรายละเอียดสินค้า',
                'type.required' => 'กรุณาป้อนประเภทสินค้า',
                'price.required' => 'กรุณาป้อนราคาสินค้า',
                'price.numeric' => 'ป้อนได้เฉพาะตัวเลขเท่านั้น',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
                'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดขนาดไม่เกิน 10MB',

            ]
        );

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->id_type = $request->type;


        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/img', $filename);
            Image::make(public_path() . '/admin/img/' . $filename);
            $product->image = $filename;
        } else {
            $product->image = 'nopic.jpg';
        }

        $product->save();
        return redirect()->route('index')->with('success', 'บันทึกข้อมูลเรียบร้อยแล้ว');
    }

    public function edit($id)
    {

        $editproduct = Product::find($id);
        $editproduc = Products_type::all();
        return view('admin.product.edit', compact('editproduct'), compact('editproduc'))
            ->with('categories', Products_type::all());
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $validateData = $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'type' => 'required',
                'price' => 'required|numeric',
                'image' => 'mimes:jpeg,jpg,png,gif|file|max:12040',
            ],
            [
                'name.required' => 'กรุณาป้อนชื่อสินค้า',
                'description.required' => 'กรุณาป้อนรายละเอียดสินค้า',
                'type.required' => 'กรุณาป้อนประเภทสินค้า',
                'price.required' => 'กรุณาป้อนราคาสินค้า',
                'price.numeric' => 'ป้อนได้เฉพาะตัวเลขเท่านั้น',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
                'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดขนาดไม่เกิน 10MB',


            ]
        );



        if ($request->hasFile('image')) {
            $product = Product::find($id);
            if ($product->image != 'nopic.jpg') {
                File::delete(public_path() . '/admin/img/' . $product->image);
            }

            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/img/', $filename);
            Image::make(public_path() . '/admin/img/' . $filename);
            $product->image = $filename;
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->id_type = $request->type;
        } else {
            $product = Product::find($id);
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->id_type = $request->type;
        }

        $product->save();
        return redirect()->route('index')->with('update', 'แก้ไขข้อมูลเรียบร้อยแล้ว');
    }
    public function delete($id)
    {
        $delete = Product::find($id);
        if ($delete->image != 'nopic.jpg') {
            File::delete(public_path() . '/admin/img/' . $delete->image);
        }
        $delete->delete();
        return redirect()->route('index');
    }
    public function findCategory($id_type)
    {
        $category = Products_type::find($id_type);

        return view('admin.product.findproduct')
            ->with('category', Products_type::all()->sortBy('typename'))
            ->with('product', $category->product);
    }
}
