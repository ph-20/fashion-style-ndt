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

    $('.btn.btn-danger.user').on('click', function (event) {
        var id = $(this).closest('tr').find('td:first').text();
        var x = confirm('Bạn có chắc muốn xóa người dùng #' + id + ' này không?');
        if (x) {
            return true;
        } else {
            event.preventDefault();
            return false;
        }
    });

    $('.btn.btn-danger.product').on('click', function (event) {
        var id = $(this).closest('tr').find('td:first').text();
        var x = confirm('Bạn có chắc muốn xóa sản phẩm #' + id + ' này không?');
        if (x) {
            return true;
        } else {
            event.preventDefault();
            return false;
        }
    });

    $('.btn.btn-danger.category').on('click', function (event) {
        var id = $(this).closest('tr').find('td:first').text();
        var x = confirm('Bạn có chắc muốn xóa danh mục #' + id + ' này không?');
        if (x) {
            return true;
        } else {
            event.preventDefault();
            return false;
        }
    });

    $('.btn.btn-danger.order').on('click', function (event) {
        var id = $(this).closest('tr').find('td:first').text();
        var x = confirm("Bạn có chắc muốn hủy đơn hàng #" + id + " này không?");
        if (x) {
            return true;
        } else {
            event.preventDefault();
            return false;
        }
    });
});