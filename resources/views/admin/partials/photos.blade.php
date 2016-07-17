<!-- PARAMS
    table       = model or uniq name
    table_id    = id of table
    thumbs      = array of thumbs paths (optional)
    div_id      = id of tab panel (optional)
    width       = width of final photo (optional)
    height      = height of final photo (optional)
-->

<div class="tab-pane {{isset($class) ? $class : 0}}" id="{{$div_id or 'photos'}}">
        <div id="queue"></div>
        <input class="file_upload" name="file_upload" type="file" multiple="true" id="uploadifive_{{$div_id or 'photos'}}"/>
        <ul class="ace-thumbnails clearfix photos">

        </ul>
</div>

@if ($table == "products")
{{ HTML::script('ace/assets/js/uploadifive/jquery.uploadifive.min.js') }}
{{ HTML::style('ace/assets/js/uploadifive/uploadifive.css') }}
@endif

<script>
    $(document).ready(function(){
        var PHOTOS_DIV = "#{{ $div_id or 'photos' }}";

        PhotosObj{{$div_id or 'photos'}} = new PhotosClass(PHOTOS_DIV);

        PhotosObj{{$div_id or 'photos'}}.GetAjaxPhotos("{{ $table }}", "{{ $table_id }}");

        $(function() {
            $(PHOTOS_DIV).find('.file_upload').uploadifive({
                'buttonText'	   : "Добавить файлы",
                'buttonClass'	   : "btn btn-yellow",
                'height'		   : "50",
                'width'			   : "150",
                'auto'             : true,
                'removeCompleted'  : true,
                'formData'         : {
                    @if(isset($table_id))table_id: "{{ $table_id }}",@endif
                    @if(isset($thumbs))thumbs: "{{ implode(",", $thumbs) }}",@endif
                    table:	"{{ $table }}"
                },
                //'queueID'          : 'queue',
                'uploadScript'     : 'photos/upload',
                    'onUploadComplete' : function(file, data) {
                        try{
                            var response = JSON.parse(data);
                        }catch(e){
                            toastr.error("Ошибка загрузки фотографии.");
                            return;
                        }
                        if (response.success=="false"){
                            toastr.error(response.data);
                            return;
                        }

                        // add file to the list
                        PhotosObj{{$div_id or 'photos'}}.ShowPhoto(response.data);
                    }
            });
        });
    });

    function PhotosClass(div){

        this.PHOTOS_DIV = div;

        var that = this;

        this.ChangeDBSort = function(a, b){
            var _asort = a.attr("sort");
            var _bsort = b.attr("sort");
            a.attr("sort",_bsort);
            b.attr("sort",_asort);

            _a_id = a.find('input').val();
            _b_id = b.find('input').val();
            $.get("photos/changesort",
                    {
                        a_id:_a_id,
                        asort:_asort,
                        b_id:_b_id,
                        bsort:_bsort
                    },
                    function(){
                        //toastr.success('DONE');
                    }
            );
        };

        this.GetAjaxPhotos = function(table, table_id){
            $.get(
                    "photos/getphotos",
                    {
                        "table":	 table,
                        "table_id":  table_id
                    },
                    function (response) {
                        if (response.success=="false"){
                            toastr.error(response.data);
                            return;
                        }

                        $.each(response.data, function(i, item) {
                            that.ShowPhoto(item);
                        });
                    },
                    "json"
            );
        },

        this.ShowPhoto = function(data){
            var photos_div      = this.PHOTOS_DIV;
            var $li             = $('<li sort="'+data.sort+'"></li>');
            var $img_href       = $('<a href="'+ data.path + data.filename + '" title="' + data.filename + '"></a>').fancybox();
            var $img            = $('<img width="150" height="150" src="'+ data.path + 'thumbs/' + data.filename + '" />');
            var $input          = $('<input type="hidden" name="photos[]" value ="' + data.id + '" />');
            var $tools          = $('<div class="tools"></div>');
            var $double_left    = $('<a href="javascript:void(0);" title="В начало" class="double_left"><i class="ace-icon fa fa-angle-double-left"></i></a>')
                                    .click(function(){
                                        var $curr  = $(this).closest('li');
                                        var $prev  = $curr.prev();
                                        var $first = $curr.parent().children().first();
                                        $first.before($curr);
                                        $prev.after($first);
                                        that.ChangeDBSort($curr, $first);
                                    });
            var $left           = $('<a href="javascript:void(0);" title="Левее" class="left"><i class="ace-icon fa fa-angle-left"></i></a>')
                                    .click(function(){
                                        var $curr = $(this).closest('li');
                                        var $prev = $(this).closest('li').prev();
                                        $($curr.after($prev));
                                        that.ChangeDBSort($curr, $prev);
                                    });
            var $delete         = $('<a href="javascript:void(0);" title="Удалить" data-id="' + data.id + '"><i class="ace-icon fa fa-trash-o"></i></a>')
                                    .click(function(){
                                        var id = $(this).data('id');
                                        if (confirm('Вы уверены?')) {
                                            $(this).parent().parent().remove();
                                            $.get("photos/delete/" + id  /* ,  {'id': id} */);
                                        }
                                    });

            var $right          = $('<a href="javascript:void(0);" title="Правее" class="right"><i class="ace-icon fa fa-angle-right"></i></a>')
                                    .click(function(){
                                        var $curr = $(this).closest('li');
                                        var $next = $(this).closest('li').next();
                                        $($curr.before($next));
                                        that.ChangeDBSort($curr, $next);
                                    });
            var $double_right   = $('<a href="javascript:void(0);" title="В конец" class="double_right"><i class="ace-icon fa fa-angle-double-right "></i></a>')
                                    .click(function(){
                                        var $curr  = $(this).closest('li');
                                        var $next  = $curr.next();
                                        var $last  = $curr.parent().children().last();
                                        $last.after($curr);
                                        $next.before($last);
                                        that.ChangeDBSort($curr, $last);
                                    });

            //var $rotate          = $('<a href="javascript:void();" title="Повернуть" class="rotate"><i class="ace-icon fa fa-repeat fa-1"></i></a>');

            $(this.PHOTOS_DIV).find('ul.photos')
                    .append($li.append($img_href.append($img))
                            .append($input)
                            .append($tools
                                    .append($double_left)
                                    .append($left)
                                    .append($delete)
                                    .append($right)
                                    .append($double_right)
                                    //.append($rotate)
                            )
                    );

        }
    };
</script>

