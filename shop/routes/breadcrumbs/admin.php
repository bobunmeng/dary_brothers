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
