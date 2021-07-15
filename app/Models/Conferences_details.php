<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conferences_details extends Model
{
    use HasFactory;
    public $incrementing = false;
    
    protected $fillable = [
        'conference_id',
        'lecturer_id',
        'role',
    ];

    public function conference()
    {
        return $this->belongsTo(Conferences::class,'id');
    }
    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class,'id');
    }
}
