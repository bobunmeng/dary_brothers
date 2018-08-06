<?php

use DaveJamesMiller\Breadcrumbs\BreadcrumbsGenerator;
use DaveJamesMiller\Breadcrumbs\Exceptions\DuplicateBreadcrumbException;

// Admin > Home
try {
    Breadcrumbs::register('admin.home', function (BreadcrumbsGenerator $breadcrumbs) {
        $breadcrumbs->push('Home', route('admin.home'));
    });
} catch (DuplicateBreadcrumbException $e) {
    throw new $e;
}

// Admin > Home > Categories
try {
    Breadcrumbs::register('admin.categories.index', function (BreadcrumbsGenerator $breadcrumbs) {
        $breadcrumbs->parent('admin.home');
        $breadcrumbs->push(trans('fields.attributes.categories.title'), route('admin.categories.index'));
    });
} catch (DuplicateBreadcrumbException $e) {
    throw new $e;
}
// Admin > Home > Categories > Create
try {
    Breadcrumbs::register('admin.categories.create', function (BreadcrumbsGenerator $breadcrumbs) {
        $breadcrumbs->parent('admin.categories.index');
        $breadcrumbs->push(trans('fields.attributes.categories.title'), route('admin.categories.index'));
    });
} catch (DuplicateBreadcrumbException $e) {
    throw new $e;
}

// Admin > Home > Categories > Edit
try {
    Breadcrumbs::register('admin.categories.edit', function (BreadcrumbsGenerator $breadcrumbs, \App\Models\Category $category) {
        $breadcrumbs->parent('admin.categories.index');
        $breadcrumbs->push($category->name, route('admin.categories.edit', $category->id));
    });
} catch (DuplicateBreadcrumbException $e) {
    throw new $e;
}
