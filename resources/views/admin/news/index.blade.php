@extends('admin.common.list',
    [
        'title'       =>  'Новости',
        'desc'        =>  'Список новостей сайта',
        'model'       =>  'news',
        'fields'      =>  ['name' => 'Наименование', 'created_at' => 'Создан'],
        'data'        =>  $data,
        'modalbox'    =>  true
    ]
)

@section('scripts')

    @include('admin.common.modals')

    @include('admin.partials.ckeditor')

@stop
