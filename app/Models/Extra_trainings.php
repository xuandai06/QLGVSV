<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extra_trainings extends Model
{
    use HasFactory;
    public $incrementing = false;
    
    protected $fillable = [
        'id',
        'lecturer_id',
        'name',
        'specialization',
        'place',
        'start_time',
        'end_time',
        'result',
        'note',
    ];

    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class,'id');
    }
}
