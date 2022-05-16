<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Dashboard    
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard.index'));
});

//Dashboard > Home
Breadcrumbs::for('dashboard_home', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Home', '#');
});
//Dashboard > Categories
Breadcrumbs::for('categories', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Categories', route('categories.index'));
});

//Dashboard > Categories > Add
Breadcrumbs::for('add_category', function (BreadcrumbTrail $trail) {
    $trail->parent('categories');
    $trail->push("Add", route('categories.create'));
});

//Dashboard > Categories > Edit
Breadcrumbs::for('edit_category', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('categories');
    $trail->push("Edit", route('categories.edit',['category' => $category]));
});

//Dashboard > Categories > Edit > [title]
Breadcrumbs::for('edit_category_title', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('edit_category', $category);
    $trail->push($category->title, route('categories.edit',['category' => $category]));
});

//Dashboard > Categories > Detail
Breadcrumbs::for('detail_category', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('categories', $category);
    $trail->push("Detail", route('categories.show',['category' => $category]));
});

//Dashboard > Categories > Detail > [title]
Breadcrumbs::for('detail_category_title', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('detail_category', $category);
    $trail->push($category->title, route('categories.show',['category' => $category]));
});

//Dashboard > Tags
Breadcrumbs::for('tags', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Tags', route('tags.index'));
});
//Dashboard > Tags > Add
Breadcrumbs::for('add_tag', function (BreadcrumbTrail $trail) {
    $trail->parent('tags');
    $trail->push('Add', route('tags.create'));
});

//Dashboard > Tags > Edit > [title]
Breadcrumbs::for('edit_tag', function (BreadcrumbTrail $trail, $tag) {
    $trail->parent('tags');
    $trail->push('Edit', route('tags.edit', ['tag' => $tag]));
    $trail->push($tag->title, route('tags.edit', ['tag' => $tag]));
});

//Dashboard > Posts
Breadcrumbs::for('posts', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Posts', route('posts.index'));
});

//Dashboard > Posts > Add
Breadcrumbs::for('add_post', function (BreadcrumbTrail $trail) {
    $trail->parent('posts');
    $trail->push('Add', route('posts.create'));
});

//Dashboard > Posts > Details ->[title]
Breadcrumbs::for('details_post', function (BreadcrumbTrail $trail, $post) {
    $trail->parent('posts');
    $trail->push('Details', route('posts.show', ['post' => $post]));
    $trail->push($post->title, route('posts.show', ['post' => $post]));
});

// Home > Blog
// Breadcrumbs::for('blog', function (BreadcrumbTrail $trail) {
//     $trail->parent('home');
//     $trail->push('Blog', route('blog'));
// });

// Home > Blog > [Category]
// Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
//     $trail->parent('blog');
//     $trail->push($category->title, route('category', $category));
// });