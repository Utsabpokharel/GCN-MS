<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PayCalendar extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'payment','month'];
    use HasFactory;
}
