{!! HTML::style('ace/assets/css/chosen.css') !!}
{!! HTML::script('ace/assets/js/chosen.jquery.min.js') !!}
<script>
<<<<<<< HEAD
    if ($("#chosencat").css('display') != 'none') $("#chosencat").chosen();
    $(".chosencat").each(function(){
        if ($(this).css('display') != 'none')
            $(this).chosen({ width: '100%' });
=======
    $("#chosencat").chosen();
    $(".chosencat").each(function(){
        $(this).chosen({ width: '100%' });
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
    });
</script>