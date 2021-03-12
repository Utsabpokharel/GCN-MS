<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use SoftDeletes;
    protected $fillable = ['fname', 'lname', 'gender','dob','email','image','phone','stdcat',
    'batch','section','course','address'];
    use HasFactory;
}
