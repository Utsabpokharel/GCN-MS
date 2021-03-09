<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reporting extends Model
{
    use SoftDeletes;
    protected $fillable = ['staffname', 'staffcode', 'designation', 'department', 'phonenumber', 'emailaddress', 'reportingmanager'];
    use HasFactory;
}