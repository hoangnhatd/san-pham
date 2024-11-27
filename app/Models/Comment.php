<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comment'; 
    protected $primaryKey = 'customer_id';
    protected $fillable = ['id','customer_id', 'product_id', 'content', 'evaluate'];

    // Quan hệ với bảng khách hàng (customer)
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id','customer_id');  // customer_id là khóa ngoại trong bảng comment
    }

    // Quan hệ với bảng sản phẩm (product)
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id','product_id'); // Đảm bảo chỉ rõ product_id nếu cần
    }
}