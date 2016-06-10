@extends('admin.body')
@section('title', 'Категория')


@section('centerbox')
    <div class="page-header">
        <h1> <a href="{{ URL::to('admin/categories') }}">Категории</a> <small><i class="ace-icon fa fa-angle-double-right"></i> Редактирование категории </small> </h1>
    </div>


    @include('admin.partials.errors')

    @if(!isset($data))
    {{ Form::open(['url' => 'admin/categories', 'class' => 'form-horizontal']) }}
    @else
    {{ Form::open(['url' => 'admin/categories/' . $data->id, 'method' => 'put', 'class' => 'form-horizontal']) }}
    @endif

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
            <div class="form-group">
                {{ Form::label('slug', 'URL', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('slug', (isset($data->slug) ? $data->slug : old('slug')), array('class' => 'col-sm-11 col-xs-12')) }}
                </div>
            </div>
            
            <div class="form-group">
                {{ Form::label('parent', 'родитель', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                
                <div class="col-sm-9">
                    @if(isset($parents))
                    {{ Form::select('parent[]', array('null' => 'Please select one option') + $categories, $parents, ['multiple'=>'multiple','id'=>'chosencat','class'=>'col-sm-11 control-label no-padding-right']) }}
                     @else
                     {{ Form::select('parent[]', array('null' => 'Please select one option') + $categories, ['multiple'=>'multiple','id'=>'chosencat','class'=>'col-sm-11 control-label no-padding-right']) }}
                     @endif
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-6 control-label no-padding-right"> Изменен: {{ $data->updated_at or ''}}</label>
            </div>

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

        <div class="tab-content">
            <div class="tab-pane active" id="ru">

                <div class="tabbable  tabs-left">

                 <ul id="myTab" class="nav nav-tabs">
                   <li class="active">
                      <a href="#descRu" data-toggle="tab">Описание на русском</a>
                   </li>
                   <li>
                      <a href="#descRo" data-toggle="tab">Описание на румынском</a>
                   </li>
                   <li>
                      <a href="#descEn" data-toggle="tab">Описание на английском</a>
                   </li>
                 </ul>

                 <div class="tab-content">
                   <div class="tab-pane in active" id="descRu">
                     {{ Form::textarea('description[ru]', (isset($data->description) ? $data->description : old('description')), array('class' => 'ckeditor', 'id' => 'editor')) }}
                   </div>
                   <div class="tab-pane" id="descRo">
                     {{ Form::textarea('description[ro]', (isset($data->description_ro) ? $data->description_ro : old('description_ro')), array('class' => 'ckeditor', 'id' => 'editor')) }}
                   </div>
                   <div class="tab-pane" id="descEn">
                     {{ Form::textarea('description[en]', (isset($data->description_en) ? $data->description_en : old('description_en')), array('class' => 'ckeditor', 'id' => 'editor')) }}
                   </div>

                 </div>

                </div>
             </div>

             @include('admin.partials.meta')
            @include('admin.partials.photos', ['table' => 'categories', 'table_id' => isset($data->id) ? $data->id : 0])
        </div>

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