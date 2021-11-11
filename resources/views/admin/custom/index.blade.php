@extends('layouts.admin')

@section('title', __('labels.heroes.index'))

@section('breadcrumbs')
    <x-admin.breadcrumb-item :label="__('labels.heroes.default')"/>
@endsection

@section('content')

    <div class="mb-3 d-flex">
        <a href="{{ route('admin.heroes.create') }}" class="btn btn-success mr-1">Создать</a>
    </div>

    <x-admin.table>
        <thead class="thead-light">
        <tr>
            <th>Имя</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($heroes as $hero)
            <tr>
                <td>
                    {{ $hero->name }}
                </td>
                <td>
                    <div class="d-flex">
                        <a href="{{ route('admin.heroes.edit', $hero->id) }}"
                           class="btn btn-primary mr-1">Изменить</a>

                        <x-admin.delete-button
                            :action="route('admin.heroes.destroy', $hero->id)"
                            confirmMessage="Подтвердите удаление {{ $hero->name }}"
                        />
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </x-admin.table>

@endsection
