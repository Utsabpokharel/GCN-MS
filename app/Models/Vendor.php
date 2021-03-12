<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use SoftDeletes;
    protected $fillable = ['fname', 'lname', 'gender','dob','registrationnumber','panvatnumber','image','email','permanent_address','temporary_address',
    'city', 'district','mobile','department_id','title_id','level_id','joined_date',
    'ctzn_front', 'ctzn_back','resume','appointment_letter','contract_agreement'];
    use HasFactory;
}
