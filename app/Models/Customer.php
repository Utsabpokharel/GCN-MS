<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;
    protected $fillable = ['fname', 'lname', 'gender', 'dob', 'email', 'image','phone', 'mobile', 'city', 'district', 'permanent_address', 'temporary_address','customer_type','frontcitizenshipimage', 'backcitizenshipimage'];
    use HasFactory;
}
