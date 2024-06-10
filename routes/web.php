<?php

use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Route;
use Rapidez\Core\Facades\Rapidez;
use Rapidez\MagePrinceFaq\Models\Group;

try {
    $url = Rapidez::config('faqtab/seo/faq_url', 'faq');
} catch(QueryException $e) {
    $url = 'faq';
}

Route::get($url, function () {
    $categories = Group::with(['faqs' => fn ($query) => $query->orderBy('sortorder')])->orderBy('sortorder')->get();

    return view('mageprincefaq::overview', compact('categories'));
});
