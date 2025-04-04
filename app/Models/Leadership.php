<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leadership extends Model
{
    use HasFactory;

    protected $filliable = [
        'name',
        'role',
        'designation',
        'description',
        'leader_image',
        'status',
    ];
}
