<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use SoftDeletes;
    protected $fillable = ['expdate', 'particular','amount','paidby','catid','payment','receivedby','status',];
    use HasFactory;
}
