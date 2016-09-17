<?php

$menu = Menu::get('admin-sidebar');
$menu->add('Blog', ['class' => 'treeview'])
    ->prepend('<i class="fa fa-list"></i>')
    ->append('<i class="fa fa-angle-left pull-right"></i>')
    ->link->href('#');
$menu->blog->add('Create Post', ['url' => 'admin/blog/create']);
$menu->blog->add('Categories', ['url' => 'admin/blog/categories']);
