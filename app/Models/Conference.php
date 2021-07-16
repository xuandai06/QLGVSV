<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    use HasFactory;
    public $incrementing = false;
    
    protected $fillable = [
        'id',
        'name',
        'time',
        'place',
        'note',
        'implementation_level_id',
    ];

    public function journal()
    {
        return $this->belongsTo(Implementation_level::class,'id');
    }
}
