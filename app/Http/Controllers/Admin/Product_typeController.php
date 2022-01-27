<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Products_type;
use Illuminate\Http\Request;

class Product_typeController extends Controller
{
    public function index(){
        $Products_type = Products_type::all();
        return view('admin.product_type.index',compact('Products_type'));
     }

    public function create(Request $request){
      //dd($request);
      $validatedData = $request->validate([
        'typename' => 'required|unique:products_types|max:255',
    ],
    [
        'typename.required' => 'กรุณาป้อนข้อมูลประเภทสินค้าก่อน',
        'typename.unique' => 'มีชื่อประเภทสินค้านี้อยู่ในฐานข้อมูลแล้ว',
        'typename.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
    ]);


        $category = new Products_type;
        $category->typename = $request->typename;
        $category->save();
        return redirect('/product_type/index')->with('success','บันทึกข้อมูลเรียบร้อยแล้ว');
     }

        public function edit($id_type){
            $category = Products_type::find($id_type);

            return view('admin.product_type.edit',compact('category'));
    }

        public function update(Request $request,$id_type){
            $validatedData = $request->validate([
                'typename' => 'required|unique:products_types|max:255',
            ],
            [
                'typename.required' => 'กรุณาป้อนข้อมูลประเภทสินค้าก่อน',
                'typename.unique' => 'มีชื่อประเภทสินค้านี้อยู่ในฐานข้อมูลแล้ว',
                'typename.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
            ]);
            $category = Products_type::find($id_type);
            $category->typename = $request->typename;
            $category->save();
            return redirect('/product_type/index')->with('update','แก้ไขข้อมูลเรียบร้อยแล้ว');
        }

        public function delete($id_type){
            Products_type::destroy($id_type);
            return redirect('/product_type/index');
        }

}
