<?php
namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Phương thức xem tất cả bình luận
    public function index(Request $request)
    {
        // Lấy tất cả bình luận cùng với thông tin khách hàng và sản phẩm
        // $comments = Comment::with(['customer', 'product'])->get();
        
        // Trả về view với biến $comments
        return view('contact.index');
    }
}