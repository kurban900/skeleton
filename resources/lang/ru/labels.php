<?php

$x = '➞';
$list = 'Список';
$creating = 'Добавление';
$editing = 'Редактирование';

return [
    'creating' => $creating,
    'editing' => $editing,

    'custom' => [
        'default' => "Custom",
        'index' => "Custom $x $list",
        'create' => "Custom $x $creating",
        'edit' => "Custom $x :title $x $editing",
    ],
];
