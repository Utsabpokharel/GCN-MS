<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staffatt extends Model
{

    protected $fillable = ['name', 'attendance', 'remarks'];
    use HasFactory;
}
