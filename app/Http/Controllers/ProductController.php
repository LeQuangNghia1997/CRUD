<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{


    public function index()
    {
        $products = Products::all();
        return view('index', compact('products'));
    }

    public function show($id)
    {
        $productKey = 'product_' . $id;
        if (!Session::has($productKey)) {
            Products::where('id', $id)->increment('view_count');
            Session::put($productKey, 1);
        }
        $product = Products::find($id);
        return view('show', compact('product')) ;
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $product = new Products(); //Khởi tạo đối tượng mới
//        // Gắn giá trị cho biến
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->view_count = $request->input('count');
        //kiếm tra xem có ảnh hay không
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $product->image = $path;
        }
        $product->save();
//        $message = "Tạo Product $request->name thành công!";
//        Session::flash('create-success', $message);

        return redirect()->route('index', compact('message'));
    }

    public function edit($id)
    {
        $product = Products::find($id);
        return view('layouts.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Products::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->view_count = $request->input('view_count');
        if ($request->hasFile('image')) {

            $currentImg = $product->image;
            if ($currentImg) {
                Storage::delete('/public/' . $currentImg);
            }
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $product->image = $path;
        }
        $product->save();

//        Session::flash('success', 'Cập nhật thành công');
        return redirect()->route('index');

    }

    public function delete($id)
    {
        $product = Products::findOrFail($id);
        $product->delete();
//        Session::flash('success', 'Xóa thành công');
        return redirect()->route('index');
    }

}

