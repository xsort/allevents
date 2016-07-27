<script>
$(document).ready(function(){
    $('.visible, .unvisible').click( function(){
        var id      =  $(this).data('id');
        var model   =  $(this).data('model');
        var $thisdiv = $(this);
        $.get("{{ URL::to('admin/json/changevisibility') }}", {'id': id, 'model': model}, function(data){
            if ($thisdiv.attr('class') == "visible"){
                $thisdiv.attr('class', 'unvisible');
            } else{
                $thisdiv.attr('class', 'visible');
            }
        });
    });
});
</script>
