<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Nếu dùng soft deletes

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer'; // Đảm bảo tên bảng chính xác
    public function comments()
    {
        return $this->hasMany(Comment::class, 'customer_id');
    }
}