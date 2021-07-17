<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article_detail extends Model
{
    use HasFactory;
    public $incrementing = false;
    
    protected $fillable = [
        'article_id',
        'lecturer_id',
        'role',
    ];

    public function journal()
    {
        return $this->belongsTo(Journal::class,'id');
    }
}
