<?php

use Illuminate\Support\Facades\Route;

Route::get('/{page?}', function ($page = 'home') {
    $page = \App\Models\Page::whereSlug($page)->firstOrFail();
    return view('site.pages.'.$page->template, ['page' => $page]);
});
