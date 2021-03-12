<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnquiryCategory extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'description'];
    use HasFactory;
}
