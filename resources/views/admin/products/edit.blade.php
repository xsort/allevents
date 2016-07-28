@extends('admin.body')
@section('title', 'Объекты')


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
    
        <div class="form-actions">
        <div class="row center">
            <div class="col-sm-2">
                <button id="submit_button1" type="submit" class="btn  btn-success btn-block btn-responsive" ><i class="ace-icon fa fa-floppy-o  bigger-120"></i> Сохранить </button>
            </div>
            <!--
            <div class="col-sm-2">
                <button id="submit_button1" type="submit" class="btn  btn-yellow btn-block btn-responsive" ><i class="ace-icon fa fa-floppy-o  bigger-120"></i> Сохранить и закрыть</button>
            </div>-->
            <div class="col-sm-2 ">
                <label>
                    {{ Form::checkbox('top',  1, (isset($data) && $data->top == 1 ? true : false), ['class' => 'ace']) }}
                    <span class="lbl"> На главную </span>
                </label>
            </div>
            <div class="col-sm-4">
                <div class="profile-contact-info">
                    <div class="profile-links align-left">
                        
                        @if (isset($data))
                        <div class="btn btn-link">
                            <i class="ace-icon fa fa- bigger-120 green"></i>
                            ID: {{ $data->id }}
                        </div>
                        
                        <div class="btn btn-link">
                            <i class="ace-icon fa fa-calendar bigger-120 green"></i>
                             Изменен: {{ $data->updated_at }}
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
                {{ Form::label('name', 'Заголовок', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('name[ru]', (isset($data->name) ? $data->name : old('name')), array('class' => 'col-sm-11 col-xs-12 name_ru')) }}
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
                    {{ Form::label('slug', 'URL', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                    <div class="col-sm-9">
                        {{ Form::text('slug', (isset($data->slug) ? $data->slug : old('slug')), array('class' => 'col-sm-11 col-xs-12')) }}
                    </div>
            </div>

            <div class="form-group">
                <label for="mydate" class="col-sm-3 control-label no-padding-right"> Дата:</label>
                <div class="col-sm-5">
                    <div class="input-group">
                        <input type="date" name="date" class="form-control date-picker"
                               data-date-format="yyyy-mm-dd"
                               value="{{ (isset($data->created_at) ? date('Y-m-d', strtotime($data->created_at)) : old('date', Date::now()->format('Y-m-d'))) }}" />
                        <span class="input-group-addon">
                            <i class="fa fa-calendar bigger-110"></i>
                        </span>
                    </div>

                </div>
            </div>

            <div class="form-group">
                    {{ Form::label('map', 'Координаты:', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                    <div class="col-sm-9">
                        <input type="text" class="col-sm-5" placeholder="X">
                        <input type="text" class="col-sm-5 col-sm-offset-1" placeholder="Y">
                    </div>
            </div>
            
        </div><!-- /.col-sm-6 -->
        
    </div><!-- /.row -->

    <hr>

   <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                {{ Form::label('parent', 'родитель', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                
                <div class="col-sm-9">
                    @if(isset($categories))
                    @if(isset($parents))
                    
                    {{ Form::select('parent[]', array("null" => "Нет родителя") + $categories, $parents, ['multiple'=>'multiple','id'=>'chosencat','class'=>'tag-input-style col-sm-11 control-label no-padding-right']) }}
                    @else
                    {{ Form::select('parent[]', $categories, '', ['multiple'=>'multiple','id'=>'chosencat','class'=>'tag-input-style col-sm-11 control-label no-padding-right']) }}
                    @endif
                    @endif

                </div>
            </div>
        </div><!-- /.col-sm-6 -->

        <div class="col-sm-6">
            <div class="form-group">
                {{ Form::label('video', 'Видео', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                     {{ Form::text('video', (isset($data->video) ? $data->slug : old('video')), array('class' => 'col-sm-11 col-xs-12')) }}
                </div>
            </div>
        </div><!-- /.col-sm-6 -->
    </div><!-- row -->

    <hr>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="tabbable">
                        <ul id="myTab1" class="nav nav-tabs padding-12 tab-color-blue background-blue">
                            <li class="active">
                                <a href="#photos"  data-toggle="tab">Лого</a>
                            </li>
                            <!-- <li>
                                <a href="#img-slide"  data-toggle="tab">Слайдшоу</a>
                            </li> -->
                           

                            <div class="center"> <span class="label label-xlg label-purple">Логотип заведения / Слайдшоу</span></div>
                        </ul>
                    
                        <div class="tab-content">
                            @include('admin.partials.photos', ['table' => 'products', 'class' => 'active', 'table_id' => isset($data->id) ? $data->id : 0] )
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="tabbable">
                        <ul id="myTab1" class="nav nav-tabs padding-12 tab-color-blue background-blue">
                            <li class="active">
                                <a href="#short_ru" data-toggle="tab" aria-expanded="true">Русс. яз.</a>
                            </li>
                    
                            <li class="">
                                <a href="#short_ro" data-toggle="tab" aria-expanded="false">Рум. яз.</a>
                            </li>

                            <li class="">
                                <a href="#short_en" data-toggle="tab" aria-expanded="false">Англ. яз.</a>
                            </li>

                            <div class="center"> <span class="label label-xlg label-purple">Краткое описание</span></div>
                        </ul>
                    
                        <div class="tab-content">
                            <div class="tab-pane in active" id="short_ru">
                             {{ Form::textarea('description_short[ru]', (isset($data->description_short) ? $data->description_short : old('description_short')), array('style'=>'width:100%', 'rows'=>'3')) }}
                           </div>
                           <div class="tab-pane" id="short_ro">
                             {{ Form::textarea('description_short[ro]', (isset($data->description_short_ro) ? $data->description_short_ro : old('description_short_ro')), array('style'=>'width:100%', 'rows'=>'3')) }}
                           </div>
                           <div class="tab-pane" id="short_en">
                             {{ Form::textarea('description_short[en]', (isset($data->description_short_en) ? $data->description_short_en : old('description_short_en')), array('style'=>'width:100%', 'rows'=>'3')) }}
                           </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
<hr>
    <div class="space"></div>
    <div class="tabbable">
        <ul id="myTab4" class="nav nav-tabs padding-12 tab-color-blue background-blue">
            <li class="active">
                <a href="#ru" data-toggle="tab">Описание</a>
            </li>

            <li>
                <a href="#plan" data-toggle="tab">План зала</a>
            </li>
            <li>
                <a href="#photo-galleries" data-toggle="tab">Фотоотчет</a>
            </li>
            <li>
                <a href="#videor" data-toggle="tab">Видеоотчет</a>
            </li>

            <li>
                <a href="#news" data-toggle="tab">Новости</a>
            </li>

            <li>
                <a href="#background" data-toggle="tab">Обложка</a>
            </li>

            @if (isset($data))
                <li>
                    <a href="{{ route('admin.menu', $data->id) }}" target="_blank">Меню</a>
                </li>
            @endif


            <li>
                <a href="#meta" data-toggle="tab">META</a>
            </li>

        </ul>

       
    </div>

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
                     {{ Form::textarea('description[ru]', (isset($data->description) ? $data->description : old('description')), array('class' => 'ckeditor', 'id' => 'description')) }}
                   </div>
                   <div class="tab-pane" id="descRo">
                     {{ Form::textarea('description[ro]', (isset($data->description_ro) ? $data->description_ro : old('description_ro')), array('class' => 'ckeditor', 'id' => 'description_ro')) }}
                   </div>
                   <div class="tab-pane" id="descEn">
                     {{ Form::textarea('description[en]', (isset($data->description_en) ? $data->description_en : old('description_en')), array('class' => 'ckeditor', 'id' => 'description_en')) }}
                   </div>

                 </div>

                </div>
             </div>

            <div class="tab-pane" id="photo-galleries">
                <div class="row">
                    <div class="col-xs-12">
                        <a href="admin/galleries/create" class="btn btn-yellow modalbox" title="Добавить галерею">Добавить галерею</a>
                    </div>
                </div>
                <div class="space"></div>
                <div class="row">
                    <div class="col-xs-12">
                        <table id="simple-table" class="table  table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="detail-col">ID</th>
                                    <th>Наименование</th>
                                    <th class="hidden-480">Доп. информация</th>

                                    <th class="hidden-480">Дата</th>

                                    <th>
                                        <i class="ace-icon fa fa-eye-slash bigger-130"></i>
                                    </th>

                                    <th>
                                        <i class="menu-icon fa fa-cogs"></i>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @if(isset($data))
                                    @foreach($data->galleries as $d)
                                        @include('admin.partials.table_tr', ['table'    => 'galleries',
                                                                             'id'       => $d->id,
                                                                             'date'     => $d->created_at,
                                                                             'name'     => $d->name,
                                                                             'enabled'  => $d->enabled
                                                                             ] )
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div><!-- /.span -->
                </div>
            </div>

            <div class="tab-pane" id="news">
                <div class="row">
                    <div class="col-xs-12">
                        <a href="admin/news/create" class="btn btn-yellow modalbox" title="Добавить новость">Добавить новость</a>
                    </div>
                </div>
                <div class="space"></div>
                <div class="row">
                    <div class="col-xs-12">
                        <table id="simple-table" class="table  table-bordered table-hover">
                            <thead>
                            <tr>
                                <th class="detail-col">ID</th>
                                <th>Наименование</th>
                                <th class="hidden-480">Доп. информация</th>

                                <th class="hidden-480">Дата</th>

                                <th>
                                    <i class="ace-icon fa fa-eye-slash bigger-130"></i>
                                </th>

                                <th>
                                    <i class="menu-icon fa fa-cogs"></i>
                                </th>
                            </tr>
                            </thead>

                            <tbody>
                            @if(isset($data))
                                @foreach($data->news as $d)
                                    @include('admin.partials.table_tr', ['table'    => 'news',
                                                                         'id'       => $d->id,
                                                                         'date'     => $d->created_at,
                                                                         'name'     => $d->name,
                                                                         'enabled'  => $d->enabled
                                                                         ] )
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div><!-- /.span -->
                </div>

            </div>

            @include('admin.partials.photos', ['table' => 'hall_plan', 'div_id' => 'plan', 'table_id' => isset($data->id) ? $data->id : 0] )

            @include('admin.partials.photos', ['table' => 'background', 'div_id' => 'background', 'width'=> 10000, 'height'=> 10000, 'table_id' => isset($data->id) ? $data->id : 0] )

            <div class="tab-pane" id="videor">
                <div class="row">
                    <div class="col-xs-12">
                        <a href="admin/videos/create" class="btn btn-yellow modalbox" title="Добавить видео">Добавить видео</a>
                    </div>
                </div>
                <div class="space"></div>
                <div class="row">
                    <div class="col-xs-12">
                        <table id="simple-table" class="table  table-bordered table-hover">
                            <thead>
                            <tr>
                                <th class="detail-col">ID</th>
                                <th>Наименование</th>
                                <th class="hidden-480">Доп. информация</th>

                                <th class="hidden-480">Дата</th>

                                <th>
                                    <i class="ace-icon fa fa-eye-slash bigger-130"></i>
                                </th>

                                <th>
                                    <i class="menu-icon fa fa-cogs"></i>
                                </th>
                            </tr>
                            </thead>

                            <tbody>
                            @if(isset($data))
                                @foreach($data->videos as $d)
                                    @include('admin.partials.table_tr', ['table'    => 'videos',
                                                                         'id'       => $d->id,
                                                                         'date'     => $d->created_at,
                                                                         'name'     => $d->name,
                                                                         'enabled'  => $d->enabled
                                                                         ] )
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div><!-- /.span -->
                </div>

            </div>


            @include('admin.partials.meta')
            
        </div>

    <div class="form-actions">
        {{ Form::submit('Сохранить', array('class' => 'btn btn-success')) }}
    </div>

    {{ Form::close() }}
@endsection

@section('scripts')

    @include('admin.partials.ckeditor')

    @include('admin.partials.datepicker')

    @include('admin.partials.chosen')

    @include('admin.partials.slug',['input_name'=>'name[ru]'])

    @include('admin.common.modals')

    @include('admin.partials.visibility')

    @include('admin.partials.ajaxdelete')

    <script>
        var modalSuccessSubmit = function(result){
            var stop     = false;
            var table    = result.table;
            var block_id = "";
            switch (table) {
                case 'galleries':
                        block_id = "photo-galleries";
                    break;
                case 'videos':
                        block_id = "videor";
                    break;
                case 'news':
                        block_id = "news";
                    break;
            }

            var $TABLE      = $("#" + block_id + ' table tbody');
            //смотрим если уже был такой id, т.е. update
            $TABLE.find('tr').each(function(){
                var cur_id = $(this).find("input").val();
                if (cur_id == result.id){
                    $(this).find('a.modalbox:first').text(result.name);
                    stop = true;
                }
            });

            if (stop) return true;

            var $TR         = $('<tr></tr>');
            var $TD         = $('<td class="center"></td>');
            var $INPUT      = $('<td class="center"><input type="hidden" name="'+table+'[]" value="' + result.id + '"  /><span>'+result.id+'</span></td>');
            var $NAME       = $('<td><a href="admin/'+ table +'/' + result.id + '/edit" class="modalbox" title="Редактирование: ' + result.name + '"> ' + result.name + '</a></td>');

            $TABLE.append(
                    $TR.append($INPUT)
                        .append($NAME)
                        .append($TD)
                        .append($TD.clone())
                        .append($TD.clone())
                        .append($TD.clone())
                    );

            initModals();
        }
    </script>

@endsection


