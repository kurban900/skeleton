@extends('layouts.admin')

@section('title', __('labels.heroes.edit', ['title' => $hero->name]))

@section('breadcrumbs')
    <x-admin.breadcrumb-item :link="route('admin.heroes.index')" :label="__('labels.heroes.default')"/>
    <x-admin.breadcrumb-item :label="__('labels.editing')"/>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-xxl-8">
            <div class="card">
                <div class="card-body">
                    {!! form($form, ['method' => 'PUT', 'url' => route('admin.heroes.update', $hero->id),]) !!}
                </div>
                <div class="card-footer form-inline">
                    <button form="form" class="btn btn-success">Сохранить изменения</button>
                </div>
            </div>
        </div>
    </div>
@endsection
