<?php

use Illuminate\Support\Facades\Route;
use Rapidez\Core\RapidezFacade as Rapidez;
use Rapidez\MagePrinceFaq\Models\Group;

Route::get(Rapidez::config('faqtab/seo/faq_url', 'faq'), function () {
    $categories = Group::with('faqs')->get();
    return view('mageprincefaq::overview', compact('categories'));
});
