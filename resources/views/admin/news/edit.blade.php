    @if(!isset($data))
        {{ Form::open(['url' => 'admin/news', 'class' => 'form-horizontal', 'id' => 'news']) }}
    @else
        {{ Form::open(['url' => 'admin/news/' . $data->id, 'method' => 'put', 'class' => 'form-horizontal', 'id' => 'news']) }}
    @endif

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3 ">
                    <label>
                        {{ Form::checkbox('top',  1, (isset($data) && $data->top == 1 ? true : false), ['class' => 'ace']) }}
                        <span class="lbl"> На главную </span>
                    </label>
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('name[ru]', 'Заголовок', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('name[ru]', (isset($data->name) ? $data->name : old('name')), array('class' => 'col-sm-11 col-xs-12 name_ru')) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('name[ro]', 'Заголовок рум', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('name[ro]', (isset($data->name_ro) ? $data->name_ro : old('name_ro')), array('class' => 'col-sm-11 col-xs-12')) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('name[en]', 'Заголовок англ', ['class'=>'col-sm-3 control-label no-padding-right']) }}
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
                               value="{{ (isset($data->created_at) ? date('Y-m-d', strtotime($data->created_at)) : old('date', Date::now()->format('Y-m-d'))) }}" />
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
        </div><!-- /.col-sm-6 -->
    </div><!-- /.row -->
    <hr>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                {{ Form::label('categories', 'Теги', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-7">
                    <select multiple data-placeholder="выберите категорию" id="chosentags" name="chosencat[]" class="tag-input-style col-xs-12">
                        @foreach($tags as $tag)
                        <option value="{{$tag->id}}" @if (in_array($tag->id, isset($data) ? $data->getTagsIdsArray() : array())) selected="selected" @endif>
                            {{ $tag->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-1">
                     <a href="javascript:AddTag();" class="btn btn-sm btn-primary"><i class="ace-icon fa fa-plus-circle"></i></a>
                </div>
            </div>
        </div>

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
    </div>

    <hr>
    <div class="space"></div>
    <div class="tabbable">
        <ul id="myTab4" class="nav nav-tabs padding-12 tab-color-blue background-blue">
            <li class="active">
                <a href="#newsDesc" data-toggle="tab">Описание</a>
            </li>
            <li>
                <a href="#newsPhotos" data-toggle="tab">Фото</a>
            </li>
            <li>
                <a href="#newsmeta" data-toggle="tab">META</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="newsDesc">

                <div class="tabbable  tabs-left">

                 <ul id="myTab" class="nav nav-tabs">
                   <li class="active">
                      <a href="#newsDescRu" data-toggle="tab">Описание на русском</a>
                   </li>
                   <li>
                      <a href="#newsDescRo" data-toggle="tab">Описание на румынском</a>
                   </li>
                   <li>
                      <a href="#newsDescEn" data-toggle="tab">Описание на английском</a>
                   </li>
                 </ul>

                 <div class="tab-content">
                   <div class="tab-pane in active" id="newsDescRu">
                     {{ Form::textarea('description[ru]', (isset($data->description) ? $data->description : old('description')), array('class' => 'ckeditor', 'id' => uniqid('id'))) }}
                   </div>
                   <div class="tab-pane" id="newsDescRo">
                     {{ Form::textarea('description[ro]', (isset($data->description_ro) ? $data->description_ro : old('description_ro')), array('class' => 'ckeditor', 'id' => uniqid('id'))) }}
                   </div>
                   <div class="tab-pane" id="newsDescEn">
                     {{ Form::textarea('description[en]', (isset($data->description_en) ? $data->description_en : old('description_en')), array('class' => 'ckeditor', 'id' => uniqid('id'))) }}
                   </div>

                 </div>

                </div>
             </div>

            @include('admin.partials.meta', ['form_id' => 'news'])

            @include('admin.partials.photos', ['table' => 'news', 'div_id' => 'newsPhotos', 'table_id' => isset($data->id) ? $data->id : 0])
        </div>

</div>


    @include('admin.partials.ckeditor', ['form_id' => 'news'])

    @include('admin.partials.slug',['input_name'=>'name[ru]', 'form_id' => 'news'])

    @include('admin.partials.datepicker')

    <script type="text/javascript">
         function AddTag(){
             var modal = $('#add-tag-modal');
             modal.modal();
             modal.find('button.btn-default').click(function(){
                 var value = modal.find('input[name=tag_name]').val();
                 $.get("admin/json/addtag",
                         {
                             'value': value
                         },
                         function(response){
                             if (response.success=="false"){
                                 toastr.error(response.data);
                                 return;
                             }
 
                             var id = response.data;
                             $('#chosentags').append('<option value="' + id + '" selected="selected">' + value + '</option>');
                             $("#chosentags").trigger("chosen:updated");
                             toastr.success("Тег добавлен");
                             modal.modal('toggle');
                         }
                 ), "json";
             });
         }
    </script>

    {!! HTML::script('ace/assets/js/chosen.jquery.min.js') !!}
    <script>
        $("#chosentags").chosen();
    </script>


    <!--! popup tag insert -->
    <div aria-hidden="true" aria-labelledby="mySmallModalLabel" role="dialog" tabindex="-1" data-show="true" data-backdrop="true" data-keyboard="true" class="modal fade" id="add-tag-modal" >
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Введите новый тег</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <input class="form-control" type="text" name="tag_name" />
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-sm-12">
                            <button class="btn btn-default" >Сохранить</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /popup tag insert-->