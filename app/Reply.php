<?php
// Developed by Santiago Ramón Álvarez Gómez
namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = [
        'description', 'comment_id', 'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function comment() {
        return $this->belongsTo(Comment::class);
    }

    public function getGetDescriptionAttribute() {
        return $this->description;
    }
}
