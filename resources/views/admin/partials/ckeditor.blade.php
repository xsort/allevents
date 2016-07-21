{!! HTML::script('//cdn.ckeditor.com/4.5.3/standard/ckeditor.js') !!}
<script>
    $(document).ready(function(){
        var FORM_ID = '{{ $form_id or '' }}';
        if (FORM_ID != "") FORM_ID = "#" + FORM_ID + " ";
        $(FORM_ID + '.ckeditor').each(function(){
            CKEDITOR.replace( $(this).attr('id'), {
                filebrowserImageBrowseUrl:  '/laravel-filemanager?type=Images',
                filebrowserBrowseUrl:       '/laravel-filemanager?type=Files'
            });
        });
    });
</script>