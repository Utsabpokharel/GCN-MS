<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'course','examdate'];
    use HasFactory;
}
