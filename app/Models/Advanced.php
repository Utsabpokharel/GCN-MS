<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Advanced extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'bankno', 'amount', 'currency', 'payment', 'reason'];
    use HasFactory;
}
