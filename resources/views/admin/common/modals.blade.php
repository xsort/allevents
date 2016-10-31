{!! HTML::script('ace/assets/js/jquery.form.js') !!}

<script>

    $(document).ready(function() {
        initModals();
    });

    function initModals(){
        $("a.modalbox").click(function (e) {
            e.preventDefault();

            var title   = $(this).attr("title");
            var link    = $(this).attr("href");

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
        });
    }



    function initFormAjaxSubmit($form){
        $form.ajaxForm({
            beforeSerialize: function(form, options) {
                for (instance in CKEDITOR.instances)
                    CKEDITOR.instances[instance].updateElement();
            },
            beforeSubmit:  function(){
                if (typeof modalBeforeSubmit !== 'undefined' && $.isFunction(modalBeforeSubmit)){
                    return modalBeforeSubmit();
                }
            },
            success:       function(response){
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

                $("#myModal").modal('hide');

                if (typeof modalSuccessSubmit !== 'undefined' && $.isFunction(modalSuccessSubmit)){
                    modalSuccessSubmit(response.data);
                }
            }
        });
    }



</script>

<!-- Modal -->
<div class="modal fade modal-fullscreen" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    {!! HTML::script('ace/assets/js/jquery.form.js') !!}
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <div class="main">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=AvmxJ67EHteF2m0XRxEhm605hGje_ker&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Сохранить</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->