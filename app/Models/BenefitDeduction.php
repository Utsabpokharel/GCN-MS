<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BenefitDeduction extends Model
{
    protected $fillable = ['name', 'bankno', 'amount', 'currency', 'payment','benefit', 'reason'];
    use HasFactory;
}
