$(document).ready(function() {
  $('#first').click(function(){
    $('#test').click();
      $('#test').change(function() {
        var filename = $('input[type=file]').val().split('\\').pop();
        $('#first').html(filename);
    });
  });
});

function validate(){
    var inp = document.getElementById('#test');
    if(inp.files.length === 0){
        alert("Attachment Required");
        inp.focus();

        return false;
    }
}
