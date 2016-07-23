@extends('admin.common.list',
    [
        'title'       =>  'Категории меню',
        'desc'        =>  'список категорий меню',
        'model'       =>  'menucategories',
        'fields'      =>  ['name' => 'Наименование'],
        'data'        =>  $data
    ]
)
