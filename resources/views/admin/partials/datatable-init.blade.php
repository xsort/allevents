
<!-- page specific plugin scripts -->
{{HTML::script('ace/assets/js/dataTables/jquery.dataTables.js')}}
{{HTML::script('ace/assets/js/dataTables/jquery.dataTables.bootstrap.js')}}
{{HTML::script('ace/assets/js/dataTables/extensions/TableTools/js/dataTables.tableTools.js')}}
{{HTML::script('ace/assets/js/dataTables/extensions/ColVis/js/dataTables.colVis.js')}}
{{HTML::script('ace/assets/js/dataTables/dataTables.responsive.js')}}

<!-- inline scripts related to this page -->
<script type="text/javascript">
    var oTable1;
    jQuery(function($) {
        //initiate dataTables plugin
        oTable1 =
                $('#dynamic-table')
                //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                        .dataTable( {
                            "iDisplayLength": 50,
                            "aLengthMenu": [[10, 25, 50, 100, 200, -1], [10, 25, 50, 100, 200, "Все"]],
                            //"order": [[ 1, "desc" ]],
                            'aoColumnDefs': [{
                                'bSortable': false,
                                'aTargets': ['nosort', 0, -1], //отключаем сортировку. 0 - первый слева столбец, -1 - первый справа, nosort - все столбцы с этим классом
                            }],
                            "language": {
                                "processing": "Подождите...",
                                "search": "Поиск:",
                                "lengthMenu": "Показать _MENU_ записей",
                                "info": "Записи с _START_ до _END_ из _TOTAL_ записей",
                                "infoEmpty": "Записи с 0 до 0 из 0 записей",
                                "infoFiltered": "(отфильтровано из _MAX_ записей)",
                                "infoPostFix": "",
                                "loadingRecords": "Загрузка записей...",
                                "zeroRecords": "Записи отсутствуют.",
                                "emptyTable:": "В таблице отсутствуют данные",
                                "paginate": {
                                    "first": "Первая",
                                    "previous": "Предыдущая",
                                    "next": "Следующая",
                                    "last": "Последняя"
                                },
                                "aria": {
                                    "sortAscending": ": активировать для сортировки столбца по возрастанию",
                                    "sortDescending": ": активировать для сортировки столбца по убыванию"
                                }
                            },
                            responsive: true
                            /*bAutoWidth: false,
                             "aoColumns": [
                             { "bSortable": false },
                             null, null,null, null, null,
                             { "bSortable": false }
                             ],
                             "aaSorting": [],*/

                            //,
                            //"sScrollY": "200px",
                            //"bPaginate": false,

                            //"sScrollX": "100%",
                            //"sScrollXInner": "120%",
                            //"bScrollCollapse": true,
                            //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                            //you may want to wrap the table inside a "div.dataTables_borderWrap" element

                            //"iDisplayLength": 50
                        } );
        //oTable1.fnAdjustColumnSizing();


        //TableTools settings
        TableTools.classes.container = "btn-group btn-overlap";
        TableTools.classes.print = {
            "body": "DTTT_Print",
            "info": "tableTools-alert gritter-item-wrapper gritter-info gritter-center white",
            "message": "tableTools-print-navbar"
        }

        //initiate TableTools extension
        var tableTools_obj = new $.fn.dataTable.TableTools( oTable1, {
            "sSwfPath": "themes/admin/ace/assets/js/dataTables/extensions/TableTools/swf/copy_csv_xls_pdf.swf", //in Ace demo ../assets will be replaced by correct assets path

            "sRowSelector": "td:not(:last-child)",
            "sRowSelect": "multi",
            "fnRowSelected": function(row) {
                //check checkbox when row is selected
                try { $(row).find('input[type=checkbox]').get(0).checked = true }
                catch(e) {}
            },
            "fnRowDeselected": function(row) {
                //uncheck checkbox
                try { $(row).find('input[type=checkbox]').get(0).checked = false }
                catch(e) {}
            },

            "sSelectedClass": "success",
            "aButtons": [
                {
                    "sExtends": "copy",
                    "sToolTip": "Копировать в буфер",
                    "sButtonClass": "btn btn-white btn-primary btn-bold",
                    "sButtonText": "<i class='fa fa-copy bigger-110 pink'></i>",
                    "fnComplete": function() {
                        this.fnInfo( '<h3 class="no-margin-top smaller">Данные скопированы</h3>\
							<p>Скопированы '+(oTable1.fnSettings().fnRecordsTotal())+' row(s) в буфер.</p>',
                                1500
                        );
                    }
                },

                {
                    "sExtends": "csv",
                    "sToolTip": "Экспорт в XLS/CSV",
                    "sButtonClass": "btn btn-white btn-primary  btn-bold",
                    "sButtonText": "<i class='fa fa-file-excel-o bigger-110 green'></i>"
                },

                /*{
                 "sExtends": "pdf",
                 "sToolTip": "Export to PDF",
                 "sButtonClass": "btn btn-white btn-primary  btn-bold",
                 "sButtonText": "<i class='fa fa-file-pdf-o bigger-110 red'></i>"
                 },*/

                {
                    "sExtends": "print",
                    "sToolTip": "Для печати",
                    "sButtonClass": "btn btn-white btn-primary  btn-bold",
                    "sButtonText": "<i class='fa fa-print bigger-110 grey'></i>",

                    "sMessage": "<div class='navbar navbar-default'><div class='navbar-header pull-left'><a class='navbar-brand' href='#'><small>Optional Navbar &amp; Text</small></a></div></div>",

                    "sInfo": "<h3 class='no-margin-top'>Просмотр печати</h3>\
							  <p>Используйти функции своего браузера чтобы запустить печать или нажмите CTR+P \
							  <br />Нажмите <b>escape</b> когда завершите.</p>",
                }
            ]
        } );
        //we put a container before our table and append TableTools element to it
        $(tableTools_obj.fnContainer()).appendTo($('.tableTools-container'));

        //also add tooltips to table tools buttons
        //addding tooltips directly to "A" buttons results in buttons disappearing (weired! don't know why!)
        //so we add tooltips to the "DIV" child after it becomes inserted
        //flash objects inside table tools buttons are inserted with some delay (100ms) (for some reason)
        setTimeout(function() {
            $(tableTools_obj.fnContainer()).find('a.DTTT_button').each(function() {
                var div = $(this).find('> div');
                if(div.length > 0) div.tooltip({container: 'body'});
                else $(this).tooltip({container: 'body'});
            });
        }, 200);



        //ColVis extension
        var colvis = new $.fn.dataTable.ColVis( oTable1, {
            "buttonText": "<i class='fa fa-search'></i>",
            "aiExclude": [0, 6],
            "bShowAll": true,
            //"bRestore": true,
            "sAlign": "right",
            "fnLabel": function(i, title, th) {
                return $(th).text();//remove icons, etc
            }

        });

        //style it
        $(colvis.button()).addClass('btn-group').find('button').addClass('btn btn-white btn-info btn-bold')

        //and append it to our table tools btn-group, also add tooltip
        $(colvis.button())
                .prependTo('.tableTools-container .btn-group')
                .attr('title', 'Показать/скрыть колонки').tooltip({container: 'body'});

        //and make the list, buttons and checkboxed Ace-like
        $(colvis.dom.collection)
                .addClass('dropdown-menu dropdown-light dropdown-caret dropdown-caret-right')
                .find('li').wrapInner('<a href="javascript:void(0)" />') //'A' tag is required for better styling
                .find('input[type=checkbox]').addClass('ace').next().addClass('lbl padding-8');



        /////////////////////////////////
        //table checkboxes
        $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

        //select/deselect all rows according to table header checkbox
        $('#dynamic-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
            var th_checked = this.checked;//checkbox inside "TH" table header

            $(this).closest('table').find('tbody > tr').each(function(){
                var row = this;
                if(th_checked) tableTools_obj.fnSelect(row);
                else tableTools_obj.fnDeselect(row);
            });
        });

        //select/deselect a row when the checkbox is checked/unchecked
        $('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
            var row = $(this).closest('tr').get(0);
            if(!this.checked) tableTools_obj.fnSelect(row);
            else tableTools_obj.fnDeselect($(this).closest('tr').get(0));
        });




        $(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
            e.stopImmediatePropagation();
            e.stopPropagation();
            e.preventDefault();
        });


        //And for the first simple table, which doesn't have TableTools or dataTables
        //select/deselect all rows according to table header checkbox
        var active_class = 'active';
        $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
            var th_checked = this.checked;//checkbox inside "TH" table header

            $(this).closest('table').find('tbody > tr').each(function(){
                var row = this;
                if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
            });
        });

        //select/deselect a row when the checkbox is checked/unchecked
        $('#simple-table').on('click', 'td input[type=checkbox]' , function(){
            var $row = $(this).closest('tr');
            if(this.checked) $row.addClass(active_class);
            else $row.removeClass(active_class);
        });



        /********************************/
        //add tooltip for small view action buttons in dropdown menu
        $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});

        //tooltip placement on right or left
        function tooltip_placement(context, source) {
            var $source = $(source);
            var $parent = $source.closest('table')
            var off1 = $parent.offset();
            var w1 = $parent.width();

            var off2 = $source.offset();
            //var w2 = $source.width();

            if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
            return 'left';
        }

    });
</script>
