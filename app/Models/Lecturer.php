<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'sex',
        'birthday',
        'hometown',
        'address',
        'phone_number',
        'note',
        'position_id',
        'level_id',
        'major_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'id');
    }
    // public function position()
    // {
    //     return $this->belongsTo(Position::class,'id');
    // }
    // public function major()
    // {
    //     return $this->belongsTo(Major::class,'id');
    // }
    // public function level()
    // {
    //     return $this->belongsTo(Level::class,'id');
    // }
}
