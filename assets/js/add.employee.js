// JavaScript source code
$(document).ready(function () {
    $('.date').datetimepicker({
        "allowInputToggle": true,
        "format": "MM/DD/YYYY",
    });
    //
    $('#Edit-Employee-Details').click(function () {
        $('.form-control').removeAttr('readonly');
        $('input[type=radio]').removeAttr('disabled');
        $('select').removeAttr('disabled');
        $('#Edit-Employee-Details').attr('disabled', 'disabled');
    });
});
