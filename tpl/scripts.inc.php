<script wbapp="{{_var.assets}}/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script wbapp="{{_var.assets}}/lib/js-cookie/js.cookie.js"></script>
<script wbapp="{{_var.assets}}/js/dashforge.js"></script>

<script type="wbapp">
$(document).on('wb-verify-false',function(e,input){
    $(input).addClass('is-invalid').removeClass('is-valid');
})

$(document).on('wb-verify-true',function(e,input){
    $(input).addClass('is-valid').removeClass('is-invalid');
})
</script>