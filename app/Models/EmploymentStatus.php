<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmploymentStatus extends Model
{
    use SoftDeletes;
    protected $fillable = ['staffname', 'staffcode', 'employmentstatus', 'description', 'contract'];
    use HasFactory;
}