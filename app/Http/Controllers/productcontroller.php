<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class productcontroller extends Controller
{
    public function index()
    {
        $products = product::all(); // Retrieve the first (or only) record from the database
        return view('product.index', compact('products'));
    }
    // public function destroy($product_id)
    // {
    //     $product = product::findOrFail($product_id);  // Tìm sản phẩm theo id, tự động trả về 404 nếu không tìm thấy
    //     $product->delete();  // Xóa sản phẩm

    //     return redirect()->route('product.index')->with('success', 'Sản phẩm đã được xóa');
    // }
    public function themmoi()
    {
        return view('product.them-moi');
    }
    public function xulythemmoi(Request $request)
    {
        $product = new product();
        $product->product_id = $request->product_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->desc = $request->desc;
        $product->product_sold = $request->product_sold;
        $product->product_image = $request->product_image;
        $product->save();
        return redirect()->route('product.index')->with(['thong_bao' => "Thêm mới sản phẩm thành công"]);
    }
    public function capnhat($product_id)
    {
        $product = product::find(id: $product_id);
        if (empty($product)) {
            return "Sản phẩm không tồn tại";
        }
        return view('product.update', data: compact('product'));
    }
    public function xulycapnhat(Request $request, $product_id)
    {
        $product = product::find($product_id);
        if (empty($product)) {
            return "Sản phẩm khong ton tai";
        }
        $product->product_id = $request->product_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->desc = $request->desc;
        $product->product_sold = $request->product_sold;
        $product->product_image = $request->product_image;
        $product->save();
        return "Cap nhat sản phẩm thanh cong";
    }
    public function xoa($product_id)
    {
        $product = product::find($product_id);
        if (empty($product)) {
            return "San pham khong ton tai";
        }
        $product->delete();
        return redirect()->route('product.index')->with(['thong_bao_xoa' => "Xóa sản phẩm thành công"]);
    }
}
    