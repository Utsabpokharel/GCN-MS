<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    use SoftDeletes;
    protected $fillable = ['title', 'description'];
    use HasFactory;
}
