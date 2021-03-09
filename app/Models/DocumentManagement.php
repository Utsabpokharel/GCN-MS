<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentManagement extends Model
{
    use SoftDeletes;
    protected $fillable = ['staffname', 'bankaccountnumber', 'pannumber', 'pfdocument', 'citdocument', 'appointmentdocument', 'contractdocument'];
    use HasFactory;
}