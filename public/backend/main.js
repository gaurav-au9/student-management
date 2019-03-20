$(document).ready(function () {
    $(".update-status").change(function () {
        var url = $(this).data('url');
        var id = $(this).data('id');
        var _token = $('input[name="_token"]').val();
        $.post(url, {_token: _token, id: id}, function (response) {

        });
    });
});