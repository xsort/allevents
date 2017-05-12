@extends('admin.body')
@section('title', 'Редактирование пользователя')


@section('centerbox')
    <div class="page-header">
        <h1> <a href="{{ URL::to('admin/users') }}">@if (isset ($data))Редактирование пользователя@elseСоздание
                нового пользователя@endif</a>
            <small><i class="ace-icon fa fa-angle-double-right"></i> </small> </h1>
    </div>

    @include('admin.partials.errors')

    @if(!isset($data))
        {{ Form::open(['url' => 'admin/users', 'class' => 'form-horizontal']) }}
    @else
        {{ Form::open(['url' => 'admin/users/' . $data->id, 'method' => 'put', 'class' => 'form-horizontal']) }}
    @endif

    <div class="form-actions">
        <div class="row center">
            <div class="col-sm-2">
                <button id="submit_button1" type="submit" class="btn  btn-success btn-block btn-responsive" ><i class="ace-icon fa fa-floppy-o  bigger-120"></i> Сохранить </button>
            </div>
        </div><!-- /.row -->
    </div><!-- /.form-actions -->

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                {{ Form::label('name', 'Имя', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('name', (isset($data->name) ? $data->name : old('name')), array('class' => 'col-sm-11 col-xs-12')) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('mobile', 'Телефон', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('mobile', (isset($data->mobile) ? $data->mobile : old('mobile')), array('class' =>
                    'col-sm-11 col-xs-12')) }}
                </div>
            </div>

        </div><!-- /.col-sm-6 -->
        <div class="col-sm-6">
            <div class="form-group">
                {{ Form::label('rights', 'Роль', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::select('rights', ['0' => 'Пользователь', '1' => 'Администратор', '2' => 'Менеджер'],
                    (isset($data->rights) ? $data->rights : old('rights')), ['class' => 'col-sm-9']) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('products', 'Объекты', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    @if(isset($products))
                        @if(isset($user_products))
                            {{ Form::select('products[]', array("null" => "Нет категории") + $products, $user_products, ['multiple'=>'multiple','id'=>'chosencat','class'=>'tag-input-style col-sm-9 control-label no-padding-right']) }}
                        @else
                            {{ Form::select('products[]', $products, '', ['multiple'=>'multiple','id'=>'chosencat','class'=>'tag-input-style col-sm-9 control-label no-padding-right']) }}
                        @endif
                    @endif
                </div>
            </div>
        </div><!-- /.col-sm-6 -->

    </div><!-- /.row -->

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                {{ Form::label('email', 'Email', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('email', (isset($data->email) ? $data->email : old('email')), array('class' =>
                    'col-sm-11 col-xs-12')) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('open_password', 'Пароль', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('open_password', (isset($data->open_password) ? $data->open_password : old
                    ('open_password')), array('class' => 'col-sm-11 col-xs-12')) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('comment', 'Комментарий', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::textarea('comment', (isset($data->comment) ? $data->comment : old
                    ('comment')), array('class' => 'col-sm-11 col-xs-12')) }}
                </div>
            </div>
        </div>
    </div><!-- row -->



    <div class="form-actions">
        {{ Form::submit('Сохранить', array('class' => 'btn btn-success')) }}
    </div>

    {{ Form::close() }}

@endsection

@section('scripts')

    @include('admin.partials.ckeditor')

    @include('admin.partials.datepicker')

    @include('admin.partials.chosen')

    <script type="text/javascript">
        $("#chosencat").chosen();
    </script>
@endsection

