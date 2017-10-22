function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#image').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
$("#primaryImage").change(function(){
    readURL(this);
});

function openFile() {
    $("#primaryImage").trigger('click');
}

$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    radioClass   : 'iradio_minimal-blue'
});

var users = new Array();

$('.checkUser').on('ifChecked', function(event){
    users.push(event.target.id);
    checkEnable();
}).on('ifUnchecked', function(event){
    var index = users.indexOf(event.target.id);
    users.splice(index, 1);
    checkEnable();
});

function checkEnable() {
    if(users.length > 0){
        $('#enableAll').prop('disabled', false).click(statusAll);
    }else{
        $('#enableAll').prop('disabled', true).unbind('click');
    }
}

function statusAll() {
    window.location.href = "users/status/"+users;
}

$('#enableAll').click(function(){

});