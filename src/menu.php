<?php

Menu::make('admin-main', function ($menu) {
    $menu->add('Blog');
    $menu->add('Create Post', 'admin/blog/create');
    $menu->add('Categories', 'admin/blog/categories');
});
