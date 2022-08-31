<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['content',"email_destinataire","objet","id_sender"];


    public function users(){
        return $this->belongsTo(User::class,"id_sender")->withDefault();
    }

    public function comments() {

        return $this->hasMany(Comment::class,"id_sender");

    }
}
