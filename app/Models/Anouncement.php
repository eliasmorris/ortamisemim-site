<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anouncement extends Model
{
    use HasFactory;

    protected $fillable = [
        'tittle',
        'file_name',
        'status',

    ];
}
