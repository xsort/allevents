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
            <div class="col-sm-2 showTip L7">
                <label >
                    {{ Form::checkbox('top',  1, (isset($data) && $data->top == 1 ? true : false), ['class' => 'ace ']) }}
                    <span class="lbl showTip L7"> На главную </span>
                </label>
            </div>
            <div class="col-sm-4">
                <div class="profile-contact-info">
                    <div class="profile-links align-left">
                        @if (isset($data))
                            <span class="label label-success">ID: {{ $data->id }}</span>
                            <span class="label label-success"><i class="ace-icon fa fa-calendar bigger-120 white"></i> Изменен: {{ $data->updated_at }}</span>
                            @if(isset($manager_edited))
                        @if($manager_edited->pivot->edited == 1)
                            <span class="label label-warning"><i class="ace-icon fa fa-pencil bigger-120 white"></i>Изменен менеджером <br/> Требует проверки модератором</span>
                        @endif
                        @endif
                            <a class="label label-info" href="/{{ $data->slug }}" target="_blank">Посмотреть на сайте</a>
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
            <div class="form-group hide">
                {{ Form::label('type', 'Тип', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::select('type', config('allevents.types'), ((isset($data->type)) ? $data->type : 0), ['class' => 'col-sm-11 col-xs-12 showTip L13']) }}
                </div>
            </div>
        </div><!-- /.col-sm-6 -->

        <div class="col-sm-6">
        
            <div class="form-group">
                    {{ Form::label('slug', 'URL', ['class'=>'col-sm-3  control-label no-padding-right']) }}
                    <div class="col-sm-9">
                        {{ Form::text('slug', (isset($data->slug) ? $data->slug : old('slug')), array('class' => 'col-sm-11 col-xs-12 showTip L1')) }}
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
                    <div class="col-sm-9 showTip L5" >
                        {{ Form::text('map[X]', ((isset($data->map) && $data->map != '') ? $data->map->X : old('map[X]')), array('class' => 'col-sm-5', 'placeholder' => 'X', 'id' => 'mapX')) }}
                        {{ Form::text('map[Y]', ((isset($data->map) && $data->map != '') ? $data->map->Y : old('map[Y]')), array('class' => 'col-sm-5 col-sm-offset-1', 'placeholder' => 'Y', 'id' => 'mapY')) }}
                    </div>
            </div>
            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3 text-center">
                    <div class="row">
                        <button type="button" data-toggle="modal" data-target="#add-map-modal" class="btn btn-sm btn-primary showTip L5">Открыть карту</button> 
                    </div>
                </div>
            </div>
            
        </div><!-- /.col-sm-6 -->
   </div><!-- /.row -->

   <hr>

   <div class="row">
        <div class="col-sm-6">
            <div class="form-group showTip L6">
                {{ Form::label('parent', 'Категории', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                
                <div class="col-sm-9 ">
                    @if(isset($categories))
                    @if(isset($parents))
                    
                    {{ Form::select('parent[]', array("null" => "Нет категории") + $categories, $parents, ['multiple'=>'multiple','id'=>'chosencat','class'=>'tag-input-style col-sm-11 control-label no-padding-right']) }}
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
                     {{ Form::text('video', (isset($data->video) ? $data->video : old('video')), array('class' => 'col-sm-11 col-xs-12 showTip L3')) }}
                </div>
            </div>
        </div><!-- /.col-sm-6 -->
    </div><!-- row -->

    <hr>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="tabbable showTip L2" >
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
            <div class="form-group ">
                <div class="col-xs-12 ">
                    <div class="tabbable ">

<md-toolbar class="adminToolbar showTip L4">
      <div class="md-toolbar-tools">

        <h2>
          <span>Краткое описание</span>
        </h2>
        <span flex></span>
        
        
      </div>
    </md-toolbar>
                        <div ng-cloak class="showTip L4">
                          <md-content class="showTip L4">
                            <md-tabs md-dynamic-height md-border-bottom class="adminTab">
                              <md-tab label="Русс. яз.">
                                <md-content class="md-padding">
                                  
                                  {{ Form::textarea('description_short[ru]', (isset($data->description_short) ? $data->description_short : old('description_short')), array('style'=>'width:100%', 'rows'=>'3', 'class' => 'showTip L4')) }}
                                </md-content>
                              </md-tab>
                              <md-tab label="Рум. яз.">
                                <md-content class="md-padding">
                                  
                                  {{ Form::textarea('description_short[ro]', (isset($data->description_short_ro) ? $data->description_short_ro : old('description_short_ro')), array('style'=>'width:100%', 'rows'=>'3', 'class' => 'showTip L4')) }}
                                </md-content>
                              </md-tab>
                              <md-tab label="Англ. яз.">
                                <md-content class="md-padding">
                                  
                                  {{ Form::textarea('description_short[en]', (isset($data->description_short_en) ? $data->description_short_en : old('description_short_en')), array('style'=>'width:100%', 'rows'=>'3', 'class' => 'showTip L4')) }}
                                </md-content>
                              </md-tab>
                            </md-tabs>
                          </md-content>
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
                <a href="#contacts" data-toggle="tab">Контакты</a>
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
                    <a href="{{ route('admin.menu', $data->id) }}" target="_blank">Продукция</a>
                </li>

                <li>
                    <a href="{{ route('admin.relations', $data->id) }}" target="_blank">Ссылки</a>
                </li>
            @endif

            <li>
                <a href="#meta" data-toggle="tab">META</a>
            </li>

        </ul>

       
    </div>

        <div class="tab-content">
            <div class="tab-pane active" id="ru">
                <div ng-cloak >
                          <md-content >
                            <md-tabs md-dynamic-height md-border-bottom class="adminTabDescr" >
                              <md-tab label="Описание на русском">
                                <md-content >
                                  {{ Form::textarea('description[ru]', (isset($data->description) ? $data->description : old('description')), array('class' => 'ckeditor', 'id' => 'description')) }}
                                </md-content>
                              </md-tab>
                              <md-tab label="Описание на румынском">
                                <md-content >
                                  {{ Form::textarea('description[ro]', (isset($data->description_ro) ? $data->description_ro : old('description_ro')), array('class' => 'ckeditor', 'id' => 'description_ro')) }}
                                </md-content>
                              </md-tab>
                              <md-tab label="Описание на английском">
                                <md-content >
                                  {{ Form::textarea('description[en]', (isset($data->description_en) ? $data->description_en : old('description_en')), array('class' => 'ckeditor', 'id' => 'description_en')) }}
                                </md-content>
                              </md-tab>
                            </md-tabs>
                          </md-content>
                        </div>

   <!--              <div class="tabbable  tabs-left">

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

                </div> -->
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

            @include('admin.partials.photos', ['table' => 'hall_plan', 'div_id' => 'plan', 'class' => 'showTip L8', 'table_id' => isset($data->id) ? $data->id : 0] )

            @include('admin.partials.photos', ['table' => 'background', 'div_id' => 'background', 'class' => 'showTip L9', 'width'=> 10000, 'height'=> 10000, 'table_id' => isset($data->id) ? $data->id : 0] )

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


            <div class="tab-pane" id="contacts">

                <div class="tabbable  tabs-left">

                    <ul id="myTab" class="nav nav-tabs">
                        @foreach($contacts as $key => $contact)
                        <li @if($key==0)class="active"@endif>
                            <a href="#contact{{ $contact->id }}" data-toggle="tab">{{ $contact->name }}</a>
                        </li>
                        @endforeach
                    </ul>

                    <div class="tab-content">
                        @foreach($contacts as $key => $contact)
                        <div class="tab-pane @if($key==0) in active @endif" id="contact{{ $contact->id }}">
                            <div class="row">
                                <label class="col-xs-1">RU:</label>
                                <div class="col-xs-6">
                                {{ Form::textarea('contacts['.$contact->id.'][ru]', (isset($contacts_values)  ? $contacts_values[$contact->id]->name : ''),     ['placeholder'=>$contact->name, 'rows'=>'3'])}}
                                </div>
                            </div>
                            <div class="space"></div>
                            <div class="row">
                                <label class="col-xs-1">RO:</label>
                                <div class="col-xs-6">
                                {{ Form::textarea('contacts['.$contact->id.'][ro]', (isset($contacts_values)  ? $contacts_values[$contact->id]->name_ro : ''),  ['placeholder'=>$contact->name_ro, 'rows'=>'3'])}}
                                </div>
                            </div>
                            <div class="space"></div>
                            <div class="row">
                                <label class="col-xs-1">EN:</label>
                                <div class="col-xs-6">
                                {{ Form::textarea('contacts['.$contact->id.'][en]', (isset($contacts_values)  ? $contacts_values[$contact->id]->name_en : ''),  ['placeholder'=>$contact->name_en, 'rows'=>'3'])}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>


            @include('admin.partials.meta')
            
        </div>

    <div class="form-actions">
        {{ Form::submit('Сохранить', array('class' => 'btn btn-success')) }}
    </div>
    {{ Form::close() }}

    <div aria-hidden="true" aria-labelledby="mySmallModalLabel" role="dialog"   data-backdrop="true" data-keyboard="true" class="modal fade" id="add-map-modal" >

        <div class="modal-dialog modal-md">
         <div class="close-modal" data-dismiss="modal"><i class="fa fa-close"></i></div>
            <div class="modal-content">
                <div class="modal-body">
                    <div id="YMapsID" style="width:100%;height:500px;"></div>
                </div>
            </div>
        </div>
    </div><!-- /popup map insert-->

@endsection

@section('styles')
    <style>
        .label{
            height: auto ;
            margin:2px;
        }
        .adminTab{
            border: 1px solid #c5d0dc;
        }
        md-tabs.adminTab.md-default-theme md-ink-bar, md-tabs md-ink-bar,md-tabs.adminTabDescr.md-default-theme md-ink-bar, md-tabs md-ink-bar { color: #4c718a !important; background-color:#7db4d8 !important; }
        .adminTab md-tabs-wrapper { background-color: #eff3f8; }
         md-tabs.adminTab .md-tab.md-active { color: #4c718a; }
        .adminTab .md-tab, .adminTabDescr .md-tab { text-transform: inherit; }
        .adminToolbar{     min-height: 35px; height: 35px; background-color: #428bca !important; }
        .adminToolbar .md-toolbar-tools { font-size: 15px; }
        .adminTabDescr md-content{ padding: 16px 0 0}
         .adminTabDescr md-tabs-wrapper { background-color: transparent; }
         .adminTabDescr { border: 0px solid; }
         md-content{ background-color: transparent !important; }
        
    </style>
@endsection

@section('stylesTooltip')
<style>
    div#tipDiv {
    font-size:12px; line-height:1.2; letter-spacing: .2px;
    color:#000; background-color:white; padding: 2px;
    
    padding:4px;
    width:320px; 
    box-shadow: 0 1px 5px 0 rgba(0,0,0,.2), 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.12);
}
</style>
@endsection

@section('scriptsTooltip')


{!! HTML::script('ace/dist/js/dw_tooltip_c.js') !!}

<script type="text/javascript">

dw_Tooltip.defaultProps = {
}
dw_Tooltip.content_vars = {
    L1: '<b>URL</b> компании должен быть латинскими маленькими символами и вместо пробела должен быть симол нижего подчеркивания <b>"_"</b>',
    L2: '<span><b>Первое</b> добавленное изображение это <b>логотип</b> компании и должент быть шириной не меньше <b>400px</b> <br><br> <b>Второе</b> и последующее изображение это <b>афиша</b> компании и должно быть с разрешением в <b>1100 x 400</b></span>',
    L3: 'Вставте в данное поле ссылку на <b>YouTube</b> видео',
    L4: '<b>Краткое описание</b> должно содержать не более <b>120</b> символов, оно коротко рассказывает о вашей компании',
    L5: 'Для определения <b>координат</b> компании, нажмите на кнопку <b>Открыть карту</b>, найдите на карте вашу компанию, перетащите метку на нужное место и закройте окно (координаты выставятся <b>автоматически</b>)',
    L6: 'Выбор <b>категорий</b> служит для отображения вашей компании на нужном разделе сайта',
    L7: 'При выборе данного пункта, компания будет отображена на <b>главной</b> странице',
    L8: 'Изображение для плана зала должно быть с разрешением в <b>1100 x 545</b>',
    L9: 'Изображение для обложки должно быть с разрешением в <b>2560 x 1440</b>',
    L10: '<b>Title</b> это название страницы, которое отображается в самом <b>верхнем поле</b> браузера. Также содержание title отображается в выдаче поисковых систем по запросам пользователей',
    L11: '<b>Meta Description</b> должен содержать <b>краткое описание</b> страницы. Достаточно добавить одно-два небольших предложения, в которых указать о чём и для кого эта страница',
    L12: '<b>Meta Keywords</b> - Те слова, которые наиболее полно характеризуют содержимое страницы и будут для нее ключевыми. Это могут быть как <b>отдельные слова</b>, так и <b>словосочетания</b>, но они <b>обязательно</b> должны встречаться в тексте на странице.',  

    L13: 'Выберите <b>тип</b> к которому относиться ваша <b>компания</b>',
}

</script>
@endsection

@section('scripts')

{!! HTML::script('ace/dist/js/angular.min.js') !!}
{!! HTML::script('ace/dist/js/angular-animate.min.js') !!}
{!! HTML::script('ace/dist/js/angular-aria.min.js') !!}
{!! HTML::script('ace/dist/js/angular-messages.min.js') !!}
{!! HTML::script('ace/dist/js/angular-material.min.js') !!}

  <script type="text/javascript">    
    angular.module('managerApp', ['ngMaterial']);
  </script>

     {!! HTML::style('ace/dist/css/angular-material.min.css') !!}
    <style>
        body{
            background-color: transparent !important;
            height: auto;
        }

    </style>

    @include('admin.partials.ckeditor')

    @include('admin.partials.datepicker')

    @include('admin.partials.chosen')

    @include('admin.partials.slug',['input_name'=>'name[ru]'])

    @include('admin.common.modals')

    @include('admin.partials.visibility')

    @include('admin.partials.ajaxdelete')

    <script type="text/javascript">
         function AddMap(){
             var modal = $('#add-map-modal');
             modal.modal();
         }
    </script>

    <script src="https://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"> </script>

    <script type="text/javascript">
        @if(isset($data->map->X) && $data->map->X != 0)
            var x = '{{ $data->map->X }}';
        @else
            var x = '47.02615918';
        @endif

        @if(isset($data->map->Y) && $data->map->Y != 0)
            var y = '{{ $data->map->Y }}';
        @else
            var y = '28.83406047';
        @endif

        ymaps.ready(function () {
            var myMap = new ymaps.Map('YMapsID', {
                center: [x, y],
                zoom: 14,
                type: 'yandex#publicMap',
                behaviors: ['default', 'scrollZoom']
            });

            var searchControl = new ymaps.control.SearchControl({ noPlacemark: true });

            myMap.controls
                    .add('mapTools')
                    .add('zoomControl')
                    .add('typeSelector', { top: 5, right: 5 })
                    .add(searchControl, { top: 5, left: 200 });

            // Создаем геообъект с типом геометрии "Точка".
            myPlacemark = new ymaps.Placemark([x, y]);
            myPlacemark.options.set('draggable', true);
            myPlacemark.events.add('dragend', function (e) {
                var coords = myPlacemark.geometry.getCoordinates().toString().split(",");
                $('input#mapX').val(coords[0]);
                $('input#mapY').val(coords[1]);
            });

            myMap.geoObjects.add(myPlacemark);

            searchControl.events.add("resultselect", function (e) {
                var coordsObj = searchControl.getResultsArray()[0].geometry.getCoordinates();
                var coords = coordsObj.toString().split(",");
                $('input#mapX').val(coords[0]);
                $('input#mapY').val(coords[1]);
                myPlacemark.getOverlay().getData().geometry.setCoordinates(coordsObj);
            });

        });

        function changeCoords(coords){

        }

        function DoneClick(){
            var str = $("#markerPosition").val();
            var arr = str.split(',');
            var x_coord = arr[0].trim();
            var y_coord = arr[1].trim();
            $("input[name=mapX]").val(x_coord);
            $("input[name=mapY]").val(y_coord);
            tb_remove();
        }

    </script>

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


