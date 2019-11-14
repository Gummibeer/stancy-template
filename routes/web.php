<?php

use Astrotomic\Stancy\Facades\PageFactory;
use Astrotomic\Stancy\Facades\SitemapFactory;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return PageFactory::makeFromSheetName('static', 'home');
});

Route::get('/sitemap.xml', function () {
    return SitemapFactory::makeFromSheetList(['static']);
});

Route::get('/404.html', function () {
    return PageFactory::makeFromSheetName('error', '404');
});

Route::get('/robots.txt', function () {
    return implode(PHP_EOL, [
        'user-agent: *',
        'allow: /',
        'sitemap: '.url('sitemap.xml'),
    ]);
});
