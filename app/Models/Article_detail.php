<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article_detail extends Model
{
    use HasFactory;
    public $incrementing = false;
    
    protected $fillable = [
        'id',
        'name',
        'detail',
        'role',
        'journal_id',
    ];

    public function journal()
    {
        return $this->belongsTo(Journal::class,'id');
    }
}