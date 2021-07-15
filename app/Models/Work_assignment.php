<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work_assignment extends Model
{
    use HasFactory;
    public $incrementing = false;

    protected $fillable = [
        'work_id',
        'unit_id',
        'role',
        'note',
    ];
}
