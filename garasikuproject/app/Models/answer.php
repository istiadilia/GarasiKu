<?php

namespace App\Models;

use App\Models\User;
use App\Models\question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class answer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function questions() {
        return $this->belongsTo(question::class, 'question_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
