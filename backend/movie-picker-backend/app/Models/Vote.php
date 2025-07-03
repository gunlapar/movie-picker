<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_id',
        'user_id',
        'tmdb_movie_id',
        'movie_data',
    ];

    protected $casts = [
        'movie_data' => 'array',
    ];

    public function group(){
        return $this -> belongsTo(Group::class);
    }

    public function user() {
        return $this -> belongsTo(User::class);
    }


    
}
