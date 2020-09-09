<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Sluggable;

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

    // Relation belongs to User
    public function user() {
        return $this->belongsTo(User::class);
    }

    // Getting excerpt body
    public function getGetExcerptAttribute() {
        return substr($this->body, 0, 140);
    }
}