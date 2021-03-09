<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmployeeTermination extends Model
{
    use SoftDeletes;
    protected $fillable = ['staffname', 'staffcode', 'changestatus', 'noticedate', 'serviceenddate', 'forwardto', 'terminationdocument', 'reason', 'details'];
    use HasFactory;
}