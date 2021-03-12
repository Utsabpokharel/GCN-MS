<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use SoftDeletes;
    protected $fillable = ['user_id', 'accountholder_name', 'bank_name','branch_name','account_number'];
    use HasFactory;
}
