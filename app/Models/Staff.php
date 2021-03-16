<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staff extends Model
{
    use SoftDeletes;
    protected $fillable = ['fname', 'lname', 'gender','dob','photo','permanent_address','temporary_address',
    'city', 'district','phoneno', 'mobileno','department_id','title_id','level_id','panno','joined_date',
    'email', 'ctzn_front', 'ctzn_back','resume','appointment_letter','contract_agreement'];
    use HasFactory;
    
}
