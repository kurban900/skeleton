@extends('layouts.app')

@section('seo_title', "$page->title")
@section('seo_description', '')

@section('admin-bar')
    <a href="{{ route('admin.pages.edit', $page->id) }}">Редактировать страницу</a>
    <a href="{{ route('admin.pages.create') }}">Добавить страницу</a>
@endsection

@section('content')
    <div class="bg-gray-50 p-10">
        <h1 class="text-3xl uppercase font-extrabold tracking-wide title title_block">{{ $page->title }}</h1>
    </div>

    <div class="extra-page__content p-10">
       {{ $page->text }}
    </div>
@endsection
