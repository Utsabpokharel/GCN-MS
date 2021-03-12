<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayCalendar extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'payment','month'];
    use HasFactory;
}
