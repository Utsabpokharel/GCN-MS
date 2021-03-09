<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Disciplinary extends Model
{
    use SoftDeletes;
    protected $fillable = ['staffname', 'casename', 'status', 'forwardto', 'disciplinaryaction', 'description'];
    use HasFactory;
}