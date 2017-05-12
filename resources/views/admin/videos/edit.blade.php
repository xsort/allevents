@if(!isset($data))
    {{ Form::open(['url' => 'admin/videos', 'class' => 'form-horizontal', 'id' => 'videos']) }}
@else
    {{ Form::open(['url' => 'admin/videos/' . $data->id, 'method' => 'put', 'class' => 'form-horizontal']) }}
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
        <div class="form-group">
            {{ Form::label('source', 'Источник', ['class'=>'col-sm-3 control-label no-padding-right']) }}
            <div class="col-sm-9">
                {{ Form::text('source', (isset($data->source) ? $data->source : old('source')), array('class' => 'col-sm-11 col-xs-12')) }}
            </div>
        </div>

    </div><!-- /.col-sm-7 -->

    <div class="col-sm-5">
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
                            <a href="#videos-desc" data-toggle="tab">Описание</a>
                        </li>
                        <li>
                            <a href="#videosmeta"  data-toggle="tab">Мета</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="videos-desc">
                            <div class="tabbable  tabs-left">
                                <ul id="myTab" class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#videosdescRu" data-toggle="tab">Описание на русском</a>
                                    </li>
                                    <li>
                                        <a href="#videosdescRo" data-toggle="tab">Описание на румынском</a>
                                    </li>
                                    <li>
                                        <a href="#videosdescEn" data-toggle="tab">Описание на английском</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane in active" id="videosdescRu">
                                        {{ Form::textarea('description[ru]', (isset($data->description) ? $data->description : old('description')), ['class' => 'ckeditor', 'id' => uniqid('id')]) }}
                                    </div>
                                    <div class="tab-pane" id="videosdescRo">
                                        {{ Form::textarea('description[ro]', (isset($data->description_ro) ? $data->description_ro : old('description_ro')), ['class' => 'ckeditor', 'id' => uniqid('id')]) }}
                                    </div>
                                    <div class="tab-pane" id="videosdescEn">
                                        {{ Form::textarea('description[en]', (isset($data->description_en) ? $data->description_en : old('description_en')), ['class' => 'ckeditor', 'id' => uniqid('id')]) }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        @include('admin.partials.meta', ['form_id' => 'videos'])

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{ Form::close() }}

@include('admin.partials.ckeditor', ['form_id' => 'videos'])

@include('admin.partials.datepicker')
