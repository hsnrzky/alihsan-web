<?php

use Illuminate\Support\Facades\Route;

Route::name('pages.')->group(function () {
    Route::view('/', 'index')->name('home');

    Route::group(['prefix' => '', 'as' => ''], function () {
        Route::view('/about', 'pages.about')->name('about');
        Route::view('/contact', 'pages.contact')->name('contact');
        Route::view('/blog-home', 'pages.blog-home')->name('blog.home');
        Route::view('/blog-post', 'pages.blog-post')->name('blog.post');
        Route::view('/faq', 'pages.faq')->name('faq');
        Route::view('/portofolio-item', 'pages.portofolio-item')->name('portofolio.item');
        Route::view('/portofolio-overview', 'pages.portofolio-overview')->name('portofolio.overview');
        Route::view('/pricing', 'pages.pricing')->name('pricing');
    });
});
