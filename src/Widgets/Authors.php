<?php

namespace App\Widgets;

use App\User;
use ArtisanCMS\Widgets\AbstractWidget;

class Authors extends AbstractWidget
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
        $authors = User::all();

        return view("widgets.authors", [
            'config' => $this->config,
            'authors' => $authors
        ]);
    }
}
