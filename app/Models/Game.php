<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['id', 'title', 'src', 'description', 'genre_id'];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }


    
    use HasFactory;
}
