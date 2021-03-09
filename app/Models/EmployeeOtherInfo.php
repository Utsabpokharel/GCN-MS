<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmployeeOtherInfo extends Model
{
    use SoftDeletes;
    protected $fillable = ['staffcode', 'title', 'organisation', 'fathername', 'mothername', 'grandfathername', 'parentcontactnumber', 'maritalstatus', 'spousename', 'emergencyphone', 'emergencynumber'];
    use HasFactory;
}