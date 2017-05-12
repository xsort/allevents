@extends('admin.body')
@section('title', 'Редактирование ссылки')

@section('centerbox')
    <div class="page-header">
        <h1>
            <a href="{{ URL::to('admin/links') }}">
                @if (isset ($data))Редактирование ссылки @else Создание новой ссылки @endif
            </a>
            <small><i class="ace-icon fa fa-angle-double-right"></i> </small>
        </h1>
    </div>

    @include('admin.partials.errors')

    @if(!isset($data))
        {{ Form::open(['url' => 'admin/links', 'class' => 'form-horizontal']) }}
    @else
        {{ Form::open(['url' => 'admin/links/' . $data->id, 'method' => 'put', 'class' => 'form-horizontal']) }}
    @endif

    <div class="form-actions">
        <div class="row center">
            <div class="col-sm-2">
                <button id="submit_button1" type="submit" class="btn  btn-success btn-block btn-responsive" ><i class="ace-icon fa fa-floppy-o  bigger-120"></i> Сохранить </button>
            </div>
        </div><!-- /.row -->
    </div><!-- /.form-actions -->

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                {{ Form::label('name', 'Наименование', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('name[ru]', (isset($data->name) ? $data->name : old('name')), array('class' => 'col-sm-11 col-xs-12')) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('name', 'Наименование RO', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('name[ro]', (isset($data->name_ro) ? $data->name_ro : old('name_ro')), array('class'=> 'col-sm-11 col-xs-12')) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('name', 'Наименование EN', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('name[en]', (isset($data->name_en) ? $data->name_en : old('name_en')), array('class' =>'col-sm-11 col-xs-12')) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('types', 'Тип ссылки', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::select('type', ['0' => 'Ссылка с объектом', '1' => 'Ссылка на сайте', '2' => 'Сторонняя ссылка (например, http://xsort.md)'],
                    (isset($data->type) ? $data->type : old('type')), ['class' =>'col-sm-11 col-xs-12']) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('link', 'Ссылка', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    <div class="input-group">
                        <span class="input-group-addon"></span>
                        {{ Form::text('link', (isset($data->link) ? $data->link : old('link')), array('class' =>'col-sm-11 col-xs-12')) }}
                    </div>
                </div>
            </div>
        </div><!-- /.col-sm-6 -->
        <div class="col-sm-6">
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="tabbable">
                        <ul id="myTab1" class="nav nav-tabs padding-12 tab-color-blue background-blue">
                            <li class="active">
                                <a href="#newsShort_ru" data-toggle="tab" aria-expanded="true">Русс. яз.</a>
                            </li>

                            <li class="">
                                <a href="#newsShort_ro" data-toggle="tab" aria-expanded="false">Рум. яз.</a>
                            </li>

                            <li class="">
                                <a href="#newsShort_en" data-toggle="tab" aria-expanded="false">Англ. яз.</a>
                            </li>

                            <div class="center"> <span class="label label-xlg label-purple">Краткое описание</span></div>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane in active" id="newsShort_ru">
                                {{ Form::textarea('description_short[ru]', (isset($data->description_short) ? $data->description_short : old('description_short')), array('style'=>'width:100%', 'rows'=>'3')) }}
                            </div>
                            <div class="tab-pane" id="newsShort_ro">
                                {{ Form::textarea('description_short[ro]', (isset($data->description_short_ro) ? $data->description_short_ro : old('description_short_ro')), array('style'=>'width:100%', 'rows'=>'3')) }}
                            </div>
                            <div class="tab-pane" id="newsShort_en">
                                {{ Form::textarea('description_short[en]', (isset($data->description_short_en) ? $data->description_short_en : old('description_short_en')), array('style'=>'width:100%', 'rows'=>'3')) }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.row -->

    <hr>

    <div class="space"></div>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <div class="col-xs-12">
                <div class="tabbable">
                    <ul id="myTab4" class="nav nav-tabs padding-12 tab-color-blue background-blue">
                        <li class="active">
                            <a href="#photos" data-toggle="tab">Фото</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        @include('admin.partials.photos', ['table' => 'links', 'class' => 'active', 'table_id' => isset($data->id) ? $data->id : 0] )
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-actions">
        {{ Form::submit('Сохранить', array('class' => 'btn btn-success')) }}
    </div>

    {{ Form::close() }}

@endsection

@section('scripts')
    <script>
        $('select[name=type]').on('change', onChangedType);

        $(document).ready(function(){
            onChangedType();
        });

        function onChangedType(){
            var selected = $('select[name=type]').val();
            $span = $('input[name=link]').closest('.input-group').find('span');
            switch (selected){
                case '1':
                    $span.text("http:://allevents.md/").show();
                    break;
                case '2':
                    $span.hide();
                    break;
                default:
                    $span.text("http:://allevents.md/{object}/").show();
                    break;

            }
        }
    </script>
@stop