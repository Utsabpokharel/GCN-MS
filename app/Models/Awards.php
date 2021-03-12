<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Awards extends Model
{
    protected $fillable = ['staffname', 'awaname', 'gift','awadate','thankyou'];
    use HasFactory;
}
