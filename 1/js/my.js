$(document).ready(function () {
    $(document).on('click','b',function(){
        $('.add').append('<br><input type="text" name="val[]" class="inp">');
    });
});