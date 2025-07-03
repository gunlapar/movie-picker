<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'creator_id',
        'status',
        'selected_movie',
    ];

    protected $casts = [
        'selected_movie' => 'array',
    ];

    public function creator() {
        return $this -> belongsTo(User::class, 'creator_id');
    }

    public function members() {
        return $this -> belongsToMany(User::class, 'group_members');
    }

    public function votes() {
        return $this -> hasMany(Vote::class);
    }

    public function groupMembers() {
        return $this -> hasMany(GroupMember::class);
    }
}
