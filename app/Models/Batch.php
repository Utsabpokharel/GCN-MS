<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'year', 'month','course','section','shift'];
    use HasFactory;
}
