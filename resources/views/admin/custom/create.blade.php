@extends('layouts.admin')

@section('title', __('labels.custom.create'))

@section('breadcrumbs')
    <x-admin.breadcrumb-item :link="route('admin.custom.index')" :label="__('labels.custom.default')"/>
    <x-admin.breadcrumb-item :label="__('labels.creating')"/>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-xxl-8">
            <div class="card">
                <div class="card-body">
                    {!! form($form, ['method' => 'POST', 'url' => route('admin.custom.store')]) !!}
                </div>
                <div class="card-footer form-inline">
                    <button form="form" class="btn btn-success">Создать</button>
                </div>
            </div>
        </div>
    </div>
@endsection
