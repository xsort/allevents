{!! HTML::style('ace/assets/css/chosen.css') !!}
{!! HTML::script('ace/assets/js/chosen.jquery.min.js') !!}
<script>
    $("#chosencat").chosen();
    $(".chosencat").each(function(){
        $(this).chosen({ width: '100%' });
    });
</script>