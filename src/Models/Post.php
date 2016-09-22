<?php

namespace ArtisanCMS\Blog\Models;

use App\User;
use Markdown;
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
        'author_id',
        'teaser'
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

    public function publishDate()
    {
        return $this->publish_at->format(config('artisancms-blog.publish_at.format'));
    }

    public function getPublishDateAttribute()
    {
        return $this->publish_at->format('m/d/Y');
    }

    public function getPublishTimeAttribute()
    {
        return $this->publish_at->format('h:i A');
    }
}
