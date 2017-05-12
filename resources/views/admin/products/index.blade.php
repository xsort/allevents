@extends('admin.common.list',
    [
        'title'       =>  'Номенклатура ',
        'desc'        =>  'клубы, заведения, фотографы и пр.',
        'model'       =>  'products',
<<<<<<< HEAD
        'fields'      =>  ['name' => 'Наименование', 'created_at' => 'Создан', 'test' => 'Изменен'],
=======
        'fields'      =>  ['name' => 'Наименование', 'created_at' => 'Создан'],
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
        'data'        =>  $data
    ]
)
