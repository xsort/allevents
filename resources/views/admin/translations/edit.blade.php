@extends('admin.body')
@section('title', 'Переводы')


@section('centerbox')
    <div class="page-header">
        <h1> <a href="{{ URL::to('admin/translations') }}">Переводы</a> <small><i class="ace-icon fa fa-angle-double-right"></i> Переводы констант </small> </h1>
    </div>

    @include('admin.partials.errors')

    @if(!isset($data))
        {{ Form::open(['url' => 'admin/translations', 'class' => 'form-horizontal']) }}
    @else
        {{ Form::open(['url' => 'admin/translations/' . $data->id, 'method' => 'put', 'class' => 'form-horizontal']) }}
    @endif

    <div class="form-actions">
        <div class="row center">
            <div class="col-sm-2">
                <button id="submit_button1" type="submit" class="btn  btn-success btn-block btn-responsive" ><i class="ace-icon fa fa-floppy-o  bigger-120"></i> Сохранить </button>
            </div>
            <div class="col-sm-4">
                <div class="profile-contact-info">
                    <div class="profile-links align-left">

                        @if (isset($data))
                            <div class="btn btn-link">
                                <i class="ace-icon fa fa- bigger-120 green"></i>
                                ID: {{ $data->id }}
                            </div>

                        @endif
                    </div>
                </div>
            </div>

        </div><!-- /.row -->
    </div><!-- /.form-actions -->

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                {{ Form::label('key', 'Ключ', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('key', (isset($data->key) ? $data->key : old('key')), array('class' => 'col-sm-11 col-xs-12 name_ru')) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('value', 'Значение', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('value[ru]', (isset($data->value) ? $data->value : old('value')), array('class' => 'col-sm-11 col-xs-12 name_ru')) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('name', 'Значение RO', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('value[ro]', (isset($data->value_ro) ? $data->value_ro : old('value_ro')), array('class' => 'col-sm-11 col-xs-12')) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('name', 'Значение EN', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('value[en]', (isset($data->value_en) ? $data->value_en : old('value_en')), array('class' => 'col-sm-11 col-xs-12')) }}
                </div>
            </div>
        </div><!-- /.col-sm-6 -->

        <div class="col-sm-6">


        </div><!-- /.col-sm-6 -->
    </div><!-- /.row -->
    {{ Form::close() }}
@endsection


