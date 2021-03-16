<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incomecategory extends Model
{

    protected $fillable = ['name', 'description'];
    use HasFactory;
}
