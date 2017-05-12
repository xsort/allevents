@extends('admin.common.list',
    [
        'title'       =>  'Категории ',
        'desc'        =>  'список категорий',
        'model'       =>  'categories',
        'fields'      =>  ['name' => 'Наименование'],
        'data'        =>  $data
    ]
)
