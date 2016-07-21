{!! HTML::style('ace/assets/css/datepicker.css') !!}
{!! HTML::script('ace/assets/js/date-time/bootstrap-datepicker.js') !!}
<script type="text/javascript">
    jQuery(function($) {
        $('.date-picker').each(function(){
            if(this.type !== 'date') {    //if browser doesn't support "date" input
                $(this).datepicker({
                    weekStart: 1,
                    autoclose:true,
                    language: 'ru'
                })
            }
        });
    })
</script>