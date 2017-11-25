$(document).ready(function () {
    if ($('#type_category').val() == '1') {
        $('#parent_id').show();
    }
    $('#type_category').on('change', function () {
       if ($(this).val() == 1){
           $('#parent_id').show();
       } else {
           $('#parent_id').hide();
       }
    });
});