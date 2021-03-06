<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RCourse extends Model
{
    use SoftDeletes;
    protected $fillable = ['title', 'department', 'coordinator', 'version', 'cost','currency', 'description'];
    use HasFactory;
}