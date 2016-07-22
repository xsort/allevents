@if(!isset($data))
    {{ Form::open(['url' => 'admin/galleries', 'class' => 'form-horizontal', 'id' => 'galleries']) }}
@else
    {{ Form::open(['url' => 'admin/galleries/' . $data->id, 'method' => 'put', 'class' => 'form-horizontal', 'id' => 'galleries']) }}
@endif

<div class="row">
    <div class="col-sm-7">
        <div class="form-group">
            {{ Form::label('name', 'Заголовок', ['class'=>'col-sm-3 control-label no-padding-right']) }}
            <div class="col-sm-9">
                {{ Form::text('name[ru]', (isset($data->name) ? $data->name : old('name')), array('class' => 'col-sm-11 col-xs-12 name_ru')) }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('name', 'Заголовок RO', ['class'=>'col-sm-3 control-label no-padding-right']) }}
            <div class="col-sm-9">
                {{ Form::text('name[ro]', (isset($data->name_ro) ? $data->name_ro : old('name_ro')), array('class' => 'col-sm-11 col-xs-12')) }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('name', 'Заголовок ENG', ['class'=>'col-sm-3 control-label no-padding-right']) }}
            <div class="col-sm-9">
                {{ Form::text('name[en]', (isset($data->name_en) ? $data->name_en : old('name_en')), array('class' => 'col-sm-11 col-xs-12')) }}
            </div>
        </div>


    </div><!-- /.col-sm-7 -->

    <div class="col-sm-5">

        <div class="form-group">
            {{ Form::label('slug', 'URL', ['class'=>'col-sm-3 control-label no-padding-right']) }}
            <div class="col-sm-9">
                {{ Form::text('slug', (isset($data->slug) ? $data->slug : old('slug')), array('class' => 'col-sm-11 col-xs-12')) }}
            </div>
        </div>

        <div class="form-group">
            <label for="mydate" class="col-sm-3 control-label no-padding-right"> Дата:</label>
            <div class="col-sm-5">
                <div class="input-group">
                    <input type="date" name="date" id="mydate" class="form-control date-picker"
                           data-date-format="yyyy-mm-dd"
                           value="{{ (isset($data->created_at) ? date('Y-m-d', strtotime($data->created_at)) : old('date', Date::now()->format('Y-m-d'))) }}" />
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar bigger-110"></i>
                                        </span>
                </div>
            </div>
        </div>
    </div><!-- /.col-sm-5 -->
</div><!-- /.row -->
<hr>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <div class="col-xs-12">
                <div class="tabbable">
                    <ul id="myTab1" class="nav nav-tabs padding-12 tab-color-blue background-blue">

                        <li class="active">
                            <a href="#photo-ru" data-toggle="tab">Описание</a>
                        </li>
                        <li>
                            <a href="#gallery" data-toggle="tab">Галерея</a>
                        </li>
                        <li>
                            <a href="#photo-galleries-meta"  data-toggle="tab">Мета</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="photo-ru">
                            <div class="tabbable  tabs-left">
                                <ul id="myTab" class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#photodescRu" data-toggle="tab">Описание на русском</a>
                                    </li>
                                    <li>
                                        <a href="#photodescRo" data-toggle="tab">Описание на румынском</a>
                                    </li>
                                    <li>
                                        <a href="#photodescEn" data-toggle="tab">Описание на английском</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane in active" id="photodescRu">
                                        {{ Form::textarea('description[ru]', (isset($data->description) ? $data->description : old('description')), ['class' => 'ckeditor', 'id' => uniqid('id')]) }}
                                    </div>
                                    <div class="tab-pane" id="photodescRo">
                                        {{ Form::textarea('description[ro]', (isset($data->description_ro) ? $data->description_ro : old('description_ro')), ['class' => 'ckeditor', 'id' => uniqid('id')]) }}
                                    </div>
                                    <div class="tab-pane" id="photodescEn">
                                        {{ Form::textarea('description[en]', (isset($data->description_en) ? $data->description_en : old('description_en')), ['class' => 'ckeditor', 'id' => uniqid('id')]) }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        @include('admin.partials.photos', ['table' => 'galleries', 'div_id' => 'gallery', 'table_id' => isset($data->id) ? $data->id : 0] )

                        <div class="tab-pane" id="photo-galleries-meta">
                            @include('admin.partials.meta', ['form_id' => 'videos'])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{ Form::close() }}

@include('admin.partials.ckeditor', ['form_id' => 'galleries'])

@include('admin.partials.slug',['input_name'=>'name[ru]', 'form_id' => 'galleries'])

@include('admin.partials.datepicker')
