<?php

namespace App\Widgets;

use ArtisanCMS\Blog\Models\Post;
use Arrilot\Widgets\AbstractWidget;

class RecentNews extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $posts = Post::take($this->config['count'])->orderBy('publish_at', 'DESC')->get();

        return view("widgets.recent_news", [
            'config' => $this->config,
            'posts' => $posts,
        ]);
    }
}
