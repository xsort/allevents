{!! HTML::script('//cdn.ckeditor.com/4.5.3/standard/ckeditor.js') !!}
<script>
    CKEDITOR.replace( 'ckeditor', {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files'
    });
</script>