@extends('admin.common.list',
    [
        'title'       =>  'Категории ',
        'desc'        =>  'список категорий',
        'model'       =>  'categories',
        'fields'      =>  ['name' => 'Наименование', 'created_at' => 'Создан'],
        'data'        =>  $data
    ]
)
