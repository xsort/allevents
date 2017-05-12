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

    <script>
        function modalSuccessSubmit(data){
            location.reload();
            /*
            var $tr = $("#dynamic-table input[data-id='" + data.id + "']").closest('tr');
            if ($tr.length > 0){
                $tr.find('a.modalbox').first().text(data.name);
            }
            */
        }
    </script>

@stop
