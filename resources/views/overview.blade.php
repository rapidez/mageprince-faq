@extends('rapidez::layouts.app')

@section('title', Rapidez::config('faqtab/seo/meta_title', 'FAQ'))
@section('description', Rapidez::config('faqtab/seo/meta_description'))

@section('content')
    <div class="container mx-auto mb-5 px-3 sm:px-0">
        <h1 class="font-bold text-2xl mb-5">
            @config('faqtab/general/page_title', 'FAQ')
        </h1>

        <div class="grid gap-3 gap-5 grid-cols-3 sm:grid-cols-4 md:grid-cols-5 mb-5">
            @foreach($categories as $category)
                <a href="#group{{ $category->faqgroup_id }}" class="text-center" data-turbolinks="false">
                    <img src="{{ config('rapidez.media_url') }}/faq/tmp/icon/{{ $category->icon }}" alt="{{ $category->groupname }}" class="w-full border p-3 mb-2 hover:border-primary">
                    <strong class="hover:underline">{{ $category->groupname }}</strong>
                </a>
            @endforeach
        </div>

        <div class="sm:grid sm:gap-3 sm:gap-5 sm:grid-cols-2">
            @foreach($categories as $category)
                <div id="group{{ $category->faqgroup_id }}">
                    <strong class="inline-block mb-3 font-bold text-xl">
                        {{ $category->groupname }}
                    </strong>

                    @foreach($category->faqs as $faq)
                        <toggler>
                            <div class="mb-2" slot-scope="{ toggle, close, isOpen }">
                                <a href="#" class="flex items-center justify-between p-3 font-bold bg-gray-100 border border-gray-200 hover:bg-primary hover:text-white" :class="{ 'bg-primary text-white': isOpen }" v-on:click.prevent="toggle">
                                    {{ $faq->title }}
                                    <x-heroicon-s-chevron-down v-if="!isOpen" class="h-4 w-4 text-black-400"/>
                                    <x-heroicon-s-chevron-up v-if="isOpen" class="h-4 w-4 text-black-400"/>
                                </a>
                                <div v-cloak v-show="isOpen" class="border p-3 prose prose-green max-w-none">
                                    {!! $faq->content !!}
                                </div>
                            </div>
                        </toggler>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
@endsection
