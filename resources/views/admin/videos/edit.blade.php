@if(!isset($data))
    {{ Form::open(['url' => 'admin/products', 'class' => 'form-horizontal']) }}
@else
    {{ Form::open(['url' => 'admin/products/' . $data->id, 'method' => 'put', 'class' => 'form-horizontal']) }}
@endif
<div class="row">
    <div class="form-actions margin-t-m-15">
        <div class="row center">
            <div class="col-sm-3">
                <button id="submit_button1" type="submit" class="btn  btn-success btn-block btn-responsive" ><i class="ace-icon fa fa-floppy-o  bigger-120"></i> Сохранить </button>
            </div>
            <!--
            <div class="col-sm-2">
                <button id="submit_button1" type="submit" class="btn  btn-yellow btn-block btn-responsive" ><i class="ace-icon fa fa-floppy-o  bigger-120"></i> Сохранить и закрыть</button>
            </div>-->
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
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('name', 'Заголовок', ['class'=>'col-sm-4 control-label no-padding-right']) }}
            <div class="col-sm-8">
                {{ Form::text('name[ru]', (isset($data->name) ? $data->name : old('name')), array('class' => 'col-sm-11 col-xs-12 name_ru')) }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('name', 'Заголовок RO', ['class'=>'col-sm-4 control-label no-padding-right']) }}
            <div class="col-sm-8">
                {{ Form::text('name[ro]', (isset($data->name_ro) ? $data->name_ro : old('name_ro')), array('class' => 'col-sm-11 col-xs-12')) }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('name', 'Заголовок ENG', ['class'=>'col-sm-4 control-label no-padding-right']) }}
            <div class="col-sm-8">
                {{ Form::text('name[en]', (isset($data->name_en) ? $data->name_en : old('name_en')), array('class' => 'col-sm-11 col-xs-12')) }}
            </div>
        </div>


    </div><!-- /.col-sm-6 -->

    <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('name', 'Описание', ['class'=>'col-sm-3 control-label no-padding-right']) }}
            <div class="col-sm-9">
                {{ Form::textarea('description_short[ru]', (isset($data->description_short) ? $data->description_short : old('description_short')), array('style'=>'width:100%; height:78px', 'rows'=>'3')) }}
            </div>
        </div>
        <div class="form-group" id="video">
            <!-- {foreach from=$videoList item=v} -->
            <div class="col-sm-12 col-xs-12">
                <input type="hidden" name="video_id[]" {if isset($product.products_id)}value="{$v.video_id}"{/if}>
                <div class="form-group">
                    <label for="cname" class="col-sm-3 control-label no-padding-right"> Видео <small><!-- {counter} --></small></label>
                    <div class="col-sm-9 col-xs-12">
                        <div class="input-group">
                            <input type="text" class="form-control" name='video[]' value='' />
                                                                <span class="input-group-addon">
                                                                    <div class=" action-buttons">
                                                                        <a href="javascript:void(0);" class="red delete_features">
                                                                            <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                        </a>
                                                                    </div>
                                                                </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- {/foreach}  -->
        </div><!-- /#video -->

        <div class="form-group">
            <div class="col-xs-12">
                <a href="javascript:AddVideo();" class="btn btn-pink pull-right" type="submit" id="submit_button1"><i class="ace-icon fa fa-youtube  bigger-120"></i> Добавить Видео </a>
            </div>
        </div>
        <!--
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
        -->

    </div><!-- /.col-sm-6 -->
</div><!-- /.row -->
<hr>

<div class="row">
    <div class="form-actions margin-b-m-15">
        {{ Form::submit('Сохранить', array('class' => 'btn btn-success')) }}
    </div>
</div>
{{ Form::close() }}


<script>

    $(document).ready(function(){
        InitDeleteVideo();
// $("#chosencat").chosen();
// $("#recommended").chosen();

        $( ".gallery-type" ).change(function() {
            if (this.value == 1) {
                $(".video-block").hide();
                $(".photo-block").show();
            } else {
                $(".video-block").show();
                $(".photo-block").hide();
            }
        });

    });

    function AddVideo(){
        videos = '<div class="col-sm-12"><input type="hidden" name="video_id[]" /><div class="form-group"><label for="cname" class="col-sm-3 control-label no-padding-right"> Видео <small></small></label> <div class="col-sm-9"> <div class="input-group"> <input type="text" class="form-control" name="video[]" /> <span class="input-group-addon"> <div class=" action-buttons"> <a href="javascript:void(0);" class="red delete_features"> <i class="ace-icon fa fa-trash-o bigger-130"></i> </a> </div> </span> </div> </div> </div> </div>';
        $("#video").append(videos);
        InitDeleteVideo();
    }

    function InitDeleteVideo(){
        $(".delete_features").unbind('click').bind('click',function(){
            if (confirm("Удалить?")){
                var vid = $(this).parent().parent().parent().parent().parent().parent().find("input[type='hidden']").val();
                if (vid!=""){
                    $.get(
                            "index.php?action=admin_products",
                            {a:"deletevideo",
                                id:vid},
                            function (result) {
                                if (result!="OK!"){
                                    return false;
                                }
                            }
                    );
                }
                $(this).parent().parent().parent().parent().parent().parent().remove();
            }
        });
    }

</script>