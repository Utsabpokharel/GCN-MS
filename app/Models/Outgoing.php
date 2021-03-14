<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outgoing extends Model
{
    use HasFactory;
    protected $fillable = ['outtime','outdate','calledby','receivedby','remarks','purpose'];

}
