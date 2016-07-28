<script>
$(document).ready(function(){
    $('.ajaxdelete').click( function(){
        var id      =  $(this).data('id');
        var model   =  $(this).data('model');
        var token   =  $("input[name=_token]").val();
        var $tr     =  $(this).closest('tr');

        $.post("admin/"+model+"/"+id,
                {"_method":"delete", "_token":token},
                function(result){
                    if (result.success){
                        $tr.remove();
                        toastr.success('Связь удалена');
                    }else{
                        toastr.error('ERROR: ' + result);
                    }
                }
        );
    });
});
</script>
