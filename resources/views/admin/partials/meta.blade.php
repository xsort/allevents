<div class="tab-pane " id="{{ $form_id or '' }}meta">
                <div class="tabbable  tabs-left">

                 <ul id="myTab" class="nav nav-tabs">
                   <li class="active">
                      <a href="#metaRu{{ $form_id or '' }}" data-toggle="tab">Meta на русском</a>
                   </li>
                   <li>
                      <a href="#metaRo{{ $form_id or '' }}" data-toggle="tab">Meta на румынском</a>
                   </li>
                   <li>
                      <a href="#metaEn{{ $form_id or '' }}" data-toggle="tab">Meta на английском</a>
                   </li>
                 </ul>

                 <div class="tab-content">
                   <div class="tab-pane in active" id="metaRu{{ $form_id or '' }}">
                     <div class="form-group">
                            {{ Form::label('meta_description', 'Meta description:', ['class'=>'col-sm-2 control-label no-padding-right']) }}
                            <div class="col-sm-10">
                                {{ Form::textarea('meta_description[ru]', (isset($data->meta->meta_description) ? $data->meta->meta_description : old('meta_description')), array('class' => 'col-xs-10', 'rows'=> 5)) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('meta_keywords', 'Meta keywords:', ['class'=>'col-sm-2 control-label no-padding-right']) }}
                            <div class="col-sm-10">
                                {{ Form::textarea('meta_keywords[ru]', (isset($data->meta->meta_keywords) ? $data->meta->meta_keywords : old('meta_keywords')), array('class' => 'col-xs-10','rows'=> 5)) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('title', 'Title:', ['class'=>'col-sm-2 control-label no-padding-right']) }}
                            <div class="col-sm-10">
                                {{ Form::textarea('title[ru]', (isset($data->meta->title) ? $data->meta->title : old('title')), array('class' => 'col-xs-10','rows'=> 5)) }}
                            </div>
                        </div>
                   </div>
                   <div class="tab-pane" id="metaRo{{ $form_id or '' }}">
                     <div class="form-group">
                            {{ Form::label('meta_description', 'Meta description:', ['class'=>'col-sm-2 control-label no-padding-right']) }}
                            <div class="col-sm-10">
                                {{ Form::textarea('meta_description[ro]', (isset($data->meta->meta_description_ro) ? $data->meta->meta_description_ro : old('meta_description')), array('class' => 'col-xs-10', 'rows'=> 5)) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('meta_keywords', 'Meta keywords:', ['class'=>'col-sm-2 control-label no-padding-right']) }}
                            <div class="col-sm-10">
                                {{ Form::textarea('meta_keywords[ro]', (isset($data->meta->meta_keywords_ro) ? $data->meta->meta_keywords_ro : old('meta_keywords')), array('class' => 'col-xs-10','rows'=> 5)) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('title', 'Title:', ['class'=>'col-sm-2 control-label no-padding-right']) }}
                            <div class="col-sm-10">
                                {{ Form::textarea('title[ro]', (isset($data->meta->title_ro) ? $data->meta->title_ro : old('title_ro')), array('class' => 'col-xs-10','rows'=> 5)) }}
                            </div>
                        </div>
                   </div>
                   <div class="tab-pane" id="metaEn{{ $form_id or '' }}">
                     <div class="form-group">
                            {{ Form::label('meta_description', 'Meta description:', ['class'=>'col-sm-2 control-label no-padding-right']) }}
                            <div class="col-sm-10">
                                {{ Form::textarea('meta_description[en]', (isset($data->meta->meta_description_en) ? $data->meta->meta_description_en : old('meta_description')), array('class' => 'col-xs-10', 'rows'=> 5)) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('meta_keywords', 'Meta keywords:', ['class'=>'col-sm-2 control-label no-padding-right']) }}
                            <div class="col-sm-10">
                                {{ Form::textarea('meta_keywords[en]', (isset($data->meta->meta_keywords_en) ? $data->meta->meta_keywords_en : old('meta_keywords')), array('class' => 'col-xs-10','rows'=> 5)) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('title', 'Title:', ['class'=>'col-sm-2 control-label no-padding-right']) }}
                            <div class="col-sm-10">
                                {{ Form::textarea('title[en]', (isset($data->meta->title_en) ? $data->meta->title_en : old('title_en')), array('class' => 'col-xs-10','rows'=> 5)) }}
                            </div>
                        </div>
                   </div>
                 </div>

                </div>  
</div>