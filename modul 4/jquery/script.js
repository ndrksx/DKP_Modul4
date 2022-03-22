function preventNumberInput(e){
    var keyCode = (e.keyCode ? e.keyCode : e.which);
    if (keyCode > 64 && keyCode < 91 || keyCode > 187 && keyCode < 189 || keyCode > 190 && keyCode < 192){
        e.preventDefault();
    }
}

$(document).ready(function(){
    $('#text_field').keypress(function(e) {
        preventNumberInput(e);
    });
})