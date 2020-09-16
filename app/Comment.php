<?php
// Developed by Santiago Ramón Álvarez Gómez
namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'description', 'post_id', 'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function post() {
        return $this->belongsTo(Post::class);
    }

    public function replies() {
        return $this->hasMany(Reply::class);
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

    // Post_id
    public function getPostId() {
        return $this->attributes['post_id'];
    }
    public function setPostId($post_id) {
        $this->attributes['post_id'] = $post_id;
    }

    // User_id
    public function getUserId() {
        return $this->attributes['user_id'];
    }
    public function setUserId($user_id) {
        $this->attributes['user_id'] = $user_id;
    }
}
