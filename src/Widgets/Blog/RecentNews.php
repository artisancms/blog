<?php

namespace App\Widgets\Blog;

use ArtisanCMS\Blog\Models\Post;
use ArtisanCMS\Widgets\AbstractWidget;

class RecentNews extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    public function __construct(array $config = [])
    {
        $this->addConfigDefaults([
            'count' => config('artisancms-blog.widgets.recentNews.count')
        ]);

        parent::__construct($config);
    }

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
