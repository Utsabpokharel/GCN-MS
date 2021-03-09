<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmployeeResignation extends Model
{
    use SoftDeletes;
    protected $fillable = ['staffname', 'staffcode', 'noticedate', 'forwardto', 'desireresigndate', 'resignationdocument', 'reason', 'details'];
    use HasFactory;
}