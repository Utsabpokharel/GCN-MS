<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'category', 'source', 'endate', 'entime', 'remarks'];
    use HasFactory;
}
