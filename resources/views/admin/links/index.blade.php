@extends('admin.common.list',
    [
        'title'           =>  'Ссылки',
        'desc'            =>  'Список общих ссылок',
        'model'           =>  'links',
        'fields'          =>  ['name' => 'Наименование'],
        'data'            =>  $data,
        'no_delete'       =>  true,
        'no_visibility'   =>  true,
    ]
)
