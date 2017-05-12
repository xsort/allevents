@extends('admin.common.list',
    [
        'title'       =>  'Переводы',
        'desc'        =>  'Список переводов',
        'model'       =>  'translations',
        'fields'      =>  ['key' => 'Ключ', 'value' => 'Значение', 'value_ro' => 'Значение RO', 'value_en' => 'Значение EN'],
        'data'        =>  $data
    ]
)
