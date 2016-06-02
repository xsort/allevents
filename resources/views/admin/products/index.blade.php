@extends('admin.common.list',
    [
        'title'       =>  'Номенклатура ',
        'desc'        =>  'клубы, заведения, фотографы и пр.',
        'model'       =>  'products',
        'fields'      =>  ['name' => 'Наименование', 'created_at' => 'Создан'],
        'data'        =>  $data
    ]
)
