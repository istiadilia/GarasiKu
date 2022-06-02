<?php

namespace App\Models;

use App\Models\User;
use App\Models\answer;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class question extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function answers() {
        return $this->hasMany(answer::class, 'question_id', 'id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'quest_title'
            ]
        ];
    }
}
