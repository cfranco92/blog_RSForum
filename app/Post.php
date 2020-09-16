<?php
// Developed by Cristian Franco Bedoya
namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Sluggable;

    protected $fillable = [
        'title', 'body', 'iframe', 'image', 'user_id'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true
            ]
        ];
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getGetExcerptAttribute() {
        return substr($this->body, 0, 140);
    }
    
    public function getGetImageAttribute() {
        if($this->image) {
            return url("storage/$this->image");
        }
    }
    
    public function comments() {
        return $this->hasMany(Comment::class);
    }

    // ID
    public function getId() {
        return $this->attributes['id'];
    }
    public function setId($id) {
        $this->attributes['id'] = $id;
    }

    // Title
    public function getTitle() {
        return $this->attributes['title'];
    }
    public function setTitle($title) {
        $this->attributes['title'] = $title;
    }

    // Body
    public function getBody() {
        return $this->attributes['body'];
    }
    public function setBody($body) {
        $this->attributes['body'] = $body;
    }

    // Iframe
    public function getIframe() {
        return $this->attributes['iframe'];
    }
    public function setIframe($iframe) {
        $this->attributes['iframe'] = $iframe;
    }

    // Image
    public function getImage() {
        if($this->image) {
            return url("storage/$this->image");
        }
    }
    public function setImage($image) {
        $this->attributes['image'] = $image;
    }

    // User_id
    public function getUserId() {
        return $this->attributes['user_id'];
    }
    public function setUserId($user_id) {
        $this->attributes['user_id'] = $user_id;
    }
    
}
