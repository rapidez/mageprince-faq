<?php

use Illuminate\Support\Facades\Route;
use Rapidez\Core\Facades\Rapidez;
use Rapidez\MagePrinceFaq\Models\Group;

Route::get(Rapidez::config('faqtab/seo/faq_url', 'faq'), function () {
    $categories = Group::with(['faqs' => fn ($query) => $query->orderBy('sortorder')])->orderBy('sortorder')->get();

    return view('mageprincefaq::overview', compact('categories'));
});
