<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topics_syllabuse extends Model
{
    use HasFactory;
    public $incrementing = false;

    protected $fillable = [
        'id',
        'name',
        'time',
        'result',
        'note',
        'kind_of_science_id',
        'implementation_id',
    ];

    public function kind_of_science()
    {
        return $this->belongsTo(Kind_of_science::class,'id');
    }
    public function position()
    {
        return $this->belongsTo(Implementation_level::class,'id');
    }
}
