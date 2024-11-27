<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    use HasFactory;

    protected $table = 'contact_info'; // Define the table name (optional if follows conventions)

    // Specify which fields can be mass-assigned
    protected $fillable = [
        'shop_name',
        'address',
        'phone',
        'email',
        'fax',
        'business_hours',
        'social_links',
        'map',
    ];

    // If you want to set custom timestamps
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
