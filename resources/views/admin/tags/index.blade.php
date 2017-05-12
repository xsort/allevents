@extends('admin.common.list',
    [
        'title'       =>  'Теги',
        'desc'        =>  'Список тегов',
        'model'       =>  'tags',
        'fields'      =>  ['name' => 'Наименование', 'slug' => 'URL'],
        'data'        =>  $data
    ]
)
