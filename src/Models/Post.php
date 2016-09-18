<?php

namespace ArtisanCMS\Blog\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Sluggable;

    protected $casts = [
        'publish_at' => 'datetime'
    ];

    protected $fillable = [
        'title',
        'subtitle',
        'slug',
        'body',
        'author_id'
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
                'source' => 'title'
            ]
        ];
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function getPublishAtAttribute($value)
    {
        return (new \Carbon\Carbon($value))->format(config('artisancms-blog.publish_at.format'));
    }
}
