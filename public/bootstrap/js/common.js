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
    $('.btn.btn-danger').on('click', function (event) {
        var x = confirm('Bạn có chắc muốn xóa mục này không?');
        if (x) {
            return true;
        } else {
            event.preventDefault();
            return false;
        }
    })
});