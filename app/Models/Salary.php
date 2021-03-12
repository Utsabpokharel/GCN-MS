<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'designation','pan','amount','currency','bankno','payment','joindate',];
    use HasFactory;
}
