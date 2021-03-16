<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use SoftDeletes;
    protected $fillable = ['fname', 'lname','email','image','phone','teachcat',
    'batch','course','teachtime','address'];
    use HasFactory;
}
