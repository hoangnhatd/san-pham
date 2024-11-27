<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'message',
    ];

    // If you want to set custom timestamps
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}