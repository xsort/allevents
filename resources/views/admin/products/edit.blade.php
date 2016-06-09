@extends('admin.body')
@section('title', 'Новости')


@section('centerbox')
    <div class="page-header">
        <h1> <a href="{{ URL::to('admin/products') }}">Объекты</a> <small><i class="ace-icon fa fa-angle-double-right"></i> Клубы, салоны, фотографы и пр. </small> </h1>
    </div>

    @include('admin.partials.errors')

    @if(!isset($data))
    {{ Form::open(['url' => 'admin/products', 'class' => 'form-horizontal']) }}
    @else
    {{ Form::open(['url' => 'admin/products/' . $data->id, 'method' => 'put', 'class' => 'form-horizontal']) }}
    @endif
            <!--<div class="form-group col-xs-12">
        <button id="submit_button1" type="submit" class="btn  btn-success" ><i class="ace-icon fa fa-floppy-o  bigger-120"></i> Сохранить </button>
    </div>-->
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                {{ Form::label('name', 'Заголовок', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('name[ru]', (isset($data->name) ? $data->name : old('name')), array('class' => 'col-sm-11 col-xs-12')) }}
                </div>
            </div>
             <div class="form-group">
                {{ Form::label('name', 'Заголовок рум', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('name[ro]', (isset($data->name_ro) ? $data->name_ro : old('name_ro')), array('class' => 'col-sm-11 col-xs-12')) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('name', 'Заголовок англ', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('name[en]', (isset($data->name_en) ? $data->name_en : old('name_en')), array('class' => 'col-sm-11 col-xs-12')) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('slug', 'URL', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('slug', (isset($data->slug) ? $data->slug : old('slug')), array('class' => 'col-sm-11 col-xs-12')) }}
                </div>
            </div>
            
        </div><!-- /.col-sm-6 -->

        <div class="col-sm-6">
            <div class="form-group">
                <label for="mydate" class="col-sm-3 control-label no-padding-right"> Дата:</label>
                <div class="col-sm-5">
                    <div class="input-group">
                        <input type="date" name="date" id="mydate" class="form-control date-picker"
                               data-date-format="dd-mm-yyyy"
                               value="{{ (isset($data->created_at) ? $data->created_at : old('date', Date::now()->format('d-m-Y'))) }}" />
                        <span class="input-group-addon">
                            <i class="fa fa-calendar bigger-110"></i>
                        </span>
                    </div>
                </div>
            </div>
            @if (isset($data->updated_at))
                <div class="form-group">
                    <label class="col-sm-6 control-label no-padding-right"> Изменен: {{ $data->updated_at }}</label>
                </div>
            @endif
        </div><!-- /.col-sm-6 -->
    </div><!-- /.row -->
    <div class="space"></div>
    <div class="tabbable">
        <ul id="myTab4" class="nav nav-tabs padding-12 tab-color-blue background-blue">
            <li class="active">
                <a href="#ru" data-toggle="tab">Описание</a>
            </li>
            <li>
                <a href="#photos" data-toggle="tab">Фото</a>
            </li>
            <li>
                <a href="#meta" data-toggle="tab">META</a>
            </li>
        </ul>

       
    </div>

    <div class="form-actions">
        {{ Form::submit('Сохранить', array('class' => 'btn btn-success')) }}
    </div>

    {{ Form::close() }}
@endsection

@section('styles')
    {!! HTML::style('ace/assets/css/datepicker.css') !!}
    {!! HTML::style('ace/assets/css/chosen.css') !!}
@endsection

@section('scripts')

    @include('admin.partials.ckeditor')

    @include('admin.partials.slug',['input_name'=>'name'])

    {!! HTML::script('ace/assets/js/date-time/bootstrap-datepicker.js') !!}
    <script type="text/javascript">
        jQuery(function($) {
            var mydate = $('#mydate')[0];
            if(mydate.type !== 'date') {//if browser doesn't support "date" input
                $(mydate).datepicker({
                    weekStart: 1,
                    autoclose:true,
                    language: 'ru'
                })
            }
        })
    </script>

    {!! HTML::script('ace/assets/js/chosen.jquery.min.js') !!}
    <script>
        $("#chosencat").chosen();
    </script>
@endsection