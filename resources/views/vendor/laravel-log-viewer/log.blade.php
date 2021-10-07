@extends('layouts.admin')

@section('title', 'Логи')

@section('content')
    <div class="row">
        <div class="col-lg-2 mb-3">
            @foreach($files as $file)
                <a href="?l={{ Crypt::encrypt($file) }}"
                   class="list-group-item @if ($current_file === $file) active @endif">
                    {{$file}}
                </a>
            @endforeach
        </div>
        <div class="col">
            <div class="card-header">
                @if($current_file)
                    <a class="m-1 btn btn-primary"
                       href="?dl={{ Crypt::encrypt($current_file) }}{{ ($current_folder) ? '&f=' . Crypt::encrypt($current_folder) : '' }}">
                        <span class="fa fa-download"></span> Скачать файл
                    </a>
                    <a class="m-1 btn btn-danger" id="clean-log"
                       href="?clean={{ Crypt::encrypt($current_file) }}{{ ($current_folder) ? '&f=' . Crypt::encrypt($current_folder) : '' }}">
                        <span class="fa fa-sync"></span> Очистить файл
                    </a>
                    <a class="m-1 btn btn-danger" id="delete-log"
                       href="?del={{ Crypt::encrypt($current_file) }}{{ ($current_folder) ? '&f=' . Crypt::encrypt($current_folder) : '' }}">
                        Удалить файл
                    </a>
                    @if(count($files) > 1)
                        <a class="m-1 btn btn-danger" id="delete-all-log"
                           href="?delall=true{{ ($current_folder) ? '&f=' . Crypt::encrypt($current_folder) : '' }}">
                            Удалить все файлы
                        </a>
                    @endif
                @endif
            </div>

            <x-admin.table>
                <thead class="thead-light">
                <tr>
                    <th class="text-center">Тип</th>
                    <th class="">Дата</th>
                    <th class="">Ошибка</th>
                </tr>
                </thead>
                <tbody>
                @foreach($logs as $key => $log)
                    <tr data-display="stack{{{$key}}}">
                        <td class="text-{{{ $log['level_class'] }}}">
                            {{ $log['level'] }}
                        </td>
                        <td>{{{ $log['date'] }}}</td>
                        <td>
                            @if ($log['stack'])
                                <button type="button"
                                        class="float-right expand btn btn-primary btn-sm mb-2 ml-2"
                                        data-display="stack{{{$key}}}">
                                    <i class="cil-search"></i>
                                </button>
                            @endif
                            {{{ $log['text'] }}}
                            @if ($log['stack'])
                                <div class="d-none stack text-dark" id="stack{{{$key}}}"
                                     style="white-space: pre-line;">
                                    {{{ trim($log['stack']) }}}
                                </div>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </x-admin.table>
        </div>
    </div>


@endsection

@push('scripts')
    <script>
        $("button").click(function () {
            $('#' + $(this).data("display")).toggleClass("d-none")
        });
    </script>
@endpush


