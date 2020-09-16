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

    // ID
    public function getId() {
        return $this->attributes['id'];
    }
    public function setId($id) {
        $this->attributes['id'] = $id;
    }

    // Description
    public function getDescription() {
        return $this->attributes['description'];
    }
    public function setDescription($description) {
        $this->attributes['description'] = $description;
    }

    // Comment_id
    public function getCommentId() {
        return $this->attributes['comment_id'];
    }
    public function setCommentId($comment_id) {
        $this->attributes['comment_id'] = $comment_id;
    }

    // User_id
}
