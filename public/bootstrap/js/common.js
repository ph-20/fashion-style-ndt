$(document).ready(function () {
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