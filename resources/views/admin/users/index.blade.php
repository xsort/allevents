@extends('admin.users.list-user',
    [
        'title'       =>  'Список пользователей ',
        'desc'        =>  'Пользователи сайта',
        'model'       =>  'users',
        'fields'      =>  ['name' => 'Логин'],
        'data'        =>  $data
    ]
)