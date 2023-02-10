$(document).ready(function(){

    $(document).on('click', 'button[id=MoreTag]', function () {
        $('#body').append("<div class='col-md-12'><div class='col-md-4'><div class='form-floating mb-3'><input type='text' class='form-control' id='postTag' name='tagName[]' placeholder='Post Tag'><label for='postTag'>Post Tag</label></div></div></div>");
    });

});
