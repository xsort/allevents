@extends('admin.body')
@section('title', 'Редактирование тега')


@section('centerbox')
    <div class="page-header">
        <h1> <a href="{{ URL::to('admin/tags') }}">@if (isset ($data))Редактирование тега@elseСоздание
                нового тега@endif</a>
            <small><i class="ace-icon fa fa-angle-double-right"></i> </small> </h1>
    </div>

    @include('admin.partials.errors')

    @if(!isset($data))
        {{ Form::open(['url' => 'admin/tags', 'class' => 'form-horizontal']) }}
    @else
        {{ Form::open(['url' => 'admin/tags/' . $data->id, 'method' => 'put', 'class' => 'form-horizontal']) }}
    @endif

    <div class="form-actions">
        <div class="row center">
            <div class="col-sm-2">
                <button id="submit_button1" type="submit" class="btn  btn-success btn-block btn-responsive" ><i class="ace-icon fa fa-floppy-o  bigger-120"></i> Сохранить </button>
            </div>
            <div class="col-sm-2 showTip L7">
                <label >
                    {{ Form::checkbox('top',  1, (isset($data) && $data->top == 1 ? true : false), ['class' => 'ace ']) }}
                    <span class="lbl showTip L7"> На главную </span>
                </label>
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

        </div><!-- /.col-sm-6 -->
        <div class="col-sm-6">
            <div class="form-group">
                {{ Form::label('rights', 'URL', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('slug', (isset($data->slug) ? $data->slug : old('slug')), array('class' => 'col-sm-11 col-xs-12')) }}
                </div>
            </div>
        </div><!-- /.col-sm-6 -->

    </div><!-- /.row -->

    <hr>
    <div class="space"></div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="col-xs-12">
                <div class="tabbable">
                    <ul id="myTab4" class="nav nav-tabs padding-12 tab-color-blue background-blue">
                        <li class="active">
                            <a href="#background" data-toggle="tab">Обложка</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        @include('admin.partials.photos', ['table' => 'tags', 'div_id' => 'background', 'class' => 'active', 'width'=> 10000, 'height'=> 10000, 'table_id' => isset($data->id) ? $data->id : 0] )
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

    @include('admin.partials.ckeditor')

    @include('admin.partials.slug',['input_name'=>'name[ru]'])

    @include('admin.partials.ajaxdelete')
@endsection