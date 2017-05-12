{!! HTML::style('ace/assets/css/chosen.css') !!}
{!! HTML::script('ace/assets/js/chosen.jquery.min.js') !!}
<script>
    if ($("#chosencat").css('display') != 'none') $("#chosencat").chosen();
    $(".chosencat").each(function(){
        if ($(this).css('display') != 'none')
            $(this).chosen({ width: '100%' });
    });
</script>