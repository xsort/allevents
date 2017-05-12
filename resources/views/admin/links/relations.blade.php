@extends('admin.body')
@section('title', 'Редактирование ссылок')

@section('centerbox')
    <div class="page-header">
        <h1>Редактирование ссылок для "{{ $product->name }}"</h1>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <ul id="donator" class="connectedSortable">
            @foreach($links as $link)
                <li class="ui-state-default @if($link->product_id != 0)custom @endif"
                    data-id="{{ $link->id }}">{{ $link->name }}</li>
            @endforeach
            </ul>
            <div class="space"></div>
            <a class="btn btn-xs btn-primary btn-block modalbox"
                id="add-link"
                href="{{ route('admin.links.custom', $product->id) }}"
                title="Добавить новую ссылку">
                <i class="ace-icon fa fa-plus-circle bigger-120"></i>
                Добавить
            </a>
        </div><!-- /.col-sm-3 -->
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-6">
                    <ul id="type1" class="connectedSortable receiver">
                        @foreach($relations['type1'] as $link)
                            <li class="ui-state-default @if(isset($link->pivot))@if($link->pivot->disabled)disabled @endif @endif"
                                data-id="{{ $link->id }}">{{ $link->name }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-6">
                    <ul id="type2" class="connectedSortable receiver">
                        @foreach($relations['type2'] as $link)
                            <li class="ui-state-default @if(isset($link->pivot))@if($link->pivot->disabled)disabled @endif @endif"
                                data-id="{{ $link->id }}">{{ $link->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="space"></div>
            <div class="row">
                <div class="col-sm-9 col-sm-offset-3">
                    <ul id="type3" class="connectedSortable receiver">
                        @foreach($relations['type3'] as $link)
                            <li class="ui-state-default @if(isset($link->pivot))@if($link->pivot->disabled)disabled @endif @endif"
                                    data-id="{{ $link->id }}">{{ $link->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div><!-- /.col-sm-9 -->
    </div><!-- /.row -->

    <div class="form-actions">
        <button id="submit_button1" type="submit" class="btn btn-success" ><i class="ace-icon fa fa-floppy-o bigger-120"></i> Сохранить </button>
    </div>

@endsection

@section('scripts')

    @include('admin.common.modals')

    {!! HTML::script('ace/assets/js/jquery-ui.js') !!}

    <script>
        $( function() {
            $( ".connectedSortable" ).sortable({
                connectWith: ".connectedSortable"
            }).disableSelection();

            //receive element by receiver event
            $( ".receiver" ).sortable({
                receive: function( event, ui ) {
                    //check if exists
                    $ul = ui.item.parent();
                    if ($ul.find("[data-id='" + ui.item.data('id') + "']").length > 1){
                        toastr.error('Элемент уже существует');
                        ui.item.remove();
                        return false;
                    }

                    ui.item.unbind('dblclick')
                            .dblclick(function(){ $(this).toggleClass('disabled'); });

                }
            });

            //remove element from donator event
            $( "#donator" ).sortable({
                remove: function( event, ui ) {
                    $clone = ui.item.clone();
                    if ($clone.hasClass('custom')) {
                        $clone.dblclick(function () {
                            showModal($clone.data('id'));
                        })
                    }
                    $("#donator").append($clone);
                }
            });

            //double custom click
            $('#donator li.custom').dblclick(function(){ showModal($(this).data('id')); });

            //double receiver click
            $('.receiver li').dblclick(function(){ $(this).toggleClass('disabled'); });

            $("#submit_button1").click(saveData);
        });

        function showModal(link_id){
            var title   = 'Редактирование ссылки';
            var link    = '{{ route('admin.links.custom', $product->id) }}?link_id=' + link_id;

            $("#myModal .modal-content .main").load(link, function () {
                var $form = $(this).find('form');
                initFormAjaxSubmit($form);
                $('#myModal .modal-title').text(title);
                $("#myModal").modal('show');
                $("#myModal .btn-primary").click(function (e) {
                    e.preventDefault();
                    $form.submit();
                });
            });
        }

        function modalSuccessSubmit(data){
            if (data.task == 'new'){
                $li = $('<li></li>');
                $li.addClass('ui-state-default custom');
                $li.attr('data-id', data.id);
                $li.text(data.name);
                $('#donator').append($li);
            }else if(data.task == 'edit'){
                $li = $('#donator').find("[data-id='" + data.id + "']");
                $li.text(data.name);
            }

            $li.dblclick(function(){ showModal(data.id) });
        }

        //preparing and saving data
        function saveData(){
            var data = {};
            data['type1'] = getArray('type1');
            if (Object.keys(data['type1']).length < 2){
                toastr.error('В меню1 должно быть более одного элемента');
                return;
            }

            data['type2'] = getArray('type2');
            if (Object.keys(data['type2']).length < 2){
                toastr.error('В меню2 должно быть более одного элемента');
                return;
            }

            data['type3'] = getArray('type3');
            if (Object.keys(data['type3']).length % 3 == 1){
                toastr.error('В меню3 количество элементов должно быть кратно трём');
                return;
            }

            $.post('{{ route('admin.relations.store', $product->id) }}',
                    {
                        _token: '{{  csrf_token() }}',
                        "data": data
                    },
                    function(response){
                        if (response.success !== true) {
                            if (response.data !== undefined) {
                                $.each(response.data, function (k, v) {
                                    toastr.error(v);
                                });
                            } else{
                                toastr.error("ERROR: " + response);
                            }
                            return false;
                        }
                        toastr.success("Сохранено!");
                    }
            );
        }

        function getArray(ul_id){
            var arr = {};
            var sort = 0;
            $("#" + ul_id + " li").each(function(){
                var id       = $(this).data('id');
                var disabled = $(this).hasClass('disabled');
                arr[id] = {disabled, sort};
                sort++;
            });
            return arr;
        }

    </script>
@endsection


@section('styles')
    <style>
        .connectedSortable {
            border: 1px solid #eee;
            min-height: 20px;
            list-style-type: none;
            margin: 0;
            padding: 5px 0 0 0;
            float: left;
            margin-right: 10px;
            width: 100%;
        }

        .connectedSortable li {
            margin: 0 5px 5px 5px;
            padding: 5px;
            border: 1px solid #ccc;
            background-color: #cce2c1;
        }

        #donator li.custom,
        .receiver li.disabled{
            background-color: #ced1d6;
        }

        #type1 li, #type2 li{
            float:left;
        }

        #type3{
            width: 350px;
        }

        #type3 li{
            width: 100px;
            height: 100px;
            float:left;
            overflow-wrap: break-word;
        }

        .receiver{
            min-height: 50px;
        }

    </style>
@endsection